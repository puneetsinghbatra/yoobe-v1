<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfluencerController extends Controller
{
    public function result(){
        return view('influencer.activation-result');
    }

    public function launch(){
        return view('influencer.activation-view');
    }
}
