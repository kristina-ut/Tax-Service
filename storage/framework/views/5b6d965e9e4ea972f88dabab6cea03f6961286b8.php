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
            <table>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Created_at</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td><?php echo e($data->service_id); ?></td>
                    <td><?php echo e($data->price); ?></td>
                    <td><?php echo e($data->created_at); ?></td>
                    <td>Hold</td>
                </tr>
            </table>
        </div>
    </body>
</html>
