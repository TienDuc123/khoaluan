<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Standard/title.qllbc'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/Standard/standard.css')); ?>">
<style>
    .select2-container .select2-selection--single{
        height: auto !important;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Standard/title.qllbc'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->

<!-- page trang ở đây -->
<section class="content-body">
    <div class="container-fuild mt-3">
        <div class="row">
            <div class="col-md-10">
                <span><?php echo app('translator')->get('project/Standard/title.tenbc'); ?></span>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-10">
                <select class="form-control" id="name-report">
                    <option hidden value=""></option>
                    <?php $__currentLoopData = $kehoachbaocao; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $khbc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($khbc->id); ?>"><?php echo e($khbc->ten_bc); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    </div>
    <div class="container-fuild mt-3">
        <div class="row">
            <div class="col-md-8">
                <span><?php echo app('translator')->get('project/Standard/title.lbchddt'); ?></span>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8">
                <input type="text" placeholder="<?php echo app('translator')->get('project/Standard/title.lbchddt'); ?>" name="" id="input-link-report" 
                 class="form-control ">
            </div>
            <div class="col-md-4 item-group-button">
                <!-- <button class="btn btn-benchmark mr-2 " type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.lammoi'); ?>">
                    <i class="bi bi-arrow-clockwise" style="font-size: 35px;color: red;"></i>
                </button> -->
                <button id="btn-save" class="btn btn-benchmark mr-2 " type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.luu'); ?>">
                    <i class="bi bi-save" style="font-size: 35px;color: #50cd89;"></i>
                </button>
                <button class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/Standard/title.xuat_excel'); ?>">
                    <i class="bi bi-file-earmark-excel " style="font-size: 35px;color: #50cd89;"></i>
                </button>
            </div>
        </div>
    </div>

    <h2 class="mt-3">
        <?php echo app('translator')->get('project/Standard/title.dslbchddt'); ?>
    </h2>
    <div class="form-standard">

        
        <table class="table table-striped table-bordered" id="table" width="100%">
            <thead>
             <tr>
                <th ><?php echo app('translator')->get('project/Standard/title.tenbc'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.lbchddt'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.ngayt'); ?></th>
                <th ><?php echo app('translator')->get('project/Standard/title.hanhd'); ?></th>
             </tr>
            </thead>
            <tbody>  
            </tbody>                
        </table>
    </div>
</section>
<!-- /Kết thúc page trang -->
    
    <!-- Kết thúc trang -->
    </section>



<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDeleteLabel">
            <?php echo app('translator')->get('project/Standard/title.canhbao'); ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><?php echo app('translator')->get('project/Standard/title.btsmx'); ?></p>
      </div>
      <div class="modal-footer">
        <a href="#" id="btn-delete" class="btn btn-danger"><?php echo app('translator')->get('project/Standard/title.xnxoa'); ?></a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('project/Standard/title.close'); ?></button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdateLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalUpdateLabel">
            <?php echo app('translator')->get('project/Standard/title.capnhat'); ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo e(route('admin.thuongtruc.manacategory.editbaocaourl')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <input type="hidden" id="id_url" name="id_url">
          <div class="modal-body">
                <div class="form-group">
                    <label><?php echo app('translator')->get('project/Standard/title.tenbc'); ?></label>
                    <select class="form-control" id="name-report-update" name="id_bc">
                        <option hidden value=""></option>
                        <?php $__currentLoopData = $kehoachbaocao; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $khbc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($khbc->id); ?>"><?php echo e($khbc->ten_bc); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label><?php echo app('translator')->get('project/Standard/title.lbchddt'); ?></label>
                    <input type="text" placeholder="<?php echo app('translator')->get('project/Standard/title.lbchddt'); ?>" name="link_url" id="link_url" 
                     class="form-control" required>
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <?php echo app('translator')->get('project/Standard/title.capnhat'); ?>
            </button>
          </div>
      </form>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>




<?php $__env->startSection('footer_scripts'); ?>
<script>
    $(function(){
        table = $('#table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "<?php echo route('admin.thuongtruc.manacategory.dataLinkreport'); ?>",
            columns: [
                { data: 'ten_bc', name: 'ten_bc' },
                { data: 'url', name: 'url' },
                { data: 'createdAt', name: 'createdAt' },
                { data: 'actions', name: 'actions',className: 'action' },
            ],            
        });
    });  


    
    
    $("#name-report").select2({
        placeholder: "<?php echo app('translator')->get('project/Standard/title.tenbc'); ?>"
    })
    $("#name-report-update").select2({
        placeholder: "<?php echo app('translator')->get('project/Standard/title.tenbc'); ?>"
    })
    


    $("#btn-save").click(function() {
        let id_report = $("#name-report").val();
        let link_report = $("#input-link-report").val();
        if(id_report == "" || link_report == ""){
            alert("<?php echo app('translator')->get('project/Standard/title.vlddtt'); ?>")
        }else{
            let data = { id_report, link_report  };
            var route = "<?php echo e(route('admin.thuongtruc.manacategory.addbaocaourl')); ?>";
            fetch(route, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                body: JSON.stringify(data)
            })
                .then((response) => response.json())
                .then((data) => {
                    if(data.mes == "done"){
                        alert("<?php echo app('translator')->get('project/Standard/title.tlbctc'); ?>");
                        $("#name-report").val("");
                        $("#name-report").trigger("change");
                        $("#input-link-report").val("");
                        table.ajax.reload();
                    }
                })
        }   
    })

    
    $('#modalDelete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('id') 
      
        let route = "<?php echo e(route('admin.thuongtruc.manacategory.deletebaocaourl')); ?>?id=" + recipient; 
        var modal = $(this)
        modal.find('#btn-delete').attr("href", route);
    })


    $('#modalUpdate').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('id') 
        
        let route = "<?php echo e(route('admin.thuongtruc.manacategory.findbaocaourl')); ?>?id=" + recipient; 
        $("#id_url").val(recipient);
        fetch(route, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            })
                .then((response) => response.json())
                .then((data) => {
                    if(data != undefined && data != null){
                        $("#name-report-update").val(data.id_kehoach_baocao);
                        $("#name-report-update").trigger("change");
                        $("#link_url").val(data.url);
                    }
                })
    })
    
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp74\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Standard/mana_linkreport.blade.php ENDPATH**/ ?>