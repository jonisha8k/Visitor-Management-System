<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;

class VisitorsController extends Controller
{
	
	public function Dashboard() {
		return view('visitor.visitorsdashboard');
	}
	/*
    public function ViewAppointment() {
    	$visitor = Appointment::visitor();
    	$visitorappointments = Appointment::where('id', "=", Appointment::visitor()->id)->get();
    	
    }

    /*public function Appointment(){
    	$visitor=Visitor::select('name')->where('id',1)->get();
    	return view("visitor",compact("visitor"));
    }

    public function CreateAppointment() {
    	return view("visitor");*/
    public function Index(){
    	$visitors=visitor::all();
    	return view('visitor.index',compact('visitor'));
    }
    public function form(){
    	return view('visitor.form');
    }

    public function save(Request $request){
    	$visitor=new Visitor();
    	$visitor->id=$request->id;
    	$visitor->name=$request->name;
    	$visitor->address=$request->address;
    	$visitor->dob=$request->dob;
    	$visitor->phone=$request->phone;
    	$visitor->gender=$request->gender;


    	 $request->get("id");
    	 $request->get("name");
    	echo $request->get("address");
    	echo $request->get("dob");
    	echo $request->get("phone");
    	echo $request->get("gender");
    	echo $request->get("email");
    	echo $request->get("office");
    	echo $request->get("position");
    	echo $request->get("created_at");
    	echo $request->get("updated_at");
    }
    
}
