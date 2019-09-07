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
        public function edit($id){
            $em=Employee::find($id);
            return view('admin/employees.edit',compact('em'));
        }
        public function update(Request $request,$id){
            $emArray=Employee::find($id);
            $emArray->Name=$request->Name;
            $emArray->Phone=$request->Phone;
            $emArray->Department=$request->Department;
            $emArray->Position=$request->Position;
            $emArray->save();
            return redirect('/admin/employees');

        }
        public function delete($id){
            $em=Employee::findOrfail($id)->delete();
            return redirect('/admin/employees');
        }
        
}
