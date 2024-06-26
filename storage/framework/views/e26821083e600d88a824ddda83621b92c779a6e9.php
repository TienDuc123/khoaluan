<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/QualiAssurance/title.qlhd'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link href="<?php echo e(asset('vendors/flatpickr/css/flatpickr.min.css')); ?>" rel="stylesheet"
      type="text/css"/>
<link href="<?php echo e(asset('css/pages/adv_date_pickers.css')); ?>" rel="stylesheet" type="text/css"/>

<link type="text/css" href="<?php echo e(asset('vendors/bootstrap-multiselect/css/bootstrap-multiselect.css')); ?>" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo e(asset('css/project/QualiAssurance/qualiassurance.css')); ?>">


<style>
    .block-flex{
        display: flex;
        justify-content: space-between;
        width: 65%;
    }
    input.start-date, input.end-date{
        height: 32px;
        width: 50px;
    }
    .block-date{
        display: flex;
    }
    .min-h500{
        min-height: 120px;
        resize: none;
    }
    .bao{
        margin: -4.5rem 0px 0px 67rem;
        position: absolute;
    }
    .btn-group, .btn-group-vertical{
        background: aquamarine;
        border-radius: 8px;
        margin-bottom: 11px;
    }
    #modalCreate .show{
        width: 400px;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/QualiAssurance/title.qlmcyc'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
<!-- page trang ở đây -->
<section class="content-body">
    <div class="form-standard">
        <h4><?php echo app('translator')->get('project/QualiAssurance/title.qlmcyc'); ?></h4>
        <form action="<?php echo e(route('admin.dambaochatluong.updateaci.updateMcyc')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id_hdn" value="<?php echo e($hdn->id); ?>">
            <div class="container-fuild mt-3 pl-5">
                <div class="row mt-3 ">
                    <div class="col-md-2">
                        <select class="form-control " disabled>
                            <?php for($i = intVal(date('Y')) ;$i >= 2017 ;$i--): ?>
                                <option><?php echo e($i); ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <select class="form-control " id="select_mcsl" name="id_mcsl" required>
                            <option hidden value=""><?php echo app('translator')->get('project/QualiAssurance/title.lclv'); ?></option>
                            <?php $__currentLoopData = $linhvuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->mo_ta); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-5">
                        <input type="text" class="form-control " placeholder="<?php echo app('translator')->get('project/QualiAssurance/title.thd'); ?>" id="name_hd" name="name_hd" required>
                    </div>
                    <div class="col-md-1">
                        <button class="btn pl-4 pr-4 " data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/QualiAssurance/title.luu'); ?>"><i class="bi bi-save" style="font-size: 35px;color: #009ef7;"></i></button>
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn" data-toggle="modal" data-target="#modalCreate" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/QualiAssurance/title.tmcyc'); ?>">
                            <i class="bi bi-plus-square" style="font-size: 35px;color: #50cd89;"></i>
                        </button>
                    </div>  
                    
                </div>
            </div>
        </form>
        
        <div class="block-flex mt-5 mb-5">
            <h3><?php echo app('translator')->get('project/QualiAssurance/title.dsmcyc'); ?></h3>
            
        </div>
        
        <table class="table table-striped table-bordered" id="table" width="100%">
            <thead>
             <tr>
                <th ><?php echo app('translator')->get('project/QualiAssurance/title.mcyc'); ?></th>
                <th ><?php echo app('translator')->get('project/QualiAssurance/title.dvth'); ?></th>
                <th ><?php echo app('translator')->get('project/QualiAssurance/title.tgth'); ?></th>
                <th ><?php echo app('translator')->get('project/QualiAssurance/title.trangthai'); ?></th>
                <?php if(!Sentinel::inRole('ns_kiemtra') || Sentinel::inRole('admin') || Sentinel::inRole('operator') || Sentinel::inRole('truongdonvi') || Sentinel::inRole('canboDBCL')): ?>
                    <th ><?php echo app('translator')->get('project/QualiAssurance/title.hanhd'); ?></th>
                 <?php endif; ?> 
             </tr>
            </thead>
            <tbody>  
            </tbody>                
        </table> 
    </div>
</section>


