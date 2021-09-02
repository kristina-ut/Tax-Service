<?php $__env->startPush('plugin-styles'); ?>
<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Book keeping</h2>

        </div>

        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo e(route('bookkeepings.create')); ?>"> + Create Bookkeeping</a>
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

        <th>Filename</th>

        <th>Created_at</th>

        <th>Action</th>


    </tr>

<?php $__currentLoopData = $bookkeepings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookkeeping): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>

    <td><?php echo e(++$i); ?></td>

    <td><?php echo e($bookkeeping->file_name); ?></td>

    <td><?php echo e($bookkeeping->created_at); ?></td>

    <td>

        <a class="btn btn-info btn-sm" href="<?php echo e(route('bookkeepings.show',$bookkeeping->id)); ?>"><i class="mdi mdi-eye icon-sm"></i></a>

        <a class="btn btn-primary btn-sm" href="<?php echo e(route('bookkeepings.edit',$bookkeeping->id)); ?>"><i class="mdi mdi-lead-pencil icon-sm"></i></a>

        <?php echo Form::open(['method' => 'DELETE','route' => ['bookkeepings.destroy', $bookkeeping->id],'style'=>'display:inline']); ?>


        <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="mdi mdi-trash-can icon-sm"></i></button>

        <?php echo Form::close(); ?>


    </td>

</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php echo $bookkeepings->render(); ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>