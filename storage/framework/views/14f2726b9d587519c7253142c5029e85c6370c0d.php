<?php $__env->startPush('plugin-styles'); ?>
<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Services List</h2>

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

        <th>Service Name</th>

        <th>Price</th>

        <th>Created_at</th>
        <?php
        if(Session::get('role') == 0) {
        ?>
        <th>Action</th>
        <?php
            }
        ?>


    </tr>
<?php $sum = 0; ?>
<?php $__currentLoopData = $servicequotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicequote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>

    <td><?php echo e(++$i); ?></td>

    <td><?php echo e($servicequote->service_name); ?></td>

    <td><?php echo e($servicequote->price); ?></td>

    <td><?php echo e($servicequote->created_at); ?></td>
<?php
    if(Session::get('role') == 0) {
?>
    <td>

        <a class="btn btn-info btn-sm" href="<?php echo e(route('servicequotes.show',$servicequote->id)); ?>"> <i class="mdi mdi-eye icon-sm"></i></a>

        <a class="btn btn-primary btn-sm" href="<?php echo e(route('servicequotes.edit',$servicequote->id)); ?>"> <i class="mdi mdi-lead-pencil icon-sm"></i></a>

        

    </td>
<?php
    }
?>

    <?php
        $sum += (int)substr($servicequote->price, 1);
    ?>

</tr>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<tr>
    <td colspan="2" style="text-align: center;">Total</td>
    <td>$<?php echo e($sum); ?></td>
    <td></td>
    <?php
    if(Session::get('role') == 0) {
    ?>
    <td></td>
    <?php
    }
    ?>
</tr>

</table>

<?php echo $servicequotes->render(); ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>