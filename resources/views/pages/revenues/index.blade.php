@extends('layout.master')

@push('plugin-styles')
@endpush


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Internal Revenue Services</h2>

        </div>

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('revenues.create') }}">+ Create IRS</a>
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

@foreach ($revenues as $revenue)

<tr>

    <td>{{ ++$i }}</td>

    <td>{{ $revenue->f_name }}</td>

    <td>{{ $revenue->created_at }}</td>

    <td>

        <a class="btn btn-info btn-sm" href="{{ route('revenues.show',$revenue->id) }}"> <i class="mdi mdi-eye icon-sm"></i></a>

        <a class="btn btn-primary btn-sm" href="{{ route('revenues.edit',$revenue->id) }}"> <i class="mdi mdi-lead-pencil icon-sm"></i></a>

        {!! Form::open(['method' => 'DELETE','route' => ['revenues.destroy', $revenue->id],'style'=>'display:inline']) !!}

        <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"> <i class="mdi mdi-trash-can icon-sm"></i></button>

        {!! Form::close() !!}

    </td>

</tr>

@endforeach

</table>

{!! $revenues->render() !!}

@endsection

