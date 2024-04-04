<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Selfassessment/title.lkhct'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/Selfassessment/selfassessment.css')); ?>">
<link href="<?php echo e(asset('vendors/flatpickr/css/flatpickr.min.css')); ?>" rel="stylesheet"
      type="text/css"/>
<link href="<?php echo e(asset('css/pages/adv_date_pickers.css')); ?>" rel="stylesheet" type="text/css"/>
<style>

</style>
<?php $__env->stopSection(); ?>

<?php
    use Illuminate\Support\Facades\DB;
?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Selfassessment/title.lkhct'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
        <div class="d-flex justify-content-center">
            <div class="btn btn-danger"><a href="#" style="color: white;">Đảm bảo chất lượng</a></div>

            <div class="btn btn-light"><a href="<?php echo route('admin.tonghop.dbcl.minhchungyc'); ?>" style="color: black;">Minh chứng yêu cầu</a></div>
        </div>
        <h1>Tổng hợp đảm bảo chất lượng</h1>
        <div class="synthetic">
            <table class="table table-striped table-bordered" id="table" width="100%">
                <thead>
                    <th>Lĩnh vực</th>
                    <th>ĐV Phụ trách</th>
                    <th>Tổng số Hoạt động</th>
                    <th>Tổng số MCYC</th>
                    <th>MCYC đã phân công</th>
                    <th>MC đã cập nhật</th>
                    <th>MC đã xác nhận</th>
                    <th>MCYC chưa cập nhật</th>
                </thead>
                <tbody class="tbodys">                        
                </tbody>                
            </table>
        </div>
<!-- page trang ở đây -->
<section class="content-body bock-body">
    
<!-- /Kết thúc page trang -->

    <!-- Kết thúc trang -->
    </section>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('footer_scripts'); ?>
<script src="<?php echo e(asset('vendors/pickadate/js/picker.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/pickadate/js/picker.date.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/pickadate/js/picker.time.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/flatpickr/js/flatpickr.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/airDatepicker/js/datepicker.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/airDatepicker/js/datepicker.en.js')); ?>" type="text/javascript"></script>

<script>
    $(function () {
        table = $('#table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true, 
            searching:true,
            ajax: "<?php echo route('admin.tonghop.dbcl.datadbcl'); ?>",
            order: [],  
            columns: [
                { data: 'mo_ta', name: 'mo_ta' },
                { data: 'donvipt', name: 'donvipt' },
                { data: 'allhd', name: 'allhd' },
                { data: 'allmcyc', name: 'allmcyc' },
                { data: 'allmcdpc', name: 'allmcdpc' },
                { data: 'allmcdcn', name: 'allmcdcn' },
                { data: 'allmcdxn', name: 'allmcdxn' },
                { data: 'allmcccn', name: 'allmcccn' },
               
            ],           
        });

    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp74\htdocs\kiemdinh\kdcl-2023\resources\views/admin/project/Synthetic/dambaocl.blade.php ENDPATH**/ ?>