@extends('layout')

@section('content')

    <form action="{{ route('employees.update',$employee->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-md-12 text-center">
                    <h2>Edit Employee</h2>
                <div class="pull-right">

                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $employee->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <textarea class="form-control" style="height:150px" name="address" placeholder="Detail">{{ $employee->address }}</textarea>
                </div><br>
            </div>
            <div class="col-md-12 text-center">
                <a class="btn btn-secondary" href="{{ route('employees.index') }}"> Cancel</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
