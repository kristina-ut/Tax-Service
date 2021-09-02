<?php $__env->startSection('content'); ?>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Services</h2>
                        </div>

                        <div class="pull-right">
                            <a class="btn btn-primary" href="<?php echo e(route('services.index')); ?>"> <i class="mdi mdi-arrow-left-bold icon-sm"></i></a>
                        </div>
                    </div>
                </div>
                <hr class="solid">

                <?php echo Form::open(array('route' => 'services.store','method'=>'POST')); ?>

                    <?php echo $__env->make('pages.services.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo Form::close(); ?>

            </div>
        </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>