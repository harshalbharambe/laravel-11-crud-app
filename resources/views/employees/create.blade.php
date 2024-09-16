@extends('layout')

@section('content')

<form action="{{ route('employees.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-md-12 text-center">
                <h2>Create Employee</h2>
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
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <textarea class="form-control" style="height:150px" name="address" placeholder="Address">{{ old('address') }}</textarea>
            </div><br>
        </div>

        <div class="col-md-12 text-center">
            <a class="btn btn-secondary" href="{{ route('employees.index') }}"> Cancel</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
