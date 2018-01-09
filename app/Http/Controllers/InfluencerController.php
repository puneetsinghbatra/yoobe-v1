<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfluencerController extends Controller
{
    public function activateView(){
        return view('influencer.activation-view');
    }

    public function result(){
        return view('influencer.activation-result');
    }
}
