<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function getlist()
    {
    	return view('backend.users.list');
    }

     public function getadd()
    {
    	return view('backend.users.add');
    }

     public function getedit()
    {
    	return view('backend.users.edit');
    }
}
