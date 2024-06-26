<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Standard/title.qldv'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/Standard/standard.css')); ?>">
<link href="<?php echo e(asset('vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css')); ?>"  rel="stylesheet" media="screen"/>
<link href="<?php echo e(asset('css/pages/editor.css')); ?>" rel="stylesheet" type="text/css"/>
<style>
    .cke_chrome{
        margin: 0 !important;
        width: 100% !important;
    }
    .cke_dialog_tabs{
        display: flex !important;
    }
    #modal_unit .modal-xl{
        width: 1420px !important;
        max-width: unset !important;
    }
    #css_table{
        overflow-x: auto;
        width:100%;
        overflow-y: auto;
        max-height: 450px;
    }
    #idtableip{
        width:3000px;
    }
    .row_width{
        width:7rem;
    }
    .listlhcsg{
        width: 100%;
        border: none;
        outline: none;
    }
    .trash-btn{
        font-size: 20px;
        cursor: pointer;
    }
    .icon-oblig{
        color: red;
        font-size: 25px;
    }
    .select2-container .select2-selection--single{
        height: 44px;
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Standard/title.qldv'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
<!-- page trang ở đây -->
<section class="content-body">
    <?php if(Sentinel::inRole('admin') || Sentinel::inRole('operator')): ?>
    <div class="container-fuild mt-3">
        <div class="row">
            <div class="col-md-2">
                <span><?php echo app('translator')->get('project/Standard/title.madvi'); ?></span>
            </div>
            <div class="col-md-5">
                <span><?php echo app('translator')->get('project/Standard/title.tendvi'); ?></span>
            </div>

        </div>
        <form action="<?php echo e(route('admin.thuongtruc.manacategory.createUnit')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="row mt-3">
                <div class="col-md-2">
                    <input type="text" class="form-control " placeholder="<?php echo app('translator')->get('project/Standard/title.madvi'); ?>" name="madvi" required>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control " placeholder="<?php echo app('translator')->get('project/Standard/title.tendvi'); ?>" name="tendvi" required>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-md-2">
                    <span><?php echo app('translator')->get('project/Standard/title.loaidv'); ?></span>
                </div>
                <div class="col-md-2">
                    <span><?php echo app('translator')->get('project/Standard/title.truongdvi'); ?></span>
                </div>
                <div class="col-md-1">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-2">
                    <select name="loaidv" class="form-control " required>
                        <option hidden value=""><?php echo app('translator')->get('project/Standard/title.loaidv'); ?></option>
                        <?php $__currentLoopData = $loai_dv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ldv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($ldv->id); ?>"><?php echo e($ldv->loai_donvi); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-control "  name="truongdvi">
                        <option hidden></option>
                        <?php $__currentLoopData = $truong_dv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-benchmark mr-2 " type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.luu'); ?>">
                        <i class="bi bi-save" style="font-size: 30px;color: #50cd89;"></i>
                    </button>
                </div>
                
            </div>
        </form>
    </div>
    <?php endif; ?>
    <div class="form-standard">

        <table class="table table-striped table-bordered" id="table" width="100%">
            <thead>
             <tr>
                <th ><?php echo app('translator')->get('project/Standard/title.madvi'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.tendvi'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.loaidv'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.dvcc'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.truongdvi'); ?></th>
                <!-- <th ><?php echo app('translator')->get('project/Standard/title.ngayt'); ?></th> -->
                <!-- <th ><?php echo app('translator')->get('project/Standard/title.nguoit'); ?></th> -->
                <th ><?php echo app('translator')->get('project/Standard/title.hanhd'); ?></th>
             </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
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
                <a href="#" class="btn btn-danger" id="btn-delete-unit">
                    <?php echo app('translator')->get('project/Standard/title.xoa'); ?>
                </a>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <?php echo app('translator')->get('project/Standard/title.huy'); ?>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- modal update -->
<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdateLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalUpdateLabel">
                    <?php echo app('translator')->get('project/Standard/title.cnttdv'); ?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('admin.thuongtruc.manacategory.updateUnit')); ?>" method="post" id="update-unit">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" id="id_unit" name="id_unit">
                    <div class="container-fuild">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="forMaDV">
                                    <span><?php echo app('translator')->get('project/Standard/title.madvi'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <input type="number" class="form-control chec_rq" id="forMaDV" placeholder="<?php echo app('translator')->get('project/Standard/title.madvi'); ?>" name="madvi">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="forTenDV">
                                    <span><?php echo app('translator')->get('project/Standard/title.tendvi'); ?></span>
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control " id="forTenDV" placeholder="<?php echo app('translator')->get('project/Standard/title.tendvi'); ?>" required name="tendvi">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="forTenNgan">
                                    <span><?php echo app('translator')->get('project/Standard/title.tenngan'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <input type="text" class="form-control " id="forTenNgan" placeholder="<?php echo app('translator')->get('project/Standard/title.tenngan'); ?>" name="tenngan">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="forDvcc">
                                    <span><?php echo app('translator')->get('project/Standard/title.dvcc'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <select name="dvcc" id="forDvcc" class="form-control ">
                                    <option hidden value="0">
                                        ---- <?php echo app('translator')->get('project/Standard/title.chondvql'); ?>
                                    </option>
                                    <option value="">
                                        <?php echo app('translator')->get('project/Standard/title.kcdvcc'); ?>
                                    </option>
                                    <?php $__currentLoopData = $loai_dv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ldv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <optgroup label="<?php echo e($ldv->loai_donvi); ?>">
                                            <?php $__currentLoopData = $donvi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($value->loai_dv_id == $ldv->id): ?>
                                                    <option value="<?php echo e($value->id); ?>">
                                                        <?php echo e($value->ten_donvi); ?>

                                                    </option>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </optgroup>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="forDiaChi">
                                    <span><?php echo app('translator')->get('project/Standard/title.diachi'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <input type="text" class="form-control " id="forDiaChi" placeholder="<?php echo app('translator')->get('project/Standard/title.diachi'); ?>" name="diachi">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="forMota">
                                    <span><?php echo app('translator')->get('project/Standard/title.mota'); ?></span>
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control chec_rq" id="forMota" placeholder="<?php echo app('translator')->get('project/Standard/title.mota'); ?>" required name="mota">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="forLinhvuchd">
                                    <span><?php echo app('translator')->get('project/Standard/title.lvhd'); ?></span>
                                </label>
                                <input type="text" class="form-control " id="forLinhvuchd" placeholder="<?php echo app('translator')->get('project/Standard/title.lvhd'); ?>" name="linhvuc">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="forLhcsgd">
                                    <span><?php echo app('translator')->get('project/Standard/title.lhcsgd'); ?></span>
                                </label>

                                <select name="lhcsgd" class="form-control " id="forLhcsgd">
                                    <option value="" hidden><?php echo app('translator')->get('project/Standard/title.lhcsgd'); ?></option>
                                    <option value="cl"><?php echo app('translator')->get('project/Standard/title.conglap'); ?></option>
                                    <option value="ncl"><?php echo app('translator')->get('project/Standard/title.ncl'); ?></option>
                                    <option value="bc"><?php echo app('translator')->get('project/Standard/title.bancong'); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="forTruongDV">
                                    <span><?php echo app('translator')->get('project/Standard/title.truongdvi'); ?></span>
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-control " id="forTruongDV" required name="truongdvi">
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="forCB-DBCL">
                                    <span><?php echo app('translator')->get('project/Standard/title.cbdbcl'); ?></span>
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-control " id="forCB-DBCL" required name="cbdbcl">
                                    <option hidden>
                                        <?php echo app('translator')->get('project/Standard/title.cbdbcl'); ?>
                                    </option>
                                    <?php $__currentLoopData = $truong_dv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="forTenEN">
                                    <span><?php echo app('translator')->get('project/Standard/title.tenen'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <input type="text" class="form-control " id="forTenEN" placeholder="<?php echo app('translator')->get('project/Standard/title.tenen'); ?>" name="tenen">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="forDVcu">
                                    <span><?php echo app('translator')->get('project/Standard/title.tendvcu'); ?></span>
                                </label>
                                <input type="text" class="form-control " id="forDVcu" placeholder="<?php echo app('translator')->get('project/Standard/title.tendvcu'); ?>" name="tendvcu">
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="form-group col-md-4">
                                <label for="forCTDTName">
                                    <span><?php echo app('translator')->get('project/Standard/title.tenctdt'); ?></span>
                                </label>
                                <input type="text" class="form-control " id="forCTDTName" placeholder="<?php echo app('translator')->get('project/Standard/title.tenctdt'); ?>" name="tenctdt">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="forCTDTNameEN">
                                    <span><?php echo app('translator')->get('project/Standard/title.tenctdten'); ?></span>
                                </label>
                                <input type="text" class="form-control " id="forCTDTNameEN" placeholder="<?php echo app('translator')->get('project/Standard/title.tenctdten'); ?>" name="tenctdten">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="forCTDTOld">
                                    <span><?php echo app('translator')->get('project/Standard/title.tenctdtcu'); ?></span>
                                </label>
                                <input type="text" class="form-control " id="forCTDTOld" placeholder="<?php echo app('translator')->get('project/Standard/title.tenctdtcu'); ?>" name="tenctdtcu">
                            </div>
                        </div> -->
                        <div class="row">
                            <!-- <div class="form-group col-md-6">
                                <label for="forMaCTDT">
                                    <span><?php echo app('translator')->get('project/Standard/title.mactdt'); ?></span>
                                </label>
                                <input type="text" class="form-control " id="forMaCTDT" placeholder="<?php echo app('translator')->get('project/Standard/title.mactdt'); ?>" name="mactdt">
                            </div> -->
                            <div class="form-group col-md-6">
                                <label for="forLoaiDv">
                                    <span><?php echo app('translator')->get('project/Standard/title.loaidv'); ?></span>
                                </label>
                                <select name="loai_dv" id="forLoaiDv" class="form-control ">
                                    <option hidden value=""><?php echo app('translator')->get('project/Standard/title.loaidv'); ?></option>
                                    <?php $__currentLoopData = $loai_dv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ldv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($ldv->id); ?>"><?php echo e($ldv->loai_donvi); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="forDienthoai">
                                    <span><?php echo app('translator')->get('project/Standard/title.dienthoai'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <input type="text" class="form-control " id="forDienthoai" placeholder="<?php echo app('translator')->get('project/Standard/title.dienthoai'); ?>" name="dienthoai">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="forEmail">
                                    <span><?php echo app('translator')->get('project/Standard/title.email'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <input type="text" class="form-control " id="forEmail" placeholder="<?php echo app('translator')->get('project/Standard/title.email'); ?>" name="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="forwebsite">
                                    <span><?php echo app('translator')->get('project/Standard/title.website'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <input type="text" class="form-control " id="forwebsite" placeholder="<?php echo app('translator')->get('project/Standard/title.website'); ?>" name="website">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="forNamTL">
                                    <span><?php echo app('translator')->get('project/Standard/title.namtl'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <input type="number" class="form-control " id="forNamTL" placeholder="<?php echo app('translator')->get('project/Standard/title.namtl'); ?>" min="1900" max="2099" step="1" value="2022" name="namtl">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="forNamBD">
                                    <span><?php echo app('translator')->get('project/Standard/title.nambd'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <input type="number" class="form-control " id="forNamBD" placeholder="<?php echo app('translator')->get('project/Standard/title.nambd'); ?>" min="1900" max="2099" step="1" value="2022" name="nambd">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="forNamCB">
                                    <span><?php echo app('translator')->get('project/Standard/title.namcb'); ?></span>
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <input type="number" class="form-control " id="forNamCB" placeholder="<?php echo app('translator')->get('project/Standard/title.namcb'); ?>" min="1900" max="2099" step="1" value="2022" name="namcb">
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="form-group col-md-12">
                                <div class="card my-3">
                                    <div class="card-header bg-success text-white ">
                                        <div class="bootstrap-admin-box-title editor-clr">
                                            <i class="livicon" data-name="thermo-down" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                            <?php echo app('translator')->get('project/Standard/title.motantl'); ?>
                                        </div>
                                    </div>
                                    <div class="bootstrap-admin-card-content">
                                        <textarea id="forMotaNamTL" name="motantl"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        
                    </div>

                    <div class="modal-footer">
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
</div>


<div class="modal fade" id="modal_unit" tabindex="-1" role="dialog" aria-labelledby="modalUnitLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalUnitLabel">
                    <?php echo app('translator')->get('project/Standard/title.nttdv'); ?>
                </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="file" class="mb-2" name="files" id="file"  accept=".xlsx, .xls, .csv">
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success btn-benchmark mb-2" id="import_unit"><?php echo app('translator')->get('project/Standard/title.nhap'); ?></button>
                    <button class="btn btn-success btn-benchmark m-2" id="add_unit"><?php echo app('translator')->get('project/Standard/title.themdv'); ?></button>
                </div>
                <div id="css_table">
                    <table id="idtableip" class="table table-striped" border="1"></table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="import_unit_data">
                    <?php echo app('translator')->get('project/Standard/title.save'); ?>
                </button>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <?php echo app('translator')->get('project/Standard/title.huy'); ?>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- /Kết thúc page trang -->

    <!-- Kết thúc trang -->
    </section>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('footer_scripts'); ?>
<script src="<?php echo e(asset('vendors/ckeditor/js/ckeditor.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/tinymce/js/tinymce.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/pages/editor.js')); ?>" type="text/javascript"></script>

<script>
    $(function(){
        table = $('#table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "<?php echo route('admin.thuongtruc.manacategory.dataUnit'); ?>",
            columns: [
                { data: 'ma_donvi', name: 'ma_donvi' },
                { data: 'ten_donvi', name: 'ten_donvi' },
                { data: 'loai_dv', name: 'loai_dv' },
                { data: 'dvcc', name: 'dvcc' },
                { data: 'truongDv', name: 'truongDv' },
                // { data: 'createdAt', name: 'createdAt' },
                // { data: 'createHuman', name: 'createHuman' },
                { data: 'actions', name: 'actions' ,className: 'action'},
            ],
        });
    });

    $('#modalDelete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var route = "<?php echo e(route('admin.thuongtruc.manacategory.deleteUnit')); ?>" + "?id_delete=" + id;
        var modal = $(this);
        modal.find('#btn-delete-unit').attr('href' , route);
    })


    // CKEDITOR.replace( 'forMotaNamTL' );
    CKEDITOR.replace( 'forGT', {
        height: 300,
        filebrowserImageUploadUrl : '<?php echo route('admin.thuongtruc.manacategory.uploadPhoto').'?_token='.csrf_token(); ?>'
    } );
    CKEDITOR.replace( 'forCCTC', {
        height: 300,
        filebrowserImageUploadUrl : '<?php echo route('admin.thuongtruc.manacategory.uploadPhoto').'?_token='.csrf_token(); ?>'
    } );

    $('#modalUpdate').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        $("#id_unit").val(id);
        let loadData = "<?php echo e(route('admin.thuongtruc.manacategory.dataUnit')); ?>" + "?id=" + id;
        console.log(id)
        fetch(loadData, {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        })
            .then((response) => response.json())
            .then((data) => {
                $('#forTruongDV').empty().trigger("change");
                data[1].forEach((item, index) => {
                    // console.log(item)
                    var newOption = new Option(item.name, item.id, false, false);
                    $('#forTruongDV').append(newOption).trigger('change');
                })

                /// Sai
                $("#forMaDV").val(data[0].ma_donvi);
                $("#forTenDV").val(data[0].ten_donvi);
                $("#forTenNgan").val(data[0].ten_ngan);
                $("#forDiaChi").val(data[0].dia_chi);
                $("#forMota").val(data[0].mo_ta);
                $("#forTruongDV").val(data[0].truong_dv);
                $('#forTruongDV').trigger('change');

                $("#forCB-DBCL").val(data[0].canbo_dbcl);
                $("#forTenEN").val(data[0].ten_tienganh);
                $("#forDVcu").val(data[0].ten_donvi_cu);
                //$("#forCTDTName").val(data.ten_ctdt);
                //$("#forCTDTNameEN").val(data.ten_ctdt_tienganh);
                //$("#forCTDTOld").val(data.ten_ctdt_cu);
                //$("#forMaCTDT").val(data.ma_ctdt);
                $("#forLhcsgd").val(data[0].lhcsgd);
                $("#forLinhvuchd").val(data[0].lvhd);
                $("#forLoaiDv").val(data[0].loai_dv_id);
                $("#forDienthoai").val(data[0].dien_thoai);
                $("#forEmail").val(data[0].email);
                $("#forwebsite").val(data[0].website);
                $("#forNamTL").val(data[0].nam_thanhlap);
                $("#forNamBD").val(data[0].nam_batdau);
                $("#forNamCB").val(data[0].nam_capbang);
                $("#forDvcc").val(data[0].dvcc);
                // ẩn chính nó đi


                //CKEDITOR.instances['forMotaNamTL'].setData(data.mota_nam_thanhlap);
                CKEDITOR.instances['forGT'].setData(data[0].gioi_thieu);
                CKEDITOR.instances['forCCTC'].setData(data[0].co_cau_tochuc);
            })
    })

    // $("#btn-update-unit").click(function() {
    //     $("#update-unit").submit();
    // })

    $.fn.modal.Constructor.prototype._enforceFocus = function() {
        // modal_this = this
        // $(document).on('focusin', function (e) {
        //     if (modal_this.$element[0] !== e.target
        //         && !modal_this.$element.has(e.target).length
        //         && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select')
        //         && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
        //         modal_this.$element.focus()
        //     }
        // })
    };
</script>


<script>
    $("#add_unit").hide();
    var tienduc = 0;
    //Import Excel modal
    $('#import_unit').on('click', function () {
        var f =  $("#forMaDVIP").val(1);
        var formData = new FormData();
        formData.append('file', $('#file')[0].files[0]);
        formData.append('_token', '<?php echo e(csrf_token()); ?>');

        $.ajax({
            url : "<?php echo route('admin.thuongtruc.manacategory.importUnit'); ?>",
            type : 'POST',
            data : formData,
            processData: false,  // tell jQuery not to process the data
            contentType: false,  // tell jQuery not to set contentType
            enctype: 'multipart/form-data',
            success : function(data) {
                $("#idtableip").empty();
                $("#add_unit").show();
                var thead = `
                        <thead class="btn-success ">
                            <tr class="border ">
                                <th class="row_width p-2">
                                    <?php echo app('translator')->get('project/Standard/title.madv'); ?>
                                    <span class="icon-oblig">*</span>
                                </th>
                                <th class="row_width p-2">
                                    <?php echo app('translator')->get('project/Standard/title.tendvi'); ?>
                                    <span class="icon-oblig">*</span>
                                </th>
                                <th class="row_width p-2"><?php echo app('translator')->get('project/Standard/title.tenngan'); ?></th>
                                <th class="row_width p-2"><?php echo app('translator')->get('project/Standard/title.diachi'); ?></th>
                                <th class="row_width p-2"><?php echo app('translator')->get('project/Standard/title.mota'); ?></th>
                                <th class="row_width p-2"><?php echo app('translator')->get('project/Standard/title.lvhd'); ?></th>
                                <th class="row_width p-2"><?php echo app('translator')->get('project/Standard/title.lhcsgd'); ?></th>
                                <th class="row_width p-2">
                                    <?php echo app('translator')->get('project/Standard/title.truongdvi'); ?>
                                    <span class="icon-oblig">*</span>
                                </th>
                                <th class="row_width p-2">
                                    <?php echo app('translator')->get('project/Standard/title.cbdbcl'); ?>
                                    <span class="icon-oblig">*</span>
                                </th>
                                <th class="row_width p-2"><?php echo app('translator')->get('project/Standard/title.dvcc'); ?></th>
                                <th class="row_width p-2"><?php echo app('translator')->get('project/Standard/title.tenen'); ?></th>
                                <th class="row_width p-2"><?php echo app('translator')->get('project/Standard/title.tendvcu'); ?></th>
                                <th class="row_width p-2"><?php echo app('translator')->get('project/Standard/title.loaidv'); ?></th>
                                <th class="row_width p-2"><?php echo app('translator')->get('project/Standard/title.dienthoai'); ?></th>
                                <th class="row_width p-2"><?php echo app('translator')->get('project/Standard/title.email'); ?></th>
                                <th class="row_width p-2"><?php echo app('translator')->get('project/Standard/title.website'); ?></th>
                                <th class="row_width p-2"><?php echo app('translator')->get('project/Standard/title.namtl'); ?></th>
                                <th class="row_width p-2"><?php echo app('translator')->get('project/Standard/title.nambd'); ?></th>
                                <th class="row_width p-2"><?php echo app('translator')->get('project/Standard/title.namcb'); ?></th>
                                <th class="row_width p-2"><?php echo app('translator')->get('project/Standard/title.thaotac'); ?></th>
                            </tr>
                        </thead>
                        <tbody id="idtbody"></tbody>
                `
                $("#idtableip").append(thead);
                data.forEach((item, index) => {
                    var add = `
                        <tr class="row_number">
                                <td contenteditable class="text-center p-2 row0">${item.madv}</td>
                                <td contenteditable class="text-center p-2 row1">${item.tendv}</td>
                                <td contenteditable class="text-center p-2 row2">${item.tenngan}</td>
                                <td contenteditable class="text-center p-2 row3">${item.diachi}</td>
                                <td contenteditable class="text-center p-2 row4">${item.mota}</td>
                                <td contenteditable class="text-center p-2 row5">${item.lvhd}</td>
                                <td class="text-center p-2 row6">
                                    <select class="listlhcsg border-0 w-100">
                                        <option value='cl'><?php echo app('translator')->get('project/Standard/title.conglap'); ?></option>
                                        <option value='ncl'><?php echo app('translator')->get('project/Standard/title.ncl'); ?></option>
                                        <option value='bc'><?php echo app('translator')->get('project/Standard/title.bancong'); ?></option>
                                    </select>
                                </td>
                                <td class="text-center p-2 row7">
                                    <select class="listtruondv border-0 w-100">
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value='<?php echo e($us->id); ?>'><?php echo e($us->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </td>
                                <td class="text-center p-2 row8">
                                    <select class="listcbdbcl border-0 w-100">
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value='<?php echo e($us->id); ?>'><?php echo e($us->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </td>
                                <td class="text-center p-2 row9">
                                    <select class="pcc border-0 w-100">
                                        <option value="">
                                            <?php echo app('translator')->get('project/Standard/title.kcdvcc'); ?>
                                        </option>
                                        <?php $__currentLoopData = $loai_dv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ldv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <optgroup label="<?php echo e($ldv->loai_donvi); ?>">
                                                <?php $__currentLoopData = $donvi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($value->loai_dv_id == $ldv->id): ?>
                                                        <option value="<?php echo e($value->id); ?>">
                                                            <?php echo e($value->ten_donvi); ?>

                                                        </option>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </optgroup>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </td>
                                <td contenteditable class="text-center p-2 row10">${item.tenta}</td>
                                <td contenteditable class="text-center p-2 row11">${item.tendvc}</td>
                                <td class="text-center p-2 row12">
                                    <select class="listloaidv border-0 w-100">
                                        <?php $__currentLoopData = $loai_dv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ldv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value='<?php echo e($ldv->id); ?>'><?php echo e($ldv->loai_donvi); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </td>
                                <td contenteditable class="text-center p-2 row13">${item.dienthoai}</td>
                                <td contenteditable class="text-center p-2 row14">${item.email}</td>
                                <td contenteditable class="text-center p-2 row15">${item.website}</td>
                                <td contenteditable class="text-center p-2 row16">${item.namtl}</td>
                                <td contenteditable class="text-center p-2 row17">${item.nambd}</td>
                                <td contenteditable class="text-center p-2 row18">${item.namcb}</td>
                                <td contenteditable class="text-center p-2 trash-btn">
                                    <ion-icon name="trash-outline" ></ion-icon>
                                </td>

                            </tr>
                    `;
                    $("#idtbody").append(add);
                });
            }
        });
    })

    $('#add_unit').on('click',()=>{
        var adds = `
            <tr class="row_number">
                <td contenteditable class="text-center p-2 row0"></td>
                <td contenteditable class="text-center p-2 row1"></td>
                <td contenteditable class="text-center p-2 row2"></td>
                <td contenteditable class="text-center p-2 row3"></td>
                <td contenteditable class="text-center p-2 row4"></td>
                <td contenteditable class="text-center p-2 row5"></td>
                <td class="text-center p-2 row6">
                    <select class="listlhcsg border-0 w-100">
                        <option value='cl'><?php echo app('translator')->get('project/Standard/title.conglap'); ?></option>
                        <option value='ncl'><?php echo app('translator')->get('project/Standard/title.ncl'); ?></option>
                        <option value='bc'><?php echo app('translator')->get('project/Standard/title.bancong'); ?></option>
                    </select>
                </td>
                <td class="text-center p-2 row7">
                    <select class="listtruondv border-0 w-100">
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value='<?php echo e($us->id); ?>'><?php echo e($us->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </td>
                <td class="text-center p-2 row8">
                    <select class="listcbdbcl border-0 w-100">
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value='<?php echo e($us->id); ?>'><?php echo e($us->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </td>
                <td class="text-center p-2 row9">
                    <select class="pcc border-0 w-100">
                        <option value="">
                            <?php echo app('translator')->get('project/Standard/title.kcdvcc'); ?>
                        </option>
                        <?php $__currentLoopData = $loai_dv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ldv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <optgroup label="<?php echo e($ldv->loai_donvi); ?>">
                                <?php $__currentLoopData = $donvi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($value->loai_dv_id == $ldv->id): ?>
                                        <option value="<?php echo e($value->id); ?>">
                                            <?php echo e($value->ten_donvi); ?>

                                        </option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </optgroup>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </td>
                <td contenteditable class="text-center p-2 row10"></td>
                <td contenteditable class="text-center p-2 row11"></td>
                <td class="text-center p-2 row12">
                    <select class="listloaidv border-0 w-100">
                        <?php $__currentLoopData = $loai_dv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ldv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value='<?php echo e($ldv->id); ?>'><?php echo e($ldv->loai_donvi); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </td>
                <td contenteditable class="text-center p-2 row13"></td>
                <td contenteditable class="text-center p-2 row14"></td>
                <td contenteditable class="text-center p-2 row15"></td>
                <td contenteditable class="text-center p-2 row16"></td>
                <td contenteditable class="text-center p-2 row17"></td>
                <td contenteditable class="text-center p-2 row18"></td>
                <td contenteditable class="text-center p-2 trash-btn">
                    <ion-icon name="trash-outline"></ion-icon>
                </td>

            </tr>
            `;
        $("#idtbody").prepend(adds);
    })


    $("#idtableip").on("click", ".trash-btn", function() {
        $(this).parent().remove();
    })


    var dataSubmit = [];
    $("#import_unit_data").click(function() {
        dataSubmit.length = 0;
        $(".row_number").each(function( index ) {
            let dataObj = {
                'madv' :   $(this).find('.row0').text(),
                'tendv' :      $(this).find('.row1').text(),
                'tenngan' :  $(this).find('.row2').text(),
                'diachi' :   $(this).find('.row3').text(),
                'mota' :  $(this).find('.row4').text(),
                'lvhd' :  $(this).find('.row5').text(),
                'listlhcsg' : $(this).find('.row6').find('select').val(),
                'listtruondv' :    $(this).find('.row7').find('select').val(),
                'listcbdbcl' :   $(this).find('.row8').find('select').val(),
                'pcc': $(this).find('.row9').find('select').val(),
                'tenta' :    $(this).find('.row10').text(),
                'tendvc' :   $(this).find('.row11').text(),
                'listloaidv' :  $(this).find('.row12').find('select').val(),
                'dienthoai' :   $(this).find('.row13').text(),
                'email' :    $(this).find('.row14').text(),
                'website' :    $(this).find('.row15').text(),
                'namtl' :    $(this).find('.row16').text(),
                'nambd' :  $(this).find('.row17').text(),
                'namcb' :   $(this).find('.row18').text(),
            }
            dataSubmit.push(dataObj);
        });
        let loadData = "<?php echo e(route('admin.thuongtruc.manacategory.importDataUnit')); ?>";
        fetch(loadData, {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'POST',
            body: JSON.stringify(dataSubmit)
        })
            .then((response) => response.json())
            .then((data) => {
                $("#file").val("");
                $("#add_unit").hide();
                $("#idtableip").empty();
                $("#modal_unit").modal("hide");
                table.ajax.reload();
            })
    })
    $('select[name="loaidv"]').select2({
        placeholder: "<?php echo app('translator')->get('project/Standard/title.loaidv'); ?>",
        allowClear: false
    });
    $('select[name="truongdvi"]').select2({
        placeholder: "<?php echo app('translator')->get('project/Standard/title.truongdvi'); ?>",
        allowClear: false
    });

    $(".chec_rq").prop("required", true);
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamppkhoaluan\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Standard/mana_manaunit.blade.php ENDPATH**/ ?>