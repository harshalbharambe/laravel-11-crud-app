@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>Employee Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employees.create') }}">
                    Create New Employee
                </a>
            </div>
        </div>
    </div>
<br>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->address }}</td>
            <td>
                <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('employees.show',$employee->id) }}">
                        Show
                    </a>

                    <a class="btn btn-warning" href="{{ route('employees.edit',$employee->id) }}">
                        Edit
                    </a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to DELETE this record?');">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
