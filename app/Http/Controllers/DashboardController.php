<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;

class DashboardController extends Controller
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
     * @return Renderable
     */
    public function index()
    {
//  <- ----- Get Single User Data ----- ->
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $listings = $user->listings;
        return view('dashboard',compact('listings'));
    }
}
