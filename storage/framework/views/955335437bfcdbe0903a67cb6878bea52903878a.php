<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit Employee</h2>

        </div>

        <div class="pull-right">

            <br/>

            <a class="btn btn-primary" href="<?php echo e(route('employees.index')); ?>"> <i class="mdi mdi-arrow-left-bold icon-sm"></i></a>

        </div>

    </div>

</div>

<?php echo Form::model($employee, ['method' => 'PATCH','route' => ['employees.update', $employee->id]]); ?>


    <?php echo $__env->make('pages.employees.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>