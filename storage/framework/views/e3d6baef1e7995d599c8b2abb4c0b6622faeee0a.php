<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Standard/title.qllv'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/Standard/standard.css')); ?>">
<style>
    #table .dt-action{
        max-width: 4rem;
    }
    .form-control{
        height: 44px;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Standard/title.qllv'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
<!-- page trang ở đây -->
<section class="content-body">
    <div class="form-standard">
        <div class="form-standard-button mb-4">
            <a href="<?php echo e(route('admin.thuongtruc.manacategory.createManafield')); ?>" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.themmoi'); ?>">
                <i class="bi bi-plus-square " style="font-size: 30px;color: #009ef7;"></i>
            </a>
            
        </div>

        <table class="table table-striped table-bordered" id="table" width="100%">
            <thead>
             <tr>
                <th ><?php echo app('translator')->get('project/Standard/title.ndlv'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.dvpt'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.ngayt'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.nguoit'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.hanhd'); ?></th>
             </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="modalEditManafield" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('project/Standard/title.cslv'); ?></h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('admin.thuongtruc.manacategory.updateManafield')); ?>" method="post" id="form-update-manafield">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <input type="hidden" id="id_manafield" name="id_manafield">
                    <div class="form-group">
                        <label for="content_manafield" class="mb-2"><?php echo app('translator')->get('project/Standard/title.ndlv'); ?></label>
                        <textarea required id="content_manafield" placeholder="<?php echo app('translator')->get('project/Standard/title.ndlv'); ?>" class="form-control" name="content_manafield"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="select_dvpt" class="mb-2"><?php echo app('translator')->get('project/Standard/title.dvpt'); ?></label>
                        <select name="select_dvpt" id="select_dvpt" class="form-control ">
                            <option hidden value=""><?php echo app('translator')->get('project/Standard/title.dvpt'); ?></option>
                            <?php $__currentLoopData = $donvis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donvi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($donvi->id); ?>"><?php echo e($donvi->ten_donvi); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="btn-manafield" class="btn btn-primary"><?php echo app('translator')->get('project/Standard/title.thaydoi'); ?></button>
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
                    <?php echo app('translator')->get('project/Standard/title.thongbao'); ?>
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
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
                <a href="#" class="btn btn-danger" id="btn-delete-manafield">
                    <?php echo app('translator')->get('project/Standard/title.xoa'); ?>
                </a>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
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
<script >
    $(function(){
        table = $('#table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "<?php echo route('admin.thuongtruc.manacategory.data'); ?>",
            columns: [
                { data: 'mo_ta', name: 'mo_ta' },
                { data: 'dvpt', name: 'dvpt' },
                { data: 'createdAt', name: 'createdAt' },
                { data: 'human', name: 'human' },
                { data: 'actions', name: 'actions', className: 'dt-action btn-id-form' },
            ],
        });
    });

    $("#table").on('click', 'tr', function() {
       var tr = $(this);
       $("#modalEditManafield").modal("show");
       var row = table.row(tr);
       $("#id_manafield").val(row.data().id);
       $("#content_manafield").val(row.data().mo_ta);
       $("#select_dvpt").val(row.data().id_dvpt);
    });
    $("#table").on("click",'.btn-id-form' ,function(e) {
        e.stopPropagation();
    })
    $("#table").on("click", ".turnon-modalDe", function() {
        let idDelete = $(this).data("id");
        let route = "<?php echo e(route('admin.thuongtruc.manacategory.deleteManafield')); ?>" + "?id_manafield=" + idDelete;
        $("#btn-delete-manafield").attr("href", route);
        $("#modalDelete").modal("show");
    })

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamppkhoaluan\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Standard/mana_manafield.blade.php ENDPATH**/ ?>