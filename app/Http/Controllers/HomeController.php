<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\NumberType;
use App\Models\Trend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        //
        $marketsCollection = Market::where('status', 1)->get();
        $userPredictionsCollection = Trend::where('user_id',Auth::user()->id)->get();
        $numberTypes = NumberType::get();
        return view('index', compact('marketsCollection', 'userPredictionsCollection', 'numberTypes'));
    }
}
