<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Selfassessment/title.tqkhbc'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/custom-datatable.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/project/Selfassessment/selfassessment.css')); ?>">
<style type="text/css">
    .row4 {
        width: 46% !important;
    }
    .row3 {
        width: 21% !important;
    }

    .row1{
        width: 18% !important;
    }
    .row2{
        width: 15% !important;

    }
    .td_1{
        width: 43.1%;
        vertical-align: middle;
    }
    .td_2{
        width: 19.49%;
    }
    .td_3{
        width: 14%;
    }
    .td_4{
        width: 14.1%;
    }
    .td_5{
        text-align: center;
    }

    .vertical{
        text-align: center;
        vertical-align: middle;
    }

    .rounded{
        border-radius: 5px !important;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Selfassessment/title.tqkhbc'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
        <h1 class="text-center"><?php echo e($tenbaocao); ?></h1>
        <div class="container text-center m-5 rounded"> 
            <a href="<?php echo e(route('admin.tudanhgia.report.detail_bc',['id' => $id_kehoach])); ?>" class="btn btn-danger rounded"><?php echo app('translator')->get('project/Selfassessment/title.khcb'); ?></a>
            <a href="<?php echo e(route('admin.tudanhgia.report.detail_baocao',['id' => $id_kehoach])); ?>" class="btn btn-light rounded"><?php echo app('translator')->get('project/Selfassessment/title.khvbc'); ?></a>
        </div>
        <?php if($phutrach): ?>
            <div class="form-group text-center rounded">
                <div class="btn btn-warning btn-xs rounded">
                    <b><?php echo app('translator')->get('project/Selfassessment/title.ttct'); ?> :</b>
                    <?php echo e($phutrach->name); ?>

                    (<?php echo e($phutrach->ten_donvi); ?>)
                </div>
            </div>
        <?php endif; ?>
        <table class="table table-striped table-bordered" id="table" width="100%">
            <thead>
             <tr>
                <th ><?php echo app('translator')->get('project/Selfassessment/title.tenbc'); ?></th>
                <th ><?php echo app('translator')->get('project/Selfassessment/title.tgch'); ?></th>
                <th ><?php echo app('translator')->get('project/Selfassessment/title.conlai'); ?></th> 
                <th ><?php echo app('translator')->get('project/Selfassessment/title.truongnhom'); ?></th>
                <th ><?php echo app('translator')->get('project/Selfassessment/title.nsth'); ?></th>
             </tr>
            </thead>
            <tbody>  
            </tbody>                
        </table>
    
    
   
<!-- page trang ở đây -->

    <!-- Modal -->
<!-- modal nhân sự thực hiện -->
<div class="modal inmodal fade" id="modal_nhansu" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex flex-row-reverse">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title"><?php echo app('translator')->get('project/Selfassessment/title.danhsachnhansu'); ?></h4>
                <div class="add_tc">
                    
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="list-group exchangeList_tn text-center" style="background-color: #f2f2f2a3;">
                            
                        </div>
                    </div>

                    <div class="col-lg-2 text-center justify-content-center">
                        <button class="btn btn-default"><i class="fas fa-arrows-alt-h"></i></button>
                    </div>
                    <div class="col-lg-5">

                        <div class="list-group exchangeList_th text-center" style="background-color: #f2f2f2a3;">
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-bs-dismiss="modal"><?php echo app('translator')->get('project/Selfassessment/title.dong'); ?></button>
            </div>
        </div>
    </div>
</div>
<!-- /Kết thúc page trang -->
    
    <!-- Kết thúc trang -->
</section>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>

<script type="text/javascript">
        $(function(){
            table = $('#table').DataTable({
                lengthMenu: [[6, 10, 20, -1], [6, 10, 20, "All"]],
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: "<?php echo route('admin.tudanhgia.report.data_deatial'); ?>?id="+<?php echo e($id_kehoach); ?>,
                columns: [
                    { data: 'tieuchuan', name: 'tieuchuan', className: ' dt-control td_1'},
                    { data: 'time', name: 'time', className: 'td_2 vertical' },
                    { data: 'conlai', name: 'conlai', className: 'td_3 vertical' },
                    { data: 'truongnhom', name: 'truongnhom', className: 'td_4 vertical' },
                    { data: 'actions', name: 'actions', className: 'td_5 vertical' },
             
                ],   
            });
        });

        $('.table-striped').on('click','.show_nhansu',function(){
            let id_khtc = $(this).attr('d-id');
            $('.exchangeList_th').empty();
            $('.exchangeList_tn').empty();
            $('.exchangeList_th').append("<p class='btn btn-primary p-4'><?php echo app('translator')->get('project/Selfassessment/title.nscb'); ?></p>")
            $('.exchangeList_tn').append("<p class='btn btn-primary p-4'><?php echo app('translator')->get('project/Selfassessment/title.truongnhom'); ?></p>")
                $.ajax({
                        url: "<?php echo e(route('admin.tudanhgia.report.show_nsth')); ?>",
                        type: "POST",
                        data:{
                            id_khtc : id_khtc,
                            _token: '<?php echo e(csrf_token()); ?>',
                        },    
                        error: function(err) {

                        },

                        success: function(data) {
                            let truongnhom = '';
                            for(let i = 0 ; i < data.length - 1 ; i++){
                                $('.exchangeList_th').append(`<p>${data[i]}</p>`);
                            }
                            data.forEach(function(e){
                                truongnhom = e;

                            });
                            $('.exchangeList_tn').append(`<p>${truongnhom}</p>`);

                        },
                });
            $('#modal_nhansu').modal('show');
        })



         $('#table tbody').on('click', 'td.dt-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row(tr);
            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            } else {
                // Open this row
                let id_tc = row.data().id;
                $.ajax({
                        url: "<?php echo e(route('admin.tudanhgia.report.show_tctieuchi')); ?>",
                        type: "GET",
                        data:{
                            id_tc : id_tc,
                            id_kehoach : <?php echo e($id_kehoach); ?>,
                            // _token : <?php echo e(csrf_token()); ?>,
                        },    
                        error: function(err) {
                            alert("<?php echo app('translator')->get('project/Selfassessment/title.bcndtt'); ?>");
                        },

                        success: function(data) {
                            let times;
                            let x = '';
                            let s ='';
                            for (const [key, value] of Object.entries(data)) {
                                times = value[3]+'<i class="fas fa-arrow-right"></i>'+value[4];
                                if (value[3] == '' || value[4]== null){
                                    times = 'Không có dữ liệu';
                                }
                                   x += `<tr>
                                        <td class = "row4 vertical">${value[8]+'.'+value[1]} : ${value[2]}</td>     
                                        <td class = "row3 vertical">${times}</td>
                                        <td class = "row2 vertical">${value[6]}</td>
                                        <td class = "row2 vertical">${value[5]}</td>
                                        <td class = "row1 vertical">${value[7]}</td>
                                        </tr>`
                                    // console.log(value)
                            }

                             s =   `
                                    <table class="table table-hover table-more">
                                        ${x}
                                    </table>
                                    `
                            row.child(s).show();
                            tr.addClass('shown');
                        },
                        
                })
                
              
                
            }
        });





 $('.table-striped').on('click','.show_nhansu_tc',function(){
    let id_khtc = $(this).attr('d-id');
    $('.exchangeList_th').empty();
    $('.exchangeList_tn').empty();
    $('.exchangeList_th').append("<p class='btn btn-primary p-4'><?php echo app('translator')->get('project/Selfassessment/title.nscb'); ?></p>")
    $('.exchangeList_tn').append("<p class='btn btn-primary p-4'><?php echo app('translator')->get('project/Selfassessment/title.truongnhom'); ?></p>")
        $.ajax({
                url: "<?php echo e(route('admin.tudanhgia.report.show_nsth_tc')); ?>",
                type: "POST",
                data:{
                    id_khtc : id_khtc,
                    _token: '<?php echo e(csrf_token()); ?>',
                },    
                error: function(err) {

                },

                success: function(data) {
                    let truongnhom = '';
                    for(let i = 0 ; i < data.length - 1 ; i++){
                        $('.exchangeList_th').append(`<p>${data[i]}</p>`);
                    }
                    data.forEach(function(e){
                        truongnhom = e;

                    });
                    $('.exchangeList_tn').append(`<p>${truongnhom}</p>`);

                },
        });
    $('#modal_nhansu').modal('show');
});
</script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\file_moi\xampp\htdocs\kdcl-2023\resources\views/admin/project/Selfassessment/detaitchitiet.blade.php ENDPATH**/ ?>