<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\UserResource;
use App\User;

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
        // auth()->user()
        // return UserResource::collection(User::all());
        return view('home');
    }

    public function getFriends()
    {
        return UserResource::collection(User::where('id','!=',auth()->id())->get());
    }
}
