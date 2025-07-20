<?php

namespace App\Http\Controllers;

use App\Mail\PredictedNumberMail;
use App\Models\NumberType;
use Illuminate\Http\Request;
use App\Models\Trend;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PredictionController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'market_id' => 'required|exists:markets,id',
                'transaction_id' => 'required|string|min:8|unique:trends,transaction_id',
            ]);

            $trend = new Trend();
            $trend->user_id = Auth::user()->id;
            $trend->market_id = $request->input('market_id');
            $trend->transaction_id = $request->input('transaction_id');
            $trend->number_type = $request->input('number_type');
            $trend->predicted_numbers = null; // can be set later
            $trend->save();

            return response()->json([
                'status' => true,
                'message' => 'Transaction submitted successfully.',
                'data' => $trend
            ]);
        }

        $trendsRequestCollection = Trend::with('type')->paginate(20);
        return view('admin.trends.index', compact('trendsRequestCollection'));
    }

    public function updatePredictedNumber(Request $request, $id)
    {
        $is_random = filter_var($request->is_random, FILTER_VALIDATE_BOOLEAN);
        $type = $request->type;
        $predicted_number = $this->getPredictedNumber($type, $is_random);
        // dd($predicted_number);
        $trend = Trend::findOrFail($id);
        $trend->predicted_numbers = $predicted_number;
        $trend->save();

        return redirect()->route('admin.trends')
            ->with('success', 'Predicted number generated successfully.');
    }

    private function getPredictedNumber($type = 'single', $is_random = true)
    {
        $validTypes = ['single', 'jodi', 'single_patti', 'double_patti', 'triple_patti'];

        if (!in_array($type, $validTypes)) {
            return null;
        }

        if ($is_random) {
            return $this->getRandomNumberByType($type);
        }

        return $this->getLeastChosenNumberByType($type);
    }
    private function getRandomNumberByType($type)
    {
        switch ($type) {
            case 'single':
                return rand(0, 9);

            case 'jodi':
                return str_pad(rand(0, 99), 2, '0', STR_PAD_LEFT);

            case 'single_patti':
                $digits = range(0, 9);
                shuffle($digits);
                return $digits[0] . $digits[1] . $digits[2];

            case 'double_patti':
                $same = rand(0, 9);
                $diff = rand(0, 9);
                while ($diff == $same) {
                    $diff = rand(0, 9);
                }
                $patterns = [
                    $same . $same . $diff,
                    $same . $diff . $same,
                    $diff . $same . $same,
                ];
                return $patterns[array_rand($patterns)];

            case 'triple_patti':
                $d = rand(0, 9);
                return "$d$d$d";

            default:
                return null;
        }
    }

    private function getLeastChosenNumberByType($type)
    {
        switch ($type) {
            case 'single':
                return $this->getLeastUsedNumber('single');

            case 'jodi':
                return $this->getLeastUsedNumber('jodi');

            case 'single_patti':
                return $this->getLeastUsedNumber('single_patti');

            case 'double_patti':
                return $this->getLeastUsedNumber('double_patti');

            case 'triple_patti':
                return $this->getLeastUsedNumber('triple_patti');

            default:
                return null;
        }
    }

    private function getLeastUsedNumber($type)
    {
        $type_id = NumberType::where('name', $type)->value('id');
        return DB::table('matka_bets')
            ->select('bet_number as number', DB::raw('COUNT(*) as total_count'))
            ->groupBy('bet_number')
            ->orderBy('total_count', 'asc')
            ->limit(1)
            ->value('number');
    }



    public function sendNumberToUser($id)
    {
        $trend = Trend::with('user')->findOrFail($id);

        if (!$trend->predicted_numbers) {
            return redirect()->back()->with('error', 'No predicted number assigned yet.');
        }

        Mail::to($trend->user->email)->send(new PredictedNumberMail($trend->user, $trend->predicted_numbers));

        return redirect()->back()->with('success', 'Predicted number sent to user.');
    }
}
