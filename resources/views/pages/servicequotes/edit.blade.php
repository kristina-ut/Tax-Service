@extends('layout.master')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit Services</h2>

        </div>

        <div class="pull-right">

            <br/>

            <a class="btn btn-primary" href="{{ route('servicequotes.index') }}"> <i class="mdi mdi-arrow-left-bold icon-sm"></i></a>

        </div>

    </div>

</div>

{!! Form::model($servicequote, ['method' => 'PATCH','route' => ['servicequotes.update', $servicequote->id]]) !!}

    @include('pages.servicequotes.form')

{!! Form::close() !!}

@endsection
