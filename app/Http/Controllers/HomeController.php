<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\NumberType;
use App\Models\Option;
use App\Models\Refund;
use App\Models\Trend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        //
        $user_id = Auth::user()->id;
        $marketsCollection = Market::where('status', 1)->get();
        $userPredictionsCollection = Trend::where('user_id', $user_id)->whereNotNull('predicted_numbers')->get();
        $refundCollection = Refund::where('user_id', $user_id)->get();
        $numberTypes = NumberType::get();
        $options = Option::pluck('option_value', 'option_name')->toArray();

        return view('index', compact('marketsCollection', 'userPredictionsCollection', 'refundCollection', 'numberTypes', 'options'));
    }
}
