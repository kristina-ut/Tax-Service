<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2> Emloyee Data</h2>

        </div>

        <div class="pull-right">

            <br/>

            <a class="btn btn-primary" href="<?php echo e(route('employees.index')); ?>"> <i class="glyphicon glyphicon-arrow-left"></i></a>

        </div>

    </div>

</div>

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Employee Name:</strong>

            <?php echo e($employee->name); ?>


        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Email:</strong>

            <?php echo e($employee->email); ?>


        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Updated_at:</strong>

            <?php echo e($employee->upated_at); ?>


        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>