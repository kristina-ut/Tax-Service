@extends('layout.master')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit Book Keeping</h2>

        </div>

        <div class="pull-right">

            <br/>

            <a class="btn btn-primary" href="{{ route('bookkeepings.index') }}"> <i class="mdi mdi-arrow-left-bold icon-sm"></i></a>

        </div>

    </div>

</div>

{!! Form::model($bookkeeping, ['method' => 'PATCH','route' => ['bookkeepings.update', $bookkeeping->id]]) !!}

    @include('pages.bookkeepings.form')

{!! Form::close() !!}

@endsection
