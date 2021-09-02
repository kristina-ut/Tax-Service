@extends('layout.master')


@section('content')
<div class="col-12 grid-margin">
    <div class="card">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show Payment</h2>
                </div>
                <div class="pull-right">
                    {{-- <a class="btn btn-primary" href="{{ route('articles.index') }}"> Back</a> --}}
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    {{-- {{ $article->title}} --}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Body:</strong>
                    {{-- {{ $article->body}} --}}
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
