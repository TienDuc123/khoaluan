<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Standard/title.qlns'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/Standard/standard.css')); ?>">
<link href="<?php echo e(asset('vendors/select2/css/select2.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(asset('vendors/iCheck/css/all.css')); ?>"  rel="stylesheet" type="text/css" />
<style>
    .select2-selection{
        height: 3rem !important;
    }
    .image-preview-input {
        position: relative;
        overflow: hidden;
        margin: 0px;
        color: #333;
        background-color: #fff;
        border-color: #ccc;
        height: 2rem;
        line-height: 1.8rem;
    }
    .image-preview-input input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
    .image-preview-input-title {
        margin-left:2px;
    }
    .image_radius{
        border-top-right-radius: 4px !important;
        border-top-left-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
        border-bottom-right-radius: 4px !important;
    }
    .fileinput .thumbnail > img{
        width:100%;
    }
    .color_a{
        color: #333;
    }
    .btn-file > input{
        width: auto;
    }
    .image-preview-filename, .image-preview, .image-preview-clear{
        height: 2rem;
    }
    .avatar-block{
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
    }
    .avatar-block img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .select2 {
        width: 100% !important;
    }
    .image-preview-input, .image-preview-filename, .image-preview-clear{
        height: 32px    ;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Standard/title.qlns'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
<!-- page trang ở đây -->
<section class="content-body">
    <form action="<?php echo e(route('admin.thuongtruc.manacategory.createHuman')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="container-fuild mt-3">
            <div class="row">
                <div class="col-md-2">
                    <span><?php echo app('translator')->get('project/Standard/title.mans'); ?></span>
                    <span class="text-danger">*</span>
                </div>
                <div class="col-md-5">
                    <span><?php echo app('translator')->get('project/Standard/title.tendn'); ?></span>
                    <span class="text-danger">*</span>
                </div>
                <div class="col-md-5">
                    <span><?php echo app('translator')->get('project/Standard/title.tenns'); ?></span>
                    <span class="text-danger">*</span>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-2">
                    <input type="text" class="form-control " placeholder="<?php echo app('translator')->get('project/Standard/title.mans'); ?>" name="mans" required>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control " placeholder="<?php echo app('translator')->get('project/Standard/title.tendn'); ?>" name="tendn" autocomplete="off" required>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control " placeholder="<?php echo app('translator')->get('project/Standard/title.tenns'); ?>" name="tenns" required>
                </div>
            </div>
        </div>
        <div class="container-fuild mt-3">
            <div class="row">
                <div class="col-md-2">
                    <span><?php echo app('translator')->get('project/Standard/title.chucvu'); ?></span>
                    <span class="text-danger">*</span>
                </div>
                <div class="col-md-5">
                    <span><?php echo app('translator')->get('project/Standard/title.donvi'); ?></span>
                    <span class="text-danger">*</span>
                </div>
                <div class="col-md-5">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-2">
                    <select class="form-control " name="chucvu" required>
                        <option value="">--Không phân quyền</option>
                        <?php $__currentLoopData = $chucvu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cv->id); ?>">
                                <?php echo e($cv->ten_chuc_vu); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-5">
                    <select class="form-control " name="donvi" required>
                        <?php $__currentLoopData = $donvi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($dv->id); ?>">
                                <?php echo e($dv->ten_donvi); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-5 item-group-button">
                    <button class="btn btn-benchmark mr-2 " type="button" id="btn-refress" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.lammoi'); ?>">
                        <i class="bi bi-arrow-clockwise" style="font-size: 35px;color: red;"></i>
                    </button>
                    <button class="btn btn-benchmark mr-2 " type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.luu'); ?>">
                        <i class="bi bi-save" style="font-size: 35px;color: #50cd89;"></i>
                    </button>
                    <a href="<?php echo e(route('admin.thuongtruc.manacategory.exportHumans')); ?>" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.xuat_excel'); ?>">
                        <i class="bi bi-file-earmark-excel " style="font-size: 35px;color: #50cd89;"></i>
                    </a>
                </div>
            </div>
        </div>
    </form>

    <h2 class="mt-3">
        <?php echo app('translator')->get('project/Standard/title.dsns'); ?>
    </h2>
    <div class="form-standard">

        <table class="table table-striped table-bordered" id="table" width="100%">
            <thead>
             <tr>
                <th ><?php echo app('translator')->get('project/Standard/title.mans'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.tendn'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.tenns'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.donvi'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.chucvu'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.nguoit'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.hanhd'); ?></th>
             </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</section>

