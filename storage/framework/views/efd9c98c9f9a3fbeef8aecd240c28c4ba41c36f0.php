    <?php
    $listmenu_2 = Lang::get('menu.2_list');
    $listmenu_3 = Lang::get('menu.3_list');
    $listmenu_4 = Lang::get('menu.4_list');
    $listmenu_5 = Lang::get('menu.5_list');
    $listmenu_6 = Lang::get('menu.6_list');
    $listmenu_7 = Lang::get('menu.7_list');
    $listmenu_8 = Lang::get('menu.8_list');
    $listmenu_9 = Lang::get('menu.9_list');
    $listmenu_9_4 = Lang::get('menu.9_4_list');
    $listmenu_10 = Lang::get('menu.10_list');
    $listmenu_2_1 = Lang::get('menu.2_1_list');
    $listmenu_2_2 = Lang::get('menu.2_2_list');
    $listmenu_2_3 = Lang::get('menu.2_3_list');

    $listmenu_10_1 = Lang::get('menu.10_1_list');
    $listmenu_10_2 = Lang::get('menu.10_2_list');
    $listmenu_10_3 = Lang::get('menu.10_3_list');
    $listmenu_10_4 = Lang::get('menu.10_4_list');
    $listmenu_10_5 = Lang::get('menu.10_5_list');
    $listmenu_10_6 = Lang::get('menu.10_6_list');
    $listmenu_10_7 = Lang::get('menu.10_7_list');
    $listmenu_10_8 = Lang::get('menu.10_8_list');
    $listmenu_10_9 = Lang::get('menu.10_9_list');
    // link
    $linkMenuTwoParent = Lang::get('menu.2_list_parent');
    $linkMenuTwoChild = Lang::get('menu.2_list_child');

    $linkMenuThreeParent = Lang::get('menu.3_list_parent');
    $linkMenuFourParent = Lang::get('menu.4_list_parent');
    $linkMenuSevenParent = Lang::get('menu.7_list_parent');
    $linkMenuEightParent = Lang::get('menu.8_list_parent');

    $listmenu_7_1 = Lang::get('menu.7_1_list');
    $linkMenuSevenChild = Lang::get('menu.7_list_child');
    $linkMenuTenParent = Lang::get('menu.10_list_child');


    $icon_array = [
        '<i class="bi bi-grid fs-3"></i>',
        '<i class="bi bi-window fs-3"></i>',
        '<i class="bi bi-app-indicator fs-3"></i>',
        '<i class="bi bi-app-indicator fs-3"></i>',
        '<i class="bi bi-person fs-2"></i>',
        '<i class="bi bi-sticky fs-3"></i>',
        '<i class="bi bi-shield-check fs-3"></i>',
        '<i class="bi bi-layers fs-3"></i>',
        '<i class="bi bi-printer fs-3"></i>',
        '<i class="bi bi-cart fs-3"></i>',
        '<i class="bi bi-hr fs-3"></i>',
        '<i class="bi bi-people fs-3"></i>',
        '<i class="bi bi-calendar3-event fs-3"></i>',
        '<i class="bi-chat-left fs-3"></i>',
        '<i class="bi bi-layout-sidebar fs-3"></i>',
        '<i class="bi bi-layers fs-3"></i>',
        '<i class="bi bi-layers fs-3"></i>',
    ];
    
?>

