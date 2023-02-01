<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminPanelController extends Controller
{
    public function index(){

        return view('AdminPanel.index',
        [
            'title' => 'Admin Panel',
            'active' => 'dashboard',
            'breadcrumbs' => [
                [
                    'url' => route('dashboard'),
                    'text' => 'Dashboard',
                ]
            ]
        ]);
    }


    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
}
