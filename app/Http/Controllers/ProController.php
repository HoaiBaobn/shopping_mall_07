<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProController extends Controller
{
    public function getlist()
    {
    	return view('backend.product.list');
    }

     public function getadd()
    {
    	return view('backend.product.add');
    }

     public function getedit()
    {
    	return view('backend.product.edit');
    }
}
