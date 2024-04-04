<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/QualiAssurance/title.qlmc'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/QualiAssurance/qualiassurance.css')); ?>">
<style type="text/css">
.searchtext {
    padding: 13px 10px !important;
}

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    Quản lý kho dữ liệu
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
<!-- page trang ở đây -->
<section class="content-body">
    <?php if(!Sentinel::inRole('khac')): ?>
    <div class="form-standard">

        <div class="form-group">
            <div class="row">
                <div class="col-md-8">
                    <h3>Danh sách dữ liệu</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <input type="text" name="tieude_search" id="tieude_search" class="form-control" style="height: 100%;" placeholder="Lọc dữ liệu theo tên">
                </div>


                <div class="col-md-1" style="text-align: right;">
                    <a href="<?php echo e(route('admin.dambaochatluong.manaproof.newProof')); ?>" class="btn btn-benchmark" style="width: 100%;" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/QualiAssurance/title.tmoi'); ?>">
                        <i class="bi bi-plus-square" style="font-size: 35px;color: #50cd89;"></i>
                    </a>
                </div>


                <!-- <div class="col-md-1">
                    <a class="btn btn-benchmark" style="width: 100%;" href="<?php echo e(route('admin.dambaochatluong.manaproof.exportProof')); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo app('translator')->get('project/QualiAssurance/title.xuat_excel'); ?>">
                        <i class="bi bi-file-earmark-excel " style="font-size: 35px;color: #50cd89;"></i>
                    </a>
                </div> -->
            </div>
        </div>
        <table class="table table-striped table-bordered" id="table" width="100%">
            <thead>
             <tr>
                <th >Tiêu đề</th>
                <th ><?php echo app('translator')->get('project/QualiAssurance/title.sohieu'); ?></th>
                <th ><?php echo app('translator')->get('project/QualiAssurance/title.ngaybh'); ?></th>
                <th ><?php echo app('translator')->get('project/QualiAssurance/title.noibh'); ?></th>
                <!-- <th ><?php echo app('translator')->get('project/QualiAssurance/title.dvql'); ?></th> -->
                
                <th ><?php echo app('translator')->get('project/QualiAssurance/title.hanhd'); ?></th>
             </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <?php endif; ?>

