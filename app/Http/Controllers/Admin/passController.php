<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pass;
class passController extends Controller
{
    public function Index() {
    	$pass= pass::all();
    	return view('pass.index',compact ('pass'));
}
}
