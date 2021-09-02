@extends('layout.master')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit Employee</h2>

        </div>

        <div class="pull-right">

            <br/>

            <a class="btn btn-primary" href="{{ route('employees.index') }}"> <i class="mdi mdi-arrow-left-bold icon-sm"></i></a>

        </div>

    </div>

</div>

{!! Form::model($employee, ['method' => 'PATCH','route' => ['employees.update', $employee->id]]) !!}

    @include('pages.employees.form')

{!! Form::close() !!}

@endsection
