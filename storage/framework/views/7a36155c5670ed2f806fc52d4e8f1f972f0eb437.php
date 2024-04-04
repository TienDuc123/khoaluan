<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/QualiAssurance/title.qlmc'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/QualiAssurance/qualiassurance.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/dropfile.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('vendors/bootstrap-tagsinput/css/app.css')); ?>" />
<link href="<?php echo e(asset('css/pages/tagsinput.css')); ?>" rel="stylesheet" />

<link href="<?php echo e(asset('vendors/flatpickr/css/flatpickr.min.css')); ?>" rel="stylesheet"
      type="text/css"/>
<link href="<?php echo e(asset('css/pages/adv_date_pickers.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/QualiAssurance/title.qlmc'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
<!-- page trang ở đây -->
<section class="content-body">

    <style>
        .select2-selection{
            display: flex !important;
            align-items: center;
            justify-content: center;
            border: 1px solid #e4e6ef;
            background-color: #fff;
        }

        .select2-search__field{
            outline: none;
            background: none;
        }
        .label-info{
        background: #7272ff !important;
        border-radius: 4px !important;
        padding: 0 6px !important;
    }
    </style>
    <!-- Modal -->
    <?php if(Sentinel::inRole('truongdonvi') || Sentinel::inRole('canboDBCL')): ?>
    <div class="modal fade" id="showMCYC" tabindex="-1" role="dialog" aria-labelledby="showMCYCLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="showMCYCLabel">
                        Danh sách các MCYC bạn được cập nhật minh chứng
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php $__currentLoopData = $listMCYC; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="d-flex">
                            <h2 class="text-danger"><?php echo e($key + 1); ?>. </h2>
                            <p>
                                Lĩnh vực: <span class="text-primary"><?php echo e($value->linhvuc); ?></span> <br>
                                Hoạt động: <span class="text-primary"><?php echo e($value->ndhd); ?></span> <br>
                                MCYC: <span class="text-primary"><?php echo e($value->noi_dung); ?></span> <br>
                            </p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                        Đóng
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="form-standard">
        <?php if(Sentinel::inRole('truongdonvi') || Sentinel::inRole('canboDBCL')): ?>
            <button data-toggle="modal" data-target="#showMCYC" class="btn btn-primary">Danh sách MCYC</button>
            <hr>
        <?php endif; ?>

        <form id="mc_form" action="<?php echo route('admin.dambaochatluong.manaproof.updateMC'); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="idhdn" id="idhdn" value="<?php echo e($idhdn); ?>">
            <input type="hidden" name="mc_id" id="mc_id" value="0">
            <div class="form-group row pl-4">
                <div class="col-md-3">
                    <?php echo app('translator')->get('project/QualiAssurance/title.file'); ?>
                </div>
                <div class="col-md-6">
                    <div id="dropzon_id" class="dropzon text-primary">
                        <input type="file" class="form-control-file text-primary font-weight-bold" id="inputFile" onchange="readUrl(this)" data-title="<?php echo app('translator')->get('project/QualiAssurance/title.chichonteporpdf'); ?>" name="file" accept="image/jpeg,image/gif,image/png,application/pdf">>
                        <center><p id="img_name"><?php echo app('translator')->get('project/QualiAssurance/title.chichonteporpdf'); ?></p></center>
                    </div>
                </div>
                <div class="col-md-2" id="showthumnail">

                </div>
            </div>

                <div class="form-group row pl-4 mt-5">
                    <div class="col-md-2">
                        <?php echo app('translator')->get('project/QualiAssurance/title.hoatd'); ?>
                    </div>
                    <div class="col-md-2">
                        <select class="form-control" id="year_search">
                            <option value=""></option>
                            <?php for($i = intVal(date('Y'));$i >= 1990 ;$i--): ?>
                            <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-control" name="nhom_mc_sl_id" id="linhvuc_search" >
                            <option></option>
                            <?php if(Sentinel::inRole('truongdonvi') || Sentinel::inRole('canboDBCL')): ?>
                                <?php $__currentLoopData = $listMCYC; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->nhom_mc_sl_id); ?>"><?php echo e($item->linhvuc); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <?php $__currentLoopData = $linhvuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->mo_ta); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="col-md-3" style="display: none">
                        <select class="form-control" id="hoatdong_search" name="hoatdongnhom_id" data-placeholder="<?php echo app('translator')->get('project/QualiAssurance/title.lchd'); ?>">
                        </select>
                    </div>
                    <div class="col-md-3" style="display: none">
                        <select class="form-control select2" id="mcyc_search" name="mcyc_id[]" multiple data-placeholder="<?php echo app('translator')->get('project/QualiAssurance/title.mcycau'); ?>">
                        </select>
                    </div>
                </div>
            <div style="line-height: 61px;" class="mt-5">
                <div class="form-group row pl-4">
                    <div class="col-md-2">
                        <?php echo app('translator')->get('project/QualiAssurance/title.tdmc'); ?>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="tieu_de" required class="form-control">
                    </div>
                </div>
                <div class="form-group row pl-4">
                    <div class="col-md-2">
                        <?php echo app('translator')->get('project/QualiAssurance/title.tyeu'); ?>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="trich_yeu" required class="form-control" >
                    </div>
                </div>
                <div class="form-group row pl-4">
                    <div class="col-md-2">
                        <?php echo app('translator')->get('project/QualiAssurance/title.noibh'); ?>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="noi_banhanh" required class="form-control" >
                    </div>
                </div>
                <div class="form-group row pl-4">
                    <div class="col-md-2">
                        <?php echo app('translator')->get('project/QualiAssurance/title.s_nbh'); ?>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="sohieu" required class="form-control" >
                    </div>
                    <div class="col-md-2">
                        <!-- <input type="text" class="form-control" name="ngay_ban_hanh" id="ngay_ban_hanh" value="<?php echo e(date('d/m/Y')); ?>" required placeholder="Ngày ban hành"> -->
                        <input name="ngay_ban_hanh" class="start-date form-control flatpickr flatpickr-input" id="ngay_ban_hanh" value="<?php echo e(date('d-m-Y')); ?>" type="text" placeholder="<?php echo app('translator')->get('project/QualiAssurance/title.nbh'); ?>">
                    </div>
                </div>
                <div class="form-group row pl-4">
                    <div class="col-md-2">
                        <?php echo app('translator')->get('project/QualiAssurance/title.dcluu'); ?>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="address" class="form-control">
                    </div>
                </div>
                <div class="form-group row pl-4">
                    <div class="col-md-2">
                        <?php echo app('translator')->get('project/QualiAssurance/title.ddan'); ?>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="duong_dan" class="form-control">
                    </div>
                </div>

                <div class="form-group row pl-4">
                    <div class="col-md-2">
                        <?php echo app('translator')->get('project/QualiAssurance/title.tkmc'); ?>
                    </div>
                    <div class="col-md-9">
                        <input type="text" required class="form-control" name="tukhoa" id="tukhoa" data-role="tagsinput">
                    </div>
                </div>

                <div class="form-group row pl-4">
                    <div class="col-md-2">
                        <?php echo app('translator')->get('project/QualiAssurance/title.nqly'); ?>
                    </div>
                    <div class="col-md-3">
                        <select class="h-2rem" id="quanly_search" name="nguoi_quan_ly">
                            <?php $__currentLoopData = $nguoi_quan_ly; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?> - (<?php echo e($value->ten_donvi); ?>)</option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-md-3 d-flex align-items-center justify-content-around">

                        <input type="checkbox" class="form-check-input" name="cong_khai" value="Y" hidden style="margin-left: 40px;" >
                        
                    </div>

                </div>
            </div>


            <div class="item-group-button mb-2">
                <a class="btn btn-benchmark mt-5 ml-4 pl-3 pr-3" href="<?php echo e(route('admin.dambaochatluong.manaproof.index')); ?>">
                    <i class="bi bi-x-circle" style="font-size: 35px;color: red;"></i>
                </a>
                <button type="button" onclick="doSubmit();" class="btn btn-benchmark mt-5 ml-4 pl-3 pr-3" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/QualiAssurance/title.luu'); ?>">
                    <i class="bi bi-save" style="font-size: 35px;color: #50cd89;"></i>
                </button>
            </div>
        </form>

    </div>


