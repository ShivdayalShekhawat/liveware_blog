<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Welcome extends Controller
{
    //
	public function render()
	{
   		 return view('livewire.home')->extends('welcome')->section('content');
	}
}
