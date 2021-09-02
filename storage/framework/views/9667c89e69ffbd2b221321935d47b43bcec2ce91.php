<?php $__env->startPush('plugin-styles'); ?>
<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Salary list</h2>

        </div>

        <div class="pull-right">
            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#myModal"> <i class="mdi mdi-book icon-sm"></i>Report</button>
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

        <a class="btn btn-info btn-sm" href="<?php echo e(URL::to('report/'.$result->user_id)); ?>"> <i class="mdi mdi-eye icon-sm">Invoice</i></a>

        <a class="btn btn-primary btn-sm" href="#"> <i class="mdi mdi-lead-pencil icon-sm">Pay</i></a>

    </td>
</tr>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php echo $results->render(); ?>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Report Generation</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <form action="<?php echo e(URL::to('generateReport')); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

        <div class="modal-body">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Generate</button>
        </div>
        </form>
      </div>

    </div>
  </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>