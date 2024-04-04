<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Selfassessment/title.dcmc'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/QualiAssurance/qualiassurance.css')); ?>">
    <style>
        .form-block{
            padding-bottom: 1rem;   
        }
        .select2-container .select2-selection--single .select2-selection__clear{
            right: 1rem;
        }
        table{
            padding: 21px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 12px #ababab;
        }
        .table td:first-child, .table th:first-child, .table tr:first-child {
            padding: 0.75rem;
        }
        .block-item{
            padding: 21px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 12px #ababab;
        }

    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Selfassessment/title.dcmc'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
<!-- page trang ở đây -->
<section class="content-body">
    <div class="block-item">
        <h2><?php echo app('translator')->get('project/Selfassessment/title.xlmc'); ?></h2>
        <form action="<?php echo e(route('admin.tudanhgia.preparereport.proofCompare')); ?>" method="get" id="form-search">
            <div class="container-fuild">
                <div class="row form-block">
                    <div class="col-md-6 block-group">
                        <label for="select-report"><?php echo app('translator')->get('project/Selfassessment/title.baocao'); ?></label>
                        <select name="report_id" id="select-report" class="form-control">
                            <option value="" hidden></option>
                            <?php $__currentLoopData = $kehoach_baocao; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $khbc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($khbc->id); ?>"><?php echo e($khbc->ten_bc); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="row form-block">
                    <div class="col-md-5 block-group">
                        <label for="standard"><?php echo app('translator')->get('project/Selfassessment/title.tctchi'); ?></label>
                        <select name="standard_id" id="standard" class="ml-2 mr-2 form-control">
                            <option value="" hidden></option>
                        </select>
                    </div>
                </div>
                <div class="row form-block mt-2">
                    <div class="col-md-5 block-group">
                        <select name="criteria_id" id="criteria" class="ml-2 mr-2 form-control">
                            <option value="" hidden></option>
                        </select>  
                    </div>
                    <button type="button" class="col-md-1 btn" id="btn-search" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Selfassessment/title.timkiem'); ?>">
                        <i class="bi bi-search" style="font-size: 35px;color: #009ef7;"></i>
                    </button>
                </div>
                
            </div>
        </form>
    </div>
</section>

