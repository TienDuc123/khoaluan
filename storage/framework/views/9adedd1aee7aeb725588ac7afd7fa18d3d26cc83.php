<?php $__env->startSection('title'); ?>
    Cơ sở dữ liệu
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/Selfassessment/selfassessment.css')); ?>">
<link href="<?php echo e(asset('vendors/flatpickr/css/flatpickr.min.css')); ?>" rel="stylesheet"
      type="text/css"/>
<link href="<?php echo e(asset('css/pages/adv_date_pickers.css')); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(asset('css/pages/calendar_custom.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <h2>Cơ sở dữ liệu</h2>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
     <div class="content-body">
        <table class="table table-striped table-bordered " id="table" width="100%">
            <thead>
                <tr>
                    <th ><?php echo app('translator')->get('project/Externalreview/title.tdv'); ?></th>
                    <th ><?php echo app('translator')->get('project/Externalreview/title.tbc'); ?></th>
                    <th ><?php echo app('translator')->get('project/Externalreview/title.nvbc'); ?></th>
                    <th ><?php echo app('translator')->get('project/Externalreview/title.tdbc'); ?></th>
                    <th ><?php echo app('translator')->get('project/Externalreview/title.chitiet'); ?></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

<!-- page trang ở đây -->


<!-- /Kết thúc page trang -->

    <!-- Kết thúc trang -->
</section>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>

<script type="text/javascript">
   $(function(){
        table = $('#table').DataTable({
            lengthMenu: [[7, 10, 20, -1], [7, 10, 20, "All"]],
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "<?php echo route('admin.tudanhgia.database.data'); ?>",
            columns: [
                { data: 'ten_donvi', name: 'ten_donvi' },
                { data: 'ten_baocao', name: 'ten_baocao' },
                { data: 'nam_vietbao', name: 'nam_vietbao' },
                { data: 'thoidiem_bc', name: 'thoidiem_bc' },
                { data: 'actions', name: 'actions' },
            ],
        });
    });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp74\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Database/index.blade.php ENDPATH**/ ?>