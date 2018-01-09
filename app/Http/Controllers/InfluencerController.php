<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfluencerController extends Controller
{
    public function index(){
        return view('influencer.index');
    }

    public function activate(){
        return view('influencer.activation-view');
    }

    public function result(){
        return view('influencer.activation-result');
    }
}
