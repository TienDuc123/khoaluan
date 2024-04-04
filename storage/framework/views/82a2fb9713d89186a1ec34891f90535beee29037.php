<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Standard/title.tmtc'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/Standard/standard.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Standard/title.tmtc'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
        
                <section class="content-body">
                    <div class="form-standard">
                        <h4><?php echo app('translator')->get('project/Standard/title.btc'); ?></h4>
                        <div class="create-standard">
                            <input disabled type="text" placeholder="<?php echo app('translator')->get('project/Standard/title.tbtc'); ?>" value="<?php echo e($tieu_de); ?>" class="form-control">
                            <select class="form-control" disabled>
                                <option hidden><?php echo app('translator')->get('project/Standard/title.ldg'); ?></option>
                                <option value="csgd" 
                                    <?php if($loai_tieuchuan == "csgd"): ?>
                                        selected = ""
                                    <?php endif; ?>
                                 ><?php echo app('translator')->get('project/Standard/title.csgd'); ?></option>
                                <option value="ctdt" 
                                    <?php if($loai_tieuchuan == "ctdt"): ?>
                                        selected = ""
                                    <?php endif; ?>
                                 ><?php echo app('translator')->get('project/Standard/title.ctdt'); ?></option>
                            </select>
                        </div>
                        <h3><?php echo app('translator')->get('project/Standard/title.tmtc'); ?></h3>
                        <form action="<?php echo e(route('admin.thuongtruc.setstandard.createLiStandard', $id)); ?>" method="post" class="container-fuild" id="form-create-standard">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row pl-4">
                                <div class="col-md-2">
                                    <?php echo app('translator')->get('project/Standard/title.sltchuan'); ?>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control h-2rem" placeholder="<?php echo app('translator')->get('project/Standard/title.sltchuan'); ?>" id="sltchuan">
                                </div>
                            </div>
                            <div class="block-content">
                                
                            </div>
                            <button type="button" class="ml-4 pl-3 pr-3 btn btn-submit"><i class="bi bi-save" style="font-size: 35px;color: #50cd89;"data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.luu'); ?>"></i></button>

                            <a href="<?php echo e(route('admin.thuongtruc.setstandard.configStandard', $id)); ?>" class="ml-4 pl-3 pr-3 btn"><i class="bi bi-backspace-fill" style="font-size: 35px;color: red;"data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.quaylai'); ?>"></i></a>
                        </form>
                        
                    </div>
                </section>
                <!-- /Kết thúc page trang -->

        <!-- Kết thúc trang -->
    </section>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('footer_scripts'); ?>
<script type="text/javascript">
    var tieuchuan = "<?php echo app('translator')->get('project/Standard/title.tieuchuan'); ?>";
    $("#sltchuan").change(function() {
        if($(this).val() <= 0){
            alert("<?php echo app('translator')->get('project/Standard/title.nddd'); ?>");
        }else{
            $(".block-content").empty();
            for(let i = 1; i <= $(this).val(); i++){
                let tcrow = `
                    <div class="form-group row pl-4">
                        <div class="col-md-2">
                            ${tieuchuan} ${i}
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="${tieuchuan} ${i}" name="tieuchuan[]">
                        </div>
                    </div>
                `;
                $(".block-content").append(tcrow);
            }
            
        }
        
    })


    $(".btn-submit").click(function() {
        let check = false;
        for(let i = 0; i < $("input[name='tieuchuan[]']").length; i++){
            if($("input[name='tieuchuan[]']")[i].value != ""){
                check = true;
            }
        }
        if(check){
            $("#form-create-standard").submit();
        }else{
            alert("Vui lòng không để trống thông tin")
        }
        
    })
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\file_moi\xampp\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Standard/create_standard.blade.php ENDPATH**/ ?>