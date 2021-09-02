@extends('layout.master')

@push('plugin-styles')
@endpush


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Employees List</h2>

        </div>

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('employees.create') }}"> + Create Employees</a>
        </div>
    </div>

</div>

@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif

<table class="table table-bordered">

    <tr>

        <th>No</th>

        <th>Employee Name</th>

        <th>Email</th>

        <th>Created_At</th>

        <th>Action</th>

    </tr>

@foreach ($employees as $employee)

<tr>

    <td>{{ ++$i }}</td>

    <td>{{ $employee->name }}</td>

    <td>{{ $employee->email }}</td>

    <td>{{ $employee->created_at }}</td>

    <td>

        <a class="btn btn-info btn-sm" href="{{ route('employees.show',$employee->id) }}"> <i class="mdi mdi-eye icon-sm"></i></a>

        <a class="btn btn-primary btn-sm" href="{{ route('employees.edit',$employee->id) }}"> <i class="mdi mdi-lead-pencil icon-sm"></i></a>

        {!! Form::open(['method' => 'DELETE','route' => ['employees.destroy', $employee->id],'style'=>'display:inline']) !!}

        <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"> <i class="mdi mdi-trash-can icon-sm"></i></button>

        {!! Form::close() !!}

    </td>
</tr>


@endforeach

</table>

{!! $employees->render() !!}

@endsection

