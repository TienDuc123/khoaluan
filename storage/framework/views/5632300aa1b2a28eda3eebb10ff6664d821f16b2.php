<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Selfassessment/title.bctdg'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/project/Selfassessment/selfassessment.css')); ?>">
    <link href="<?php echo e(asset('vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css')); ?>"  rel="stylesheet" media="screen"/>
    <link href="<?php echo e(asset('css/pages/editor.css')); ?>" rel="stylesheet" type="text/css"/>
    <!-- <link href="<?php echo e(asset('css/datetimepicker-master/jquery.datetimepicker.css')); ?>" rel="stylesheet" type="text/css"/> -->
    <link href="<?php echo e(asset('vendors/flatpickr/css/flatpickr.min.css')); ?>" rel="stylesheet"
      type="text/css"/>
    <link href="<?php echo e(asset('css/pages/adv_date_pickers.css')); ?>" rel="stylesheet" type="text/css"/>
    <!-- sweetalert2 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.css">
<style>
    .arrow_content{
        display: block !important ;
    }
    .arrow_content_text_css{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 30px;
    height: 4rem;


}
h4{
    font-size: 16px;
    font-weight: 400;
}
.target{
    margin-bottom: 3rem;
}
.modal-header-1{
    padding: 1rem 1rem;
    border-bottom: 1px solid #dee2e6;
    border-top-left-radius: calc(0.3rem - 1px);
    border-top-right-radius: calc(0.3rem - 1px);
    }
