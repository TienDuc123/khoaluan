<?php $__env->startSection('title'); ?>
     <?php echo app('translator')->get('project/Externalreview/title.danhgn'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/ExternalReview/externalreview.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Externalreview/title.danhgn'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="content-body">
    <style>
        .metismenu{
            list-style: none;
        }
        .table td:first-child, .table th:first-child, .table tr:first-child {
        padding-left: 10px;
        }

        tr a.mt-4:hover{
            cursor: pointer;
        }
        p,strong,br,hr,b,small,i,u,em,mark,del,ins,sub,sup{
            word-wrap: break-word;
        }
        img{
            max-width: 100%;
            height: auto;
        }
        tr,th,td{
            border: 1px solid black;
        }
    </style>
    <div class="body-flex">
      <div class="content-body-css">
            <h2>
                <?php echo app('translator')->get('project/Selfassessment/title.dsbctdg'); ?>
            </h2>
            <ol class="d-flex">
                <li class="pr-2 pl-2"><a href=""><?php echo app('translator')->get('project/Externalreview/title.trangchu'); ?></a></li>

                    <?php if($KHBaCaoDetail): ?>

                        <li class="pr-2 pl-2">/
                            <?php echo e($KHBaCaoDetail->ten_bc); ?>

                        </li>

                        <li class="pr-2 "> / <?php echo e($title); ?></li>
                    <?php endif; ?>


            </ol>
             
            <?php if($page == 'tieuchuan'): ?>
                <?php if(!$khtc): ?><!-- Nếu không có  id tiêu chí -->

                    <?php echo $__env->make('admin.project.ExternalReview.include.tieuchuan_tieuchi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php else: ?>
                    <?php echo $__env->make('admin.project.ExternalReview.include.tieuchi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            <?php elseif($page == 'ketluan'): ?>
                <?php echo $__env->make('admin.project.ExternalReview.include.ketluan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php elseif($page == 'phuluc'): ?>
               <?php if($tag != 'pl4'): ?>  <!-- phụ lục 4 -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-content">
                                <?php if($tag == 'pl1'): ?>      <!-- phụ lục 1 -->
                                    <?php if($keHoachBaoCaoDetail2->loai_tieuchuan_bc == 'csgd'): ?>
                                        <?php echo $__env->make("admin.project.Database.data_school_csgd", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php elseif($keHoachBaoCaoDetail2->loai_tieuchuan_bc == 'ctdt'): ?>
                                        <?php echo $__env->make("admin.project.Database.display_data", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php else: ?>
                                        <h6><?php echo app('translator')->get('project/Externalreview/title.kcpl'); ?></h6>
                                    <?php endif; ?>
                               
                                 <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>

                <?php else: ?> <!-- phụ lục 4 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="boxphuluc10">
                                <div class="pageHomeView">
                                    <?php echo $__env->make("admin.project.ExternalReview.include.phuluc10", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class=" <?php echo e(((!$id)?'pageHomeView':'ibox-content')); ?> ">
                                <div  class="form-horizontal ajaxForm">

                                  <?php if(!$id): ?>
                                        <table class="table table-striped table-bordered" id="table_danhgiangoai" width="100%">
                                            <thead>
                                                <tr>
                                                    <th ><?php echo app('translator')->get('project/Externalreview/title.tdv'); ?></th>
                                                    <th ><?php echo app('translator')->get('project/Externalreview/title.tbc'); ?></th>
                                                    <th ><?php echo app('translator')->get('project/Externalreview/title.nvbc'); ?></th>
                                                    <th ><?php echo app('translator')->get('project/Externalreview/title.tdbc'); ?></th>
                                                    <th ><?php echo app('translator')->get('project/Externalreview/title.chitiet'); ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>

                                        <style>
                                            .css_scoll{
                                                display: none;
                                            }
                                            .content-body-css{
                                                width: 95%;
                                                background-color: white;
                                            }
                                        </style>

                                 <?php endif; ?>
                                    <div class="form-group">
                                        <div class="col-sm-12"> </div>
                                        <div class="col-sm-12 css-img">
                                            <?php
                                                if($page == 'chung' || $page=='baocao'){
                                                    echo ( ($keHoachChung)?$keHoachChung->text:"");
                                                }
                                            ?>
                                        </div>
                                    </div>

                                    <!-- <div class="hr-line-dashed"></div> -->

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="css_scoll"><?php echo $__env->make("admin.project.ExternalReview.include.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </div>
    </div>




</section>
<?php $__env->stopSection(); ?>






<?php $__env->startSection('footer_scripts'); ?>

<script>

    function show_tudanhgia(){
        $add_row = $('.arrow_active');
         if($(`#tudanhgia_bctdg`).is(':visible')){
            $(`#tudanhgia_bctdg`).hide();
            $add_row.removeClass('active');

        }else{
            $(`#tudanhgia_bctdg`).show();
            $add_row.addClass('active');
        }
    }

    function show_ketluan(){
        $add_row = $('.arrow_ketluan');
         if($(`#show_ketluan`).is(':visible')){
            $(`#show_ketluan`).hide();
            $add_row.removeClass('active');

        }else{
            $(`#show_ketluan`).show();
            $add_row.addClass('active');
        }
    }

    function show_phuluc(){
        $add_row = $('.arrow_phuluc');
         if($(`#show_phuluc`).is(':visible')){
            $(`#show_phuluc`).hide();
            $add_row.removeClass('active');

        }else{
            $(`#show_phuluc`).show();
            $add_row.addClass('active');
        }
    }

    function show_tieuchuan_chidl(a){
        $add_row = $(`.arrow_tc_${a}`);
         if($(`#tieuchuan_child_${a}`).is(':visible')){
            $(`#tieuchuan_child_${a}`).hide();
            $add_row.removeClass('active');

        }else{
            $(`#tieuchuan_child_${a}`).show();
            $add_row.addClass('active');
        }
    }

    $(".wrapper").addClass('hide_menu');
    $(".skin-josh").addClass("left-hidden");
    $(".skin-josh").removeClass("mini");

    $(function(){
        table = $('#table_danhgiangoai').DataTable({
            lengthMenu: [[7, 10, 20, -1], [7, 10, 20, "All"]],
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "<?php echo route('admin.danhgiangoai.baocaotudanhgia.data'); ?>",
            columns: [
                { data: 'ten_donvi', name: 'ten_donvi' },
                { data: 'ten_baocao', name: 'ten_baocao' },
                { data: 'nam_vietbao', name: 'nam_vietbao' },
                { data: 'thoidiem_bc', name: 'thoidiem_bc' },
                { data: 'actions', name: 'actions' },
            ],
        });
    });

    $(function(){
         $('.show_mcg').on('click','.mcGop',function(){
            let idmc_gop =  $(this).attr('id');
            let id = idmc_gop.substring(idmc_gop.indexOf('_')+1);
            window.location= "<?php echo route('admin.tudanhgia.preparereport.viewmcgop',0); ?>"+id;
         })

         $('.show_mcg').on('click','.mc',function(){
            let idmc_gop =  $(this).attr('id');
            let id = idmc_gop.substring(idmc_gop.indexOf('_')+1);
            window.location= "<?php echo route('admin.dambaochatluong.manaproof.showProof',0); ?>"+id;
         })

         $('.MC_Tc_Tchi').on('click','tr a.mt-4',function(){
            let id_mc = $(this).attr('d-id');

            window.location.href = "<?php echo route('admin.tudanhgia.preparereport.viewmcgop',0); ?>"+id_mc;
            // window.location.href = "<?php echo route('admin.dambaochatluong.manaproof.showProof',0); ?>"+id_mc;
         })

         $('body').on('click','.mcGop',function(){

            let id = $(this).attr('id').split('_')[1];
            window.location= "<?php echo route('admin.tudanhgia.preparereport.viewmcgop',0); ?>"+id;
        });

        $('body').on('click','.mc',function(){
            let id = $(this).attr('id').split('_')[1];
            window.location= "<?php echo route('admin.dambaochatluong.manaproof.showProof',0); ?>"+id;
        });
    })

    // $(document).ready(function () {
    //         // Lấy URL hiện tại
    //         var currentURL = window.location.href;

    //         // Xử lý phần side-menu để bôi đỏ item li nếu URL trùng khớp
    //         $("#side-menu li").each(function () {
    //             var anchor = $(this).find("a").attr("href");
    //             if (currentURL.includes(anchor)) {
    //                 $(this).css('background','red');
    //             }
    //         });
    //     });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp74\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/ExternalReview/index.blade.php ENDPATH**/ ?>