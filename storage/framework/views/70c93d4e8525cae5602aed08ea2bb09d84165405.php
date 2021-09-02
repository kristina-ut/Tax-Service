<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PDF</title>
    </head>
    <body>
        <div>
            <p><strong>User Name:</strong> <?php echo e($data[0]->name); ?></p>
            <p><strong>Email:</strong> <?php echo e($data[0]->email); ?></p>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>

                    <th>Working time</th>

                    <th>Payamount</th>

                    <th>Paidtime</th>

                </tr>

                <?php $total = 0; $i = 0; ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($i++); ?></td>

                    <td><?php echo e($list->workingtime); ?></td>
                    <?php $total += $list->workingtime; ?>

                    <td><?php echo e($list->created_at); ?></td>

                    <td>$<?php echo e(15*$list->workingtime); ?></td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td>Total</td>

                    <td><?php echo e($total); ?></td>

                    <td><?php echo e(date('Y-m-d H:i:s')); ?></td>

                    <td>$<?php echo e(15*$total); ?></td>

                </tr>

            </table>
        </div>
    </body>
</html>


