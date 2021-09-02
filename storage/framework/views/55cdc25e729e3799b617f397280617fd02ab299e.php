<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PDF</title>
    </head>
    <body>
        <div class="row">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>

                    <th>Employee Name</th>

                    <th>Email</th>

                    <th>Working time</th>

                    <th>Payamount</th>


                </tr>

                <?php $i = 0; ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e(++$i); ?></td>

                    <td><?php echo e($list->name); ?></td>

                    <td><?php echo e($list->email); ?></td>

                    <td><?php echo e($list->total_workingtime); ?></td>

                    <td>$<?php echo e(15*$list->total_workingtime); ?></td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>
        </div>
    </body>
</html>
