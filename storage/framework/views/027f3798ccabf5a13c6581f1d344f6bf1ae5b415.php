<?php $__env->startPush('plugin-styles'); ?>
<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Salary list</h2>

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

        <th>Working time</th>

        <th>Payamount</th>

        <th>Paidtime</th>

        <th>Action</th>

    </tr>

<?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>

    <td><?php echo e(++$i); ?></td>

    <td><?php echo e($result->name); ?></td>

    <td><?php echo e($result->email); ?></td>

    <td><?php echo e($result->total_workingtime); ?></td>

    <td>$<?php echo e(15*$result->total_workingtime); ?></td>

    <td></td>

    <td>

        <a class="btn btn-info btn-sm" href="#"> <i class="mdi mdi-eye icon-sm">Invoice</i></a>

        <a class="btn btn-primary btn-sm" href="#"> <i class="mdi mdi-lead-pencil icon-sm">Pay</i></a>

    </td>
</tr>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php echo $results->render(); ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>