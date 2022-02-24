<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeStoreRequest;
use App\Models\Employee;
use App\Models\Title;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class EmployeeController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $employee_salaries = $user->employee->salaries;
        $employee_salaries_total = $user->employee->salaries->sum( 'salary' );

        /* Bu Sql performansı için kullanılabilir *

          $employee_salaries_total = $employee_salaries->reduce(function($total, $item){
                return $total + $item["salary"];
            }, 0);

        */

        if ( Gate::check( 'isDepartmentManager' ) ) { //eger mudurse...

            $total_department_salary = $user->employee->currentDepartmentManagement->first()->currentEmployees->salaries;

            dd( $total_department_salary );

            //return view( 'employee.index', compact( 'employee_salaries', 'employee_salaries_total', 'total_department_salary' ) );
        }

        return view( 'employee.index', compact( 'employee_salaries', 'employee_salaries_total' ) );
    }

    public function create()
    {
        $titles = Title::pluck('emp_no','title')->groupBy('title');

        dd($titles);
        return view( 'employee.create',compact('titles') );
    }

    public function store( EmployeeStoreRequest $request )
    {

    }
}
