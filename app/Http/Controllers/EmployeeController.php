<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with( 'salaries' )
            ->with( 'departments' )
            ->get();

        //dd( $employees );
        return view( 'employee.index', compact( 'employees' ) );
    }
}
