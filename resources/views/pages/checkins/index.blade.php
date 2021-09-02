@extends('layout.master')

@push('plugin-styles')
@endpush


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Salary list</h2>

        </div>

        <div class="pull-right">
            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#myModal"> <i class="mdi mdi-book icon-sm"></i>Report</button>
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

        <th>No</th>

        <th>Employee Name</th>

        <th>Email</th>

        <th>Working time</th>

        <th>Payamount</th>

        <th>Paidtime</th>

        <th>Action</th>

    </tr>

@foreach ($results as $result)

<tr>

    <td>{{ ++$i }}</td>

    <td>{{ $result->name }}</td>

    <td>{{ $result->email }}</td>

    <td>{{ $result->total_workingtime }}</td>

    <td>${{ 15*$result->total_workingtime }}</td>

    <td></td>

    <td>

        <a class="btn btn-info btn-sm" href="{{ URL::to('report/'.$result->user_id)}}"> <i class="mdi mdi-eye icon-sm">Invoice</i></a>

        <a class="btn btn-primary btn-sm" href="#"> <i class="mdi mdi-lead-pencil icon-sm">Pay</i></a>

    </td>
</tr>


@endforeach

</table>

{!! $results->render() !!}

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Report Generation</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <form action="{{ URL::to('generateReport')}}" method="POST">
            {{ csrf_field() }}
        <div class="modal-body">
            <div class="row">


                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        {!! Form::label('start_date', 'Start Date:') !!}
                        <div class="">
                            {!! Form::input('datetime-local', 'start_date', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        {!! Form::label('end_date', 'End Date:') !!}
                        <div class="">
                            {!! Form::input('datetime-local', 'end_date', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('end_date', '<p class="alert alert-danger">:message</p>') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Generate</button>
        </div>
        </form>
      </div>

    </div>
  </div>

@endsection

