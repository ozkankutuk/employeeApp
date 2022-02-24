@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <th>EMP CODE</th>
                                <th>BIRTH DATE</th>
                                <th>FIRST NAME</th>
                                <th>LAST NAME</th>
                                <th>GENDER</th>
                                <th>HIRE DATE</th>
                            </tr>
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{ $employee->emp_no }}</td>
                                    <td>{{ $employee->birth_date }}</td>
                                    <td>{{ $employee->first_name }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td>{{ $employee->gender }}</td>
                                    <td>{{ $employee->hire_date }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="card-header">
                        {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection