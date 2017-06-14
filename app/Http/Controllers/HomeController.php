<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Auth;

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
        if (Auth::check()){
            $user = Auth::user();
            foreach ($user->roles as $role){

                if ($role->name == "admin")
                {
                    return redirect('admin/user/dashboard');

                }elseif ($role->name == "customer")
                {
                    return view('/landingpage');

                }elseif ($role->name == "merchant")
                {
                    return redirect('merchant/user/dashboard');

                }else{
                    return view('/404');
                }
               //dd($role->name);


            }
        }
    }


}
