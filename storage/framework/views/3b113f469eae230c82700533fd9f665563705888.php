<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/QualiAssurance/title.cnhd'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/QualiAssurance/qualiassurance.css')); ?>">
<style>
    #modalCreateHD .select2-container{
        width: 100% !important;
    }
    #modalCreateHD p{
        margin-bottom: 0;
    }
    .block_item{
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }
    .block_item p{
        width: 15%;
        margin-bottom: 0;
    }
    .block_item input{
        flex: 1;
    }
    .block_render{
        padding-top: 10px;
        border-top: 1px dashed #d6d6d6;
    }
    .select2-container--bootstrap5 .select2-selection__clear{
        right: 1rem !important;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/QualiAssurance/title.cnhd'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
<!-- page trang ở đây -->
<section class="content-body">
    <div class="form-standard">
        <h4><?php echo app('translator')->get('project/QualiAssurance/title.tkiem'); ?></h4>
            <div class="container-fuild mt-3 pl-5 ">
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" placeholder="<?php echo app('translator')->get('project/QualiAssurance/title.noidung'); ?>" class="form-control " id="search_content">
                    </div>
                </div>
                <div class="row mt-3 ">
                    <div class="col-md-2">
                        <select class="form-control search_years" id="search_year">
                            <option></option>
                            <?php for($i = intVal(date('Y')) ;$i >= 2017 ;$i--): ?>
                                <option><?php echo e($i); ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control search_mcsls" id="search_mcsl">
                            <option></option>
                            <?php $__currentLoopData = $linhvuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->mo_ta); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-block" id="btn-search" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.timkiem'); ?>"><i class="bi bi-search" style="font-size: 35px;color: #009ef7;"></i></button>
                    </div>
                   
                    <div class="col-md-1">
                        <button class="btn btn-benchmark mr-2" type="button" data-toggle="modal" data-target="#modalCreateHD" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/QualiAssurance/title.themhd'); ?>">
                            <i class="bi bi-plus-square" style="font-size: 35px;color: #50cd89;"></i>
                        </button>
                    </div>
                   
                    <div class="col-md-1">
                        <a class="btn btn-benchmark mr-2" href="<?php echo e(route('admin.dambaochatluong.updateaci.exceltaction')); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/QualiAssurance/title.xuat_excel'); ?>">
                            <i class="bi bi-file-earmark-excel " style="font-size: 35px;color: #50cd89;"></i>
                        </a>
                    </div>
                </div>
            </div>
        <h3 class="mt-3"><?php echo app('translator')->get('project/QualiAssurance/title.dshd'); ?></h3>
        <div class="item-group-button right-block mb-2">

        </div>
        <table class="table table-striped table-bordered" id="table" width="100%">
            <thead>
             <tr>
                <th ><?php echo app('translator')->get('project/QualiAssurance/title.nam'); ?></th>
                <th ><?php echo app('translator')->get('project/QualiAssurance/title.lvuc'); ?></th>
                <th ><?php echo app('translator')->get('project/QualiAssurance/title.hoatd'); ?></th>
                <th ><?php echo app('translator')->get('project/QualiAssurance/title.mcyc'); ?></th>
                <th ><?php echo app('translator')->get('project/QualiAssurance/title.hanhd'); ?></th>
             </tr>
            </thead>
            <tbody>  
            </tbody>                
        </table> 
    </div>
</section>

<!-- modal -->
<div class="modal fade" id="modalCreateHD" tabindex="-1" role="dialog" aria-labelledby="modalCreateHDLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreateHDLabel">
                    <?php echo app('translator')->get('project/QualiAssurance/title.themhd'); ?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('admin.dambaochatluong.updateaci.createAction')); ?>" method="post" class="form-createAc">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="container-fuild">
                        <div class="row">
                            <div class="col-md-4">
                                <p><?php echo app('translator')->get('project/QualiAssurance/title.nam'); ?></p>
                                <select class="form-control search_year" name="year" id="validate-year">
                                    <option value=""></option>
                                    <?php for($i = intVal(date('Y')) ;$i >= 2017 ;$i--): ?>
                                        <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <p><?php echo app('translator')->get('project/QualiAssurance/title.lvuc'); ?></p>
                                <select class="form-control search_mcsl" name="id_mcsl" id="validate-mcsl">
                                    <option value=""></option>
                                    <?php $__currentLoopData = $linhvuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->mo_ta); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-12 mt-3">
                                <p><?php echo app('translator')->get('project/QualiAssurance/title.soluong'); ?></p>
                                <input type="number" class="form-control " id="input_soluong">
                            </div>
                        </div>
                    </div>
                    <div class="block_render mt-5 pl-5 pr-5">
                    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btn-submit">
                        <?php echo app('translator')->get('project/QualiAssurance/title.themhd'); ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


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
<!-- /Kết thúc page trang -->
    
    <!-- Kết thúc trang -->
    </section>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('footer_scripts'); ?>
