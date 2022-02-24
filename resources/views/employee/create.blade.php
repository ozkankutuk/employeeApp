@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">New Employee Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('employees.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Emp No</label>
                                <input type="text" class="form-control {{ $errors->has('emp_no') ? 'is-invalid' : '' }}" name="emp_no">
                                @if($errors->has('emp_no'))
                                    <span class="text-danger">{{ $errors->first('emp_no') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="required" for="category_id">{{ trans('cruds.listing.fields.category') }}</label>
                                <select class="form-control select2 {{ $errors->has('category') ? 'is-invalid' : '' }}"
                                        name="category_id" id="category_id" required>
                                    @foreach($titles as $emp_no => $title)
                                        <option
                                            value="{{ $emp_no }}" {{ old('title')==$emp_no ? 'selected' : '' }}>{{ $title }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>


                            <div class="form-group mt-3 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
