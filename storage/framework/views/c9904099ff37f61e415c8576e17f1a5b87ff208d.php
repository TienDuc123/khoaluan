<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Externalreview/title.thuvmc'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/ExternalReview/externalreview.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Externalreview/title.thuvmc'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="content-body">

    <table class="table table-striped table-bordered" id="table">
        <thead>
            <tr>
                <th><?php echo app('translator')->get('project/Externalreview/title.tieude'); ?></th>
                <th><?php echo app('translator')->get('project/Externalreview/title.sohieu'); ?></th>
                <th><?php echo app('translator')->get('project/Externalreview/title.ngaybanhanh'); ?></th>
                <th><?php echo app('translator')->get('project/Externalreview/title.noibanhanh'); ?></th>
                <th><?php echo app('translator')->get('project/Externalreview/title.donvql'); ?></th>
                <th><?php echo app('translator')->get('project/Externalreview/title.loaimc'); ?></th>
                <th><?php echo app('translator')->get('project/Externalreview/title.xacnhan'); ?></th>
                <th><?php echo app('translator')->get('project/Externalreview/title.quanly'); ?></th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

</section>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>

<script>

         $( function () {
            table = $('#table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url:" <?php echo e(route('admin.danhgiangoai.baocaotudanhgia.thuvien')); ?>?id="+<?php echo e($id); ?>,
                    type: 'GET',
                },

                columns: [
                    {data:'ten_ngan'},
                    {data:'sohieu'},
                    {data:'ngay_ban_hanh'},
                    {data:'noi_banhanh'},
                    {data:'tendonvi'},
                    {data:'trang_t'},
                    {data:'status'},
                    {data:'quanly'},
                    // {data:'status'},


                ]


            });

        });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp74\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/ExternalReview/thuvienminhchung.blade.php ENDPATH**/ ?>