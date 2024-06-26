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
        <div class="content-body">
            <div class="text-center">
                <h1><?php echo e($title); ?></h1>
                <ul class="d-flex" style="list-style: none;">
                    <li><a href=""><?php echo app('translator')->get('project/Selfassessment/title.trangchu'); ?></a></li>/
                    <li><?php echo app('translator')->get('project/Selfassessment/title.hoanthanhbc'); ?></li>/
                    <li><?php echo e($title); ?></li>
                </ul>
            </div>
            <div class="row show_mcg">
                <div class="col-lg-11 col-lg-offset-1">
                    <div class="ibox" id="htmlContent">

                        <div class="pull-right m-b-lg">
                             <a href="<?php echo e(route('admin.tudanhgia.completionreport.export_exht', ['id' => $id_khbc])); ?>" title="" class="btn btn-danger">
                                <i class="fa fa-file-alt"></i> <?php echo app('translator')->get('project/Selfassessment/title.taifile'); ?>
                            </a>


                            <button class="btn btn-info" onclick="exportminhchung()">
                                <i class="fa fa-file-alt"></i> <?php echo app('translator')->get('project/Selfassessment/title.xuatminhc'); ?>
                            </button>
                            <form action="<?php echo e(route('admin.tudanhgia.completionreport.encode')); ?>" method="POST">
                                <input type="text" hidden name="id_khbc" value="<?php echo e($id_khbc); ?>">
                                <?php echo csrf_field(); ?>
                                <?php if(Sentinel::inRole('admin') || Sentinel::inRole('operator')): ?>
                                    <button class="btn btn-warning" id="traSoatMinhChung" type="submit">
                                        <i class="fa fa-atlas"></i> <?php echo app('translator')->get('project/Selfassessment/title.mahoamc'); ?>
                                    </button>
                                <?php endif; ?>
                            </form>
                            <?php if($keHoachBaoCaoDetail->trang_thai == 'completed'): ?>
                                <a class="btn btn-danger" id="moLaiKeHoach" d-id="<?php echo e($keHoachBaoCaoDetail->id); ?>">
                                    <i class="fa fa-retweet"></i> <?php echo app('translator')->get('project/Selfassessment/title.molai'); ?>
                                </a>
                            <?php else: ?>
                                <a class="btn btn-success" id="xacNhanHoanThanh" d-id="<?php echo e($keHoachBaoCaoDetail->id); ?>">
                                    <i class="fa fa-clipboard-check"></i> <?php echo app('translator')->get('project/Selfassessment/title.hoanthanh'); ?>
                                </a>


                        </div>
                        <?php endif; ?>
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
                                            <p>
                                                <?php
                                                    if (isset($keHoachTieuChuan->baoCaoTieuChuan->modau)) {
                                                        $absoluteImagePath = preg_replace('/src="..\/..\/..\/img_baocao/', 'src="' . asset('img_baocao'), $keHoachTieuChuan->baoCaoTieuChuan->modau);
                                                        echo $absoluteImagePath;
                                                    }
                                                ?>
                                            </p> 
                                                
                                               <?php echo $__env->make("admin.project.Selfassessment.hoanthien.tieuchi-ctdt", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                <div class="m-b-md m-l-md">
                                                    <b><?php echo app('translator')->get('project/Selfassessment/title.kltc'); ?> <?php echo e($keHoachTieuChuan->tieuChuan->stt); ?>: </b>
                                                    <?php
                                                        if (isset($keHoachTieuChuan->baoCaoTieuChuan->ketluan)) {
                                                            $absoluteImagePath = preg_replace('/src="..\/..\/..\/img_baocao/', 'src="' . asset('img_baocao'), $keHoachTieuChuan->baoCaoTieuChuan->ketluan);
                                                            echo $absoluteImagePath;
                                                        }
                                                    ?>
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

                            <div class="row m-t-lg">
                                <div class="col-sm-12">
                                    <div class="h4 font-bold mb-sm">
                                        <?php echo app('translator')->get('project/Selfassessment/title.pl8'); ?>
                                    </div>
                                </div>
                            </div>
                            <?php if(isset($keHoachBaoCaoDetail->boTieuChuan->loai_tieuchuan)): ?>
                                <?php if($keHoachBaoCaoDetail->boTieuChuan->loai_tieuchuan == 'csgd'): ?>
                                    <?php echo $__env->make("admin.project.Database.cosogiaoduc", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php elseif($keHoachBaoCaoDetail->boTieuChuan->loai_tieuchuan == 'ctdt'): ?>
                                    <?php echo $__env->make("admin.project.Database.chuongtrinhdt", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php echo $__env->make("admin.project.ExternalReview.include.phuluc10", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
    <!-- modal -->
            <div class="modal moadal_hoanthanh" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title"><?php echo app('translator')->get('project/Selfassessment/title.xnht'); ?></h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="add_conten">

                    </div>

                  </div>
                  <div class="modal-footer">
                    <a href="<?php echo e(route('admin.tudanhgia.completionreport.index')); ?>" class="btn btn-primary submit_ht"><?php echo app('translator')->get('project/Selfassessment/title.xacnhan'); ?></a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo app('translator')->get('project/Selfassessment/title.boqua'); ?></button>
                  </div>
                </div>
              </div>
            </div>
        </div>
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

    function exportminhchung(){
       var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
            "xmlns:w='urn:schemas-microsoft-com:office:word' "+
            "xmlns='http://www.w3.org/TR/REC-html40'>";

       var footer = "</body></html>";
       var data = document.getElementById("phuluc10").innerHTML;

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
    $('.show_mcg').on('click','.mcGop',function(){

            let id = $(this).attr('id').split('_')[1];
            window.location= "<?php echo route('admin.tudanhgia.preparereport.viewmcgop',0); ?>"+id;
    });

    $('.show_mcg').on('click','.mc',function(){
            let id = $(this).attr('id').split('_')[1];
            window.location= "<?php echo route('admin.dambaochatluong.manaproof.showProof',0); ?>"+id;
    });
    $('#xacNhanHoanThanh').on('click',function(){
        let id_khbc = $(this).attr('d-id');
        $('.add_conten').html(`<p>"<?php echo app('translator')->get('project/Selfassessment/title.ktldxn'); ?>"</p>`);
        $('.moadal_hoanthanh').modal('show');

        $('.submit_ht').on('click',function(){
            $.ajax({
                url: "<?php echo e(route('admin.tudanhgia.completionreport.exit_hoanthanh')); ?>",
                type: "POST",
                data:{
                    id_khbc : id_khbc,
                    _token: '<?php echo e(csrf_token()); ?>',
                },
                error: function(err) {
                },

                success: function(data) {

                },
            })
        })

    })

    $('#moLaiKeHoach').on('click',function(){
        let id_khbc = $(this).attr('d-id');
        $('.add_conten').html(`<p>"<?php echo app('translator')->get('project/Selfassessment/title.kkhmt'); ?>"</p>`);
        $('.moadal_hoanthanh').modal('show');
        $('.submit_ht').on('click',function(){
            $.ajax({
                url: "<?php echo e(route('admin.tudanhgia.completionreport.exit_molai')); ?>",
                type: "POST",
                data:{
                    id_khbc : id_khbc,
                    _token: '<?php echo e(csrf_token()); ?>',
                },
                error: function(err) {

                },

                success: function(data) {

                },
            })
        })

    })

    $(document).ready(function() {

        $("a[d-id]").each(function() {
          var dId = $(this).attr("d-id");
          $('.addminhchunggop_' + dId).attr("id", "addminhchunggop_" + dId);
        });
    });



    $('.edit_input').on('change',function() {
        let val = $(this).val();
        let key = $(this).attr('data_key');
         $.ajax({
            url: "<?php echo route('admin.tudanhgia.database.save_data_csgd'); ?>",
            type: "POST",
            data:{
                val : val,
                key : key,
                ikhbc : <?php echo e($idkhbc); ?>,
                _token: '<?php echo e(csrf_token()); ?>'
            },
            error: function(err) {

            },

            success: function(data) {
                if(data ==1){
                    Swal.fire({
                        icon: 'success',
                        title: 'Thành công!',
                        text: 'Bạn đã cập nhật thành công.',
                    });
                }else{
                    Swal.fire({
                        icon: 'Warning',
                        title: 'Thất bại!',
                        text: 'Bạn đã cập nhật thất bại.',
                    });
                }
            },
        })
    })

    <?php if($check != "sua"): ?>
        $('.edit_input').prop('disabled', true);
        $('.radiobox').prop('disabled', true);
    <?php else: ?>
        $("#save_contenty").on('change','.radiobox',function(){
        let key = $(this).attr('data_key');
        let val = $(this).val();

        $.ajax({
                url: "<?php echo e(route('admin.tudanhgia.database.apiNoiDungThem')); ?>",
                type: "GET",
                data:{
                    id : <?php echo e($idkhbc); ?>,
                    key : key,
                    val : val,
                },
                error: function(err) {
                },

                success: function(data) {
                    console.log(data);
                    if(data ==1){
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công!',
                            text: 'Bạn đã cập nhật thành công.',
                        });
                    }else{
                        Swal.fire({
                            icon: 'Warning',
                            title: 'Thất bại!',
                            text: 'Bạn đã cập nhật thất bại.',
                        });
                    }
                },
            })
        })
    <?php endif; ?>
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp74\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Selfassessment/detail.blade.php ENDPATH**/ ?>