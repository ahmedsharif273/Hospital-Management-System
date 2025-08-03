<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redriect()
    {
        if(auth::id())
        {
            if (Auth::user()->usertype=='0')
            {
                return view('dashboard');
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();

        }
    }

  
}
