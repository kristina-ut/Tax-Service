@extends('layout.master')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Upload file</h2>

        </div>

        <div class="pull-right">

        	<br/>

            <a class="btn btn-primary" href="{{ route('revenues.index') }}"> <i class="mdi mdi-arrow-left-bold icon-sm"></i></a>

        </div>

    </div>

</div>

{!! Form::open(array('route' => 'revenues.store','method'=>'POST', 'enctype'=>"multipart/form-data")) !!}

     @include('pages.revenues.form')

{!! Form::close() !!}

@endsection
