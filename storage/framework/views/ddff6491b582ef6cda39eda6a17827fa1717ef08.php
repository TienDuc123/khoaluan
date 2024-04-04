<?php $__env->startSection('title'); ?>
    View User Details
    <?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <meta name="csrf_token" content="<?php echo e(csrf_token()); ?>">
    <link href="<?php echo e(asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('vendors/x-editable/css/bootstrap-editable.css')); ?>" rel="stylesheet"/>

    <link href="<?php echo e(asset('css/pages/user_profile.css')); ?>" rel="stylesheet"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Common/title.tttk'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <!--section ends-->
    <section class="content user_profile  pr-3 pl-3">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav  nav-tabs first_svg">
                    <li class="nav-item">
                        <a href="#tab1" data-toggle="tab" class="nav-link active">
                            <i class="livicon" data-name="user" data-size="16" data-c="#777"  data-hc="#000" data-loop="true"></i>
                            <?php echo app('translator')->get('project/Common/title.tttk'); ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab2" data-toggle="tab" class="nav-link">
                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            <?php echo app('translator')->get('project/Common/title.tdmk'); ?>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="<?php echo e(URL::to('admin/user_profile')); ?>" class=" nav-link" >
                            <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Advanced User Profile</a>
                    </li> -->

                </ul>
                <div  class="tab-content mar-top" id="clothing-nav-content">
                    <div id="tab1" class="tab-pane fade show active">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                        <div class="col-md-4">
                                            <div class="img-file">
                                                <?php if($user->pic != null && $user->pic != ""): ?>
                                                    <img src="<?php echo e(asset($user->pic)); ?>" alt="img"
                                                         class="img-fluid"/>
                                                <?php elseif($user->gender === "male"): ?>
                                                    <img src="<?php echo e(asset('images/authors/avatar3.png')); ?>" alt="..."
                                                         class="img-fluid"/>
                                                <?php elseif($user->gender === "female"): ?>
                                                    <img src="<?php echo e(asset('images/authors/avatar5.png')); ?>" alt="..."
                                                         class="img-fluid"/>
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('images/authors/no_avatar.jpg')); ?>" alt="..."
                                                         class="img-fluid"/>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                                <div class="table-responsive-lg table-responsive-sm table-responsive-md table-responsive">
                                                    <table class="table table-bordered table-striped" id="users">

                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.ma_nhansu'); ?></td>
                                                            <td>
                                                                <p class="user_name_max"><?php echo e($user->ma_nhansu); ?></p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.name'); ?></td>
                                                            <td>
                                                                <p class="user_name_max"><?php echo e($user->name); ?></p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.email'); ?></td>
                                                            <td>
                                                                <?php echo e($user->email); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <?php echo app('translator')->get('project/Common/title.gender'); ?>
                                                            </td>
                                                            <td>
                                                                <?php if($user->gender == 1): ?>
                                                                    <?php echo app('translator')->get('project/Common/title.male'); ?>
                                                                <?php elseif($user->gender == 2): ?>
                                                                    <?php echo app('translator')->get('project/Common/title.female'); ?>
                                                                <?php endif; ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.dob'); ?></td>

                                                            <?php if($user->ns=='0000-00-00'): ?>
                                                                <td>
                                                                </td>
                                                            <?php else: ?>
                                                                <td>
                                                                    <?php echo e(date("d/m/Y", strtotime($user->ns))); ?>

                                                                </td>
                                                            <?php endif; ?>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.phone'); ?></td>
                                                            <td>
                                                                <?php echo e($user->phone); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.donvi'); ?></td>
                                                            <td>
                                                                <?php
                                                                    $dv = DB::table('donvi')->select('id', 'ten_donvi')->where('id', $user->donvi_id)->first();
                                                                    if($dv){
                                                                        echo $dv->ten_donvi;
                                                                    }
                                                                ?>
                                                            
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.tdnvtcn'); ?></td>
                                                            <td>
                                                                <?php echo e($user->tdnvtcn); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.ntn'); ?></td>
                                                            <td>
                                                                <?php echo e($user->ntn); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.noitn'); ?></td>
                                                            <td>
                                                                <?php echo e($user->noitn); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.gvsp'); ?></td>
                                                            <td>
                                                                <?php echo e($user->gvsp); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.th'); ?></td>
                                                            <td>
                                                                <?php echo e($user->th); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.nn'); ?></td>
                                                            <td>
                                                                <?php echo e($user->nn); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.hhdp'); ?></td>
                                                            <td>
                                                                <?php echo e($user->hhdp); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.ndp'); ?></td>
                                                            <td>
                                                                <?php echo e($user->ndp); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.cdnnktd'); ?></td>
                                                            <td>
                                                                <?php echo e($user->cdnnktd); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.mscnktd'); ?></td>
                                                            <td>
                                                                <?php echo e($user->mscnktd); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.ntd'); ?></td>
                                                            <td>
                                                                <?php echo e($user->ntd); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.qdbn'); ?></td>
                                                            <td>
                                                                <?php echo e($user->qdbn); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo app('translator')->get('project/Common/title.cdkn'); ?></td>
                                                            <td>
                                                                <?php echo e($user->cdkn); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUpdate">
                                                                    <?php echo app('translator')->get('project/Common/title.chinhsua'); ?>
                                                                </button>
                                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalChangePass">
                                                                    <?php echo app('translator')->get('project/Common/title.changepass'); ?>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    <div id="tab2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12 pd-top ml-auto">
                                <form action="<?php echo e(route('admin.changePass')); ?>" method="post" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <div class="row">
                                            <?php echo e(csrf_field()); ?>

                                            <label for="inputpassword" class="col-md-3 control-label">
                                                <?php echo app('translator')->get('project/Common/title.oldPass'); ?>
                                                <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <input type="password" id="password" placeholder="Password" name="password"
                                                           class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                            <label for="inputnumber" class="col-md-3 control-label">
                                                <?php echo app('translator')->get('project/Common/title.newPass'); ?>
                                                <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <input type="password" id="password-new" placeholder="New Password" name="new_password"
                                                           class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="col-md-offset-3 col-md-9 ml-auto">
                                            <button type="submit" class="btn btn-primary" id="change-password">
                                                <?php echo app('translator')->get('project/Common/title.changePass'); ?>
                                            </button>
                                            &nbsp;
                                            <input type="reset" class="btn btn-secondary" value="Reset"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal -->
    
    <div class="modal fade" id="modalChangePass" tabindex="-1" aria-labelledby="modalChangePassL" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalChangePassL"><?php echo app('translator')->get('project/Common/title.changepass'); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo e(route('admin.changePassPer')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                  <div class="modal-body">
                        <div>
                            <label for=""><?php echo app('translator')->get('project/Common/title.oldPass'); ?></label>
                            <input type="password" class="form-control" name="oldPass" required >
                        </div>
                        <div>
                            <label for=""><?php echo app('translator')->get('project/Common/title.newPass'); ?></label>
                            <input type="password" class="form-control" name="newPass" required>
                        </div>
                        <div>
                            <label for=""><?php echo app('translator')->get('project/Common/title.comfirmPass'); ?></label>
                            <input type="password" class="form-control" name="comfirmPass" required>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('project/Common/title.changepass'); ?></button>
                  </div>
              </form>
            </div>
        </div>
        </div>

    <!-- Modal -->
    <div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="modalUpdateLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalUpdateLabel"><?php echo app('translator')->get('project/Common/title.chinhsua'); ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?php echo e(route('admin.updateUser')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
              <div class="modal-body">
                    <table class="table table-bordered table-striped" id="users">
                        <tr>
                            <td>Avatar</td>
                            <td>
                                <?php if($user->pic != null && $user->pic != ""): ?>
                                    <img width="150" src="<?php echo e(asset($user->pic)); ?>" alt="img" />
                                <?php elseif($user->gender === "male"): ?>
                                    <img  width="150" src="<?php echo e(asset('images/authors/avatar3.png')); ?>" alt="..."/>
                                <?php elseif($user->gender === "female"): ?>
                                    <img width="150" src="<?php echo e(asset('images/authors/avatar5.png')); ?>" alt="..."/>
                                <?php else: ?>
                                    <img width="150" src="<?php echo e(asset('images/authors/no_avatar.jpg')); ?>" alt="..."/>
                                <?php endif; ?>
                                <br>
                                <input class="mt-5" type="file" name="image" >
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.ma_nhansu'); ?></td>
                            <td>
                                <input class="form-control" type="text" name="ma_nhansu" value="<?php echo e($user->ma_nhansu); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.name'); ?></td>
                            <td>
                                <input class="form-control" type="text" name="ten_nhansu" value="<?php echo e($user->name); ?>">
                            </td>

                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.email'); ?></td>
                            <td>
                                <input type="email" name="email_ns" class="form-control" value="<?php echo e($user->email); ?>" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo app('translator')->get('project/Common/title.gender'); ?>
                            </td>
                            <td>
                                <select class="form-control" name="gender_ns">
                                    <option value="1"   
                                        <?php if($user->gender == 1): ?>
                                            selected
                                        <?php endif; ?>
                                     >
                                        <?php echo app('translator')->get('project/Common/title.male'); ?>
                                    </option>
                                    <option value="2"   
                                        <?php if($user->gender == 2): ?>
                                            selected
                                        <?php endif; ?>
                                     >
                                        <?php echo app('translator')->get('project/Common/title.female'); ?>
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.dob'); ?></td>
                            <td>
                                <input type="date" value="<?php echo e($user->ns); ?>" class="form-control" name="ns_ns">
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.phone'); ?></td>
                            <td>
                                <input type="text" class="form-control" value="<?php echo e($user->phone); ?>" name="phone_ns">
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.donvi'); ?></td>
                            <td>
                                <?php
                                    $dv = DB::table('donvi')->select('id', 'ten_donvi')->where('id', $user->donvi_id)->first();
                                    $dvAll = DB::table('donvi')->get();
                                ?>
                                <?php if($dv): ?>
                                    <select class='form-control' name="dv_ns">
                                        <option value="">--Không thuộc đơn vị nào</option>
                                        <?php $__currentLoopData = $dvAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dvs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option  
                                                <?php if($dv->id == $dvs->id): ?>
                                                    selected
                                                <?php endif; ?>
                                            value="<?php echo e($dvs->id); ?>"><?php echo e($dvs->ten_donvi); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                <?php else: ?>
                                    <select  class='form-control' name="dv_ns">
                                        <option value="">--Không thuộc đơn vị nào</option>
                                        <?php $__currentLoopData = $dvAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dvs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($dvs->id); ?>"><?php echo e($dvs->ten_donvi); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.tdnvtcn'); ?></td>
                            <td>
                                <input class="form-control" type="text" name="tdnvtcn" value="<?php echo e($user->tdnvtcn); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.ntn'); ?></td>
                            <td>
                                <input type="text" name="ntn" class="form-control" value="<?php echo e($user->ntn); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.noitn'); ?></td>
                            <td>
                                <input type="text" class="form-control" value="<?php echo e($user->noitn); ?>" name="noitn">
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.gvsp'); ?></td>
                            <td>
                                <input type="text" class="form-control" value="<?php echo e($user->gvsp); ?>" name="gvsp">
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.th'); ?></td>
                            <td>
                                <input type="text" class="form-control" value="<?php echo e($user->th); ?>" name="th_ns">
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.nn'); ?></td>
                            <td>
                                <input type="text" class="form-control" value="<?php echo e($user->nn); ?>" name="nn_ns">
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.hhdp'); ?></td>
                            <td>
                                <input type="text" class="form-control" value="<?php echo e($user->hhdp); ?>" name="hhdp">
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.ndp'); ?></td>
                            <td>
                                <input type="text" class="form-control" value="<?php echo e($user->ndp); ?>" name="ndp">
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.cdnnktd'); ?></td>
                            <td>
                                <input type="text" class="form-control" value="<?php echo e($user->cdnnktd); ?>" name="cdnnktd">
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.mscnktd'); ?></td>
                            <td>
                                <input type="text" class="form-control" value="<?php echo e($user->mscnktd); ?>" name="mscnktd">
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.ntd'); ?></td>
                            <td>
                                <input type="text" class="form-control" value="<?php echo e($user->ntd); ?>" name="ntd">
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.qdbn'); ?></td>
                            <td>
                                <input type="text" class="form-control" value="<?php echo e($user->qdbn); ?>" name="qdbn">
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo app('translator')->get('project/Common/title.cdkn'); ?></td>
                            <td>
                                <input type="text" class="form-control" value="<?php echo e($user->cdkn); ?>" name="cdkn">
                            </td>
                        </tr>
                    </table>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('project/Common/title.luu'); ?></button>
              </div>
          </form>
        </div>
    </div>
    </div>

    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <!-- Bootstrap WYSIHTML5 -->
    <script  src="<?php echo e(asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js')); ?>" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#change-password').click(function (e) {
                e.preventDefault();
                var check = true;
                if ($('#password').val() ===""){
                    alert("<?php echo app('translator')->get('project/Common/title.enterPass'); ?>");
                    check = false;
                }
                else if($('#password-new').val() === ""){
                    alert("<?php echo app('translator')->get('project/Common/title.enterNewPass'); ?>");
                    check = false;
                }

                if(check == true){
                    $(".form-horizontal").submit();
                    // var sendData =  '_token=' + $("input[name='_token']").val() +'&password=' + $('#password').val() +'&id=' + <?php echo e($user->id); ?>;
                    // var path = "passwordreset";
                    // $.ajax({
                    //     url: path,
                    //     type: "post",
                    //     data: sendData,
                    //     headers: {
                    //         'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                    //     },
                    //     success: function (data) {
                    //         $('#password, #password-confirm').val('');
                    //         alert('password reset successful');
                    //     },
                    //     error: function (xhr, ajaxOptions, thrownError) {
                    //         alert('error in password reset');
                    //     }
                    // });
                }
            });
        });



        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
            e.target // newly activated tab
            e.relatedTarget // previous active tab
            $("#clothing-nav-content .tab-pane").removeClass("show active");
        });

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\file_moi\xampp\htdocs\kdcl-2023\resources\views/admin/users/show.blade.php ENDPATH**/ ?>