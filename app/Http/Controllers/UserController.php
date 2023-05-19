<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Controller to Task 19
class UserController extends Controller
{
    public function users(){
        return view('users');
    }
}
