<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="metismenu" id="side-menu">
            <li class="nav-header ">

                <div class="dropdown profile-element img-rounded">

                    <?php if( Sentinel::getUser()->csdt): ?>
                        <img alt="image" class="img-rounded img-responsive"
                             src="https://bloganh.net/wp-content/uploads/2020/06/dung-nghieng-nguoi-voi-hoa.jpg" width="100rem">

                    <?php else: ?>
                        <img alt="image" class="img-rounded img-responsive" src="https://bloganh.net/wp-content/uploads/2020/06/dung-nghieng-nguoi-voi-hoa.jpg" width="100rem">
                    <?php endif; ?>
                </div>
            </li>
          <?php echo $__env->make("admin.project.ExternalReview.include.sidebar-menu", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </ul>

    </div>
</nav>


<?php /**PATH D:\xampp74\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/ExternalReview/include/sidebar.blade.php ENDPATH**/ ?>