<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backendController extends Controller
{
    public function student(){
        return view('backend.student');
    }

        public function employee(){
            return view ('backend.employee');
        }
}