div {
    font-size: 15px;
}
.content-body{
    padding-left: 15px !important;
    padding-right: 15px !important;
    width: 100% !important;
}
table,tr,td{
    border: solid 1px lightblue;
}
td{
    text-align: center;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content-body">
    <div class="show_minhc">


        <div id="contextMenu" class="btn btn-primary btn-sm" style="position: absolute;z-index:9999999;display:none;">
            <i class="fas fa-comment-alt"></i> <?php echo app('translator')->get('project/Selfassessment/title.vietnhanxet'); ?>
        </div>
        <div class="show_css">
            <h2>
                <?php $__currentLoopData = $KHBaoCao; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($value->ten_bc); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </h2>

            <ol class="show_css_list_ol">
                <li>
                    <a href=""><?php echo app('translator')->get('project/Selfassessment/title.trangchu'); ?></a>
                </li>
                /
                <li><span><?php echo app('translator')->get('project/Selfassessment/title.baocao'); ?></span></li>
                /
                <li><strong>
                    <?php $__currentLoopData = $KHBaoCao; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($value->ten_bc); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </strong></li>
            </ol>
        </div>

        <div class="target">
            <div class="text-right">
                <div>
                    <button class="btn btn-success btn-lg" id="guiNhanXet" data-toggle="modal" data-target="#guinhanxet" >
                        <i class="fas fa-share-square"></i> <?php echo app('translator')->get('project/Selfassessment/title.guinhanxet'); ?>
                    </button>
                    <?php if($Forward): ?>
                        <a class="btn btn-info btn-lg" href="<?php echo e(route('admin.tudanhgia.commentreport.viewReport')); ?>?id=<?php echo e($id_khbc); ?>&tieuchuan_id=<?php echo e($Forward); ?>" style="color: #FFFFFF";>
                            <i class="fas fa-chevron-right"></i> <?php echo app('translator')->get('project/Selfassessment/title.nhanxettctt'); ?>
                        </a>
                    <?php endif; ?>

                </div>
            </div>
            <h3>
                <?php echo app('translator')->get('project/Selfassessment/title.tc'); ?> <?php echo e($tieuChuan->stt); ?>

            </h3>
            <h2>
                <strong><?php echo e($tieuChuan->mo_ta); ?></strong>
                <?php if($sum_danhgia > 0): ?>
                    <small class="text-danger">
                        <i class="fas fa-star"></i>
                        <?php echo app('translator')->get('project/Selfassessment/title.danhgiamuc'); ?> <?php echo e($sum_danhgia); ?>

                    </small>
                <?php endif; ?>
            </h2>

        </div>

        <div class="arrow_content">
            <div class="arrow_content_t clickToComment">

            <?php if($keHoachBaoCaoDetail->loai_tieuchuan != 'csdt'): ?>
                        <div class="group_back">
                            <div class="arrow_content_text_css">
                                <h4><?php echo app('translator')->get('project/Selfassessment/title.modau'); ?></h4>
                                <button id="show_content" onclick="showhidetieuchi()"><i class="fa fa-chevron-up" id="show_arrow"></i></button>
                            </div>
                            <div id="content_text" >
                                <div class="text_contents" >

                                    <?php if($baoCaoTieuChuan): ?>

                                        <?php $__currentLoopData = $nhanxetbc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nhanXet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <?php

                                                if(strlen(strstr($baoCaoTieuChuan->modau,$nhanXet->noidung)) > 0){
                                                    $change = "<a class='commentDetail label label-warning' d-id='$nhanXet->id' d-data='<small><p>{$nhanXet->nhanxet}</p> bởi {$nhanXet->user->name} ({$nhanXet->user->ten_donvi}) vào lúc {$nhanXet->created_at}</small>'>$nhanXet->noidung</a>";
                                                    $baoCaoTieuChuan->modau = str_replace($nhanXet->noidung,$change,$baoCaoTieuChuan->modau);

                                                }
                                            ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo $baoCaoTieuChuan->modau; ?>

                                    <?php endif; ?>
                                </div>

                            </div>

                            <?php if($baoCaoTieuChuan): ?>
                                <?php echo $__env->make("admin.project.Selfassessment.viewcomment",['kieu'=>'tieuchuan_modau','id'=>$baoCaoTieuChuan->id,'id_kehoach_bc'=>$id_khbc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        </div>
            <?php endif; ?>
                <?php $__currentLoopData = $tieuchuans_tieuchi->tieuchi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kehoachtieuchi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="block_content">
                        <div class="block_content_title">
                            <h4><strong><?php echo e($tieuChuan->stt); ?>.<?php echo e($kehoachtieuchi->stt); ?></strong></h4>
                            <h4 onclick="showhidetieuchi2(<?php echo $kehoachtieuchi->id; ?>)"><a class="collapse-link huongDanTieuChi" d-id="<?php echo e($kehoachtieuchi->id); ?>"><?php echo e($kehoachtieuchi->mo_ta); ?></a></h4>
                        </div>
                        <div class="ibox-tools">
                            <!-- cần sửa lại if này -->

                            <?php if(isset($danhGiaTieuChiData[$kehoachtieuchi->id])): ?>
                                <a data-toggle="tooltip" title="Đánh giá" class="danhGiaTieuChi"
                                d-danhgia="<?php echo e($danhGiaTieuChiData[$kehoachtieuchi->id]); ?>">
                                        <span class="text-danger">
                                        <i class="fas fa-star "></i> <?php echo e($danhGiaTieuChiData[$kehoachtieuchi->id]); ?>

                                        </span>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="ibox_cotent css_width" id="show_block_content_<?php echo $kehoachtieuchi->id; ?>" >
                        <?php if(count($kehoachtieuchi->bc_menhde) > 0): ?>
                            <?php $__currentLoopData = $kehoachtieuchi->bc_menhde; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menhde): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <div class="ibox-title border-bottom">
                                    <div class="ibox-tools2">
                                        <h4><?php echo e($menhde->mo_ta); ?></h4>
                                    </div>
                                </div>
                                <div class="ibox-content border-bottom">
                                    <h3><?php echo app('translator')->get('project/Selfassessment/title.mota'); ?></h3>

                                    <?php
                                        if($kehoachtieuchi->baocao_tieuchi){
                                            $editable = ($kehoachtieuchi->baocao_tieuchi->trang_thai=='dangsua' || $kehoachtieuchi->baocao_tieuchi->trang_thai=='nhanxet')?"click2edit hover-shadows":"";
                                        }else{
                                            $editable="click2edit hover-shadows";
                                        }
                                    ?>
                                    <div class="ibox-content minhChungAllow shadows" d-tieuChi="<?php echo e($menhde->tieuchi_id); ?>">
                                        <div class="texts_<?php echo $menhde->id; ?>" >
                                            <?php if($menhde): ?>

                                                <?php $__currentLoopData = $nhanxetbc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nhanXet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php

                                                        if(str_contains($menhde->mota,$nhanXet->noidung)){

                                                            $menhde->mota = str_replace($nhanXet->noidung,"<a class='commentDetail label label-warning' d-id='$nhanXet->id' d-data='<small><p>{$nhanXet->nhanxet}</p> bởi {$nhanXet->user->name} ({$nhanXet->user->ten_donvi}) vào lúc {$nhanXet->created_at}</small>'>$nhanXet->noidung</a>",$menhde->mota);
                                                        }
                                                    ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo $menhde->mota; ?>

                                            <?php else: ?>
                                                <i class="text-muted"><?php echo app('translator')->get('project/Selfassessment/title.bvddtmt'); ?></i>
                                            <?php endif; ?>
                                        </div>


                                    </div>
                                </div>
                                    <?php if($menhde->id): ?>
                                        <?php echo $__env->make("admin.project.Selfassessment.viewcomment",['kieu'=>'menhde_mota','id'=>$menhde->id,'id_kehoach_bc'=>$id_khbc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endif; ?>
                                <div class="hr-line-dashed"></div>

                                <h3><?php echo app('translator')->get('project/Selfassessment/title.diemmanh'); ?></h3>

                                <div class="ibox-content minhChungAllow shadows" d-tieuChi="<?php echo e($menhde->tieuchi_id); ?>">
                                    <div class="texts2_<?php echo $menhde->id; ?>">
                                        <?php $__currentLoopData = $nhanxetbc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nhanXet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                if(str_contains($menhde->mo_ta,$nhanXet->noidung)){
                                                    $menhde->diemmanh = str_replace($nhanXet->noidung,"<a class='commentDetail label label-warning' d-id='$nhanXet->id' d-data='<small><p>{$nhanXet->nhanxet}</p> bởi {$nhanXet->user->name} ({$nhanXet->user->ten_donvi}) vào lúc {$nhanXet->created_at}</small>'>$nhanXet->noidung</a>",$menhde->diemmanh);
                                                }
                                            ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo $menhde->diemmanh; ?>

                                    </div>
                                </div>

                                <h3>
                                    <?php echo app('translator')->get('project/Selfassessment/title.khphdm'); ?>
                                </h3>

                                <div class="ibox-content">
                                    <table class="table clause-table clause-table-editabe">
                                        <thead>
                                        <tr>
                                            <th><?php echo app('translator')->get('project/Selfassessment/title.noidung'); ?></th>
                                            <th><?php echo app('translator')->get('project/Selfassessment/title.donvithuchien'); ?></th>
                                            <th><?php echo app('translator')->get('project/Selfassessment/title.donvikiemtra'); ?></th>
                                            <th><?php echo app('translator')->get('project/Selfassessment/title.tungay'); ?></th>
                                            <th><?php echo app('translator')->get('project/Selfassessment/title.denngay'); ?></th>

                                            <!-- if này có vấn đề cần hỏi lại  -->

                                            <?php if($tieuChuan->trang_thai!='congbo'): ?>
                                                <th colspan="2"><?php echo app('translator')->get('project/Selfassessment/title.tacvu'); ?></th>
                                            <?php endif; ?>

                                        </tr>
                                        </thead>
                                        <tbody class="keHoach_diemmanh" id="keHoach_diemmanh_<?php echo e($menhde->id); ?>">

                                        </tbody>
                                    </table>
                                </div>
                                <?php if($menhde->diemmanh): ?>
                                    <?php echo $__env->make("admin.project.Selfassessment.viewcomment",['kieu'=>'menhde_diemmanh','id'=>$menhde->id,'id_kehoach_bc'=>$id_khbc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endif; ?>
                                <div class="hr-line-dashed"></div>

                                <h3><?php echo app('translator')->get('project/Selfassessment/title.tontai'); ?></h3>

                                <div class="ibox-content minhChungAllow shadows" d-tieuChi="<?php echo e($menhde->tieuchi_id); ?>">
                                    <div class="texts3_<?php echo $menhde->id; ?>">
                                            <?php $__currentLoopData = $nhanxetbc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nhanXet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    if(str_contains($menhde->mo_ta,$nhanXet->noidung)){
                                                        $menhde->tontai = str_replace($nhanXet->noidung,"<a class='commentDetail label label-warning' d-id='$nhanXet->id' d-data='<small><p>{$nhanXet->nhanxet}</p> bởi {$nhanXet->user->name} ({$nhanXet->user->ten_donvi}) vào lúc {$nhanXet->created_at}</small>'>$nhanXet->noidung</a>",$menhde->tontai);
                                                    }
                                                ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo $menhde->tontai; ?>

                                    </div>

                                </div>

                                <h3>
                                    <?php echo app('translator')->get('project/Selfassessment/title.khkp'); ?>
                                </h3>

                                <div class="ibox-content">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th><?php echo app('translator')->get('project/Selfassessment/title.noidung'); ?></th>
                                            <th><?php echo app('translator')->get('project/Selfassessment/title.donvithuchien'); ?></th>
                                            <th><?php echo app('translator')->get('project/Selfassessment/title.donvikiemtra'); ?></th>
                                            <th><?php echo app('translator')->get('project/Selfassessment/title.tungay'); ?></th>
                                            <th><?php echo app('translator')->get('project/Selfassessment/title.denngay'); ?></th>
                                            <th colspan="2"><?php echo app('translator')->get('project/Selfassessment/title.tacvu'); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody class="keHoach_tontai" id="keHoach_tontai_<?php echo e($menhde->id); ?>">

                                        </tbody>
                                    </table>
                                </div>

                                <?php if($menhde->tontai): ?>
                                    <?php echo $__env->make("admin.project.Selfassessment.viewcomment",['kieu'=>'menhde_tontai','id'=>$menhde->id,'id_kehoach_bc'=>$id_khbc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(isset($keHoachBaoCaoDetail->bo_tieuchuan->loai_tieuchuan)): ?>
                <?php if($keHoachBaoCaoDetail->bo_tieuchuan->loai_tieuchuan != 'csdt'): ?>
                    <?php if($keHoachTieuChuan->id_truong_nhom == Sentinel::getUser()->id || $keHoachBaoCaoDetail->ns_phutrach == Sentinel::getUser()->id || Sentinel::inRole('admin') || Sentinel::inRole('operator')): ?>
                        <div class="group_back">
                            <div class="arrow_content_text_css">
                                <h4><?php echo app('translator')->get('project/Selfassessment/title.ketluan'); ?></h4>
                                <button id="show_content2" onclick="showhidetieuchi3()"><i class="fa fa-chevron-up" id="show_arrow2"></i></button>
                            </div>

                            <div id="content_text2" >
                                <div class="text_contents2" >
                                        <?php $__currentLoopData = $nhanxetbc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nhanXet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                if(str_contains($baoCaoTieuChuan->ketluan,$nhanXet->noidung)){
                                                    $baoCaoTieuChuan->ketluan = str_replace($nhanXet->noidung,"<a class='commentDetail label label-warning' d-id='$nhanXet->id' d-data='<small><p>{$nhanXet->nhanxet}</p> bởi {$nhanXet->user->name} ({$nhanXet->user->ten_donvi}) vào lúc {$nhanXet->created_at}</small>'>$nhanXet->noidung</a>",$baoCaoTieuChuan->ketluan);
                                                }
                                            ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo $baoCaoTieuChuan->ketluan; ?>

                                </div>
                            </div>
                        <?php if($baoCaoTieuChuan): ?>
                                <?php echo $__env->make("admin.project.Selfassessment.viewcomment",['kieu'=>'tieuchuan_ketluan','id'=>$baoCaoTieuChuan->id,'id_kehoach_bc'=>$id_khbc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Modal gửi nhận xét-->
    <form action="<?php echo e(route('admin.tudanhgia.commentreport.update_comment')); ?>" method="POST">
        <input type="text" hidden name="id_khbc" value="<?php echo e($id_khbc); ?>">
        <input type="text" hidden name="tieuchuan_id" value="<?php echo e($tieuchuan_id); ?>">
        <?php echo csrf_field(); ?>
        <div class="modal fade" id="guinhanxet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title" id="exampleModalLongTitle"><?php echo app('translator')->get('project/Selfassessment/title.guinhanxet'); ?></h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <?php echo app('translator')->get('project/Selfassessment/title.ndguinhanxet'); ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal"><?php echo app('translator')->get('project/Selfassessment/title.dong'); ?></button>
                  <button type="submit" class="btn btn-info btn-lg"><?php echo app('translator')->get('project/Selfassessment/title.guinhanxet'); ?></button>
                </div>
              </div>
            </div>
          </div>
    </form>


    <!-- Modal viết nhận xét-->
    <div class="modal inmodal fade" id="nhanXetModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title"><?php echo app('translator')->get('project/Selfassessment/title.vietnhanxet'); ?></h3>
                </div>
                <form class="ajaxForm form-horizontal reloadDone" id="nhanXetForm"
                      action="<?php echo e(route('admin.tudanhgia.commentreport.update_nx')); ?>" method="POST">
                    <div class="modal-body">

                        <?php echo csrf_field(); ?>
                        <input name="type" type="hidden" value="chung">
                        <input name="kh" type="hidden" value="<?php echo e($id_khbc); ?>">
                        <input name="tieuchuan_id" type="hidden" value="<?php echo e($tieuchuan_id); ?>">
                        <input name="userId" type="hidden" value="<?php echo e($userId); ?>">

                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo app('translator')->get('project/Selfassessment/title.nhanxetcho'); ?></label>
                            <div class="col-sm-12">
                                <textarea name="noidung" class="form-control noidung" readonly></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo app('translator')->get('project/Selfassessment/title.noidung'); ?></label>
                            <div class="col-sm-12">
                                <textarea name="nhanxet" class="form-control"></textarea>

                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <div id="ajaxFormOutput" ></div>
                        <button type="submit" class="btn btn-primary ladda-button" data-style="expand-right">
                            <?php echo app('translator')->get('project/Selfassessment/title.nhanxet'); ?>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="modal fade" id="modal_nhanxet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form action="<?php echo e(route('admin.tudanhgia.commentreport.delete_nx')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="text" hidden name="id_nx" id="id_nhanxet">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('project/Selfassessment/title.nhanxet'); ?></h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body show_nhanxet">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo app('translator')->get('project/Selfassessment/title.ok'); ?></button>
                <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('project/Selfassessment/title.xoanhanxet'); ?></button>
              </div>
        </form>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>

    <script src="<?php echo e(asset('vendors/ckeditor/js/ckeditor.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('vendors/tinymce/js/tinymce.min.js')); ?>" type="text/javascript"></script>
    <!-- <script src="<?php echo e(asset('js/pages/editor.js')); ?>" type="text/javascript"></script> -->

    <script src="<?php echo e(asset('vendors/pickadate/js/picker.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('vendors/pickadate/js/picker.date.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('vendors/pickadate/js/picker.time.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('vendors/flatpickr/js/flatpickr.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('vendors/airDatepicker/js/datepicker.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('vendors/airDatepicker/js/datepicker.en.js')); ?>" type="text/javascript"></script>
    <!-- sweetalert2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.min.js"></script>

    <script>

        function showhidetieuchi(){
            if($('#content_text').is(':visible')){
                $('#content_text').hide();
                let arr = $('#show_arrow');
                arr.removeClass('fa-chevron-up');
                arr.addClass('fa-chevron-down');
            }else{
                $('#content_text').show();
                let arr = $('#show_arrow');
                arr.removeClass('fa-chevron-down');
                arr.addClass('fa-chevron-up');

            }
        }

        function showhidetieuchi3(){
            if($('#content_text2').is(':visible')){
                $('#content_text2').hide();
                let arr = $('#show_arrow2');
                arr.removeClass('fa-chevron-up');
                arr.addClass('fa-chevron-down');
            }else{
                $('#content_text2').show();
                let arr = $('#show_arrow2');
                arr.removeClass('fa-chevron-down');
                arr.addClass('fa-chevron-up');

            }

        }

        function showhidetieuchi2(a){
            if($(`#show_block_content_${a}`).is(':visible')){
                $(`#show_block_content_${a}`).hide();
            }else{
                $(`#show_block_content_${a}`).show();
            }

        }

            flatpickr('.datelocal', {
                dateFormat: 'd-m-Y',
            });
            flatpickr('.datelocal2', {
                dateFormat: 'd-m-Y',
            });
            flatpickr('.datelocal3', {
                dateFormat: 'd-m-Y',
            });
            flatpickr('.datelocal4', {
                dateFormat: 'd-m-Y',
            });

            tinymce.init({
                selector: '.tinymce_full',
                theme: 'modern',
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor',
                ],
                toolbar1:
                    'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true,
                templates: [
                    {
                        title: 'Test template 1',
                        content: 'Test 1',
                    },
                    {
                        title: 'Test template 2',
                        content: 'Test 2',
                    },
                ],
                setup: function (ed) {
                    ed.on('init', function(args) {

                    });
                }
            });

            $('#contextMenu').on('click', function () {
            var selectedText = x.Selector.getSelected();
            $('#contextMenu').hide();
            if (selectedText != '') {
                $('#nhanXetModal').modal('show');
                $('#nhanXetForm .noidung').text(selectedText)
            } else {
                $('#nhanXetModal').modal('hide');
            }
        });
        if (!window.x) {
            x = {};
        }

        x.Selector = {};
        x.Selector.getSelected = function () {
            var t = '';
            if (window.getSelection) {
                t = window.getSelection();
            } else if (document.getSelection) {
                t = document.getSelection();
            } else if (document.selection) {
                t = document.selection.createRange().text;
            }
            return t;
        };

        var pageX, pageY;

        $(document).ready(function () {
            $('.clickToComment').on("mouseup", function () {
                var selectedText = x.Selector.getSelected();

                if (selectedText != '') {
                    $('#contextMenu').css({
                        'left': pageX - 120,
                        'top': pageY - 120
                    }).fadeIn(200);
                    //alert(selectedText);
                } else {
                    $('#contextMenu').fadeOut(200);
                }
            });
            $(document).on("mousedown", function (e) {
                pageX = e.pageX;
                pageY = e.pageY;
            });
        });


    $('.arrow_content').on('click','.commentDetail',function(){
        let noidung = $(this).attr('d-data');
        let id_nx = $(this).attr('d-id');
        $('#id_nhanxet').val(id_nx);
        $('.show_nhanxet').html(noidung);
        $('#modal_nhanxet').modal('show');

    })
    $(function(){
         $('.show_minhc').on('click','.danMinhChung',function(){
            let id = $(this).attr('d-id');
            window.location= "<?php echo route('admin.tudanhgia.preparereport.editmcgop',0); ?>"+id;
        })


    });
    </script>

<?php $__env->stopSection(); ?>










<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamppkhoaluan\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Selfassessment/viewreport.blade.php ENDPATH**/ ?>