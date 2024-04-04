<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Standard/title.qlbtc'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/Standard/standard.css')); ?>">
<style>
    .dt-btc{
        width: 450px !important;
    }
    .car{
        padding: 17px 2rem;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Standard/title.qltctc'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Nội dung section -->
    <div class="content-body">
        <div class="form-standard">
            <div class="card ">
                <div class="card-header border-0 pt-6">
                    <div class="card-title">
                        <div class="d-flex align-items-center position-relative my-1">
                            
                        </div>
                    </div>
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <a href="<?php echo e(route('admin.thuongtruc.setstandard.exportStandard')); ?>" type="button" class="btn me-3 "  data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.xuat_excel'); ?>">
                                <i class="bi bi-file-earmark-excel " style="font-size: 30px;color: #50cd89;"></i>
                            </a>
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.tmbtc'); ?>">
                                <i class="bi bi-plus-square " style="font-size: 30px;color: #009ef7;"></i>
                            </button>
                        </div>                    
                    </div>
                </div>
                <div class="card-body pt-0">
                    <table class="table table-striped table-bordered" id="table">
                        <thead>
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">
                                    <?php echo app('translator')->get('project/Standard/title.tbtc'); ?>
                                </th>
                                <th class="min-w-125px">
                                    <?php echo app('translator')->get('project/Standard/title.ldg'); ?>
                                </th>
                                <th class="min-w-125px">
                                    <?php echo app('translator')->get('project/Standard/title.ngayt'); ?>
                                </th>
                                <th class="min-w-125px">
                                    <?php echo app('translator')->get('project/Standard/title.nguoitao'); ?>
                                </th>
                                <th class="min-w-125px">
                                    <?php echo app('translator')->get('project/Standard/title.trangthai'); ?>
                                </th>
                                <th class="min-w-100px">
                                    <?php echo app('translator')->get('project/Standard/title.hanhd'); ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody >
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="my_modal modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <form class="form" action="<?php echo e(route('admin.thuongtruc.setstandard.createStandard')); ?>" id="kt_modal_add_customer_form" method="POST" style="display: block ;">
                    <?php echo csrf_field(); ?>
                    <div class="modal-header" id="kt_modal_add_customer_header">
                        <h2 class="fw-bolder">
                            <?php echo app('translator')->get('project/Standard/title.tmbtc'); ?>
                        </h2>
                        <div data-bs-dismiss="modal" id="" class="kt_modal_close btn btn-icon btn-sm btn-active-icon-primary">
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                            <div class="fv-row mb-7">
                                <label class="required fs-6 fw-bold mb-2">
                                    <?php echo app('translator')->get('project/Standard/title.tbtc'); ?>
                                </label>
                                <input type="text" placeholder="<?php echo app('translator')->get('project/Standard/title.tbtc'); ?>" class="form-control " name="tbtc" required>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required fs-6 fw-bold mb-2">
                                    <?php echo app('translator')->get('project/Standard/title.ldg'); ?>
                                </label>
                                <select name="ldg" id="" class="form-control  mt-3" required>
                                    <option hidden value=""><?php echo app('translator')->get('project/Standard/title.ldg'); ?></option>
                                    <?php $__currentLoopData = $loai_tieuchuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ltc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($key); ?>"><?php echo e($ltc); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer flex-center">
                        <button type="reset" id="" class="kt_modal_close btn btn-light me-3" data-bs-dismiss="modal">
                            <?php echo app('translator')->get('project/Standard/title.huy'); ?> 
                        </button>
                        <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary" >
                            <span class="indicator-label">
                                <?php echo app('translator')->get('project/Standard/title.themmoi'); ?>
                            </span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
                    <span class="badge "><?php echo app('translator')->get('project/Standard/message.error.hoixoa'); ?></span>
                    <br>
                    <span class="badge "><?php echo app('translator')->get('project/Standard/message.error.khoantac'); ?></span>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-danger" id="delete-standard">
                        <?php echo app('translator')->get('project/Standard/title.xoa'); ?> 
                    </a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                        <?php echo app('translator')->get('project/Standard/title.huy'); ?> 
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('footer_scripts'); ?>
<script>
    var $url_path = '<?php echo url('/'); ?>';

    $(function(){
        table = $('.table').DataTable({
            "createdRow": function( row, data, dataIndex ) {
                // $(row).children(':nth-child(1)').addClass('w-table-max');
                // $(row).addClass('important');
            },
            // lengthMenu: [[1, 10, 15, -1], [1, 10, 15, "All"]],
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "<?php echo route('admin.thuongtruc.setstandard.dataStandard'); ?>",
            columns: [
                { data: 'tieu_de', name: 'tieu_de', className: 'dt-btc' },
                { data: 'loaiTC', name: 'loaiTC' },
                { data: 'createAt', name: 'createAt' },
                { data: 'createHuman', name: 'createHuman' },
                { data: 'status', name: 'status' },
                { data: 'actions', name: 'actions' ,className: 'action'},
            ],            
        });
    }); 


    $('#modalDelete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var routeDelete = $url_path + "/admin/thuong-truc/setstandard/delete-standard/" + id;
        var modal = $(this)
        modal.find('#delete-standard').attr('href', routeDelete);
    }) 
</script>


<script type="text/javascript">
    $(".li-item").removeClass("active");
    $(".li-thuongtruc").addClass("active");
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp74\htdocs\kiemdinh\kdcl-2023\resources\views/admin/project/Standard/index.blade.php ENDPATH**/ ?>