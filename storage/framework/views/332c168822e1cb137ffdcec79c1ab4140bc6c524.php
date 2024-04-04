<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Externalreview/title.solieuth'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/ExternalReview/externalreview.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Externalreview/title.solieuth'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="content-body">
    <style>
        .title_tieuChuan{
            margin-bottom: 0px;
        }
        .nav-second-level{
            
        }
        .nav-second-level li a{
            display: flex;
            justify-content: space-between;
        }
        .firtLevel li a{
            justify-content: left;
        }
        .firtLevel {
            padding-left:15px;
        }
        .nav-level_child li a{
            display: flex;
            justify-content: flex-start !important;
        }
        .navbar-fixed-top {
            background: #fff;
            transition-duration: 0.4s;
            border-bottom: 1px solid #e7eaec !important;
            z-index: 1030 !important;
        }
        body.fixed-sidebar .navbar-static-side, body.canvas-menu .navbar-static-side {
            z-index: 2 !important;
        }
        .navbar .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #1ab394;
            border-radius: 4px;
            background: #1ab394;
            color: white;
        }
        .navbar .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #fff;
            line-height: 28px;
            outline-color: #1ab394;
            border: none;
            box-shadow: none;
        }
        .navbar .select2-selection.select2-selection--single:focus{
            outline: #1ab394;
            border: none;
        }
        .navbar .select2-container--default .select2-selection--single .select2-selection__placeholder {
            color: #fff;
        }
        .navbar .select2-selection__arrow b {
            border-color: #1ab394 transparent transparent transparent !important;
        }
        .md-skin .wrapper-content, #page-wrapper {
            padding: 0;
        }
        body{
            overflow: hidden;
        }
        iframe{
            border: none;
        }
        .md-skin .page-heading{
            margin:0px;
        }
        .content-body{
            width: 100%;
        }
    </style>
    <div>
        <iframe src="<?php echo e($url); ?>" style="width:100%; height:80vh"></iframe>
    </div>

</section>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>

<script>
    

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamppkhoaluan\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/ExternalReview/baocaokhac.blade.php ENDPATH**/ ?>