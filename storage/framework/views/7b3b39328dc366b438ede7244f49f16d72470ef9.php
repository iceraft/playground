<!-- <?php $__env->startSection('edits'); ?>
<style type="text/css">
  background-color:powderblue;
</style>
<?php $__env->stopSection(); ?> -->


<?php $__env->startSection('content'); ?>
      <div class="page-header header-filter" data-parallax="true" style="background-image: url('<?php echo e(asset('material-kit-html-v2.0.4/assets/img/bg2.jpg')); ?>'">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <div class="brand text-center">
                <h1>Your title here</h1>
                <h3 class="title text-center">Subtitle</h3>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="main main-raised">
        <div class="container">
          <div class="section text-center">
            <h2 class="title">Your main section here</h2>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('myLayouts.styles', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('myLayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>