<?php $__env->startSection('content'); ?>
    <div class="col-12 grid-margin">
        <div class="card">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <?php $__currentLoopData = $all_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e($service->id == 1 ? 'active' : ''); ?>" id="income-tab" data-toggle="tab"
                            href="#home<?php echo e($service->id); ?>" role="tab" aria-controls="home"
                            aria-selected="true"><?php echo e($service->service_name); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <div class="tab-content" id="myTabContent">
                <?php $__currentLoopData = $all_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="tab-pane fade show <?php echo e($service->id == 1 ? 'active' : ''); ?>" id="home<?php echo e($service->id); ?>"
                        role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2><?php echo e($service->service_name); ?></h2>
                                </div>

                                <div class="pull-right">
                                    <button class="btn btn-success btn-servicecreate" data-service="<?php echo e($service->id); ?>">Request New
                                        Services</button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered" id="service-table<?php echo e($service->id); ?>">
                            <tr>
                                <th>No</th>
                                <th>Services</th>
                                <th>Status</th>
                                <th>Next Bill</th>
                                <th>Price</th>
                                <th width="280px">Action</th>
                            </tr>
                            <?php $__currentLoopData = $service_content[$service->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td></td>
                                <td><?php echo e($service->service_name); ?></td>
                                <td><?php echo e($service_row->status); ?></td>
                                <td><?php echo e($service_row->creted_at); ?></td>
                                <td><?php echo e($service_row->price); ?></td>
                                <td>
                                    <a class="btn btn-info" href="#">Pay</a>
                                    <a class="btn btn-primary" href="<?php echo e(URL::to('generatepdf/'.$service->id)); ?>">PDF</a>
                                    
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            


        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>