<?php $__env->startSection('content'); ?>
        <div class="container">

            <div class="panel panel-primary">

             <div class="panel-heading">Event Calendar in Laravel 5 Using Laravel-fullcalendar</div>

              <div class="panel-body">

                   <?php echo Form::open(array('route' => 'events.add','method'=>'POST','files'=>'true')); ?>

                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12">
                          <?php if(Session::has('success')): ?>
                             <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                          <?php elseif(Session::has('warnning')): ?>
                              <div class="alert alert-danger"><?php echo e(Session::get('warnning')); ?></div>
                          <?php endif; ?>

                      </div>

                      <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <?php echo Form::label('event_name','Event Name:'); ?>

                            <div class="">
                            <?php echo Form::text('event_name', null, ['class' => 'form-control']); ?>

                            <?php echo $errors->first('event_name', '<p class="alert alert-danger">:message</p>'); ?>

                            </div>
                        </div>
                      </div>

                      <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                          <?php echo Form::label('start_date','Start Date:'); ?>

                          <div class="">
                          <?php echo Form::date('start_date', null, ['class' => 'form-control']); ?>

                          <?php echo $errors->first('start_date', '<p class="alert alert-danger">:message</p>'); ?>

                          </div>
                        </div>
                      </div>

                      <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                          <?php echo Form::label('end_date','End Date:'); ?>

                          <div class="">
                          <?php echo Form::date('end_date', null, ['class' => 'form-control']); ?>

                          <?php echo $errors->first('end_date', '<p class="alert alert-danger">:message</p>'); ?>

                          </div>
                        </div>
                      </div>

                      <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp;<br/>
                      <?php echo Form::submit('Add Event',['class'=>'btn btn-primary']); ?>

                      </div>
                    </div>
                   <?php echo Form::close(); ?>


             </div>

            </div>

            <div class="panel panel-primary">
              <div class="panel-heading">MY Event Details</div>
              <div class="panel-body" >
                  <?php echo $calendar_details->calendar(); ?>

              </div>
            </div>

            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>