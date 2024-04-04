<div class="social-feed-box">
    <div class="social-footer" style="background: #fcf8e3 !important;">
    <?php
        $nhanXetKhoiList = DB::table('baocao_nhanxetkhoi')->select('baocao_nhanxetkhoi.*','users.name','donvi.ten_donvi')
        ->leftJoin('users','users.id','=','baocao_nhanxetkhoi.nguoi_tao')
        ->leftJoin('donvi','donvi.id','=','users.donvi_id');
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
    <style>
        .comment_block{
            margin-bottom: 20px;
            border: none;
            box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 20%), 0 1px 5px 0 rgb(0 0 0 / 12%);
        }
        .comment_block_p{
            display: flex;
            border-top: 1px solid #e7eaec;
            padding: 10px 15px;
            margin-top: 35px;
        }
    </style>
    <?php if($nhanXetKhoiList->count()>0): ?>
        <?php $__currentLoopData = $nhanXetKhoiList->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nhanXetKhoi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="social-comment" id="comment-<?php echo e($nhanXetKhoi->id); ?>">
                <div class="media-body p-4">
                    <a href="#">
                        <?php echo e($nhanXetKhoi->name); ?> (<?php echo e($nhanXetKhoi->ten_donvi); ?>)
                    </a><br>
                    <?php echo nl2br($nhanXetKhoi->nhanxet); ?>

                    <br>
                    <small class="text-muted">
                        <?php echo e(\Carbon\Carbon::parse($nhanXetKhoi->created_at)->format('d-m-Y h:i')); ?>

                    </small>
                </div>
                <?php $__currentLoopData = $nhanXetKhoiListMains->where('parent',$nhanXetKhoi->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nhanXetKhoiListMain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="social-comment">                        
                        <div class="media-body">
                            <a href="#">
                                <?php echo e($nhanXetKhoiListMain->name); ?>

                                (<?php echo e($nhanXetKhoiListMain->ten_donvi); ?>)
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
            
    <?php endif; ?>  
        <div class="comment_block">
            <form action="<?php echo route('admin.tudanhgia.commentreport.createCommentBlock'); ?>" method="POST">
                <input type="hidden" name="id_kehoach_bc" value="<?php echo e($id_kehoach_bc); ?>">
                <input type="hidden" name="id" value="<?php echo e($id); ?>">
                <input type="hidden" name="kieu" value="<?php echo e($kieu); ?>">
                <input type="hidden" name="parent" value="0">
                <?php echo csrf_field(); ?>
                <div class="comment_block_p">
                    <img src="<?php echo e(asset('images/authors/no_avatar.jpg')); ?>" alt="" style="padding: 2px 13px 2px 0px;width: 5%;object-fit: cover;height: 100%;">
                    <textarea name="nhanxet" class="form-control" placeholder="<?php echo app('translator')->get('project/Selfassessment/title.vietnhanxet'); ?>"></textarea>
                </div>
                <div class="mt-2 ml-4 pl-3 pr-3 text-right">
                    <button type="submit" class="btn btn-sm btn-primary " style="margin-bottom: 10px;">
                        <?php echo app('translator')->get('project/Selfassessment/title.guinhanxet'); ?>
                    </button>
                </div>
            </form>
        </div>

    </div>

</div> 

    <?php /**PATH D:\xamppkhoaluan\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Selfassessment/viewcomment.blade.php ENDPATH**/ ?>