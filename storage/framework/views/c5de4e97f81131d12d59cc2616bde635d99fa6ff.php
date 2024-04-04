<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Standard/title.tmtchi'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/project/Standard/standard.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Standard/title.tmtchi'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
            <section class="content-body">
                <div class="form-standard">
                    <h4><?php echo app('translator')->get('project/Standard/title.btc'); ?></h4>
                    <div class="create-standard">
                        <input disabled value="<?php echo e($tieu_de); ?>" type="text" placeholder="<?php echo app('translator')->get('project/Standard/title.tbtc'); ?>" class="form-control">
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
                    <form method="post" action="<?php echo e(route('admin.thuongtruc.setstandard.updateNameTC')); ?>" class="standard mb-4">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id_tchuan" value="<?php echo e($id_tc); ?>">
                        <h4 class="mr-2"><?php echo app('translator')->get('project/Standard/title.tieuchuan'); ?> <?php echo e($stt); ?></h4>
                        <input type="text" placeholder="<?php echo app('translator')->get('project/Standard/title.tieuchuan'); ?> <?php echo e($stt); ?>" required class="form-control h-2rem" value="<?php echo e($mo_ta); ?>" name="nameTC">
                        <button class="btn ">
                            <i class="bi bi-save" style="font-size: 35px;color: #50cd89;;" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.upTchuan'); ?>"></i>
                            
                        </button>
                    </form>

                    <h3><?php echo app('translator')->get('project/Standard/title.tmtchi'); ?></h3>
                    <form action="<?php echo e(route('admin.thuongtruc.setstandard.createCriteria',$id_tc)); ?>" method="post" class="container-fuild" id="form-create-criteria">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row pl-4">
                            <div class="col-md-2">
                                <?php echo app('translator')->get('project/Standard/title.sltchi'); ?> 
                            </div>
                            <div class="col-md-2">
                                <input type="number" class="form-control h-2rem" placeholder="<?php echo app('translator')->get('project/Standard/title.sltchi'); ?>" id="sltchi" required>
                            </div>
                        </div>
                        <div class="block-content">
                            
                        </div>
                        <button type="button" class="ml-4 pl-3 pr-3 btn btn-submit"><i class="bi bi-save" style="font-size: 35px;color: #009ef7;"data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.luu'); ?>"></i></button>
                    </form>
                    
                </div>
            </section>


        <!-- Kết thúc trang -->
    </section>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('footer_scripts'); ?>
<script>
    var tieuchi = "<?php echo app('translator')->get('project/Standard/title.tieuchi'); ?>";
    var sotchi  = "<?php echo e($stt); ?>";
    var tcdk    = "<?php echo app('translator')->get('project/Standard/title.tcdk'); ?>";
    $("#sltchi").change(function() {
        if($(this).val() <= 0){
            alert("<?php echo app('translator')->get('project/Standard/title.nddd'); ?>");
        }else{
            $(".block-content").empty();
            for(let i = 1; i <= $(this).val(); i++){
                let tcrow = `
                    <div class="form-group row pl-4">
                        <div class="col-md-2">
                            ${tieuchi} ${sotchi}.${i}
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="${tieuchi} ${sotchi}.${i}" name="tieuchi[]">
                        </div>
                        <div class="col-md-2 display-flex">
                            <input type="hidden" value="off" name="tieuchidk[]" class="tieuchidk-hd">
                            <input type="checkbox" class="tieuchidk" id="tieuchi${sotchi}_${i}">
                            <label for="tieuchi${sotchi}_${i}">${tcdk}</label>
                        </div>
                    </div>
                `;
                $(".block-content").append(tcrow);
            }
            
        }
        
    })

    $(".btn-submit").click(function() {
        let listTc = document.querySelectorAll("input[name='tieuchi[]']");
        let check = false;
        for(let i = 0;i < listTc.length; i++){
            if(listTc[i].value != ""){
                check = true;
                break;
            }
        }

        if(listTc.length == 0 || !check){
            alert("<?php echo app('translator')->get('project/Standard/title.vldddtt'); ?> ");
        }else{
            $("#form-create-criteria").submit();
        }
    })

    $(".block-content").on("click", ".tieuchidk", function() {
        if($(this).is(":checked")){
            $(this).parent().find(".tieuchidk-hd").val("on");
        }else{
            $(this).parent().find(".tieuchidk-hd").val("off");  
        }
    })
</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp74\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Standard/create_criteria.blade.php ENDPATH**/ ?>