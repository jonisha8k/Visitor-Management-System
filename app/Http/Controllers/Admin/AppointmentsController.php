<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
	public function Index(){
		return view('appointment.index');
	}

	public function form(){
		return view('appointment.form');
	}

}
	

