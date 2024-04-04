
<input type="hidden" value="<?php echo e(($id)?$id:''); ?>" id="idShowSibar">
    <style>
        #kt_aside{
            background: #ffff;
        }

        #side-menu a{
            color: #888c9f !important;
        }
        .actives {
            background: red;
        }
    </style>
<?php if($id): ?>
    <?php
        $currentIdkh = request()->query('idkh'); // Lấy giá trị của tham số idkh từ URL
        $key2 = request()->query('key');
        $phul = request()->query('tag');
        $pa = request()->query('page');
    ?>

    <?php if(isset($keHoachBaoCaokehoachchung->id)): ?>
        <?php if($keHoachBaoCaokehoachchung->id): ?>

            <li >
                <a href="<?php echo e(route('admin.danhgiangoai.baocaotudanhgia.index')); ?>">
                    <i class="fas fa-home"></i>  <span class="nav-label ml-2"><?php echo app('translator')->get('project/Externalreview/title.trangchu'); ?></span>
                </a>
            </li>

            <li class="none_css <?php echo e(($pa == 'baocao')?'actives':''); ?>">
                <a href="<?php echo e(route('admin.danhgiangoai.baocaotudanhgia.index',['id'=>$id,'idkh'=>$keHoachBaoCaokehoachchung->id,'page'=>'chung'])); ?>">
                <i class="fas fa-tasks"></i>  <span class="nav-label ml-2"><?php echo app('translator')->get('project/Externalreview/title.p1kq'); ?></span>
                </a>
            </li>
            <li class="arrow_active none_css">
                <a href="#" class="d-flex align-items-center css_arrow" onclick="show_tudanhgia()"> 
                    <i class="fas fa-file-signature"></i>  <span class="nav-label ml-2"><?php echo app('translator')->get('project/Externalreview/title.p2tdg'); ?> </span>
                <span class="fa arrow arrow-right"></span>
                </a>
                <?php if($keHoachTieuChuan->count() >0): ?>
                <ul class="nav-second-level" id="tudanhgia_bctdg" style="display: none;">
                <?php $i=0 ?>
                <?php $__currentLoopData = $keHoachTieuChuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keHoachTieuChuans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $i++ ?>
                        <?php if(!$keHoachTieuChuans->truongnhom): ?>
                            <?php continue; ?>
                        <?php endif; ?>
                        <li class="arrow_tc_<?php echo e($i); ?>">
                            <a data-toggle="tooltip" data-placement="right"
                               data-original-title=""
                               title="" href="<?php
                                                    if(!empty($keHoachTieuChuans->tieuchuan->id)){
                                                       echo( route('admin.danhgiangoai.baocaotudanhgia.index',['idkh'=>$keHoachTieuChuans->tieuchuan->id,'id'=>$id,'page'=>'tieuchuan']));
                                                    }
                                                ?>" class="d-flex align-items-center
                                                <?php echo e(($currentIdkh == $keHoachTieuChuans->tieuchuan->id) ? 'actives' : ''); ?>

                                    " onclick="show_tieuchuan_chidl(<?php echo e($i); ?>)">
                                <p class="title_tieuChuan m-0">
                                    <i class="fas fa-file-signature"></i> <?php echo app('translator')->get('project/Externalreview/title.tieuchuan'); ?> <?php echo e($i); ?>

                                </p>
                                <span class="label onLink" href="" style="color: black !important; margin: 0 13px; background: wheat;">...</span>
                                <span class="fa arrow"></span>
                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
            </li>

        <?php endif; ?>
    <?php endif; ?>

    <?php if(isset($keHoachBaoCaokehoachchung->id)): ?>

        <?php if($keHoachBaoCaokehoachchung->id): ?>
            <li class=" arrow_ketluan none_css" onclick="show_ketluan()">
                <a href="#" class="d-flex align-items-center css_arrow" >
                    <i class="fas fa-chart-line"></i>  <span class="nav-label ml-2"><?php echo app('translator')->get('project/Externalreview/title.p3kl'); ?></span>
                    <span class="fa arrow arrow-right"></span>
                </a>
                <ul class="nav-second-level nav-level_child" id="show_ketluan" style="display: none;">
                    <li class="<?php echo e(($key2 == 'ketluanchung')?'actives':''); ?> " >
                        <a href="<?php echo e(route('admin.danhgiangoai.baocaotudanhgia.index',['id'=>$id,'key'=>'ketluanchung','page'=>'ketluan'])); ?>"  data-toggle="tooltip" data-placement="right" data-original-title="Kết luận chung">
                            <i class="fas fa-edit"></i>
                            <span class="nav-label" ><?php echo app('translator')->get('project/Externalreview/title.klc'); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(($key2 == 'diem_manh')?'actives':''); ?>">
                        <a href="<?php echo e(route('admin.danhgiangoai.baocaotudanhgia.index',['id'=>$id,'key'=>'diem_manh','page'=>'ketluan'])); ?>"  data-toggle="tooltip" data-placement="right" data-original-title="Tóm tắt những điểm mạnh của CTĐT">
                            <i class="fas fa-edit"></i>
                            <span class="nav-label" ><?php echo app('translator')->get('project/Externalreview/title.thdm'); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(($key2 == 'tontai')?'actives':''); ?>">
                        <a href="<?php echo e(route('admin.danhgiangoai.baocaotudanhgia.index',['id'=>$id,'key'=>'tontai','page'=>'ketluan'])); ?>"  data-toggle="tooltip" data-placement="right" data-original-title="Tóm tắt những điểm còn tồn tại của CTĐT">
                            <i class="fas fa-edit"></i>
                            <span class="nav-label" ><?php echo app('translator')->get('project/Externalreview/title.thtt'); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(($key2 == 'kehoach')?'actives':''); ?>">
                        <a href="<?php echo e(route('admin.danhgiangoai.baocaotudanhgia.index',['id'=>$id,'key'=>'kehoach','page'=>'ketluan'])); ?>"  data-toggle="tooltip" data-placement="right" data-original-title="Kế hoạch khắc phục, nâng cấp chất lượng của CTĐT">
                            <i class="fas fa-edit"></i>
                            <span class="nav-label" ><?php echo app('translator')->get('project/Externalreview/title.khhd'); ?></span>
                        </a>
                    </li>
                    <?php if($keHoachBaoCaokehoachchung->loai_tieuchuan != 'csgd'): ?>
                    <li class="<?php echo e(($key2 == 'TĐG1')?'actives':''); ?>">
                        <a href="<?php echo e(route('admin.danhgiangoai.baocaotudanhgia.index',['id'=>$id,'key'=>'TĐG1','page'=>'ketluan'])); ?>"  data-toggle="tooltip" data-placement="right" data-original-title="(Phụ lục 7a) Bảng tổng hợp kết quả tự đánh giá CTĐT đánh giá theo Thông tư 04/2016">
                            <i class="fas fa-edit"></i>
                            <span class="nav-label" ><?php echo app('translator')->get('project/Externalreview/title.kqtdg1'); ?> </span>
                        </a>
                    </li>
                    <li class="<?php echo e(($key2 == 'TĐG2')?'actives':''); ?>">
                        <a href="<?php echo e(route('admin.danhgiangoai.baocaotudanhgia.index',['id'=>$id,'key'=>'TĐG2','page'=>'ketluan'])); ?>"  data-toggle="tooltip" data-placement="right" data-original-title="(Phụ lục 7b) Bảng tổng hợp kết quả tự đánh giá chương trình đào tạo đánh giá chất lượng theo Quyết định 72/2007, Thôngtư 23/2011, Thông tư 49/2012, Thông tư 33/2014">
                            <i class="fas fa-edit"></i>
                            <span class="nav-label" ><?php echo app('translator')->get('project/Externalreview/title.kqtdg2'); ?> </span>
                        </a>
                    </li>
                    <?php else: ?>
                        <li class="<?php echo e(($key2 == 'CSGD')?'actives':''); ?>">
                            <a href="<?php echo e(route('admin.danhgiangoai.baocaotudanhgia.index',['id'=>$id,'key'=>'CSGD','page'=>'ketluan'])); ?>"  data-toggle="tooltip" data-placement="right" data-original-title="BẢNG TỔNG HỢP KẾT QUẢ TỰ ĐÁNH GIÁ CSGD">
                                <i class="fas fa-edit"></i>
                                <span class="nav-label" ><?php echo app('translator')->get('project/Externalreview/title.kqtdgcsdt'); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>

        <?php endif; ?>
    <?php endif; ?>

    <li class="<?php echo e(($page=='phuluc')?'active':''); ?> arrow_phuluc none_css" onclick="show_phuluc()">
            <a href="#" class="d-flex align-items-center css_arrow">
            <i class="fas fa-tasks"></i>  <span class="nav-label ml-2"><?php echo app('translator')->get('project/Externalreview/title.p4pl'); ?></span>
            <span class="fa arrow arrow-right"></span>
            </a>
            <ul class="nav-second-level nav-level_child" id="show_phuluc" style="display: none;">
                <li class="<?php echo e(($tag == 'pl1')?'active':''); ?>" >
                    <a href="<?php echo e(route('admin.danhgiangoai.baocaotudanhgia.index',['id'=>$id,'tag'=>'pl1','page'=>'phuluc'])); ?>"  data-toggle="tooltip" data-placement="right" data-original-title="Cơ sở dữ liệu kiểm định chất lượng CTĐT">
                        <i class="fas fa-edit"></i>
                        <span class="nav-label" ><?php echo app('translator')->get('project/Externalreview/title.csdl'); ?></span>
                    </a>
                </li>
                
                <li class="<?php echo e(($phul == 'pl4')?'actives':''); ?>">
                    <a href="<?php echo e(route('admin.danhgiangoai.baocaotudanhgia.index',['id'=>$id,'tag'=>'pl4','page'=>'phuluc'])); ?>"  data-toggle="tooltip" data-placement="right" data-original-title="Danh mục minh chứng">
                        <i class="fas fa-clipboard-list"></i>
                        <span class="nav-label" ><?php echo app('translator')->get('project/Externalreview/title.dmmchung'); ?></span>
                    </a>
                </li>
            </ul>
    </li>

    <li class="<?php echo e(($page=='thuvienminhchung')?'active':''); ?> none_css">
        <a href="<?php echo e(route('admin.danhgiangoai.baocaotudanhgia.thuvienminhchung',['id'=>$id])); ?>">
            <i class="fas fa-table"></i>
            <span class="nav-label"><?php echo app('translator')->get('project/Externalreview/title.thuvmc'); ?></span>
        </a>
    </li>

    <li class="<?php echo e(($page=='baocaokhac')?'active':''); ?> none_css">
        <a href="<?php echo e(route('admin.danhgiangoai.baocaotudanhgia.baoCaoKhac',['id'=>$id])); ?>">
            <i class="fas fa-file-signature"></i>
            <span class="nav-label"><?php echo app('translator')->get('project/Externalreview/title.solieuth'); ?></span>
        </a>
    </li>

   

<?php endif; ?>



<?php /**PATH D:\xampp74\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/ExternalReview/include/sidebar-menu.blade.php ENDPATH**/ ?>