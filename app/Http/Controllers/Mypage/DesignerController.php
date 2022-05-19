<?php

namespace App\Http\Controllers\Mypage;

use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DesignerController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = DB::table('users')->find($id);
        return view('mypage.designer_user');
        // return view('client_user, ['client_user' => $user]); 
    }
}