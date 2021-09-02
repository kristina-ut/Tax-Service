@extends('layout.master')

@push('plugin-styles')
@endpush


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Book keeping</h2>

        </div>

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('bookkeepings.create') }}"> + Create Bookkeeping</a>
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

        <th width="80px">No</th>

        <th>Filename</th>

        <th>Created_at</th>

        <th>Action</th>


    </tr>

@foreach ($bookkeepings as $bookkeeping)

<tr>

    <td>{{ ++$i }}</td>

    <td>{{ $bookkeeping->file_name }}</td>

    <td>{{ $bookkeeping->created_at }}</td>

    <td>

        <a class="btn btn-info btn-sm" href="{{ route('bookkeepings.show',$bookkeeping->id) }}"><i class="mdi mdi-eye icon-sm"></i></a>

        <a class="btn btn-primary btn-sm" href="{{ route('bookkeepings.edit',$bookkeeping->id) }}"><i class="mdi mdi-lead-pencil icon-sm"></i></a>

        {!! Form::open(['method' => 'DELETE','route' => ['bookkeepings.destroy', $bookkeeping->id],'style'=>'display:inline']) !!}

        <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="mdi mdi-trash-can icon-sm"></i></button>

        {!! Form::close() !!}

    </td>

</tr>

@endforeach

</table>

{!! $bookkeepings->render() !!}

@endsection

