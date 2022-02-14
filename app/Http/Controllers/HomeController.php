<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $goods = DB::connection('mysql1')->select('select * from prices');
        dd($goods);
        $user =Auth::user();
        $roles = $user->roles()->get();
        //dd($roles);
        return view('home')->with('user', $user)->with('roles', $roles);
        return view('home',['goods'=>$goods]);
    }

    
}
