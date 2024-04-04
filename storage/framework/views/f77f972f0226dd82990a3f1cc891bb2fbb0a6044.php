<div class="row m-t-lg">
    <div class="col-sm-12">
        <div class="h4 font-bold mb-sm">
             Bảng tổng hợp kết quả tự đánh giá chương trình đào tạo
        </div>
    </div>

    <div class="col-sm-12 m-t-md">
        <p>Tên cơ sở giáo dục: Trường Đại học Kinh Tế Kỹ Thuật Công nghiệp Hà Nội</p>
    </div>

    <div class="col-sm-12 m-t-md">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center" rowspan="3"><?php echo app('translator')->get('project/Selfassessment/title.tctc'); ?></th>
                <th class="text-center" colspan="7"><?php echo app('translator')->get('project/Selfassessment/title.tdg'); ?></th>
                <th class="text-center" colspan="3"><?php echo app('translator')->get('project/Selfassessment/title.thtc'); ?></th>
            </tr>
            <tr>
                <th class="text-center" colspan="3"><?php echo app('translator')->get('project/Selfassessment/title.chuadat'); ?></th>
                <th class="text-center" colspan="4"><?php echo app('translator')->get('project/Selfassessment/title.dat'); ?></th>
                <th class="text-center" rowspan="2"><?php echo app('translator')->get('project/Selfassessment/title.muctb'); ?></th>
                <th class="text-center" rowspan="2"><?php echo app('translator')->get('project/Selfassessment/title.sotcdat'); ?></th>
                <th class="text-center" rowspan="2"><?php echo app('translator')->get('project/Selfassessment/title.tyledat'); ?></th>
            </tr>
            <tr>
                <th class="text-center"><span class="badge badge-secondary"><?php echo app('translator')->get('project/Selfassessment/title.001'); ?></span></th>
                <th class="text-center"><span class="badge badge-secondary"><?php echo app('translator')->get('project/Selfassessment/title.002'); ?></span></th>
                <th class="text-center"><span class="badge badge-secondary"><?php echo app('translator')->get('project/Selfassessment/title.003'); ?></span></th>
                <th class="text-center"><span class="badge badge-secondary"><?php echo app('translator')->get('project/Selfassessment/title.004'); ?></span></th>
                <th class="text-center"><span class="badge badge-secondary"><?php echo app('translator')->get('project/Selfassessment/title.005'); ?></span></th>
                <th class="text-center"><span class="badge badge-secondary"><?php echo app('translator')->get('project/Selfassessment/title.006'); ?></span></th>
                <th class="text-center"><span class="badge badge-secondary"><?php echo app('translator')->get('project/Selfassessment/title.007'); ?></span></th>
            </tr>
            </thead>

            <tbody class="text-center">

            <?php $__currentLoopData = $keHoachBaoCaoDetail->keHoachTieuChuanList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keHoachTieuChuan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!$keHoachTieuChuan->baoCaoTieuChuan) continue; ?>
                <?php
                    $dat = 0;
                     foreach($keHoachTieuChuan->keHoachTieuChiList as $keHoachTieuChi){
                         if($keHoachTieuChi->baoCaoTieuChi['danhgia']>=4){
                             $dat++;
                         }
                     }

                ?>

                <tr class="text-center">
                    <th><?php echo app('translator')->get('project/Selfassessment/title.tieuchuan'); ?> <?php echo e($keHoachTieuChuan->tieuChuan->stt); ?></th>
                    <th class="text-center"
                        rowspan="<?php echo e($keHoachTieuChuan->keHoachTieuChiList->count()+1); ?>">
                        <?php echo e(isset($keHoachTieuChuan->baoCaoTieuChuan->danhgia)?$keHoachTieuChuan->baoCaoTieuChuan->danhgia:''); ?>

                    </th>
                    <th class="text-center"
                        rowspan="<?php echo e($keHoachTieuChuan->keHoachTieuChiList->count()+1); ?>">
                        <?php echo e($dat); ?>

                    </th>
                    <th class="text-center"
                        rowspan="<?php echo e($keHoachTieuChuan->keHoachTieuChiList->count()+1); ?>">
                        <?php echo e(round(($dat/$keHoachTieuChuan->keHoachTieuChiList->count())*100,2)); ?>

                    </th>
                </tr>
                <?php $__currentLoopData = $keHoachTieuChuan->keHoachTieuChiList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keHoachTieuChi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo app('translator')->get('project/Selfassessment/title.tieuchi'); ?> <?php echo e($keHoachTieuChuan->tieuChuan->stt); ?>

                            .<?php echo e($keHoachTieuChi->tieuChi->stt); ?>

                        </td>

                        <?php for($i=1;$i<=7;$i++): ?>
                            <?php if($i==$keHoachTieuChi->baoCaoTieuChi['danhgia']): ?>
                                <td><?php echo e($keHoachTieuChi->baoCaoTieuChi['danhgia']); ?></td>
                            <?php else: ?>
                                <td></td>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div class="col-sm-12 mt-md font-italic">
        <p class="font-bold"><?php echo app('translator')->get('project/Selfassessment/title.ghichu'); ?></p>

        <?php echo app('translator')->get('project/Selfassessment/title.ghibangsn'); ?><br>
        <?php echo app('translator')->get('project/Selfassessment/title.mucdanhgiachung'); ?>
    </div>
    
    <div class="col-sm-12 m-t-md">
        <table class="table table-bordered">
            <tr>
                <td style="width:50%"></td>
                <td class="text-center">
                    <p> <?php echo app('translator')->get('project/Selfassessment/title.ngaythangnam'); ?></p>
                    <p class="font-bold"><?php echo app('translator')->get('project/Selfassessment/title.thutruong'); ?></p>
                    <p><i><?php echo app('translator')->get('project/Selfassessment/title.kyten'); ?></i></p>
                </td>
            </tr>
        </table>
    </div>
