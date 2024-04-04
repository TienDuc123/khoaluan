<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Standard/title.tmlv'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/Standard/standard.css')); ?>">
<style>
    
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Standard/title.tmlv'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->

<!-- page trang ở đây -->
<section class="content-body">
    <div class="form-standard">
        <form action="<?php echo e(route('admin.thuongtruc.manacategory.createManafields')); ?>" method="post" class="container-fuild" id="form-create">
            <?php echo csrf_field(); ?>
            <div class="form-group row pl-4">
                <div class="col-md-2">
                    <?php echo app('translator')->get('project/Standard/title.sllvuc'); ?> 
                </div>
                <div class="col-md-2">
                    <input type="number" class="form-control " placeholder="<?php echo app('translator')->get('project/Standard/title.sllvuc'); ?>" id="input-linhvuc" value="0">
                </div>
            </div>
            <div class="block_render container-fuild">
                
            </div>
            <div class="item-group-button right-block w-50percent">
                <button class="btn btn-benchmark mr-2" type="button" id="btn-cancel">
                    <i class="bi bi-x-circle" style="font-size: 30px;color: red;"></i>
                </button>
                <button class="btn btn-benchmark mr-2" type="button" id="btn-save" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.luu'); ?>">
                    <i class="bi bi-save" style="font-size: 30px;color: #50cd89;"></i>
                </button>
            </div>
        </form>
    </div>
</section>
<!-- /Kết thúc page trang -->

    <!-- Kết thúc trang -->
    </section>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('footer_scripts'); ?>
<script type="text/javascript">
    var linhvuc = "<?php echo app('translator')->get('project/Standard/title.linhvuc'); ?>";
    var dvpt = "<?php echo app('translator')->get('project/Standard/title.dvpt'); ?>";
    $("#input-linhvuc").change(function() {
        if($(this).val() <= 0){
            alert("<?php echo app('translator')->get('project/Standard/title.nddd'); ?>");
        }else{
            $(".block_render").empty();
            for(let i = 1; i <= $(this).val(); i++){
                let tcrow = `
                    <div class="form-group row pl-4">
                        <div class="col-md-1">
                            ${linhvuc} ${i}
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control " placeholder="${linhvuc} ${i}" name="linhvuc[]">
                        </div>
                        <div class="col-md-1">
                            ${dvpt}
                        </div>
                        <div class="col-md-4">
                            <select class="form-control " name="donvi[]">
                                <?php $__currentLoopData = $donvi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($dv->id); ?>"><?php echo e($dv->ten_donvi); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                `;
                $(".block_render").append(tcrow);
            }
            
        }
    })

    $("#btn-save").click(function() {
        
        let check = false
        document.querySelectorAll("input[name='linhvuc[]']").forEach(item => {
            if(item.value != ""){
                check = true
            }
        })
        if(check){
            $("#form-create").submit();
        }else{
            alert("Bạn nhập thiếu thông tin")
        }
    })

    $("#btn-cancel").click(function() {
        $("#input-linhvuc").val("0");
        $(".block_render").empty();
    })
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\file_moi\xampp\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Standard/create_manafield.blade.php ENDPATH**/ ?>