<section class="content-body mt-3">
    <h2><?php echo app('translator')->get('project/Selfassessment/title.qlmc'); ?></h2><br>
    <div class="">
        <?php if($renderView): ?>
        <table class="table table-striped table-bordered" id="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">
                  <?php echo app('translator')->get('project/Selfassessment/title.tieuchi'); ?>
              </th>
              <th scope="col">
                  <?php echo app('translator')->get('project/Selfassessment/title.mctt'); ?>
              </th>
              <th scope="col">
                  <?php echo app('translator')->get('project/Selfassessment/title.dsmcg'); ?>
              </th>
              <th scope="col">
                  <?php echo app('translator')->get('project/Selfassessment/title.dsmctp'); ?>
              </th>
              <th scope="col">
                  <?php echo app('translator')->get('project/Selfassessment/title.kmc'); ?>
              </th>
              
                  <th scope="col">
                      <?php echo app('translator')->get('project/Selfassessment/title.quanly'); ?>
                  </th>
              
            </tr>
          </thead>
            <tbody>
                <?php $__currentLoopData = $listTieuChi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tieuChi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $tieuChuan = DB::table("tieuchuan")
                            ->where("id", $tieuChi->tieuchuan_id)
                            ->select("id", "stt");
                    ?>
                    <?php if($tieuChuan->count() == 0): ?>
                        <?php continue; ?>
                    <?php endif; ?>
                    <tr>
                        <td colspan="5">
                            <?php echo e($tieuChuan->first()->stt.".".$tieuChi->stt); ?>

                            <?php
                                $mctt_count = DB::table("role_mctt_tchi")
                                            ->where("tieuchi_id", $tieuChi->id);
                            ?>
                            <?php if($mctt_count->count()==0): ?>
                                <i class="font-bold text-danger">
                                    <?php echo app('translator')->get('project/Selfassessment/title.ccmctt'); ?>
                                </i>
                            <?php else: ?>
                                : <?php echo e($tieuChi->mo_ta); ?>

                            <?php endif; ?>
                        </td>
                        
                            <td class="text-center">
                                <?php
                                    $minhchung_gop = DB::table("minhchung_gop")
                                        ->where("id_tieuchi", $tieuChi->id);
                                ?>
                                <?php if($minhchung_gop->count()>0): ?>
                                    <?php
                                        $check = true;
                                        $mcGop_ = DB::table("minhchung_gop")->where([
                                            ['id_tieuchi', $tieuChi->id],
                                            ['id_kehoach_baocao', $keHoachBaoCaoDetail->id]
                                        ])->select("xacnhan")->get();

                                        foreach($mcGop_ as $mcg_){
                                            if($mcg_->xacnhan != "Y"){
                                                $check = false;
                                            }
                                        }
                                    ?>
                                    <?php if(!$check): ?>
                                        <button type="button" class="btn xacNhanTieuChi"
                                                data-toggle="modal" data-target="#xacnhanTC"
                                                data-id="<?php echo e($tieuChi->id); ?>"
                                                data-toggle="tooltip" title="Xác nhận">
                                            <i class="bi bi-check-square-fill" style="font-size: 25px;color: #00bc8c;"></i>
                                        </button>
                                    <?php else: ?> 
                                        <button type="button" class="btn boxacNhanTieuChi"
                                                data-toggle="modal" data-target="#boxacnhanTC"
                                                data-id="<?php echo e($tieuChi->id); ?>"
                                                data-toggle="tooltip" title="Bỏ xác nhận">
                                            <i class="bi bi-x-square-fill" style="font-size: 25px;color: red;"></i>
                                            
                                        </button>
                                    <?php endif; ?>

                                <?php endif; ?>
                            </td>
                        
                    </tr>

                    <?php
                        $mctt_id = DB::table("role_mctt_tchi")
                                ->where("tieuchi_id", $tieuChi->id)
                                ->get();
                        $array_minhchungtt_id = [];
                        foreach($mctt_id as $value){
                            array_push($array_minhchungtt_id, $value->mctt_id);
                        }
                        $mctt = DB::table("minhchung_tt")
                            ->whereIn("id", $array_minhchungtt_id)->get();

                    ?>

                    <?php $__currentLoopData = $mctt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $minhChungTTKey=>$minhChungTT): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td></td>
                            <td colspan="4">
                                <?php
                                    $mcg_mctt = DB::table("minhchunggop_minhchungtt")
                                        ->where("minhchungtt_id", $minhChungTT->id)
                                        ->get();

                                    $array_minhchunggop_id = [];
                                    foreach($mcg_mctt as $value){
                                        array_push($array_minhchunggop_id, $value->minhchunggop_id);
                                    }

                                    $minhChungGopTT = DB::table("minhchung_gop")
                                        ->whereIn("id", $array_minhchunggop_id)
                                        ->where("id_tieuchi", $tieuChi->id)
                                        ->where("id_kehoach_baocao", $keHoachBaoCaoDetail->id)
                                        ->get();

                                    $tong = 0;
                                    foreach($minhChungGopTT as $value){
                                        $mcg_mc = DB::table("minhchunggop_minhchung")
                                                ->where("minhchunggop_id", $value->id)
                                                ->count();
                                        $tong = $tong + $mcg_mc;
                                    }
                                ?>
                                <?php if($tong == 0): ?>
                                    <span class="text-danger"><?php echo e($minhChungTT->tieu_de); ?> (Cần bổ sung minh chứng)</span>
                                <?php else: ?>
                                    <?php echo e($minhChungTT->tieu_de); ?>

                                    (<?php echo e($tong); ?> 
                                    minh chứng)
                                <?php endif; ?>
                            </td>
                           
                                <td class="text-center">
                                    <a href="<?php echo e(route('admin.tudanhgia.preparereport.createMcGop', 
                                        [
                                            'report_id'=>Request()->report_id,
                                            'standard_id'=>Request()->standard_id,
                                            'criteria_id'=>Request()->criteria_id,
                                            'minhchung_tt'=>$minhChungTT->id
                                        ])); ?>"
                                       data-toggle="tooltip" title="Thêm minh chứng"
                                       class="btn btn-xs">
                                        <i class="bi bi-plus-square-fill" style="font-size: 25px;color: rgb(6, 159, 210);"></i>
                                    </a>
                                </td>
                            
                        </tr>



                        <?php
                            $isHadMinhChung = false;
                            $minhChungID = [];
                            $count = 0;
                        ?>
                        <?php $__currentLoopData = $minhChungGopTT; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $minhChungGop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $mcg_minhchung = DB::table("minhchunggop_minhchung")
                                            ->where("minhchunggop_id", $minhChungGop->id)
                                            ->get();
                                $array_minhchung_id = [];
                                foreach($mcg_minhchung as $value){
                                    array_push($array_minhchung_id, $value->minhchung_id);
                                }
                                $minhchungs = DB::table("minhchung AS mc")
                                    ->whereIn("mc.id", $array_minhchung_id)
                                    ->leftjoin('nhom_mc_sl AS mcsl', 'mcsl.id', '=', 'mc.nhom_mc_sl_id')
                                    ->select('mc.id', 'mc.tieu_de', 'mcsl.mo_ta', 'mc.sohieu', 'mc.ngay_ban_hanh', 'mc.nhom_mc_sl_id', 'mc.noi_banhanh', 'mc.address');
                            ?>
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="2">
                                    <a target="_blank" href="<?php echo e(route('admin.tudanhgia.preparereport.viewmcgop', $minhChungGop->id)); ?>"><?php echo e($minhChungGop->tieu_de); ?></a>
                                </td>
                                <td class="text-center">
                                    <?php if($minhchungs->count() == 1): ?>
                                        <button class="btn btn-xs" data-toggle="tooltip"
                                                title="Minh chứng độc lập">
                                            <i class="fas fa-clipboard" style="font-size: 25px;color: red;"></i>
                                        </button>
                                    <?php else: ?>
                                        <button class="btn btn-xs" data-toggle="tooltip"
                                                title="Minh chứng gộp">
                                            <i class="fas fa-paste" style="font-size: 25px;color: #180cf5;"></i>
                                        </button>
                                    <?php endif; ?>

                                    <?php if($minhChungGop->xacnhan=='Y'): ?>
                                        <button class="btn btn-xs " data-toggle="tooltip"
                                                title="Đã xác nhận">
                                            <i class="bi bi-check-circle-fill" style="font-size: 25px;color: #50cd89;"></i>
                                        </button>
                                    <?php else: ?>
                                        <button class="btn btn-xs btn-default" data-toggle="tooltip"
                                                title="Chưa xác nhận">
                                            <i class="far fa-circle"></i>
                                        </button>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <a href="#" data-id="<?php echo e($minhChungGop->id); ?>" data-toggle="modal" data-target="#xoaMCgop">
                                        <i class="bi bi-trash" style="font-size: 25px;color: red;"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php $__currentLoopData = $minhchungs->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $minhChung): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(in_array($minhChung->id,$minhChungID)): ?>
                                    <?php continue; ?>
                                <?php endif; ?>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="2">
                                        <a href="javascript:;" class="view-minhchung"
                                           data-id="<?php echo e($minhChung->id); ?>" data-minhchungJSON="<?php echo e(json_encode($minhChung)); ?>"
                                           data-toggle="modal" data-target="#detailMinhChung">
                                             <?php echo e($minhChung->tieu_de); ?>

                                        </a>
                                    </td>

                                    <td class="text-center">

                                        <button class="btn btn-xs MCGopDel" data-toggle="tooltip"
                                                title="Xóa MC khỏi nhóm"  data-id="<?php echo e($minhChungGop->id); ?>"
                                                data-mc="<?php echo e($minhChung->id); ?>">
                                            <i class="bi bi-x-circle-fill" style="font-size: 25px;color: red;"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
        </table>

        <?php echo e($listTieuChi->links()); ?>

        <?php endif; ?>
    </div>

