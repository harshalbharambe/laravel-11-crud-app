@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-12 text-center">
            <h2>Employee</h2>
    </div>
    <div class="col-md-12 text-center">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Address</th>
            </tr>
            <tr>
                <td>{{ $employee->name }}</td>
                <td class="text-truncate">{{ $employee->address }}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-12 text-center">
        <a class="btn btn-secondary" href="{{ route('employees.index') }}"> Back</a>
    </div>
</div>
@endsection
