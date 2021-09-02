<?php $__env->startPush('plugin-styles'); ?>
  <!-- <?php echo Html::style('/assets/plugins/plugin.css'); ?> -->
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<?php
if(Session::get('role') == 0) {
?>
<div class="row">
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-settings text-danger icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
         <a class ="color-text" href="<?php echo e(route('services.index')); ?>">
          <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i>Services</a></p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-receipt text-warning icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
         <a class="color-text" href="<?php echo e(route('servicequotes.index')); ?>">
          <i class="mdi mdi-message mr-1" aria-hidden="true"></i> Services Quote</a></p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-bell text-success icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
         <a class="color-text" href="<?php echo e(route('gainNotification')); ?>">
          <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Notification </a></p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-file text-info icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
          <i class="mdi mdi-reload mr-1" aria-hidden="true"></i>View File</p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-bitcoin text-warning icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
          <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Collection </p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-flag text-danger icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
          <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Reports </p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-worker text-success icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
          <a class="color-text" href="<?php echo e(route('checkins.index')); ?>">
           <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Check-in </a></p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-book text-info icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
          <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Activity tracking by User </p>
      </div>
    </div>
  </div>
</div>

<?php
}
?>


<?php
if(Session::get('role') == 1) {
?>
<div class="row">
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-settings text-danger icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
            <a class ="color-text" href="<?php echo e(route('services.index')); ?>">
             <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i>Services</a></p>
      </div>
    </div>
  </div>

  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-bell text-success icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
            <a class="color-text" href="<?php echo e(route('gainNotification')); ?>">
             <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Notification </a></p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-file text-info icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
          <i class="mdi mdi-reload mr-1" aria-hidden="true"></i>View File</p>
      </div>
    </div>
  </div>

  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-flag text-danger icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
          <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Reports </p>
      </div>
    </div>
  </div>


<?php
}
?>
<?php
if(Session::get('role') == 2) {
?>
<div class="row">

  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-receipt text-warning icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
            <a class="color-text" href="<?php echo e(route('servicequotes.index')); ?>">
             <i class="mdi mdi-message mr-1" aria-hidden="true"></i> Services Quote</a></p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-bell text-success icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
            <a class="color-text" href="<?php echo e(route('gainNotification')); ?>">
             <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Notification </a></p>
      </div>
    </div>
  </div>



  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-worker text-success icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
            <a class="color-text" href="<?php echo e(route('checkins.index')); ?>">
             <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Check-in </a></p>
      </div>
    </div>
  </div>
</div>

<?php
}
?>
<?php
if(Session::get('role') == 3) {
?>
<div class="row">

  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-receipt text-warning icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
            <a class="color-text" href="<?php echo e(route('servicequotes.index')); ?>">
             <i class="mdi mdi-message mr-1" aria-hidden="true"></i> Services Quote</a></p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-bell text-success icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
            <a class="color-text" href="<?php echo e(route('gainNotification')); ?>">
             <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Notification </a></p>
      </div>
    </div>
  </div>



  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="fl-center">
            <i class="mdi mdi-worker text-success icon-lg"></i>
          </div>

        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center">
            <a class="color-text" href="<?php echo e(route('checkins.index')); ?>">
             <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Check-in </a></p>
      </div>
    </div>
  </div>
</div>

<?php
}
?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('plugin-scripts'); ?>
  <?php echo Html::script('/assets/plugins/chartjs/chart.min.js'); ?>

  <?php echo Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('custom-scripts'); ?>
  <?php echo Html::script('/assets/js/dashboard.js'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>