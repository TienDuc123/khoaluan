<?php
    $baseLang = 'project/QualiAssurance/KtraMCHoatDong/title';
    $baseRoute = 'admin.dambaochatluong.checkproof';
?>


<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get( $baseLang . '.qlhd'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/QualiAssurance/qualiassurance.css')); ?>">
<style>
    .select2-container .select2-selection--single .select2-selection__clear{
        right: 1rem;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get( $baseLang . '.dshd'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>    
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
<!-- page trang ở đây -->
<section class="content-body">
    <div class="form-standard">
        <h4><?php echo app('translator')->get( $baseLang . '.tkiem'); ?></h4>
        <div class="container-fuild pl-5 ">
            <div class="row mt-3 ">
                <div class="col-md-8">
                    <input type="text" class="form-control " placeholder="<?php echo app('translator')->get( $baseLang . '.tieude'); ?>" id="tieude">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-2">
                    <select class="form-control " id="year">
                        <option hidden value=""><?php echo app('translator')->get( $baseLang . '.chonnam'); ?></option>
                        <?php for($i = intVal(date('Y'));$i >= 2017 ;$i--): ?>
                            <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-control " id="lvuc" >
                        <option hidden value=""><?php echo app('translator')->get( $baseLang . '.lvuc'); ?></option>
                        <?php $__currentLoopData = $linhvuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->mo_ta); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-sm-1">
                    <button class="btn btn-benchmark" type="button" id="btn-search" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/QualiAssurance/title.timkiem'); ?>"> 
                        <i class="bi bi-search" style="font-size: 35px;color: #009ef7;"></i>
                    </button>
                </div>
                <div class="col-md-1">
                    <a class="btn btn-benchmark" href="<?php echo e(route($baseRoute . '.mchdata')); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/QualiAssurance/title.xuat_excel'); ?>">
                        <i class="bi bi-file-earmark-excel " style="font-size: 35px;color: #50cd89;"></i>
                    </a>
                </div>
            </div>
            <div class="row mt-3">
                
            </div>
        </div>
        <h3 class="mt-3"><?php echo app('translator')->get( $baseLang . '.dshd'); ?></h3>
        <div class="item-group-button right-block mb-2">
            
        </div>
        <table class="table table-striped table-bordered" id="table" width="100%">
            <thead>
             <tr>
                <th ><?php echo app('translator')->get( $baseLang . '.nam'); ?></th>
                <th ><?php echo app('translator')->get( $baseLang . '.lvuc'); ?></th>
                <th ><?php echo app('translator')->get( $baseLang . '.hoatdong'); ?></th>
                <th ><?php echo app('translator')->get( $baseLang . '.mcyc'); ?></th>
                <th ><?php echo app('translator')->get( $baseLang . '.thaotac'); ?></th>
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
    $("#lvuc").select2({
        placeholder: `<?php echo app('translator')->get( $baseLang . '.lvuc'); ?>`,
        allowClear: true
    });
    $("#year").select2({
        placeholder: `<?php echo app('translator')->get( $baseLang . '.chonnam'); ?>`,
        allowClear: true
    });
    

    $(function(){
        table = $('#table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax:  {
                url: "<?php echo route( $baseRoute . '.getData'); ?>",
                type: 'POST',
                data: {
                    'tieude' : function() { return $("#tieude").val() },
                    'lvuc'       : function() { return $("#lvuc").val() },
                    'year'    : function() { return $("#year").val() }
                },
            },
            columns: [
                { data: 'year' },
                { data: 'lvuc' },
                { data: 'noi_dung' },
                { data: 'hd_parent' },
                { data: 'actions' ,className: 'action'},
             ],
            order: [[1, 'asc']],
        });



        $('#btn-search').click(function() {
            table.ajax.reload();
        })
    });  
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp74\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/QualiAssurance/KtraMinhchungHoatdong/kt-mc-hoatdong.blade.php ENDPATH**/ ?>