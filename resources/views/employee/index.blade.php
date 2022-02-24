@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                        <h4>Maaş Tablom</h4>
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>PRICE</th>
                                <th>FROM DATE / TO DATE</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($employee_salaries as $employe_salary)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ number_format($employe_salary->salary,2,',','.') }}</td>
                                    <td>{{ $employe_salary->from_date }} -> {{ $employe_salary->to_date }}</td>
                                </tr>
                            @endforeach
                            </tbody>

                            <tfoot>
                            <tr>
                                <td colspan="3"><strong>Total Salary: {{ number_format($employee_salaries_total,2,',','.') }}</strong></td>
                            </tr>
                            </tfoot>
                        </table>

                        <h4>Personel Maaş Tablosu</h4>

                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>1</th>
                                <th>2</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
