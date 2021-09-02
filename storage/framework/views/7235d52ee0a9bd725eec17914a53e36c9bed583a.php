<?php $__env->startPush('plugin-styles'); ?>
    <?php echo Html::style('/assets/plugins/fullcalendar/dist/fullcalendar.min.css'); ?>

    <?php echo Html::style('/assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css'); ?>

    

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="panel panel-primary">

            <div class="panel-heading"><strong>Schedule</strong></div>

            <div class="panel-body">

                <?php echo Form::open(['route' => 'events.add', 'method' => 'POST', 'files' => 'true']); ?>

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
                            <?php echo Form::label('event_name', 'Subject:'); ?>

                            <div class="">
                                <?php echo Form::text('event_name', null, ['class' => 'form-control']); ?>

                                <?php echo $errors->first('event_name', '<p class="alert alert-danger">:message</p>'); ?>

                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <?php echo Form::label('client_name', 'Client:'); ?>

                            <div class="">
                                <?php echo Form::text('client_name', null, ['class' => 'form-control']); ?>

                                <?php echo $errors->first('client_name', '<p class="alert alert-danger">:message</p>'); ?>

                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <?php echo Form::label('company_name', 'Company:'); ?>

                            <div class="">
                                <?php echo Form::text('company_name', null, ['class' => 'form-control']); ?>

                                <?php echo $errors->first('company_name', '<p class="alert alert-danger">:message</p>'); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">


                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <?php echo Form::label('start_date', 'Start Date:'); ?>

                            <div class="">
                                <?php echo Form::input('datetime-local', 'start_date', null, ['class' => 'form-control']); ?>

                                <?php echo $errors->first('start_date', '<p class="alert alert-danger">:message</p>'); ?>

                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <?php echo Form::label('end_date', 'End Date:'); ?>

                            <div class="">
                                <?php echo Form::input('datetime-local', 'end_date', null, ['class' => 'form-control']); ?>

                                <?php echo $errors->first('end_date', '<p class="alert alert-danger">:message</p>'); ?>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-12 col-md-6 text-center"> &nbsp;<br />
                    <?php echo Form::submit('Add Event', ['class' => 'btn btn-primary']); ?>

                </div>
            </div>
            <?php echo Form::close(); ?>


        </div>

    </div>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">MY Event Details</div>
            <div class="panel-body">
                <?php echo $calendar_details->calendar(); ?>

            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('plugin-scripts'); ?>
    <?php echo Html::script('/assets/plugins/moment/moment.js'); ?>

    <?php echo Html::script('/assets/plugins/fullcalendar/dist/fullcalendar.min.js'); ?>

    <?php echo Html::script('/assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js'); ?>

    

    <?php echo $calendar_details->script(); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>