</section>
<!-- /Kết thúc page trang -->

    <!-- Kết thúc trang -->
    </section>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('footer_scripts'); ?>
<script src="<?php echo e(asset('vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js')); ?>"  type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/typeahead.js/js/bloodhound.min.js')); ?>"  type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/typeahead.js/js/typeahead.bundle.min.js')); ?>"  type="text/javascript"></script>

<script src="<?php echo e(asset('vendors/pickadate/js/picker.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/pickadate/js/picker.date.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/pickadate/js/picker.time.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/flatpickr/js/flatpickr.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/airDatepicker/js/datepicker.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/airDatepicker/js/datepicker.en.js')); ?>" type="text/javascript"></script>


<script>

    var fileuploadok = true;
    var uploadfilesize = 0;
    var maxuploadfilesize = 40; //MB

    function doSubmit(){
        if(checksubmit()){
            $('#mc_form').submit();
        }
    }

    function checksubmit(){
        if($("#year_search").val() == ''){
            alert("<?php echo app('translator')->get('project/QualiAssurance/message.error.empty_year'); ?>");
            return false;
        }
        if($('#linhvuc_search').val() == ''){
            alert("<?php echo app('translator')->get('project/QualiAssurance/message.error.empty_linhvuc'); ?>");
            return false;
        }
        // if($("#hoatdong_search").val() == null || $("#hoatdong_search").val() == ""){
        //     alert("<?php echo app('translator')->get('project/QualiAssurance/message.error.empty_hoatdong'); ?>");
        //     return false;
        // }

        // if($("#mcyc_search").val().length == 0){
        //     alert("<?php echo app('translator')->get('project/QualiAssurance/message.error.empty_mcyc'); ?>");
        //     return false;
        // }
        if($("input[name='tieu_de']").val() == ""){
            alert("<?php echo app('translator')->get('project/QualiAssurance/message.error.empty_title'); ?>");
            return false;
        }


        if($("input[name='trich_yeu']").val() == ""){
            alert("<?php echo app('translator')->get('project/QualiAssurance/message.error.empty_trich_yeu'); ?>");
            return false;
        }
        if($("input[name='noi_banhanh']").val() == ""){
            alert("<?php echo app('translator')->get('project/QualiAssurance/message.error.empty_noi_banhanh'); ?>");
            return false;
        }
        tukhoa = $('#tukhoa').val();
        if(tukhoa == ''){
            alert("<?php echo app('translator')->get('project/QualiAssurance/message.error.empty_tukhoa'); ?>");
            return false;
        }

        if( document.querySelector("input[type='file']").files.length == 0 && $("input[name='duong_dan']").val() == 0){
            alert("<?php echo app('translator')->get('project/QualiAssurance/message.error.empty_file'); ?>");
            return false;
        }
        if(uploadfilesize > maxuploadfilesize * 1024 * 1024){
            alert("<?php echo app('translator')->get('project/QualiAssurance/message.error.maxuploadfilesize'); ?>");
            return false;
        }

        return fileuploadok;
    }

    $('#tukhoa').tagsinput({
        itemText: function(item) {
            return item;
        },
        typeaheadjs: {
            name: 'tukhoatimkiem',
            displayKey: 'name',
            valueKey: 'name',
            source: function(query, process, cb) {
                return $.get("<?php echo route('admin.dambaochatluong.manaproof.getTukhoa'); ?>", {tukhoa: query, linhvuc: $('#linhvuc_search').val() }, function (data) {
                        var response = [];
                        $.map(JSON.parse(data), function (item) {
                            response.push({name : item});
                        });
                        return cb(response);
                });
            }
        },
    });


    function readUrl(input) {
        if (input.files[0]) {
            var fs = input.files[0].size;
            uploadfilesize = fs;

            var isred = uploadfilesize > maxuploadfilesize * 1024 * 1024 ? true : false;
            if(fs >= 1024 * 1024){
                fs = (parseFloat(fs) / (1024 * 1024)).toFixed(2) + ' mb';
            }else if(fs >= 1024){
                fs = (parseFloat(fs) / (1024)).toFixed(2) + ' kb';
            }else{
                fs = parseFloat(fs).toFixed(2) + ' b';
            }
            text = input.files[0].name + '(' + fs + ')';

            $('#showthumnail').empty();
            if(isred){
                fileuploadok = false;
                text = '<span style="color:red;">' + text + '</span>';
                alert("<?php echo app('translator')->get('project/QualiAssurance/message.error.maxuploadfilesize'); ?>");
            }else{
                $.ajax({
                    url: "<?php echo route('admin.dambaochatluong.manaproof.checkuploadfile'); ?>",
                    type: 'POST',
                    data: {
                        filename: input.files[0].name,
                        size: uploadfilesize,
                        _token: "<?php echo e(csrf_token()); ?>",
                    },
                    error: function(err) {

                    },
                    success: function(data) {
                        if(data == 1){
                            fileuploadok = true;
                            input.setAttribute("data-title", text);
                            $('#img_name').html(text);
                        }else{
                            var textout = '<span style="color:red;">' + "<?php echo app('translator')->get('project/QualiAssurance/message.error.fileexisted'); ?></span>";
                            fileuploadok = false;
                            var textthumb = '<a href="' + data + '"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16"><path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/></svg></a>'
                            $('#img_name').html(textout);
                            $('#showthumnail').html(textthumb);
                        }
                    }
                });
            }
        }
    }

    function loadhoatdong(opt){
        var datasearch = {
            linhvuc: $('#linhvuc_search').val(),
            year: $('#year_search').val(),
            hoatdong: '',
        };

        if(opt == 1){
            datasearch.hoatdong = $('#hoatdong_search').val();
        }

        if(datasearch.linhvuc != '' || (datasearch.hoatdong != '' && opt == 1)){
            var firsthd = 1;
            $.ajax({
                url: "<?php echo route('admin.dambaochatluong.manaproof.getHD'); ?>",
                type: 'GET',
                data: datasearch,
                error: function(err) {

                },
                success: function(data) {
                    var el2 = $('#mcyc_search');
                    el2.empty();
                    el2.append($("<option></option>").attr("value", '').text("<?php echo app('translator')->get('project/QualiAssurance/title.mcycau'); ?>"));

                    if(opt == 0){
                        var el = $('#hoatdong_search');
                        el.empty();
                        el.append($("<option></option>").attr("value", '').text("<?php echo app('translator')->get('project/QualiAssurance/title.lchd'); ?>"));

                        if(data != ''){
                            for (var i = 0; i < data.length; i++) {
                                el.append($("<option></option>").attr("value", data[i][0]).text(data[i][1]));
                            }
                            <?php if(!empty($hdn) && $hdn != null): ?>
                            if(firsthd == 1){
                                firsthd = 2;
                                el.val("<?php echo e($hoatDongNhomParent->id); ?>");
                                el.trigger('change');
                            }
                            <?php endif; ?>
                        }
                    }else{
                        if(data != ''){
                            for (var i = 0; i < data.length; i++) {
                                el2.append($("<option></option>").attr("value", data[i][0]).text(data[i][1]));
                            }
                            <?php if(!empty($hdn) && $hdn != null): ?>
                            if(firsthd == 1){
                                el2.val("<?php echo e($hdn->id); ?>");
                                el2.trigger('change');
                                firsthd = 2;
                            }
                            <?php endif; ?>
                        }
                    }
                }
            });
        }
    }

    $(function(){

        $('#linhvuc_search').on('change',function(){
            loadhoatdong(0);
        });

        $('#hoatdong_search').on('change',function(){
            loadhoatdong(1);
        });

        $('#year_search').on('change',function(){
            loadhoatdong(0);
        });

        flatpickr('#ngay_ban_hanh', {
            dateFormat: 'd-m-Y',
        });



        <?php if(!empty($hdn) && $hdn != null): ?>
            $("#year_search").val("<?php echo e($hoatDongNhomParent->year); ?>");
            $('#year_search').trigger('change');
            $("#linhvuc_search").val("<?php echo e($lv->id); ?>");
            $("#linhvuc_search").trigger('change');
        <?php endif; ?>

    });

    $(function(){
      	$("#year_search").select2({
               placeholder: "<?php echo app('translator')->get('project/QualiAssurance/title.nam'); ?>",
        });
        $("#linhvuc_search").select2({
            placeholder: "<?php echo app('translator')->get('project/QualiAssurance/title.lvuc'); ?>",
        });
        $("#hoatdong_search").select2({

        });
        $("#quanly_search").select2();
      	$("#mcyc_search").select2();

    });


</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\file_moi\xampp\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/QualiAssurance/newproof.blade.php ENDPATH**/ ?>