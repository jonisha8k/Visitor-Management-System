<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
use App\User;
use Auth;

class password_resetsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function Index() {  
        $password_resets = password_resets::where('visitor_id','=', Auth::user()->id)->get();
        return view('password_resets.index', compact('password_resets'));
    }
    public function Create(){
        $employees  = Employee::all();
        return view('visits.create')->with('employees', $employees);
    }

    public function Save(Request $request) {
        $visit = new Visit();
        $visit->visitor_id = Auth::user()->id;
        $visit->employee_id = $request->employee_id;
        $visit->purpose = $request->purpose;
        $visit->description = $request->description;
        $visit->duration = $request->duration;
        $visit->visit_date = $request->visit_date;
        $visit->save();
        return redirect("visits");
    }
}

}