<!-- Modal -->
<div class="modal fade" id="xoaMCgop" tabindex="-1" role="dialog" aria-labelledby="xoaMCgopLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="xoaMCgopLabel">
            <?php echo app('translator')->get('project/Selfassessment/title.thongbao'); ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <?php echo app('translator')->get('project/Selfassessment/title.xoaMCgop'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btnXoaMCgop">
            <?php echo app('translator')->get('project/Selfassessment/title.xacnhan'); ?>
        </button>
      </div>
    </div>
  </div>
</div>

</section>
<!-- /Kết thúc page trang -->

    
    <!-- Kết thúc trang -->
    </section>


<!-- modal detail minh chứng -->

<!-- data-minhchungJSON -->
<div class="modal fade" id="detailMinhChung" tabindex="-1" role="dialog" aria-labelledby="detailMinhChungLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailMinhChungLabel">
            <?php echo app('translator')->get('project/Selfassessment/title.ttmc'); ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fuild">
            <div class="row">
                <div class="col-md-12">
                    <label for="fortieude">
                        <?php echo app('translator')->get('project/Selfassessment/title.tieude'); ?>
                    </label>
                    <input type="text" class="form-control" disabled id="fortieude">
                </div>
                <div class="col-md-12">
                    <label for="forlinhvuc">
                        <?php echo app('translator')->get('project/Selfassessment/title.linhvuc'); ?>
                    </label>
                    <input type="text" class="form-control" disabled id="forlinhvuc">
                </div>
                <div class="col-md-12">
                    <label for="forso">
                        <?php echo app('translator')->get('project/Selfassessment/title.so'); ?>
                    </label>
                    <input type="text" class="form-control" disabled id="forso">
                </div>
                <div class="col-md-12">
                    <label for="forngaybh">
                        <?php echo app('translator')->get('project/Selfassessment/title.ngaybh'); ?>
                    </label>
                    <input type="text" class="form-control" disabled id="forngaybh">
                </div>
                <div class="col-md-12">
                    <label for="fornoibh">
                        <?php echo app('translator')->get('project/Selfassessment/title.noibh'); ?>
                    </label>
                    <input type="text" class="form-control" disabled id="fornoibh">
                </div>
                <div class="col-md-12">
                    <label for="fordiachi">
                        <?php echo app('translator')->get('project/Selfassessment/title.diachi'); ?>
                    </label>
                    <input type="text" class="form-control" disabled id="fordiachi">
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" type="button" class="btn btn-success btn-show-minhchung" target="_blank">
            <?php echo app('translator')->get('project/Selfassessment/title.xemmc'); ?>
        </a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <?php echo app('translator')->get('project/Selfassessment/title.dong'); ?>
        </button>
      </div>
    </div>
  </div>
</div>

<!-- modal xác nhận minh chứng -->
<div class="modal fade" id="xacnhanTC" tabindex="-1" role="dialog" aria-labelledby="xacnhanTCLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="xacnhanTCLabel">
            <?php echo app('translator')->get('project/Selfassessment/title.thongbao'); ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <p class="font-weight-bold text-warning">
                <?php echo app('translator')->get('project/Selfassessment/title.xntc'); ?>
            </p>
            <span>
                <?php echo app('translator')->get('project/Selfassessment/title.bdxntc'); ?>
            </span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-xacnhan">
            <?php echo app('translator')->get('project/Selfassessment/title.xacnhan'); ?>
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Bỏ xác nhận minh chứng -->

<div class="modal fade" id="boxacnhanTC" tabindex="-1" role="dialog" aria-labelledby="boxacnhanTCLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="boxacnhanTCLabel">
            <?php echo app('translator')->get('project/Selfassessment/title.thongbao'); ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <p class="font-weight-bold text-warning">
                <?php echo app('translator')->get('project/Selfassessment/title.bxntc'); ?>
            </p>
            <span>
                <?php echo app('translator')->get('project/Selfassessment/title.bbdxntc'); ?>
            </span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-boxacnhan">
            <?php echo app('translator')->get('project/Selfassessment/title.boxacnhan'); ?>
        </button>
      </div>
    </div>
  </div>
</div>

<!-- modal xóa minh chứng -->
<div class="modal fade" id="xoaMinhChung" tabindex="-1" role="dialog" aria-labelledby="xoaMinhChungLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="xoaMinhChungLabel">
            <?php echo app('translator')->get('project/Selfassessment/title.canhbao'); ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <p class="font-weight-bold text-warning">
                <?php echo app('translator')->get('project/Selfassessment/title.xmctp'); ?>
            </p>
            <span>
                <?php echo app('translator')->get('project/Selfassessment/title.xmxmctp'); ?>
            </span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-delete">
            <?php echo app('translator')->get('project/Selfassessment/title.xacnhan'); ?>
        </button>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>
    <script type="text/javascript">
        function checkSubmit() {
            if($("#select-report").val() != "" && $("#standard").val() != "" && $("#criteria").val() != "")
                return true;
            else return false;
        }
        $("#btn-search").click(function() {
            if(checkSubmit())
                $("#form-search").submit();
            else
                alert("<?php echo app('translator')->get('project/Selfassessment/title.vlddtt'); ?>")
        })

        $('#detailMinhChung').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var id = button.data('id') 
            var dataJSON = button.data('minhchungjson') 
            var modal = $(this)
            modal.find('#fortieude').val(dataJSON.tieu_de)
            modal.find('#forlinhvuc').val(dataJSON.mo_ta)
            modal.find('#forso').val(dataJSON.sohieu)
            modal.find('#forngaybh').val(dataJSON.ngay_ban_hanh.split("-").reverse().join("-"))
            modal.find('#fornoibh').val(dataJSON.noi_banhanh)
            modal.find('#fordiachi').val(dataJSON.address)

            var link = "<?php echo e(route('admin.dambaochatluong.manaproof.showProof')); ?>";
            link = link+ "/" + dataJSON.id;
            $(".btn-show-minhchung").attr("href", link);
        })



        $(".MCGopDel").click(function() {
            let mcGopId = $(this).attr("data-id");
            let mcId = $(this).attr("data-mc");
            $("#xoaMinhChung").find(".btn-delete").attr("data-id", mcGopId);
            $("#xoaMinhChung").find(".btn-delete").attr("data-mc", mcId);
            $("#xoaMinhChung").modal("show");
        })
        $(".btn-delete").click(function() {
            let mcGopId = $(this).attr("data-id");
            let mcId = $(this).attr("data-mc");
            let idKhbc = $("#select-report").val();

            var route = "<?php echo e(route('admin.tudanhgia.preparereport.xoaMinhChung')); ?>";
            let data = {
                mcGopId, mcId, idKhbc
            }

            fetch(route, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'POST', 
                body: JSON.stringify(data)
            })
                .then((response) => response.json())
                .then((data) => {
                    alert(data.mes);
                    window.location.reload();
                })

        })

        $('#xacnhanTC').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var id = button.data('id') 
            var modal = $(this)
            modal.find('.btn-xacnhan').attr('data-id' , id)
        })
        $('.btn-xacnhan').click(function() {
            let idTchi = $(this).attr("data-id");
            let idKhbc = $("#select-report").val();
            var route = "<?php echo e(route('admin.tudanhgia.preparereport.xacnhanTchi')); ?>";
            let data = {
                idTchi, idKhbc
            }
            fetch(route, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'POST', 
                body: JSON.stringify(data)
            })
                .then((response) => response.json())
                .then((data) => {
                    alert(data.mes);
                    window.location.reload();
                })
        })

        $('#boxacnhanTC').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var id = button.data('id') 
            var modal = $(this)
            modal.find('.btn-boxacnhan').attr('data-id' , id)
        })

        $('.btn-boxacnhan').click(function() {
            let idTchi = $(this).attr("data-id");
            let idKhbc = $("#select-report").val();
            var route = "<?php echo e(route('admin.tudanhgia.preparereport.boxacnhanTchi')); ?>";
            let data = {
                idTchi, idKhbc
            }
            fetch(route, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'POST', 
                body: JSON.stringify(data)
            })
                .then((response) => response.json())
                .then((data) => {
                    alert(data.mes);
                    window.location.reload();
                })
        })
        
        $('#xoaMCgop').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var recipient = button.data('id') 
            var modal = $(this)
            modal.find('.btnXoaMCgop').attr('data-id' , recipient)
        })
        $('.btnXoaMCgop').click(function() {
            let minhChungGop = $(this).attr("data-id")
            let route = "<?php echo e(route('admin.tudanhgia.preparereport.deleteMcGroup')); ?>";
            let data = {
                minhchunggopid: minhChungGop
            }
            fetch(route, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'POST', 
                body: JSON.stringify(data),
            })
                .then((response) => response.json())
                .then((data) => {
                    alert("<?php echo app('translator')->get('project/Selfassessment/title.xoaMCgtc'); ?>");
                    window.location.reload();
                })
        })

        function autoChosse(){
            var queryString = location.search
            var params = new URLSearchParams(queryString)
            var reportId = params.get("report_id")
            var standardId = params.get("standard_id")
            var criteriaId = params.get("criteria_id")

            
            if(reportId != NaN){
                $("#select-report").val(reportId).trigger('change');                
                renderReport(() => {
                    $("#standard").val(standardId).trigger('change');
                    renderStandard(() => {
                        $("#criteria").val(criteriaId).trigger('change');
                    });
                });
            }
        }
        autoChosse()




        $("#select-report").select2({
            placeholder: "<?php echo app('translator')->get('project/Selfassessment/title.lcbc'); ?>",
            allowClear: true
        })
        $("#standard").select2({
            placeholder: "<?php echo app('translator')->get('project/Selfassessment/title.lctc'); ?>",
            allowClear: true
        })
        $("#criteria").select2({
            placeholder: "<?php echo app('translator')->get('project/Selfassessment/title.lctchi'); ?>",
            allowClear: true
        })



        $('#select-report').on('change', function (e) {
            renderReport(() => {});
        });
        function renderReport(callback) {
            var route = "<?php echo e(route('admin.tudanhgia.preparereport.searchPtyc')); ?>" + "?id_report=" + $('#select-report').val();
            fetch(route, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'POST', 
            })
                .then((response) => response.json())
                .then((data) => {
                    if(data.kehoach_tieuchuan != undefined){
                        $('#standard').empty().trigger("change");
                        data.kehoach_tieuchuan.forEach((item, index) => {
                            let title = `TC ${item.stt}: ${item.mo_ta}`;
                            var option = new Option(title, item.tieuchuan_id, true, true);
                            $("#standard").append(option);
                        })
                    }
                    var option = new Option("", "", true, true);
                    $("#standard").append(option).trigger('change');
                })
                .then(() => {
                    callback();
                })
        }









        $('#standard').on('change', function (e) {
            renderStandard(() => {});
        });
        
        function renderStandard(callback){
            var route = "<?php echo e(route('admin.tudanhgia.preparereport.searchPtyc')); ?>" + "?id_standard=" + $('#standard').val();
            fetch(route, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'POST', 
            })
                .then((response) => response.json())
                .then((data) => {
                    if(data.tieuchi != undefined){
                        $('#criteria').empty().trigger("change");
                        data.tieuchi.forEach((item, index) => {
                            let title = `TChi ${item.stt}: ${item.mo_ta}`;
                            var option = new Option(title, item.id, true, true);
                            $("#criteria").append(option);
                        })
                    }
                    var option = new Option("", "", true, true);
                    $("#criteria").append(option).trigger('change');
                })
                .then(() => {
                    setTimeout(() => {
                        callback();
                    }, 2000)
                })
        }





        

    </script>
<?php $__env->stopSection(); ?>








<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\file_moi\xampp\htdocs\kdcl-2023\resources\views/admin/project/Selfassessment/proofcompare.blade.php ENDPATH**/ ?>