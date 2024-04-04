<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/QualiAssurance/title.qlhd'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link href="<?php echo e(asset('vendors/flatpickr/css/flatpickr.min.css')); ?>" rel="stylesheet"
      type="text/css"/>
<link href="<?php echo e(asset('css/pages/adv_date_pickers.css')); ?>" rel="stylesheet" type="text/css"/>

<link type="text/css" href="<?php echo e(asset('vendors/bootstrap-multiselect/css/bootstrap-multiselect.css')); ?>" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo e(asset('css/project/QualiAssurance/qualiassurance.css')); ?>">


</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <h1>Danh sách đơn vị</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
<!-- page trang ở đây -->
 
<!-- /Kết thúc page trang -->
		<?php $__currentLoopData = $donvi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<a href="<?php echo route('admin.dambaochatluong.manaproof.index', ['id' => $val->id]); ?>"><?php echo e($val->ten_donvi); ?></a>
				<br>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- Kết thúc trang -->
    </section>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('footer_scripts'); ?>
<script type="text/javascript" src="<?php echo e(asset('js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/bootstrap-multiselect/js/bootstrap-multiselect.js')); ?>" ></script>

<script src="<?php echo e(asset('vendors/pickadate/js/picker.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/pickadate/js/picker.date.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/pickadate/js/picker.time.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/flatpickr/js/flatpickr.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/airDatepicker/js/datepicker.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/airDatepicker/js/datepicker.en.js')); ?>" type="text/javascript"></script>
<script>
   
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamppkhoaluan\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/QualiAssurance/listdonvi.blade.php ENDPATH**/ ?>