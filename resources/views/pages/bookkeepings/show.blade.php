@extends('layout.master')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2> Show Book Keeping</h2>

        </div>

        <div class="pull-right">

            <br/>

            <a class="btn btn-primary" href="{{ route('bookkeepings.index') }}">  <i class="mdi mdi-arrow-left-bold icon-sm"></i></a>

        </div>

    </div>

</div>

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Filename:</strong>

            {{ $bookkeeping->file_name}}

        </div>

    </div>
{{--
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Uploadname:</strong>

            {{ $bookkeeping->file_path}}

        </div>

    </div> --}}
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Updated_at:</strong>

            {{ $bookkeeping->created_at}}

        </div>

    </div>

</div>

@endsection
