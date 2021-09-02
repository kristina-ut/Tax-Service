<!DOCTYPE html>
<html>
<head>
  <title>Tax Service</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">

  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
    <!-- Optional theme -->


  <!-- plugin css -->
  {!! Html::style('assets/plugins/@mdi/font/css/materialdesignicons.min.css') !!}
  {!! Html::style('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') !!}
  <!-- end plugin css -->

  @stack('plugin-styles')

  <!-- common css -->
  {!! Html::style('css/app.css') !!}
  <!-- end common css -->

  @stack('style')
</head>
<body data-base-url="{{url('/')}}">

  <div class="container-scroller" id="app">
    @include('layout.header')
    <div class="container-fluid page-body-wrapper">
      @include('layout.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        @include('layout.footer')
      </div>
    </div>
  </div>

  <!-- base js -->
  {!! Html::script('js/app.js') !!}
  {!! Html::script('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') !!}
  <!-- end base js -->

  <!-- plugin js -->
  @stack('plugin-scripts')
  <!-- end plugin js -->

  <!-- common js -->
  {!! Html::script('assets/js/off-canvas.js') !!}
  {!! Html::script('assets/js/hoverable-collapse.js') !!}
  {!! Html::script('assets/js/misc.js') !!}
  {!! Html::script('assets/js/settings.js') !!}
  {!! Html::script('assets/js/todolist.js') !!}
  <!-- end common js -->

  @stack('custom-scripts')
    <script type="text/javascript">

        $(document).ready(function(){
            setInterval(function()
            {
                console.log('ddd');
                $.ajax({
                    url: "{{ route('getNotification') }}",
                    type: "post",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function(data)
                    {
                        console.log(data.status);
                        if(data.status == 'success')
                        {
                            $('#notification-count').html(data.count);
                            $('#notification-count-detail').html(''+data.count+' New Notifications');

                            var txt = '';

                            for(var i= 0; i< data.content.length; i++){
                                txt += '<a class="dropdown-item preview-item py-3">\
                                    <div class="preview-thumbnail">\
                                    <i class="mdi ';

                                if(data.content[i].type == 1) txt += 'mdi-airballoon';
                                else if(data.content[i].type == 2) txt += 'mdi-settings';
                                else  txt += 'mdi-alert';

                                txt +=  ' m-auto text-primary"></i>\
                                    </div>\
                                    <div class="preview-item-content">\
                                    <h6 class="preview-subject font-weight-normal text-dark mb-1">' + data.content[i].message + '</h6>\
                                    <p class="font-weight-light small-text mb-0"> '+ data.content[i].created_at +' </p>\
                                    </div>\
                                </a>';
                            }

                            $('#notification-list').html(txt);
                        }
                        // do something with response data
                    },
                });
            }, 3000);

            $('.btn-servicecreate').click(function(e){
               e.preventDefault();

               var id =  $(this).attr('data-service');

               $.ajax({
                    url: "{{ route('services.store') }}",
                    type: "post",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        id: id,
                    },

                    success:function(data)
                    {

                        console.log(data.status);

                        if(data.status == 'success')
                        {
                            var txt = '';

                            txt += '<tr>\
                                <td>'+ data.service_count +'</td>\
                                <td>'+ data.data.service_name +'</td>\
                                <td>' + data.data.status + '</td>';

                            txt +=  '<td>'+ data.new_service.created_at +'</td>\
                                <td>'+ data.data.price +'</td>\
                                <td>\
                                    <a class="btn btn-info" href="#">Pay</a>\
                                    <a class="btn btn-primary" href="#">PDF</a>\
                                </td>\
                            </tr>'
                            $('#service-table'+id).append(txt);


                        }
                    },
                });
            });

        });

    </script>
</body>
</html>



