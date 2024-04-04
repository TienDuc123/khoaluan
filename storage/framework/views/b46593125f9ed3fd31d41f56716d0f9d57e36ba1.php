<?php
    $baseLang = 'project/QualiAssurance/Kehoachhanhdong/title';
    $baseRoute = 'admin.dambaochatluong.proofclaim';
?>


<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get( $baseLang . '.khhd'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/QualiAssurance/qualiassurance.css')); ?>">
<style>
    .select2-container .select2-selection--single .select2-selection__clear{
        left: 88%;
    }
    i{
        line-height: initial !important;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get( $baseLang . '.khhd'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
<!-- page trang ở đây -->
<section class="content-body">
    <div class="form-standard">
        <div class="container-fuild pl-5 ">
            <div class="row mt-3 ">
                <div class="col-md-2 block-flex">
                    <select class="form-control h-2rem" id="nam_search">
                        <option value=""><?php echo app('translator')->get( $baseLang . '.nam'); ?></option>
                        <?php for($i = intVal(date('Y'));$i >= 1990 ;$i--): ?>
                        <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="col-md-2 block-flex">
                    <select class="form-control h-2rem" id="donvi_search">
                        <option value=""><?php echo app('translator')->get( $baseLang . '.donvi'); ?></option>
                        <?php $__currentLoopData = $donvi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($dv->id); ?>"><?php echo e($dv->ten_donvi); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-2 block-flex">
                    <select class="form-control h-2rem" id="lvuc_search">
                        <option value=""><?php echo app('translator')->get( $baseLang . '.lvuc'); ?></option>
                        <?php $__currentLoopData = $linhvuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($lv->id); ?>"><?php echo e($lv->mo_ta); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-2 block-flex">
                    <select class="form-control h-2rem" id="tthai_search">
                        <option value=""><?php echo app('translator')->get( $baseLang . '.trangthai'); ?></option>
                        <option value="N"><?php echo app('translator')->get( $baseLang . '.cxn'); ?></option>
                        <option value="P"><?php echo app('translator')->get( $baseLang . '.kxn'); ?></option>
                        <option value="Y"><?php echo app('translator')->get( $baseLang . '.dxn'); ?></option>
                    </select>
                </div>
                <div class="col-md-2 block-flex">
                    <a  href="<?php echo e(route($baseRoute . '.exportlistKhhd')); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/QualiAssurance/title.xuat_excel'); ?>">
                        <i class="bi bi-file-earmark-excel " style="font-size: 35px;color: #50cd89;"></i>
                    </a>
                </div>
            </div>
        </div>
        <h3 class="mt-5"></h3>
        <div class="item-group-button right-block mb-2">

        </div>
        <table class="table table-striped table-bordered" id="table" width="100%">
            <thead>
             <tr>
                <th><?php echo app('translator')->get( $baseLang . '.noidung'); ?></th>
                <th><?php echo app('translator')->get( $baseLang . '.ngay_thuchien'); ?></th>
                <th><?php echo app('translator')->get( $baseLang . '.ngay_kiemtra'); ?></th>
                <th><?php echo app('translator')->get( $baseLang . '.donvi_thuchien'); ?></th>
                
                <th><?php echo app('translator')->get( $baseLang . '.ghichu'); ?></th>
                <th><?php echo app('translator')->get( $baseLang . '.trangthai'); ?></th>
             </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

</section>

<!-- /Kết thúc page trang -->

    <!-- Kết thúc trang -->
    </section>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('footer_scripts'); ?>
<script>
    $("#nam_search").select2({
        placeholder: "<?php echo app('translator')->get( $baseLang . '.nam'); ?>",
        allowClear: true
    });
    $("#donvi_search").select2({
        placeholder: "<?php echo app('translator')->get( $baseLang . '.donvi'); ?>",
        allowClear: true
    });
    $("#lvuc_search").select2({
        placeholder: "<?php echo app('translator')->get( $baseLang . '.lvuc'); ?>",
        allowClear: true
    });
    $("#tthai_search").select2({
        placeholder: "<?php echo app('translator')->get( $baseLang . '.trangthai'); ?>",
        allowClear: true
    });

    $(function(){
        table = $('#table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax:  {
                url: "<?php echo route( $baseRoute . '.getListKhhd'); ?>",
                type: 'POST',
                data: {
                    'nam_search' : function() { return $("#nam_search").val() },
                    'donvi_search' : function() { return $("#donvi_search").val() },
                    'lvuc_search'  : function() { return $("#lvuc_search").val() },
                    'tthai_search' : function() { return $("#tthai_search").val() }
                },
            },
            columns: [
                { data: 'noiDung' },
                { data: 'nbd' },
                { data: 'nht' },
                { data: 'donViTh' },
                // { data: 'ngKiemtra' },
                { data: 'ghi_chu' },
                { data: 'trangthai' },
             ],
            order: [[1, 'asc']],
        });
    });

    $("#nam_search").change(function() {
        table.ajax.reload();
    })
    $("#donvi_search").change(function() {
        table.ajax.reload();
    })
    $("#lvuc_search").change(function() {
        table.ajax.reload();
    })
    $("#tthai_search").change(function() {
        table.ajax.reload();
    })

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp74\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/QualiAssurance/Kehoachhanhdong/danhsach.blade.php ENDPATH**/ ?>