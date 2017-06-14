<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function getAdminDashboard(){
       return view('admin.user.dashboard');
    }

    public function getProfile(){
        return view('admin.user.profile');
    }

    public function getInbox(){
        return view('admin.user.inbox');
    }

    public function getSettings(){
        return view('admin.user.settings');
    }
}
