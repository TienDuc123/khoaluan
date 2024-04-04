<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Selfassessment/title.hoantbc'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/QualiAssurance/qualiAssurance.css')); ?>">
<style type="text/css">
    .show_mcg{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .content-body{
        width: 93%;
    margin: auto;
    box-shadow: 0 1px 1px -1px rgb(0 0 0 / 34%), 0 0 6px 0 rgb(0 0 0 / 14%);
    background-color: #ffffff;
    padding: 10px 10px 20px 10px;
    }
    .table td:first-child, .table th:first-child, .table tr:first-child {
        padding-left: 10px;
    }
    .table td:last-child, .table th:last-child, .table tr:last-child {
        padding-right: 6px;
    }
    .pull-right{
        display: flex;
    margin-bottom: 32px;
    }
    div  {
        font-size: 16px ;
    }
    table,tr,td{
        border: solid 1px lightblue;
    }
    td{
        text-align: center;
    }

    .table-borderless{
        border: 1px solid;
     }
    .table-borderless tr,td{
        border: 1px solid;
     }
    p,strong,br,hr,b,small,i,u,em,mark,del,ins,sub,sup{
        word-wrap: break-word;
    }
    img{
        max-width: 100%;
        height: auto;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Selfassessment/title.hoantbc'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
    
            <div id="div_main_content">
                <div class="row text-center article-title">
                    <div class="col-sm-12">
                        <h2 class="text-muted">
                            <?php echo e($tencsgd); ?>

                        </h2>
                    </div>

                    <div class="col-sm-4 col-sm-offset-4 text-center m-auto">
                        <hr>
                    </div>

                    <div class="col-sm-12 h3">
                        <?php echo e($keHoachBaoCaoDetail->ten_bc); ?> <br/>
                        <h4><?php echo app('translator')->get('project/Selfassessment/title.theotcdg'); ?></h4>
                    </div>

                    <div class="col-sm-12 m-t-lg">
                        <p>
                            <?php echo app('translator')->get('project/Selfassessment/title.tinhtp'); ?>
                        </p>
                    </div>
                </div>

                <div class="row  m-t-lg">
                    <?php if(isset($keHoachBaoCaoDetail->boTieuChuan->loai_tieuchuan)): ?>
                        <?php if($keHoachBaoCaoDetail->boTieuChuan->loai_tieuchuan == 'ctdt'): ?>
                            <div class="col-sm-12">
                                <div class="h4 text-center"><?php echo app('translator')->get('project/Selfassessment/title.p1khaiq'); ?></div>
                            </div>
                        <?php else: ?>
                            <div class="col-sm-12">
                                <div class="h4 text-center"><?php echo app('translator')->get('project/Selfassessment/title.p1hsvcsgd'); ?></div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                    <div class="col-sm-12">
                        <?php if(isset($keHoachBaoCaoDetail->keHoachChung->baoCaoChung)): ?>
                            <?php echo $keHoachBaoCaoDetail->keHoachChung->baoCaoChung->text; ?>

                        <?php endif; ?>
                    </div>
                </div>

                <div class="row m-t-lg">

                    <?php if(isset($keHoachBaoCaoDetail->boTieuChuan->loai_tieuchuan)): ?>
                        <?php if($keHoachBaoCaoDetail->boTieuChuan->loai_tieuchuan == 'ctdt'): ?>
                            <div class="col-sm-12 m-t-lg">
                                <div class="h4 text-center"><?php echo app('translator')->get('project/Selfassessment/title.p2dgtc'); ?></div>
                            </div>
                        <?php else: ?>
                            <div class="col-sm-12 m-t-lg">
                                <div class="h4 text-center"><?php echo app('translator')->get('project/Selfassessment/title.p2csgd'); ?></div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                    <div class="col-sm-12">

                        <?php $__currentLoopData = $keHoachBaoCaoDetail->keHoachTieuChuanList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keHoachTieuChuan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <strong><?php echo app('translator')->get('project/Selfassessment/title.tieuchuan'); ?> <?php echo e(isset($keHoachTieuChuan->tieuChuan->stt)?$keHoachTieuChuan->tieuChuan->stt : ''); ?>

                                : <?php echo e(isset($keHoachTieuChuan->tieuChuan->mo_ta)?$keHoachTieuChuan->tieuChuan->mo_ta : ''); ?></strong>

                            <?php if(isset($keHoachBaoCaoDetail->boTieuChuan->loai_tieuchuan)): ?>

                                <?php if($keHoachBaoCaoDetail->boTieuChuan->loai_tieuchuan == 'csgd'): ?>

                                    <?php echo $__env->make("admin.project.Selfassessment.hoanthien.tieuchi-csdt", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php else: ?>
                                    <p><?php echo isset($keHoachTieuChuan->baoCaoTieuChuan->modau) ? $keHoachTieuChuan->baoCaoTieuChuan->modau : ""; ?></p>
                                   <?php echo $__env->make("admin.project.Selfassessment.hoanthien.tieuchi-ctdt", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <div class="m-b-md m-l-md">
                                        <b><?php echo app('translator')->get('project/Selfassessment/title.kltc'); ?> <?php echo e($keHoachTieuChuan->tieuChuan->stt); ?>: </b>
                                        <?php echo isset($keHoachTieuChuan->baoCaoTieuChuan->ketluan) ? $keHoachTieuChuan->baoCaoTieuChuan->ketluan : ""; ?>

                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>

                <?php if(isset($keHoachBaoCaoDetail->boTieuChuan->loai_tieuchuan)): ?>
                    <?php if($keHoachBaoCaoDetail->boTieuChuan->loai_tieuchuan == 'ctdt'): ?>
                        <div class="row m-t-lg">
                            <div class="col-sm-12 m-t-lg">
                                <div class="h4 text-center"><?php echo app('translator')->get('project/Selfassessment/title.phan3lama'); ?></div>
                            </div>

                            <div class="col-sm-12">
                                <?php if(isset($keHoachBaoCaoDetail->keHoachChung->baoCaoChung)): ?>
                                    <?php echo $keHoachBaoCaoDetail->keHoachChung->baoCaoChung->ketluan; ?>

                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="row m-t-md">
                            <div class="col-sm-12">
                                <table class="table table-striped table-bordered" id="table">
                                    <tr>
                                        <td style="width:50%"></td>
                                        <td class="text-center">
                                            <p> <?php echo app('translator')->get('project/Selfassessment/title.bacham'); ?></p>
                                            <p class="font-bold"><?php echo app('translator')->get('project/Selfassessment/title.thutruong'); ?></p>
                                            <p><i><?php echo app('translator')->get('project/Selfassessment/title.khtdd'); ?></i></p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(isset($keHoachBaoCaoDetail->boTieuChuan->loai_tieuchuan)): ?>
                    <?php if($keHoachBaoCaoDetail->boTieuChuan->loai_tieuchuan == 'csgd'): ?>
                        <?php echo $__env->make("admin.project.Selfassessment.hoanthien.phuluc7-csdt", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php elseif($keHoachBaoCaoDetail->boTieuChuan->loai_tieuchuan == 'ctdt'): ?>
                        <?php echo $__env->make("admin.project.Selfassessment.hoanthien.phuluc7", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                <?php endif; ?>

           
<!-- page trang ở đây -->


<!-- /Kết thúc page trang -->

    <!-- Kết thúc trang -->
</section>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>

<script type="text/javascript">
    function exportHTML(){
       var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
            "xmlns:w='urn:schemas-microsoft-com:office:word' "+
            "xmlns='http://www.w3.org/TR/REC-html40'>";

       var footer = "</body></html>";
       var data = document.getElementById("div_main_content").innerHTML;

       var sourceHTML = header;

        // sourceHTML += "<?php echo e('<head><meta charset="utf-8"><title>' . $title . '</title></head><body>'); ?>";
        sourceHTML += data;
        // sourceHTML += footer;

       var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
       var fileDownload = document.createElement("a");
       document.body.appendChild(fileDownload);
       fileDownload.href = source;
       fileDownload.download = 'document.docx';
       fileDownload.click();
       document.body.removeChild(fileDownload);
    }

    exportHTML();
    
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamppkhoaluan\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Selfassessment/exportexht.blade.php ENDPATH**/ ?>