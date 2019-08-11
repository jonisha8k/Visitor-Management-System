<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
    public function index() {
        $employees = Employee::all();
        return view('admin.employees.index', compact('employees'));
    }
}
