<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Standard/title.qlcsdt'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/Standard/standard.css')); ?>">
<style>
    .select2-selection{
        height: 2rem !important;
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
    <?php echo app('translator')->get('project/Standard/title.qlcsdt'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->

<!-- page trang ở đây -->
<section class="content-body">
    <h2 class="mt-3">
        <?php echo app('translator')->get('project/Standard/title.dscsdt'); ?>
    </h2>
    <div class="form-standard">
        <div class="item-group-button right-block mb-2">
            <button class="btn btn-benchmark mr-2" data-toggle="modal" type="button" data-target="#modalCreate" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.tmcsdt'); ?>">
                <i class="bi bi-plus-square" style="font-size: 35px;color: red;"></i>
            </button>
            <a href="<?php echo e(route('admin.thuongtruc.manacategory.exportCSDT')); ?>" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.xuat_excel'); ?>">
                <i class="bi bi-file-earmark-excel " style="font-size: 35px;color: #50cd89;"></i>
            </a>
        </div>
        
        <table class="table table-striped table-bordered" id="table" width="100%">
            <thead>
             <tr>
                <th ><?php echo app('translator')->get('project/Standard/title.tcsdt'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.dchi'); ?></th>
                <!-- <th ><?php echo app('translator')->get('project/Standard/title.hanh'); ?></th> -->
                <th ><?php echo app('translator')->get('project/Standard/title.sdt'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.npt'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.hanhd'); ?></th>
             </tr>
            </thead>
            <tbody>  
            </tbody>                
        </table>
    </div>
</section>

<!-- Modal -->
<div class="modal " id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
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
                <a href="#" class="btn btn-danger" id="btn-delete-csdt">
                    <?php echo app('translator')->get('project/Standard/title.xoa'); ?>
                </a>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <?php echo app('translator')->get('project/Standard/title.huy'); ?>
                </button>
            </div>
        </div>
    </div>
</div>


<!-- modal Create -->
<div class="modal " id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="modalCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreateLabel">
                    <?php echo app('translator')->get('project/Standard/title.tmcsdt'); ?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('admin.thuongtruc.manacategory.createCSDT')); ?>" method="post" id="create-csdt">
                    <input type="hidden" name="id_create" id="id_create">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" id="id_unit" name="id_unit">
                    <div class="container-fuild">
                        <!-- <div class="row">
                            <div class="form-group col-md-4">
                                <label for="forAvatar" class="text-center">
                                    <span><?php echo app('translator')->get('project/Standard/title.hanh'); ?></span>
                                    <div class="avatar-block">
                                        <img src="" alt="" class="old-avatar">
                                    </div>
                                </label>
                                <div class="block-avatar">

                                    <div class="input-group image-preview">
                                        <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                        <span class="input-group-btn">

                                            <button type="button" class="btn btn-secondary image-preview-clear" style="display:none; border-radius:0 !important; border: 1px solid rgba(0, 0, 0, 0.16);">
                                                <span class="fa  fa-times"></span> Clear
                                            </button>

                                            <div class="btn btn-secondary image_radius image-preview-input" style="margin-left:-3px;">
                                                <span class="fa fa-folder-open"></span>
                                                <span class="image-preview-input-title">Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif" name="image"/>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label>
                                    <span><?php echo app('translator')->get('project/Standard/title.tcsdt'); ?></span>
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control " placeholder="<?php echo app('translator')->get('project/Standard/title.tcsdt'); ?>" name="tcsdt" required>
                            </div>
                            <div class="form-group col-md-5">
                                <label>
                                    <span><?php echo app('translator')->get('project/Standard/title.dchi'); ?></span>
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control " id="upDcCSDT" placeholder="<?php echo app('translator')->get('project/Standard/title.dchi'); ?>" name="dchi" required>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label >
                                    <span><?php echo app('translator')->get('project/Standard/title.npt'); ?></span>
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control " placeholder="<?php echo app('translator')->get('project/Standard/title.npt'); ?>" name="npt" required>
                            </div>
                            <div class="form-group col-md-5">
                                <label>
                                    <span><?php echo app('translator')->get('project/Standard/title.sdt'); ?></span>
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control " placeholder="<?php echo app('translator')->get('project/Standard/title.sdt'); ?>" pattern="[0-9.]+" name="sdt" required>
                            </div>
                        </div>
                    </div> 
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            <?php echo app('translator')->get('project/Standard/title.themmoi'); ?>
                        </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            <?php echo app('translator')->get('project/Standard/title.huy'); ?>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal update -->
<div class="modal " id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdateLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalUpdateLabel">
                    <?php echo app('translator')->get('project/Standard/title.cncsdt'); ?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('admin.thuongtruc.manacategory.updateCSDT')); ?>" method="post" id="update-csdt">
                <div class="modal-body">
                    <input type="hidden" name="id_update" id="id_update">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" id="id_unit" name="id_unit">
                    <div class="container-fuild">

                        
                        <!-- <div class="row">
                            <div class="form-group col-md-4">
                                <label for="forAvatar" class="text-center">
                                    <span><?php echo app('translator')->get('project/Standard/title.hanh'); ?></span>
                                    <div class="avatar-block">
                                        <img src="" alt="" class="old-avatar">
                                    </div>
                                </label>
                                <div class="block-avatar">
                                    <div class="input-group image-preview">
                                        <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                        <span class="input-group-btn">
                                            
                                            <button type="button" class="btn btn-secondary image-preview-clear" style="display:none; border-radius:0 !important; border: 1px solid rgba(0, 0, 0, 0.16);">
                                                <span class="fa  fa-times"></span> Clear
                                            </button>
                                            
                                            <div class="btn btn-secondary image_radius image-preview-input" style="margin-left:-3px;">
                                                <span class="fa fa-folder-open"></span>
                                                <span class="image-preview-input-title">Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif" name="image"/> 
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div> -->



                        <div class="row">
                            <div class="form-group col-md-5">
                                <label for="upTenCSDT">
                                    <span><?php echo app('translator')->get('project/Standard/title.tcsdt'); ?></span>
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control " id="upTenCSDT" placeholder="<?php echo app('translator')->get('project/Standard/title.tcsdt'); ?>" name="up_tencsdt" required>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="upDcCSDT">
                                    <span><?php echo app('translator')->get('project/Standard/title.dchi'); ?></span>
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control " id="upDcCSDT" placeholder="<?php echo app('translator')->get('project/Standard/title.dchi'); ?>" name="up_dc" required>
                            </div>
                            
                            
                        </div>
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label for="upNpc">
                                    <span><?php echo app('translator')->get('project/Standard/title.npt'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <input type="text" class="form-control " id="upNpc" placeholder="<?php echo app('translator')->get('project/Standard/title.npt'); ?>" name="up_npc" required>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="upSdtCSDT">
                                    <span><?php echo app('translator')->get('project/Standard/title.sdt'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <input type="text" class="form-control " id="upSdtCSDT" placeholder="<?php echo app('translator')->get('project/Standard/title.sdt'); ?>" name="up_sdt" required>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn-update-csdt">
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
            ajax: "<?php echo route('admin.thuongtruc.manacategory.datacsdt'); ?>",
            columns: [
                { data: 'ten_csdt', name: 'ten_csdt' },
                { data: 'dia_chi', name: 'dia_chi' },
                // { data: 'img', name: 'img' },
                { data: 'sdt_lienhe', name: 'sdt_lienhe' },
                { data: 'ns_phutrach', name: 'ns_phutrach' },
                { data: 'actions', name: 'actions' ,className: 'action'},
            ],            
        });
    });

    $("#btn-refress").click(function() {
        $("input[name='tcsdt']").val("");
        $("select[name='dchi']").val("0");
        $("select[name='hanh']").val("0");
        $("input[name='npt']").val("");
        $("input[name='sdt']").val("");
       
    });

    $('#modalDelete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var id = button.data('id') 
        var route = "<?php echo e(route('admin.thuongtruc.manacategory.deleteCSDT')); ?>" + "?id_delete=" + id;
        var modal = $(this);
        modal.find('#btn-delete-csdt').attr('href' , route);
    })

    $('#modalUpdate').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var id = button.data('id') 
        var route = "<?php echo e(route('admin.thuongtruc.manacategory.datacsdt')); ?>" + "?id_search=" + id;
        fetch(route, {
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
                    $(".old-avatar").attr("src", $asset + "images/authors/building.jpg");
                } 
                $("input[name='up_tencsdt']").val(data.ten_csdt);
                $("input[name='up_dc']").val(data.dia_chi);
                // $("select[name='up_hanh']").val(data.img_logo);
                $("input[name='up_npc']").val(data.ns_phutrach);
                $("input[name='up_sdt']").val(data.sdt_lienhe);
                $("input[name='id_update']").val(data.id);
            })
    })
    
    // $("#btn-update-csdt").click(function() {
    //     $("#update-csdt").submit();
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


<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp74\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Standard/mana_manacsdt.blade.php ENDPATH**/ ?>