@extends('layout.master')

@push('plugin-styles')
@endpush


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Services List</h2>

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

        <th>Service Name</th>

        <th>Price</th>

        <th>Created_at</th>
        <?php
        if(Session::get('role') == 0) {
        ?>
        <th>Action</th>
        <?php
            }
        ?>


    </tr>
<?php $sum = 0; ?>
@foreach ($servicequotes as $servicequote)

<tr>

    <td>{{ ++$i }}</td>

    <td>{{ $servicequote->service_name }}</td>

    <td>{{ $servicequote->price }}</td>

    <td>{{ $servicequote->created_at }}</td>
<?php
    if(Session::get('role') == 0) {
?>
    <td>

        <a class="btn btn-info btn-sm" href="{{ route('servicequotes.show',$servicequote->id) }}"> <i class="mdi mdi-eye icon-sm"></i></a>

        <a class="btn btn-primary btn-sm" href="{{ route('servicequotes.edit',$servicequote->id) }}"> <i class="mdi mdi-lead-pencil icon-sm"></i></a>

        {{-- {!! Form::open(['method' => 'DELETE','route' => ['servicequotes.destroy', $servicequote->id],'style'=>'display:inline']) !!}

        <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"> <i class="mdi mdi-trash-can icon-sm"></i></button>

        {!! Form::close() !!} --}}

    </td>
<?php
    }
?>

    <?php
        $sum += (int)substr($servicequote->price, 1);
    ?>

</tr>


@endforeach

<tr>
    <td colspan="2" style="text-align: center;">Total</td>
    <td>${{$sum}}</td>
    <td></td>
    <?php
    if(Session::get('role') == 0) {
    ?>
    <td></td>
    <?php
    }
    ?>
</tr>

</table>

{!! $servicequotes->render() !!}

@endsection

