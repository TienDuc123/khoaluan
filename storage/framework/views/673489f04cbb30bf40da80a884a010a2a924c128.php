<?php
    $nhanXetKhoiListMains = $nhanXetKhoiList;
    if($kieu=='tieuchuan_modau' || $kieu=='tieuchuan_ketluan'){
        $nhanXetKhoiList = $nhanXetKhoiList->where('kieu',$kieu)->where('id_tieuchuan_bc',$id);
    }

    if($kieu=='menhde_diemmanh' || $kieu=='menhde_tontai'|| $kieu=='menhde_mota'){
    $nhanXetKhoiList = $nhanXetKhoiList->where('kieu',$kieu)->where('id_menhde_bc',$id);

    }

    if($kieu=='chung_modau' || $kieu=='chung_ketluan') {
        $nhanXetKhoiList = $nhanXetKhoiList->where('kieu',$kieu)->where('id_chung_bc',$id);
    }

    $nhanXetKhoiList = $nhanXetKhoiList->where('parent',0);
?>

<?php if($nhanXetKhoiList->count()>0): ?>
    <div class="social-feed-box">
        <div class="social-footer" style="background: #fcf8e3; !important">
            <?php $__currentLoopData = $nhanXetKhoiList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nhanXetKhoi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="social-comment" id="comment-<?php echo e($nhanXetKhoi->id); ?>">
                    <a href="" class="pull-left">
                        
                    </a>
                    <div class="media-body p-4">
                        <a href="#">
                            <?php echo e($nhanXetKhoi->name); ?> (<?php echo e(($nhanXetKhoi->tendonvi) ? $nhanXetKhoi->tendonvi->ten_donvi : ""); ?>)
                        </a><br>
                        <?php echo nl2br($nhanXetKhoi->nhanxet); ?>

                    </div>
                    <?php $__currentLoopData = $nhanXetKhoiListMains->where('parent',$nhanXetKhoi->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nhanXetKhoiListMain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="social-comment">
                            <a href="" class="pull-left">
                                
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    <?php echo e($nhanXetKhoiListMain->name); ?>

                                    (<?php echo e($nhanXetKhoiListMain->tendonvi->ten_donvi); ?>)
                                </a><br>
                                <?php echo nl2br($nhanXetKhoiListMain->nhanxet); ?>

                                <br>

                                <small class="text-muted">
                                    <?php echo e(\Carbon\Carbon::parse($nhanXetKhoiListMain->created_at)->format('d-m-Y h:i')); ?>

                                </small>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>

    </div>
<?php endif; ?><?php /**PATH D:\xamppkhoaluan\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Selfassessment/comment.blade.php ENDPATH**/ ?>