</div>

<!-- <div class="row m-t-lg">
    <div class="col-sm-12">
        <div class="h4 font-bold mb-sm">
            <?php echo app('translator')->get('project/Selfassessment/title.phuluc7b'); ?>
        </div>
    </div>

    <div class="col-sm-12 m-t-md">
        <p><p><?php echo app('translator')->get('project/Selfassessment/title.tencsgd'); ?></p>
        <p><?php echo app('translator')->get('project/Selfassessment/title.ma'); ?></p>
        <p><?php echo app('translator')->get('project/Selfassessment/title.tenctdt'); ?></p>
        <p><?php echo app('translator')->get('project/Selfassessment/title.mactdt'); ?></p>
    </div>

    <div class="col-sm-12 m-t-md">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center" rowspan="2"><?php echo app('translator')->get('project/Selfassessment/title.tctc'); ?></th>
                <th class="text-center" colspan="3"><?php echo app('translator')->get('project/Selfassessment/title.kqdg'); ?></th>
                <th class="text-center" colspan="2"><?php echo app('translator')->get('project/Selfassessment/title.thtc'); ?></th>
            </tr>
            <tr>
                <th><?php echo app('translator')->get('project/Selfassessment/title.dat'); ?></th>
                <th><?php echo app('translator')->get('project/Selfassessment/title.chuadat'); ?></th>
                <th><?php echo app('translator')->get('project/Selfassessment/title.khongdanhgia'); ?></th>
                <th><?php echo app('translator')->get('project/Selfassessment/title.sotcdat'); ?></th>
                <th><?php echo app('translator')->get('project/Selfassessment/title.tyledat'); ?></th>
            </tr>

            </thead>

            <tbody class="text-center">
            <?php
                $totalDat = 0;
                $totalTieuChi = 0;
            ?>

            <?php $__currentLoopData = $keHoachBaoCaoDetail->keHoachTieuChuanList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keHoachTieuChuan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!$keHoachTieuChuan->baoCaoTieuChuan) continue; ?>
                <?php
                    $dat = 0;
                     foreach($keHoachTieuChuan->keHoachTieuChiList as $keHoachTieuChi){
                         if($keHoachTieuChi->baoCaoTieuChi['danhgia']>=4){
                             $dat++;
                             $totalDat++;
                         }
                         $totalTieuChi++;
                     }
                ?>

                <tr class="text-center">
                    <th><?php echo app('translator')->get('project/Selfassessment/title.tieuchuan'); ?> <?php echo e($keHoachTieuChuan->tieuChuan->stt); ?></th>
                    <th></th>
                    <th></th>
                    <th></th>

                    <th class="text-center"
                        rowspan="<?php echo e($keHoachTieuChuan->keHoachTieuChiList->count()+1); ?>">
                        <?php echo e($dat); ?>

                    </th>
                    <th class="text-center"
                        rowspan="<?php echo e($keHoachTieuChuan->keHoachTieuChiList->count()+1); ?>">
                        <?php echo e(round(($dat/$keHoachTieuChuan->keHoachTieuChiList->count())*100,2)); ?>

                    </th>
                </tr>
                <?php $__currentLoopData = $keHoachTieuChuan->keHoachTieuChiList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keHoachTieuChi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo app('translator')->get('project/Selfassessment/title.tieuchi'); ?> <?php echo e($keHoachTieuChuan->tieuChuan->stt); ?>

                            .<?php echo e($keHoachTieuChi->tieuChi->stt); ?>

                        </td>

                        <?php if($keHoachTieuChi->baoCaoTieuChi['danhgia']>=4): ?>
                            <td><?php echo app('translator')->get('project/Selfassessment/title.d'); ?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>


                        <?php if($keHoachTieuChi->baoCaoTieuChi['danhgia']<4): ?>
                            <td><?php echo app('translator')->get('project/Selfassessment/title.c'); ?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>

                        <?php if($keHoachTieuChi->baoCaoTieuChi['danhgia']===""): ?>
                            <td><?php echo app('translator')->get('project/Selfassessment/title.k'); ?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th class="text-center" colspan="4"><?php echo app('translator')->get('project/Selfassessment/title.dgc'); ?></th>
                <th class="text-center"><?php echo e($totalDat); ?></th>
                <th class="text-center"><?php echo e($totalTieuChi != 0 ? round(($totalDat/$totalTieuChi)*100,2) : '-'); ?></th>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="col-sm-12 mt-md font-italic">
        <p class="font-bold"><?php echo app('translator')->get('project/Selfassessment/title.ghichu'); ?></p>

        <?php echo app('translator')->get('project/Selfassessment/title.gmdg'); ?><br>
        <?php echo app('translator')->get('project/Selfassessment/title.tiletieuchi'); ?>
    </div>

    <div class="col-sm-12 m-t-md">
        <table class="table table-bordered">
            <tr>
                <td style="width:50%"></td>
                <td class="text-center">
                    <p> <?php echo app('translator')->get('project/Selfassessment/title.ngaythangnam'); ?></p>
                    <p class="font-bold"><?php echo app('translator')->get('project/Selfassessment/title.thutruong'); ?></p>
                    <p><i><?php echo app('translator')->get('project/Selfassessment/title.kyten'); ?></i></p>
                </td>
            </tr>
        </table>
    </div>
</div> --><?php /**PATH D:\xamppkhoaluan\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Selfassessment/hoanthien/phuluc7.blade.php ENDPATH**/ ?>