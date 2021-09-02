<?php $__env->startPush('plugin-styles'); ?>
<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Employees List</h2>

        </div>

        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo e(route('employees.create')); ?>"> + Create Employees</a>
        </div>
    </div>

</div>

<?php if($message = Session::get('success')): ?>

    <div class="alert alert-success">

        <p><?php echo e($message); ?></p>

    </div>

<?php endif; ?>

<table class="table table-bordered">

    <tr>

        <th>No</th>

        <th>Employee Name</th>

        <th>Email</th>

        <th>Created_At</th>

        <th>Action</th>

    </tr>

<?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>

    <td><?php echo e(++$i); ?></td>

    <td><?php echo e($employee->name); ?></td>

    <td><?php echo e($employee->email); ?></td>

    <td><?php echo e($employee->created_at); ?></td>

    <td>

        <a class="btn btn-info btn-sm" href="<?php echo e(route('employees.show',$employee->id)); ?>"> <i class="mdi mdi-eye icon-sm"></i></a>

        <a class="btn btn-primary btn-sm" href="<?php echo e(route('employees.edit',$employee->id)); ?>"> <i class="mdi mdi-lead-pencil icon-sm"></i></a>

        <?php echo Form::open(['method' => 'DELETE','route' => ['employees.destroy', $employee->id],'style'=>'display:inline']); ?>


        <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"> <i class="mdi mdi-trash-can icon-sm"></i></button>

        <?php echo Form::close(); ?>


    </td>
</tr>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php echo $employees->render(); ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>