<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserProfileUpdateRequest;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getProfile(Request $request) {
        $user = User::find(auth()->user()->id);
        return view('user.profile.show')->with('user', $user);
    }

    public function updateProfile(UserProfileUpdateRequest $request) {
        $user = User::find(auth()->user()->id);
        $user->update($request->all());

        return redirect()->back()->with('status', 'Updated successfully');
    }
}
