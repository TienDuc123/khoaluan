<div class="m-l-md">
    <?php $__currentLoopData = $keHoachTieuChuan->keHoachTieuChiList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keHoachTieuChi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <strong>
            <?php echo app('translator')->get('project/Selfassessment/title.tieuchi'); ?> <?php echo e($keHoachTieuChuan->tieuChuan->stt); ?>

            .<?php echo e($keHoachTieuChi->tieuChi->stt); ?>

            : <?php echo e($keHoachTieuChi->tieuChi->mo_ta); ?>

        </strong>
        <div class="m-l-md">

            <strong><?php echo app('translator')->get('project/Selfassessment/title.1mota'); ?> </strong>
            <?php $__currentLoopData = $keHoachTieuChi->keHoachMenhDeList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keHoachMenhDe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!$keHoachMenhDe->baoCaoMenhDe) continue; ?>
                <?php if(isset($keHoachMenhDe->baoCaoMenhDe->mota)): ?>
                    <?php
                        $modifiedMota = str_replace('id="addminhchunggop_', 'd-id="', $keHoachMenhDe->baoCaoMenhDe->mota);
                        $absoluteImagePath = preg_replace('/src="..\/..\/..\/img_baocao/', 'src="' . asset('img_baocao'), $modifiedMota);
                        echo '<p>' . $absoluteImagePath . '</p>';
                    ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <br/>
            <strong><?php echo app('translator')->get('project/Selfassessment/title.2diemmanh'); ?> </strong>
            <?php $__currentLoopData = $keHoachTieuChi->keHoachMenhDeList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keHoachMenhDe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!$keHoachMenhDe->baoCaoMenhDe) continue; ?>
                <p>
                    <?php
                        if (isset($keHoachMenhDe->baoCaoMenhDe->diemmanh)) {
                            $absoluteImagePath = preg_replace('/src="..\/..\/..\/img_baocao/', 'src="' . asset('img_baocao'), $keHoachMenhDe->baoCaoMenhDe->diemmanh);
                            echo $absoluteImagePath;
                        }
                    ?>
                </p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <br/>
            <strong><?php echo app('translator')->get('project/Selfassessment/title.3diemtontai'); ?> </strong>
            <?php $__currentLoopData = $keHoachTieuChi->keHoachMenhDeList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keHoachMenhDe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!$keHoachMenhDe->baoCaoMenhDe) continue; ?>
                <?php
                    if (isset($keHoachMenhDe->baoCaoMenhDe->tontai)) {
                        $absoluteImagePath = preg_replace('/src="..\/..\/..\/img_baocao/', 'src="' . asset('img_baocao'), $keHoachMenhDe->baoCaoMenhDe->tontai);
                        echo $absoluteImagePath;
                    }
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <br/>
            <strong><?php echo app('translator')->get('project/Selfassessment/title.4kehoachhd'); ?> </strong>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th><?php echo app('translator')->get('project/Selfassessment/title.stt'); ?></th>
                    <th><?php echo app('translator')->get('project/Selfassessment/title.nd'); ?></th>
                    <th><?php echo app('translator')->get('project/Selfassessment/title.dvth'); ?></th>
                    <th><?php echo app('translator')->get('project/Selfassessment/title.dvkt'); ?></th>
                    <th><?php echo app('translator')->get('project/Selfassessment/title.tgth'); ?></th>
                    <th><?php echo app('translator')->get('project/Selfassessment/title.gchu'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php $stt=0 ?>
                <?php $__currentLoopData = $keHoachTieuChi->keHoachMenhDeList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keHoachMenhDe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!$keHoachMenhDe->baoCaoMenhDe) continue; ?>
                    <?php $__currentLoopData = $keHoachMenhDe->keHoachHanhDongList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keHoachHanhDong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $stt++ ?>
                        <tr>
                            <td><?php echo e($stt); ?></td>
                            <td><?php echo e($keHoachHanhDong->noi_dung); ?></td>
                            <td><?php echo e($keHoachHanhDong->donViThucHien->ten_donvi); ?></td>
                            <td><?php echo e($keHoachHanhDong->donViKiemTra->ten_donvi); ?></td>
                            <td>
                                <?php echo e(\Carbon\Carbon::parse($keHoachHanhDong->ngay_batdau)->format('d/m/Y')); ?>

                                <?php echo app('translator')->get('project/Selfassessment/title.toi'); ?> <?php echo e(\Carbon\Carbon::parse($keHoachHanhDong->ngay_hoanthanh)->format('d/m/Y')); ?>

                            </td>
                            <td></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <p><strong><?php echo app('translator')->get('project/Selfassessment/title.5tdg'); ?><?php echo e(($keHoachTieuChi->baoCaoTieuChi['danhgia'] >=4)? "Đạt": "Chưa đạt"); ?>, <?php echo e($keHoachTieuChi->baoCaoTieuChi['danhgia']); ?>/7</strong></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div><?php /**PATH D:\xampp74\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Selfassessment/hoanthien/tieuchi-ctdt.blade.php ENDPATH**/ ?>