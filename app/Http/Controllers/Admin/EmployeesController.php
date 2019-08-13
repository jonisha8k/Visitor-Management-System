<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
    public function form(){
        return view('admin.employees.form');
    }
    public function index() {
        $employees = Employee::all();
        return view('admin.employees.index', compact('employees'));
    }
        public function save(Request $request){
            $employees=new Employee();
            $employees->id=$request->id;
            $employees->name=$request->name;
            $employees->phone=$request->phone;
            $employees->department=$request->department;
            $employees->position=$request->position;        
            $employees->save();
            return redirect("/admin/employees");    
        }
}