<div class="aside-menu flex-column-fluid" style="background-color: #ffff">
                        <!--begin::Aside Menu-->
                        <div class="hover-scroll-overlay-y my-2 py-5 py-lg-8" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">

                                <!-- Dashboard -->
                                <div class="menu-item">
                                    <div class="menu-content pb-2">
                                        <span class="menu-section text-muted text-uppercase ls-1">Dashboard</span>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link 
                                        <?php echo (Request::is('admin') ? 'active' : '' ); ?>

                                    "href="<?php echo e(route('admin.dashboard')); ?>">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title">Home</span>
                                    </a>
                                </div>
                                <!-- / Dashboard -->
                                
                                <!-- Thường trực -->
                                <div class="menu-item ">
                                    <div class="menu-content pt-8 pb-2">
                                        <span class="menu-section text-muted text-uppercase ls-1">
                                            <?php echo app('translator')->get('menu.2'); ?>
                                        </span>
                                    </div>
                                </div>
                                <!-- show trong menu-item,  active trong menu-link-->
                                <!-- QL bộ tiêu chuẩn -->
                                <div data-kt-menu-trigger="click" class="menu-item  menu-accordion 
                                    <?php echo (Request::is('admin/thuong-truc/setstandard') 
                                    || Request::is('admin/thuong-truc/setstandard/*')
                                    ? 'show' : '' ); ?>

                                 ">
                                    <span class="menu-link ">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_2[1]); ?></span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link 
                                            <?php echo (Request::is('admin/thuong-truc/setstandard/index') 
                                            || Request::is('admin/thuong-truc/setstandard/index/*') 
                                            || Request::is('admin/thuong-truc/setstandard/config-standard/*') 
                                            || Request::is('admin/thuong-truc/setstandard/create-single-standard/*')
                                            || Request::is('admin/thuong-truc/setstandard/config-criteria/*')
                                            || Request::is('admin/thuong-truc/setstandard/criteria')
                                            ? 'active' : '' ); ?>

                                             " href="<?php echo e($linkMenuTwoChild[1]); ?>">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title"><?php echo e($listmenu_2_1[1]); ?></span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link 
                                            <?php echo (Request::is('admin/thuong-truc/setstandard/show-suggestions') 
                                            ? 'active' : '' ); ?>

                                             " href="<?php echo e($linkMenuTwoChild[2]); ?>">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title"><?php echo e($listmenu_2_1[2]); ?></span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link 
                                            <?php echo (Request::is('admin/thuong-truc/setstandard/show-minimum') 
                                            ? 'active' : '' ); ?>

                                             " href="<?php echo e($linkMenuTwoChild[3]); ?>">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title"><?php echo e($listmenu_2_1[3]); ?></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /QL bộ tiêu chuẩn -->
                                <!-- Quản lý danh mục -->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion 
                                    <?php echo (Request::is('admin/thuong-truc/manacategory/manafield') 
                                        || Request::is('admin/thuong-truc/manacategory/create-manafield')
                                        || Request::is('admin/thuong-truc/manacategory/manaunit')
                                        || Request::is('admin/thuong-truc/manacategory/manactdt')
                                        || Request::is('admin/thuong-truc/manacategory/manacsdt')
                                        || Request::is('admin/thuong-truc/manacategory/manahuman')
                                        || Request::is('admin/thuong-truc/manacategory/linkreport')
                                    ? 'show' : '' ); ?>

                                 ">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_2[2]); ?></span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link 
                                            <?php echo (Request::is('admin/thuong-truc/manacategory/manafield') 
                                                || Request::is('admin/thuong-truc/manacategory/create-manafield')
                                            ? 'active' : '' ); ?>

                                             " href="<?php echo e($linkMenuTwoChild[4]); ?>">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title"><?php echo e($listmenu_2_2[1]); ?></span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link 
                                            <?php echo (Request::is('admin/thuong-truc/manacategory/manaunit') 
                                            ? 'active' : '' ); ?>

                                             " href="<?php echo e($linkMenuTwoChild[5]); ?>">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title"><?php echo e($listmenu_2_2[2]); ?></span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link 
                                            <?php echo (Request::is('admin/thuong-truc/manacategory/manactdt') 
                                            ? 'active' : '' ); ?>

                                             " href="<?php echo e($linkMenuTwoChild[6]); ?>">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title"><?php echo e($listmenu_2_2[3]); ?></span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link 
                                            <?php echo (Request::is('admin/thuong-truc/manacategory/manacsdt') 
                                            ? 'active' : '' ); ?>

                                             " href="<?php echo e($linkMenuTwoChild[7]); ?>">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title"><?php echo e($listmenu_2_2[4]); ?></span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link 
                                            <?php echo (Request::is('admin/thuong-truc/manacategory/manahuman') 
                                            ? 'active' : '' ); ?>


                                             " href="<?php echo e($linkMenuTwoChild[8]); ?>">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title"><?php echo e($listmenu_2_2[5]); ?></span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link 
                                            <?php echo (Request::is('admin/thuong-truc/manacategory/linkreport') 
                                            ? 'active' : '' ); ?>

                                             " href="<?php echo e($linkMenuTwoChild[9]); ?>">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title"><?php echo e($listmenu_2_2[6]); ?></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Quản lý danh mục -->
                                <!-- Đối sánh -->
                                
                                <!-- /Đối sánh -->
                                <!-- /Thường trực -->
                                
                                

                                
                                <!-- <?php $__currentLoopData = $listmenu_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($menu); ?></span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <?php if($key  == '1'): ?>
                                            <?php $__currentLoopData = $listmenu_2_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_child => $menu_child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="<?php echo e($linkMenuTwoChild[$key_child]); ?>">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title"><?php echo e($menu_child); ?></span>
                                                    </a>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php elseif($key  == '2'): ?>
                                            <?php $__currentLoopData = $listmenu_2_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_child => $menu_child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $key_child = $key_child + count($listmenu_2_1);
                                                ?>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="<?php echo e($linkMenuTwoChild[$key_child]); ?>">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title"><?php echo e($menu_child); ?></span>
                                                    </a>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php elseif($key  == '3'): ?>
                                            <?php $__currentLoopData = $listmenu_2_3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_child => $menu_child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $key_child = $key_child + count($listmenu_2_1) + count($listmenu_2_2);
                                                ?>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="<?php echo e($linkMenuTwoChild[$key_child]); ?>">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title"><?php echo e($menu_child); ?></span>
                                                    </a>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
								
                              	<?php if(6 == 6): ?>
                                <!-- Trao đổi thông tin -->
                                <div class="menu-item">
                                    <div class="menu-content pt-8 pb-2">
                                        <span class="menu-section text-muted text-uppercase ls-1">
                                            <?php echo app('translator')->get('menu.3'); ?>
                                        </span>
                                    </div>
                                </div>
                                <!-- Bản tin -->
                                <div class="menu-item">
                                    <a class="menu-link 
                                        <?php echo (Request::is('admin/trao-doi-thong-tin/messageboard/index') 
                                        ? 'active' : '' ); ?>

                                     " href="<?php echo e($linkMenuThreeParent[1]); ?>">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_3[1]); ?></span>
                                    </a>
                                </div>
                                <!-- Chat -->
                                <!-- <div class="menu-item">
                                    <a class="menu-link 
                                    <?php echo (Request::is('admin/trao-doi-thong-tin/chat/index') 
                                        ? 'active' : '' ); ?>

                                     " href="<?php echo e($linkMenuThreeParent[2]); ?>">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_3[2]); ?></span>
                                    </a>
                                </div> -->
                                <!-- /Trao đổi thông tin -->
                                <?php endif; ?>


                                <!-- Đảm bảo chất lượng -->
                                <div class="menu-item">
                                    <div class="menu-content pt-8 pb-0">
                                        <span class="menu-section text-muted text-uppercase ls-1">
                                            <?php echo app('translator')->get('menu.4'); ?>
                                        </span>
                                    </div>
                                </div>
                                <!-- Lập kế hoạch -->
                                <div class="menu-item">
                                    <a class="menu-link 
                                    <?php echo (Request::is('admin/dam-bao-chat-luong/planning/index') 
                                        ? 'active' : '' ); ?>

                                     " href="<?php echo e($linkMenuFourParent[1]); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_4[1]); ?></span>
                                    </a>
                                </div>
                                <!-- Cập nhật hoạt động -->
                                <div class="menu-item">
                                    <a class="menu-link 
                                     <?php echo (Request::is('admin/dam-bao-chat-luong/updateaci/index') 
                                        || Request::is('admin/dam-bao-chat-luong/updateaci/mana-action') 
                                        || Request::is('admin/dam-bao-chat-luong/updateaci/mana-action/*')
                                        || Request::is('admin/dam-bao-chat-luong/updateaci/get-update-mcyc')
                                        ? 'active' : '' ); ?>

                                     " href="<?php echo e($linkMenuFourParent[2]); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_4[2]); ?></span>
                                    </a>
                                </div>
                                <!-- Cập nhật minh chứng -->
                                <div class="menu-item">
                                    <a class="menu-link 
                                    <?php echo (Request::is('admin/dam-bao-chat-luong/manaproof/index') 
                                        || Request::is('admin/dam-bao-chat-luong/manaproof/edit-proof') 
                                        || Request::is('admin/dam-bao-chat-luong/manaproof/edit-proof/*')
                                        ? 'active' : '' ); ?>

                                     " href="<?php echo e($linkMenuFourParent[3]); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_4[3]); ?></span>
                                    </a>
                                </div>
                                <!-- KTMC theo hoạt động -->
                                <div class="menu-item">
                                    <a class="menu-link 
                                    <?php echo (Request::is('admin/dam-bao-chat-luong/kiem-tra-mc-hoat-dong/index')
                                        || Request::is('admin/dam-bao-chat-luong/kiem-tra-mc-hoat-dong/chi-tiet') 
                                        || Request::is('admin/dam-bao-chat-luong/kiem-tra-mc-hoat-dong/chi-tiet/*')
                                        || Request::is('admin/dam-bao-chat-luong/kiem-tra-mc-hoat-dong/chinh-sua/*')
                                        || Request::is('admin/dam-bao-chat-luong/kiem-tra-mc-hoat-dong/chinh-sua')
                                        ? 'active' : '' ); ?>

                                     " href="<?php echo e($linkMenuFourParent[4]); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_4[4]); ?></span>
                                    </a>
                                </div>
                                <!-- KH hoạt động -->
                                <div class="menu-item">
                                    <a class="menu-link 
                                        <?php echo (Request::is('admin/dam-bao-chat-luong/ke-hoach-hanh-dong/index')
                                        ? 'active' : '' ); ?>

                                     " href="<?php echo e($linkMenuFourParent[5]); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_4[5]); ?></span>
                                    </a>
                                </div>
                            <!-- /Đảm bảo chất lượng -->
                                


                            


                            

                                
                            <!-- Tự đánh giá -->
                                <div class="menu-item">
                                    <div class="menu-content pt-8 pb-0">
                                        <span class="menu-section text-muted text-uppercase ls-1">
                                            <?php echo app('translator')->get('menu.7'); ?>
                                        </span>
                                    </div>
                                </div>
                                <!-- Lập kế hoạch -->
                                <div class="menu-item">
                                    <a class="menu-link 
                                    <?php echo (Request::is('admin/tu-danh-gia/report/index')
                                        || Request::is('admin/tu-danh-gia/report/lap-ke-hoach/*')
                                        || Request::is('admin/tu-danh-gia/report/lap-ke-hoach')
                                        ? 'active' : '' ); ?>

                                     " href="<?php echo e($linkMenuSevenParent[1]); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_7[1]); ?></span>
                                    </a>
                                </div>

                                <!-- Chuẩn bị đánh giá -->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion 
                                <?php echo (Request::is('admin/tu-danh-gia/preparereport/doi-chieu-mc')
                                        || Request::is('admin/tu-danh-gia/preparereport/proof-handling')
                                        || Request::is('admin/tu-danh-gia/preparereport/edit-mc-gop/*')
                                        || Request::is('admin/tu-danh-gia/preparereport/xu-ly-mc')
                                    ? 'show' : '' ); ?>


                                 ">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_7[2]); ?></span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <!-- Xử lý minh chứng -->
                                        <div class="menu-item">
                                            <a class="menu-link 
                                            <?php echo (Request::is('admin/tu-danh-gia/preparereport/xu-ly-mc')
                                                || Request::is('admin/tu-danh-gia/preparereport/proof-handling')
                                                || Request::is('admin/tu-danh-gia/preparereport/edit-mc-gop/*')
                                                ? 'active' : '' ); ?>

                                             " href="<?php echo e($linkMenuSevenChild[1]); ?>">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title"><?php echo e($listmenu_7_1[1]); ?></span>
                                            </a>
                                        </div>
                                        <!-- Đối chiếu minh chứng -->
                                        <div class="menu-item">
                                            <a class="menu-link 
                                            <?php echo (Request::is('admin/tu-danh-gia/preparereport/doi-chieu-mc')
                                                ? 'active' : '' ); ?>

                                             " href="<?php echo e($linkMenuSevenChild[2]); ?>">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title"><?php echo e($listmenu_7_1[2]); ?></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Báo cáo tự đánh giá -->
                                <div class="menu-item">
                                    <a class="menu-link 
                                    <?php echo (Request::is('admin/tu-danh-gia/detailedplanning/index')
                                    || Request::is('admin/tu-danh-gia/detailedplanning/show')
                                    ? 'active' : '' ); ?>

                                     " href="<?php echo e($linkMenuSevenParent[3]); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_7[3]); ?></span>
                                    </a>
                                </div>
                                <!-- Nhận xét báo cáo -->
                             
                                <div class="menu-item">
                                    <a class="menu-link 
                                    <?php echo (Request::is('admin/tu-danh-gia/commentreport/index')
                                    || Request::is('admin/tu-danh-gia/commentreport/viewreport')
                                    ? 'active' : '' ); ?>

                                     " href="<?php echo e($linkMenuSevenParent[4]); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_7[4]); ?></span>
                                    </a>
                                </div>
                                
                                <!-- Cơ sở dữ liệu -->

                                <div class="menu-item">
                                    <a class="menu-link 
                                    <?php echo (Request::is('admin/tu-danh-gia/database/index')
                                    || Request::is('admin/tu-danh-gia/database/data_school_csgd/*')
                                    || Request::is('admin/tu-danh-gia/database/data_school/*')
                                    ? 'active' : '' ); ?>

                                     " href="<?php echo e($linkMenuSevenParent[6]); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_7[6]); ?></span>
                                    </a>
                                </div>
                                
                                <!-- Hoàn thiện báo cáo -->
                                <div class="menu-item">
                                    <a class="menu-link 
                                    <?php echo (Request::is('admin/tu-danh-gia/completionreport/index')
                                    ? 'active' : '' ); ?>

                                     " href="<?php echo e($linkMenuSevenParent[5]); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_7[5]); ?></span>
                                    </a>
                                </div>

                                
                            <!-- /Tự đánh giá -->
                                


                            <!-- Đánh giá ngoài -->
                                <div class="menu-item">
                                    <div class="menu-content pt-8 pb-0">
                                        <span class="menu-section text-muted text-uppercase  ls-1">
                                            <?php echo app('translator')->get('menu.8'); ?>
                                        </span>
                                    </div>
                                </div>
                                <!-- Lập kế hoạch đánh giá ngoài -->
                                <div class="menu-item">
                                    <a class="menu-link 
                                    <?php echo (Request::is('admin/danh-gia-ngoai/lap-ke-hoach-dgn')
                                    ? 'active' : '' ); ?>

                                     " href="<?php echo e($linkMenuEightParent[1]); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_8[1]); ?></span>
                                    </a>
                                </div>
                                <!-- Báo cáo đánh giá ngoài -->
                                <div class="menu-item">
                                    <a class="menu-link 
                                    <?php echo (Request::is('admin/danh-gia-ngoai/bao-cao-tdg/bao-cao')
                                        || Request::is('admin/danh-gia-ngoai/bao-cao-tdg/bao-cao/*')
                                    ? 'active' : '' ); ?>

                                     " href="<?php echo e($linkMenuEightParent[2]); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_8[2]); ?></span>
                                    </a>
                                </div>
                            <!-- /Đánh giá ngoài -->

                                
                            <!-- Tổng hợp -->
                                <div class="menu-item">
                                    <div class="menu-content pt-8 pb-0">
                                        <span class="menu-section text-muted text-uppercase  ls-1">
                                            <?php echo app('translator')->get('menu.9'); ?>
                                        </span>
                                    </div>
                                </div>
                                <!-- Đảm bảo chất lượng -->
                                <div class="menu-item">
                                    <a class="menu-link 
                                         <?php echo (Request::is('admin/tonghop/tong-hop/index')
                                    ? 'active' : '' ); ?> " href="<?php echo e(route('admin.tonghop.dbcl.index')); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_9[1]); ?></span>
                                    </a>
                                </div>
                                <!-- Báo cáo tiến độ -->
                                <div class="menu-item">
                                    <a class="menu-link 
                                       <?php echo (Request::is('admin/tonghop/tong-hop/baocaotiendo')
                                    ? 'active' : '' ); ?>" href="<?php echo e(route('admin.tonghop.dbcl.baocaotiendo')); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_9[2]); ?></span>
                                    </a>
                                </div>
                                <!-- DS báo cáo TĐG -->
                                <div class="menu-item">
                                    <a class="menu-link <?php echo (Request::is('admin/tu-danh-gia/completionreport/index')
                                    ? 'active' : '' ); ?>" href="<?php echo e(route('admin.tudanhgia.completionreport.index')); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                        </span>
                                        <span class="menu-title"><?php echo e($listmenu_9[3]); ?></span>
                                    </a>
                                </div>
                                <!-- Báo cáo nhận xét -->
                                <div class="menu-item">
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion 
                                            <?php echo (Request::is('admin/tonghop/tong-hop/baocaonhanxet') 
                                            || Request::is('admin/tonghop/tong-hop/baocaodgn')
                                        ? 'show' : '' ); ?>

                                        " 
                                        >
                                            <span class="menu-link">
                                                <span class="menu-icon">
                                                <?php echo $icon_array[array_rand($icon_array, 1) ]; ?>

                                            </span>
                                            <span class="menu-title"><?php echo e($listmenu_9[4]); ?></span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!-- Đánh giá nội bộ -->
                                                <div class="menu-item">
                                                    <a class="menu-link 
                                                    <?php echo (Request::is('admin/tonghop/tong-hop/baocaonhanxet')
                                                    ? 'active' : '' ); ?>

                                                     " href="<?php echo e(route('admin.tonghop.dbcl.baocaonhanxet')); ?>">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title"><?php echo e($listmenu_9_4[1]); ?></span>
                                                    </a>
                                                </div>

                                                <!-- Đánh giá ngoài -->
                                                <div class="menu-item">
                                                    <a class="menu-link 
                                                    <?php echo (Request::is('admin/tonghop/tong-hop/baocaodgn')
                                                    ? 'active' : '' ); ?>

                                                     " href="<?php echo e(route('admin.tonghop.dbcl.baocaodgn')); ?>">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title"><?php echo e($listmenu_9_4[2]); ?></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                
                            <!-- /Tổng hợp --> 

                            <?php echo $__env->make('admin.layouts._excel_view_leftmenu2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                            

                                <div class="menu-item">
                                    <div class="menu-content">
                                        <div class="separator mx-1 my-4"></div>
                                    </div>
                                </div>
                                
                            </div>
                            <!--end::Menu-->
                        </div>
                    </div><?php /**PATH D:\xampp74\htdocs\kiemdinh\kdcl-2023\resources\views/admin/layouts/_left_menu.blade.php ENDPATH**/ ?>