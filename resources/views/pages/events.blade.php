@extends('layout.master')
@push('plugin-styles')
    {!! Html::style('/assets/plugins/fullcalendar/dist/fullcalendar.min.css') !!}
    {!! Html::style('/assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css') !!}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/> --}}

@endpush

@section('content')
    <div class="container">

        <div class="panel panel-primary">

            <div class="panel-heading"><strong>Schedule</strong></div>

            <div class="panel-body">

                {!! Form::open(['route' => 'events.add', 'method' => 'POST', 'files' => 'true']) !!}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        @if (Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                        @elseif (Session::has('warnning'))
                            <div class="alert alert-danger">{{ Session::get('warnning') }}</div>
                        @endif

                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            {!! Form::label('event_name', 'Subject:') !!}
                            <div class="">
                                {!! Form::text('event_name', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('event_name', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            {!! Form::label('client_name', 'Client:') !!}
                            <div class="">
                                {!! Form::text('client_name', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('client_name', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            {!! Form::label('company_name', 'Company:') !!}
                            <div class="">
                                {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('company_name', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>
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

                <div class="col-xs-6 col-sm-12 col-md-6 text-center"> &nbsp;<br />
                    {!! Form::submit('Add Event', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
            {!! Form::close() !!}

        </div>

    </div>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">MY Event Details</div>
            <div class="panel-body">
                {!! $calendar_details->calendar() !!}
            </div>
        </div>

    </div>
@endsection
@push('plugin-scripts')
    {!! Html::script('/assets/plugins/moment/moment.js') !!}
    {!! Html::script('/assets/plugins/fullcalendar/dist/fullcalendar.min.js') !!}
    {!! Html::script('/assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js') !!}
    {{-- <script src="http://code.jquery.com/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script> --}}

    {!! $calendar_details->script() !!}
@endpush