<!-- modal -->
<div class="modal" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDeleteLabel">
                    <?php echo app('translator')->get('project/Standard/title.thongbao'); ?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="badge ">
                    <?php echo app('translator')->get('project/Standard/message.error.hoixoaTc'); ?>
                </span>
                <br>
                <span class="badge ">
                    <?php echo app('translator')->get('project/Standard/message.error.khoantac'); ?>
                </span>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-danger" id="btn-delete-human">
                    <?php echo app('translator')->get('project/Standard/title.xoa'); ?>
                </a>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <?php echo app('translator')->get('project/Standard/title.huy'); ?>
                </button>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdateLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalUpdateLabel">
                    <?php echo app('translator')->get('project/Standard/title.cnttns'); ?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('admin.thuongtruc.manacategory.updateHuman')); ?>" method="post" id="update-human" enctype="multipart/form-data">
                <div class="modal-body">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" id="id_user" name="id_user">
                    <div class="container-fuild">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="forAvatar" class="text-center">
                                    <span><?php echo app('translator')->get('project/Standard/title.avatar'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                    <div class="avatar-block">
                                        <img src="" alt="" class="old-avatar">
                                    </div>
                                </label>
                                <div class="block-avatar">
                                    <!-- input view -->
                                    <div class="input-group image-preview">
                                        <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                        <span class="input-group-btn">
                                            <!-- image-preview-clear button -->
                                            <button type="button" class="btn btn-secondary image-preview-clear" style="display:none; border-radius:0 !important; border: 1px solid rgba(0, 0, 0, 0.16);">
                                                <ion-icon name="close-outline"></ion-icon> Clear
                                            </button>
                                            <!-- image-preview-input -->
                                            <div class="btn btn-secondary image_radius image-preview-input" style="margin-left:-3px;">
                                                <ion-icon name="document-outline"></ion-icon>
                                                <span class="image-preview-input-title">Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif" name="image"/> <!-- rename it -->
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div>
                                    <label for="forMaNS">
                                        <span><?php echo app('translator')->get('project/Standard/title.mans'); ?></span>
                                        <!-- <span class="text-danger">*</span> -->
                                    </label>
                                    <input type="text" class="form-control " id="forMaNS" placeholder="<?php echo app('translator')->get('project/Standard/title.mans'); ?>" name="upmans" required>
                                </div>

                                <div class="mt-5">
                                    <label for="forTenDN">
                                        <span><?php echo app('translator')->get('project/Standard/title.tendn'); ?></span>
                                        <!-- <span class="text-danger">*</span> -->
                                    </label>
                                    <input type="text" class="form-control " id="forTenDN" placeholder="<?php echo app('translator')->get('project/Standard/title.tendn'); ?>" name="uptendn" disabled>
                                </div>
                            </div>
                            <div class="form-group col-md-5">
                                <div>
                                    <label for="forTenNS">
                                        <span><?php echo app('translator')->get('project/Standard/title.tenns'); ?></span>
                                        <!-- <span class="text-danger">*</span> -->
                                    </label>
                                    <input type="text" class="form-control " id="forTenNS" placeholder="<?php echo app('translator')->get('project/Standard/title.tenns'); ?>" name="uptenns" required>
                                </div>

                                <div class="mt-5">
                                    <label for="forSdt">
                                        <span><?php echo app('translator')->get('project/Standard/title.sdt'); ?></span>
                                        <!-- <span class="text-danger">*</span> -->
                                    </label>
                                    <input type="text" class="form-control " id="forSdt" placeholder="<?php echo app('translator')->get('project/Standard/title.sdt'); ?>" name="upsdt">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="forChucvu">
                                    <span><?php echo app('translator')->get('project/Standard/title.chucvu'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <select class="form-control " name="upchucvu" id="forChucvu" >
                                    <option value="">--Không phân quyền</option>
                                    <?php $__currentLoopData = $chucvu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($cv->id); ?>" >
                                            <?php echo e($cv->ten_chuc_vu); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="forDonvi">
                                    <span><?php echo app('translator')->get('project/Standard/title.donvi'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <select class="form-control " name="updonvi" id="forDonvi" required>
                                    <?php $__currentLoopData = $donvi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($dv->id); ?>">
                                            <?php echo e($dv->ten_donvi); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="forDiaChi">
                                    <span><?php echo app('translator')->get('project/Standard/title.diachi'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <input type="text" class="form-control " id="forDiaChi" placeholder="<?php echo app('translator')->get('project/Standard/title.diachi'); ?>" name="updiachi">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="forMota">
                                    <span><?php echo app('translator')->get('project/Standard/title.mota'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <input type="text" class="form-control " id="forMota" placeholder="<?php echo app('translator')->get('project/Standard/title.mota'); ?>" name="upmota">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <?php if(Sentinel::inRole('admin') || Sentinel::inRole('operator')): ?>
                        <a type="button" class="btn btn-warning" id="btn-reset-pass">
                            <?php echo app('translator')->get('project/Standard/title.resetPass'); ?>
                        </a>
                    <?php endif; ?>
                    <button type="submit" class="btn btn-primary" id="btn-update-unit">
                        <?php echo app('translator')->get('project/Standard/title.thaydoi'); ?>
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <?php echo app('translator')->get('project/Standard/title.huy'); ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Kết thúc page trang -->

    <!-- Kết thúc trang -->
    </section>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('footer_scripts'); ?>
<script type="text/javascript" src="<?php echo e(asset('vendors/dropzone/js/dropzone.js')); ?>" ></script>

<script src="<?php echo e(asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js')); ?>" ></script>
<script src="<?php echo e(asset('vendors/iCheck/js/icheck.js')); ?>"></script>
<script src="<?php echo e(asset('js/pages/form_examples.js')); ?>"></script>
<script>
    var $url_path = '<?php echo url('/'); ?>';
    var $asset = '<?php echo asset('/'); ?>';

    $(function(){
        table = $('#table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "<?php echo route('admin.thuongtruc.manacategory.dataHuman'); ?>",
            columns: [
                { data: 'ma_nhansu', name: 'ma_nhansu' },
                { data: 'email', name: 'email' },
                { data: 'name', name: 'name' },
                { data: 'tenDV', name: 'tenDV' },
                { data: 'tenChucvu', name: 'tenChucvu' },
                { data: 'createHuman', name: 'createHuman' },
                { data: 'actions', name: 'actions' ,className: 'action'},
            ],
        });
    });

    $('select[name="donvi"]').select2({
        placeholder: "<?php echo app('translator')->get('project/Standard/title.donvi'); ?>",
        allowClear: false
    });
    // $('select[name="chucvu"]').select2({
    //     placeholder: "<?php echo app('translator')->get('project/Standard/title.chucvu'); ?>",
    //     allowClear: false
    // });

    $("#btn-refress").click(function() {
        $('input[name="mans"]').val("");
        $('input[name="tendn"]').val("");
        $('input[name="tenns"]').val("");

        // $('select[name="chucvu"]').select2("val", "");
        // $('select[name="donvi"]').select2("val", "");
    })


    $('#modalDelete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var route = "<?php echo e(route('admin.thuongtruc.manacategory.deleteHuman')); ?>" + "?id_delete=" + id;
        var modal = $(this);
        modal.find('#btn-delete-human').attr('href' , route);
    })

    $('#modalUpdate').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')

        let loadData = "<?php echo e(route('admin.thuongtruc.manacategory.dataHuman')); ?>" + "?id_user=" + id;
        fetch(loadData, {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        })
            .then((response) => response.json())
            .then((data) => {
                if(data.pic != null && data.pic != ""){
                    $(".old-avatar").attr("src", $asset + data.pic);
                }else{
                    $(".old-avatar").attr("src", $asset + "images/authors/no_avatar.jpg");
                }
                $('input[name="upmans"]').val(data.ma_nhansu)
                $('input[name="uptendn"]').val(data.email)
                $('input[name="uptenns"]').val(data.name)
                $('input[name="upsdt"]').val(data.phone)
                $('select[name="upchucvu"]').val(data.chucvu)
                $('select[name="updonvi"]').val(data.donvi_id)
                $('input[name="updiachi"]').val(data.address)
                $('input[name="upmota"]').val(data.description)
                $('input[name="id_user"]').val(data.id)
                $("#btn-reset-pass").attr("href", "<?php echo e(route('admin.thuongtruc.manacategory.resetPass')); ?>" + "?id_user=" + data.id);
            })
    })


    // $("#btn-update-unit").click(function() {
    //     $("#update-human").submit();
    // })

</script>

<script>
    // input file
    $(document).on('click', '#close-preview', function(){
        $('.image-preview').popover('hide');
        // Hover befor close the preview
        $('.image-preview').hover(
            function () {
                $('.image-preview').popover('show');
            },
            function () {
                $('.image-preview').popover('hide');
            }
        );
    });

    $(function() {
        // Create the close button
        var closebtn = $('<button/>', {
            type:"button",
            text: 'x',
            id: 'close-preview',
            style: 'font-size: initial;',
        });
        closebtn.attr("class","close float-right");
        // Set the popover default content
        $('.image-preview').popover({
            trigger:'manual',
            html:true,
            title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
            content: "There's no image",
            placement:'bottom'
        });
        // Clear event
        $('.image-preview-clear').click(function(){
            $('.image-preview').attr("data-content","").popover('hide');
            $('.image-preview-filename').val("");
            $('.image-preview-clear').hide();
            $('.image-preview-input input:file').val("");
            $(".image-preview-input-title").text("Browse");
        });
        // Create the preview image
        $(".image-preview-input input:file").change(function (){
            var img = {
                id: 'dynamic',
                width:250,
                height:200
            };
            var file = this.files[0];
            var reader = new FileReader();
            // Set preview image into the popover data-content
            reader.onload = function (e) {
                $(".image-preview-input-title").text("Change");
                $(".image-preview-clear").show();
                $(".image-preview-filename").val(file.name);
            }
            reader.readAsDataURL(file);
        });
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\file_moi\xampp\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Standard/mana_manahuman.blade.php ENDPATH**/ ?>