<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
use App\User;
use App\Pass;
use Auth;

class PassController extends Controller
{
     public function __construct() {
        $this->middleware('auth');
    }
    public function Index() {  
        $passes = Pass::where('visitor_id','=', Auth::user()->id)->get();
        return view('passes.index', compact('passes'));
    }
    public function Create(){
        $users  = User::all();
        return view('passes.create')->with('users', $users);
    }

    public function Save(Request $request) {
        $pass = new Pass();
        $pass->pass_id = Auth::user()->id;
        $pass->pass_id = $request->pass_id;
        $pass->type = $request->type;
        $pass->save();
        return redirect("passes");
    }
}
