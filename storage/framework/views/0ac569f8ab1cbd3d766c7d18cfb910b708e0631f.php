<?php $__env->startPush('plugin-styles'); ?>
<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Notification List</h2>

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

        <th width="80px">No</th>

        <th>Category</th>

        <th>Message</th>

        <th>Created_at</th>



    </tr>

<?php $__currentLoopData = $all_datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>

    <td><?php echo e(++$i); ?></td>

    <?php if(($all_data->type) == 1): ?>
    <td>Register</td>
    <?php else: ?>
    <td>Setting</td>
    <?php endif; ?>

    <td><?php echo e($all_data->message); ?></td>

    <td><?php echo e($all_data->created_at); ?></td>
</tr>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>