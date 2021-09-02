@extends('layout.master')


@section('content')
    <div class="col-12 grid-margin">
        <div class="card">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach ($all_services as $service)
                    <li class="nav-item">
                        <a class="nav-link {{ $service->id == 1 ? 'active' : '' }}" id="income-tab" data-toggle="tab"
                            href="#home{{ $service->id }}" role="tab" aria-controls="home"
                            aria-selected="true">{{ $service->service_name }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="myTabContent">
                @foreach ($all_services as $service)
                    <div class="tab-pane fade show {{ $service->id == 1 ? 'active' : '' }}" id="home{{ $service->id }}"
                        role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2>{{ $service->service_name }}</h2>
                                </div>

                                <div class="pull-right">
                                    <button class="btn btn-success btn-servicecreate" data-service="{{$service->id}}">Request New
                                        Services</button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered" id="service-table{{$service->id}}">
                            <tr>
                                <th>No</th>
                                <th>Services</th>
                                <th>Status</th>
                                <th>Next Bill</th>
                                <th>Price</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($service_content[$service->id] as $service_row)
                            <tr>
                                <td>{{$loop ->iteration}}</td>
                                <td>{{$service->service_name}}</td>
                                <td>{{$service_row->status}}</td>
                                <td>{{$service_row->created_at}}</td>
                                <td>{{$service_row->price}}</td>
                                <td>
                                    <a class="btn btn-info" href="{{route('services.payment')}}">Pay</a>
                                    <a class="btn btn-primary" href="{{ URL::to('generatepdf/'.$service->id)}}">PDF</a>
                                    {{-- {!! Form::open(['method' => 'DELETE', 'route' => ['services.destroy', $service->id], 'style' => 'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!} --}}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                @endforeach
            </div>
            {{-- {!! $services->links() !!} --}}


        </div>
    </div>

@endsection