<!-- modal -->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDeleteLabel">
                    <?php echo app('translator')->get('project/QualiAssurance/title.thongbao'); ?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="badge ">
                    <?php echo app('translator')->get('project/QualiAssurance/message.error.hoixoaTc'); ?>
                </span>
                <br>
                <span class="badge ">
                    <?php echo app('translator')->get('project/QualiAssurance/message.error.khoantac'); ?>
                </span>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-danger" id="btn-delete-human">
                    <?php echo app('translator')->get('project/QualiAssurance/title.xoa'); ?>
                </a>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <?php echo app('translator')->get('project/QualiAssurance/title.huy'); ?>
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="modalCreateLabel" aria-hidden="true" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreateLabel">
                    <?php echo app('translator')->get('project/QualiAssurance/title.tmmcyc'); ?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('admin.dambaochatluong.updateaci.createMcyc')); ?>" method="post" id="form-createMcyc">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="parent" value="<?php echo e($hdn->id); ?>">
                <div class="modal-body" >
                    <div class="form-group">
                        <h5><?php echo app('translator')->get('project/QualiAssurance/title.dvth'); ?></h5>
                        <select name="dv_thuchien[]" class="form-control" multiple="multiple" id="so_list">
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
                    <div class="form-group">
                        <h5><?php echo app('translator')->get('project/QualiAssurance/title.tgth'); ?></h5>
                        <div class="block-date">
                            <div class="input-group mr-3">
                                <div class="input-group-append">
                                   <span class="input-group-text"><i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                                                     data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input name="startDate" class="start-date form-control flatpickr flatpickr-input" data-mindate="today" id="min_max" type="text" placeholder="<?php echo app('translator')->get('project/QualiAssurance/title.tgth'); ?>">
                            </div>

                             <div class="input-group">
                                <div class="input-group-append">
                                   <span class="input-group-text"><i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                                                     data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input name="endDate" class="end-date flatpickr flatpickr-input form-control" type="text" id="min_max2" placeholder="<?php echo app('translator')->get('project/QualiAssurance/title.tgkt'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5><?php echo app('translator')->get('project/QualiAssurance/title.noidung'); ?></h5>
                        <textarea class="form-control min-h500" placeholder="<?php echo app('translator')->get('project/QualiAssurance/title.noidung'); ?>" name="noidung" id="content-mcyc"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="add-mcyc">
                        <?php echo app('translator')->get('project/QualiAssurance/title.tmoi'); ?>
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
<script type="text/javascript" src="<?php echo e(asset('js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/bootstrap-multiselect/js/bootstrap-multiselect.js')); ?>" ></script>

<script src="<?php echo e(asset('vendors/pickadate/js/picker.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/pickadate/js/picker.date.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/pickadate/js/picker.time.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/flatpickr/js/flatpickr.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/airDatepicker/js/datepicker.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('vendors/airDatepicker/js/datepicker.en.js')); ?>" type="text/javascript"></script>
<script>
    $("#add-mcyc").click(function() {
        if($("#so_list").val().length == 0){
            alert("Vui lòng chọn đơn vị thực hiện")
        }else if($("#min_max").val() == ""){
            alert("Vui lòng chọn thời gian bắt đầu")
        }else if($("#min_max2").val() == ""){
            alert("Vui lòng chọn thời gian kết thúc")
        }else if($("#content-mcyc").val() == "" ){
            alert("Vui lòng nhập nội dung minh chứng yêu cầu")
        }else{
            $("#form-createMcyc").submit();
        }
    })


    // var byId = function(id) {
    //     return document.getElementById(id);
    // }
    // Sortable.create(byId('multi'), {
    //     animation: 150,
    //     draggable: '.tile',
    //     handle: '.tile__name',
    // });

    // [].forEach.call(byId('multi').getElementsByClassName('tile__list'), function(el) {
    //     Sortable.create(el, {
    //         group: 'photo',
    //         animation: 150,
    //     });
    // });
    
    flatpickr('.flatpickr', {
        minDate: 'today',
        // maxDate: new Date().fp_incr(14),
        dateFormat: 'd-m-Y',
    });

    $("#select_mcsl").val('<?php echo e($hdn->nhom_mc_sl_id); ?>')
    $("#name_hd").val('<?php echo e($hdn->noi_dung); ?>')
    $(function () {
        table = $('#table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax:  {
                url: "<?php echo route('admin.dambaochatluong.updateaci.showMcyc', $hdn->id); ?>",
                type: 'GET'
            },
            columns: [
                { data: 'noi_dung'},
                { data: 'tenDv' },
                { data: 'thoi_gian', },
                { data: 'trang_thai' },
                <?php if(!Sentinel::inRole('ns_kiemtra') || Sentinel::inRole('admin') || Sentinel::inRole('operator') || Sentinel::inRole('truongdonvi') || Sentinel::inRole('canboDBCL')): ?> 
                { data: 'actions' ,className: 'action' },
                <?php endif; ?> 
            ],
            order: [[1, 'asc']],
        });

        $('#so_list').multiselect({
            enableFiltering: true,
            includeSelectAllOption: true,
            maxHeight: 500,                
            dropUp: true,
            nSelectedText: '<?php echo app('translator')->get('project/QualiAssurance/title.dvdc'); ?>',
            nonSelectedText: '<?php echo app('translator')->get('project/QualiAssurance/title.ccdv'); ?>',
        });

    });

    $('#modalDelete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var id = button.data('id') 
        console.log(id)
        var route = "<?php echo e(route('admin.dambaochatluong.updateaci.deleteMcyc')); ?>" + "?id_delete=" + id;
        var modal = $(this);
        modal.find('#btn-delete-human').attr('href' , route);
    })
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp74\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/QualiAssurance/manaaction.blade.php ENDPATH**/ ?>