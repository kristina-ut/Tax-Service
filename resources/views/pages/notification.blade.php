@extends('layout.master')

@push('plugin-styles')
@endpush


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Notification List</h2>

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

        <th>Category</th>

        <th>Message</th>

        <th>Created_at</th>



    </tr>

@foreach ($all_datas as $all_data)

<tr>

    <td>{{ ++$i }}</td>

    @if(($all_data->type) == 1)
    <td>Register</td>
    @else
    <td>Setting</td>
    @endif

    <td>{{ $all_data->message }}</td>

    <td>{{ $all_data->created_at }}</td>
</tr>


@endforeach

</table>


@endsection