</section>
<!-- Modal -->
<div class="modal fade" id="delete_confirm_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('project/QualiAssurance/title.xoamc'); ?></h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h5><?php echo app('translator')->get('project/QualiAssurance/message.confirm.delete'); ?></h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo app('translator')->get('project/QualiAssurance/title.huy'); ?></button>
          <button type="button" onclick="deletemc();return false;" class="btn btn-primary"><?php echo app('translator')->get('project/QualiAssurance/title.xoa'); ?></button>
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
    var id_del = '';
    var cur_search = [];
    var list_search = ["<?php echo app('translator')->get('project/QualiAssurance/title.nam'); ?>/<?php echo app('translator')->get('project/QualiAssurance/title.lvuc'); ?>/<?php echo app('translator')->get('project/QualiAssurance/title.hoatdong'); ?>",
"<?php echo app('translator')->get('project/QualiAssurance/title.tdmc'); ?>",
"<?php echo app('translator')->get('project/QualiAssurance/title.tyeu'); ?>",
"<?php echo app('translator')->get('project/QualiAssurance/title.sohieu'); ?>",
"<?php echo app('translator')->get('project/QualiAssurance/title.diachi'); ?>",
"<?php echo app('translator')->get('project/QualiAssurance/title.tukhoa'); ?>",];

    function add(){
        var choose = $('#add_tc').val();
        var idx = (choose - 1);
        if(!cur_search.includes(idx)){
            cur_search.push(idx);
            fill_list_search();
            $('#div_tk_' + choose).show();
        }
    }

    function close_tc(id){
        $('#div_tk_' + id).hide();
        var idx = id - 1;

        if(cur_search.includes(idx)){
            for (var i = 0; i < cur_search.length; i++) {
                cur_search[i] == idx;
                cur_search.splice(i,1);
                break;
            }
            fill_list_search();
        }
    }

    function fill_list_search(){
        var el = $('#add_tc');
        el.empty();
        for (var i = 0; i < list_search.length; i++) {
            if(!cur_search.includes(i)){
                el.append($("<option></option>").attr("value", (i + 1)).text(list_search[i]));
            }
        }
    }

    function deleteconfirm(id) {
        id_del = id;
        $('#delete_confirm_modal').modal('toggle');
    }

    function deletemc(){
        if(id_del > 0){
            console.log(id_del)
            $.ajax({
                url: "<?php echo route('admin.dambaochatluong.manaproof.deleteMC'); ?>",
                type: 'POST',
                data:{
                    id: id_del,
                    _token: "<?php echo e(csrf_token()); ?>"
                },
                error: function(err) {

                },
                success: function(data) {
                console.log(data)
                    if(data == 1){
                        alert("<?php echo app('translator')->get('project/QualiAssurance/message.success.delete'); ?>");
                        table.ajax.reload();
                    }else{
                        alert("<?php echo app('translator')->get('project/QualiAssurance/message.error.delete'); ?>");
                    }
                    $('#delete_confirm_modal').find('button.close').click();
                }
            });
        }
    }

    function getdatasearch(){
        var nam = $('#nam_search').val();
        var linhvuc = $('#linhvuc_search').val();
        var hoatdong = $('#hoatdong_search').val();
        var tieude = $('#tieude_search').val().trim();

        var tdmc = $('#search_2').val().trim();
        var tyeu = $('#search_3').val().trim();
        var sohieu = $('#search_4').val().trim();
        var diachi = $('#search_5').val().trim();
        var tukhoa = $('#search_6').val().trim();
        var donvi = $('#search-donvi').val().trim();


        for (var i = 0; i < 6; i++) {
            if(!cur_search.includes(i)){
                switch(i){
                    case 0: nam = ''; linhvuc = ''; hoatdong = ''; break;
                    case 1: tdmc = ''; break;
                    case 2: tyeu = ''; break;
                    case 3: sohieu = ''; break;
                    case 4: diachi = ''; break;
                    case 5: tukhoa = ''; break;
                    case 6: donvi = ''; break;
                }
            }
        }

        return {
            nam: nam,
            linhvuc: linhvuc,
            hoatdong: hoatdong,
            tdmc:tdmc,
            tyeu:tyeu,
            sohieu:sohieu,
            diachi:diachi,
            tukhoa:tukhoa,
            donvi:donvi,
            _token : "<?php echo e(csrf_token()); ?>",
        };
    }

    function search(){
        var tieude = $('#tieude_search').val();
        table.ajax.url("<?php echo route('admin.dambaochatluong.manaproof.viewProof'); ?>?tieude=" + tieude).load();
    }

    function loadhoatdong(linhvuc){
        $.ajax({
            url: "<?php echo route('admin.dambaochatluong.manaproof.getHD'); ?>?linhvuc=" + linhvuc + '&year=' + $('#nam_search').val(),
            type: 'GET',
            error: function(err) {

            },
            success: function(data) {
                var el = $('#hoatdong_search');
                el.empty();
                el.append($("<option></option>").attr("value", '').text("<?php echo app('translator')->get('project/QualiAssurance/title.lchd'); ?>"));
                if(data != ''){
                    for (var i = 0; i < data.length; i++) {
                        el.append($("<option></option>").attr("value", data[i][0]).text(data[i][1]));
                    }
                }
            }
        });
    }

    $(function(){
        table = $('#table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            searching: false,
            ajax: {
                url: "<?php echo route('admin.dambaochatluong.manaproof.viewProof', ['id' => $id]); ?>",
                type: 'POST',
                cache: false,

            },
            order: [],
            columns: [
                { data: 'tieu_de', name: 'tieu_de' },
                { data: 'sohieu', name: 'sohieu' },
                { data: 'ngayBan_hanh', name: 'ngayBanhanh' },
                { data: 'noi_banhanh', name: 'noi_banhanh' },
                // { data: 'ten_donvi', name: 'ten_donvi' },
                // { data: 'cong_khai_text', name: 'cong_khai_text'},
                // { data: 'tinhTrang', name: 'tinhTrang' },
                { data: 'actions', orderable: false, searchable: false ,className: 'action'},
            ],
        });

        $('#tieude_search').keyup(function(){
            search();
        });

        $('#linhvuc_search').on('change',function(){
            loadhoatdong($('#linhvuc_search').val());
        });

        $('#year').on('change',function(){
            loadhoatdong($('#linhvuc_search').val());
        });

        $("#linhvuc_search").select2({
            placeholder: "<?php echo app('translator')->get('project/QualiAssurance/title.lclv'); ?>",
            allowClear: false
        })
        $("#search-donvi").select2({
            placeholder: "<?php echo app('translator')->get('project/QualiAssurance/title.dvql'); ?>",
            allowClear: true
        })



        $("#hoatdong_search").select2({
            placeholder: "<?php echo app('translator')->get('project/QualiAssurance/title.lchd'); ?>",
            allowClear: false
        })

        $("#nam_search").select2({
            placeholder: "<?php echo app('translator')->get('project/QualiAssurance/title.nam'); ?>",
            allowClear: false
        })

        $('.div_search').hide();
        fill_list_search();

    });
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamppkhoaluan\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/QualiAssurance/manaproof.blade.php ENDPATH**/ ?>