<script> 
    $("#btn-submit").click(function() {
        let check = false
        document.querySelectorAll("input[name='content[]']").forEach(item => {
            if(item.value != ""){
                check = true
            }
        })
        if($("#validate-year").val() == ""){
            alert("Vui lòng chọn năm")
        }else if($("#validate-mcsl").val() == ""){
            alert("Vui lòng chọn lĩnh vực")
        }else if(!check){
            alert("Vui lòng nhập thông tin hoạt động")
        }else{
            $(".form-createAc").submit();
        }
    })


    $(function () {
        table = $('#table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax:  {
                url: "<?php echo route('admin.dambaochatluong.updateaci.viewAction'); ?>",
                type: 'POST',
                data: {
                    'content' : function() { return $("#search_content").val() },
                    'year'       : function() { return $("#search_year").val() },
                    'mcsl'    : function() { return $("#search_mcsl").val() }
                },
            },
            columns: [
                { data: 'year'},
                { data: 'mo_ta' },
                { data: 'noi_dung', },
                { data: 'mcyc' },
                { data: 'actions' ,className: 'action'},
            ],
            order: [[1, 'asc']],
        });
    });
</script>
<script>
    $(".search_year").select2({
        placeholder: "<?php echo app('translator')->get('project/QualiAssurance/title.nam'); ?>",
        allowClear: true,
        dropdownParent: $('#modalCreateHD')
    });
    $(".search_mcsl").select2({
        placeholder: "<?php echo app('translator')->get('project/QualiAssurance/title.lclv'); ?>",
        allowClear: true,
        dropdownParent: $('#modalCreateHD')
    });

    $(".search_years").select2({
        placeholder: "<?php echo app('translator')->get('project/QualiAssurance/title.nam'); ?>",
        allowClear: true
    });
    $(".search_mcsls").select2({
        placeholder: "<?php echo app('translator')->get('project/QualiAssurance/title.lclv'); ?>",
        allowClear: true
    });
    
    
    $("#btn-search").click(function() {
        table.ajax.reload();
    })

    $("#input_soluong").change(function() {
        if($(this).val() > 0){
            $(".block_render").empty();
            for(let i = 1; i <= $(this).val() ; i++){
                let item = ` 
                    <div class="block_item">
                        <p><?php echo app('translator')->get('project/QualiAssurance/title.hoatdong'); ?> ${i}: </p>
                        <input type="text" class="form-control " name="content[]">
                    </div>

                 `;
                $(".block_render").append(item)
            }
        }else{
            alert("<?php echo app('translator')->get('project/QualiAssurance/title.vlndgt'); ?>")
        }
        
        
    })

    // let a = $(".block_render").find("input[name='content[]']");
    // for(let i = 0; i< a.length; i++){
    //     a[i].on('change', function(e){
    //         for(let j = 0; j< a.length; j++){
    //             if(e.target.value == a[j].value){
    //                 alert("trung")
    //             }
    //         }
            
    //     })
    // }


    $('#modalDelete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var id = button.data('id') 
        console.log(id)
        var route = "<?php echo e(route('admin.dambaochatluong.updateaci.deleteAction')); ?>" + "?id_delete=" + id;
        var modal = $(this);
        modal.find('#btn-delete-human').attr('href' , route);
    })
    $.ajaxSetup({
        		headers: {
            			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        		}
   		 });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp74\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/QualiAssurance/updateaci.blade.php ENDPATH**/ ?>