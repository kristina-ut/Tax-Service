<!DOCTYPE html>
<html>
<head>
  <title>Tax Service</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <!-- CSRF Token -->
  <meta name="_token" content="<?php echo e(csrf_token()); ?>">

  <link rel="shortcut icon" href="<?php echo e(asset('/favicon.ico')); ?>">
    <!-- Optional theme -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

  <!-- plugin css -->
  <?php echo Html::style('assets/plugins/@mdi/font/css/materialdesignicons.min.css'); ?>

  <?php echo Html::style('assets/plugins/perfect-scrollbar/perfect-scrollbar.css'); ?>

  <!-- end plugin css -->

  <?php echo $__env->yieldPushContent('plugin-styles'); ?>

  <!-- common css -->
  <?php echo Html::style('css/app.css'); ?>

  <!-- end common css -->

  <?php echo $__env->yieldPushContent('style'); ?>
</head>
<body data-base-url="<?php echo e(url('/')); ?>">

  <div class="container-scroller" id="app">
    <?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container-fluid page-body-wrapper">
      <?php echo $__env->make('layout.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <?php echo $__env->yieldContent('content'); ?>
        </div>
        <?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </div>
    </div>
  </div>

  <!-- base js -->
  <?php echo Html::script('js/app.js'); ?>

  <?php echo Html::script('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js'); ?>

  <!-- end base js -->

  <!-- plugin js -->
  <?php echo $__env->yieldPushContent('plugin-scripts'); ?>
  <!-- end plugin js -->

  <!-- common js -->
  <?php echo Html::script('assets/js/off-canvas.js'); ?>

  <?php echo Html::script('assets/js/hoverable-collapse.js'); ?>

  <?php echo Html::script('assets/js/misc.js'); ?>

  <?php echo Html::script('assets/js/settings.js'); ?>

  <?php echo Html::script('assets/js/todolist.js'); ?>

  <!-- end common js -->

  <?php echo $__env->yieldPushContent('custom-scripts'); ?>
    <script type="text/javascript">

        $(document).ready(function(){
            setInterval(function()
            {
                console.log('ddd');
                $.ajax({
                    url: "<?php echo e(route('getNotification')); ?>",
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
                    url: "<?php echo e(route('serviceCreate')); ?>",
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
                                <td>'+ data.new_service.id +'</td>\
                                <td>'+ data.data.service_name +'</td>';

                            if(data.data.status == 0) txt += '<td>Billing</td>';
                            else txt += '<td>Paid</td>';

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



