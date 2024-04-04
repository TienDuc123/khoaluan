<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Selfassessment/title.hoanthienbc'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/project/Selfassessment/selfassessment.css')); ?>">
<style>
    td button{
        font-size: 15px !important;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Selfassessment/title.hoanthienbc'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
<!-- page trang ở đây -->
<section class="content-body">
    <div class="form-group">
        <div class="form-standard">
            <table class="table table-striped table-bordered" id="table" width="100%">
                <thead>
                 <tr>
                    <th ><?php echo app('translator')->get('project/Selfassessment/title.tenbc'); ?></th>
                    <th ><?php echo app('translator')->get('project/Selfassessment/title.mabaocao'); ?></th>
                    <th ><?php echo app('translator')->get('project/Selfassessment/title.manganh'); ?></th>
                    <th ><?php echo app('translator')->get('project/Selfassessment/title.ttct'); ?></th>
                    <th ><?php echo app('translator')->get('project/Selfassessment/title.donvi'); ?></th>
                    <th ><?php echo app('translator')->get('project/Selfassessment/title.thoidiembc'); ?></th>
                    <th ><?php echo app('translator')->get('project/Selfassessment/title.thoigianth'); ?></th>
                    <th ><?php echo app('translator')->get('project/Selfassessment/title.trang_thai'); ?></th>
                 </tr>
                </thead>
                <tbody>  
                </tbody>                
            </table>
        </div>
    </div>
</section>
<!-- /Kết thúc page trang -->
    
    <!-- Kết thúc trang -->
    </section>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>
<script>


    $(function () {
        table = $('#table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "<?php echo route('admin.tudanhgia.completionreport.data'); ?>",
            order: [],  
            columns: [
                { data: 'tenbaocao', name: 'tenbaocao' },
                { data: 'id',  name: 'id' },
                { data: 'ma_nganh', name: 'ma_nganh' },
                { data: 'ngPhutrach', name: 'ngPhutrach' },
                { data: 'dvpt', name: 'dvpt' },
                { data: 'createdAt', name: 'createdAt' },
                { data: 'tgTh', name: 'tgTh' },
                { data: 'status', name: 'status' },
                
            ],           
        });

    });


</script>
<?php $__env->stopSection(); ?>












<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\file_moi\xampp\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Selfassessment/completereport.blade.php ENDPATH**/ ?>