<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Selfassessment/title.xemmcg'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/project/QualiAssurance/qualiassurance.css')); ?>">
<style type="text/css">
    .searchtext {
        padding: 13px 10px !important; 
    }    
    .block-flex{
        display: flex;
        justify-content: space-between;
    }
    .block-flex section{
        padding: 0 10px;
        width: 48%;
    }
    .block-group{
        align-items: center;
        margin: 10px 0 ;
    }
    .block-group label{
        margin-right:10px;
        flex: 1;
    }
    .block-group select{
        flex: 1;
    }
    .list-item{
        border: 2px solid green;
        padding: 10px 5px;
        display: flex;
        justify-content: space-between;
        margin: 10px 0;
    }
    .list-item .text-content{
        width: 90%;
    }
    .list-item button{
       width: 4%;
    }
    .btn-danger{
        padding: 0 !important;
        border-radius: 5px;
    }
    .select2-selection{
        background: white;
        padding-left: 10px;
        border: 1px solid #e4e6ef;
    }
    .font-weight-bold{
        font-weight: bold;
    }
    #table{
    padding: 21px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 0 12px #ababab;
    }
    p{
        background: #fff;
    height: auto;
    border: 1px solid #e4e6ef;
    padding: 7px 2px 7px 8px;
    }
    th , td{
        padding: 8px;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Selfassessment/title.xemmcg'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
        
<!-- page trang ở đây -->
<div class="block-flex">
    <section class="content-body">
        <div class="block-item">
            
            <div class="form-block">
                <div class="block-group">
                    <label class="font-weight-bold">
                        <?php echo app('translator')->get('project/Selfassessment/title.baocao'); ?>: 
                    </label>
                    
                    <p class="">
                        <?php $__currentLoopData = $kehoach_baocao; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $khbc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($baocao): ?>
                                <?php if($khbc->id == $baocao->id): ?>
                                    <?php echo e($khbc->ten_bc); ?>

                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </p>
                </div>
                <div class="block-group">
                    <label class="font-weight-bold">
                        <?php echo app('translator')->get('project/Selfassessment/title.tctchi'); ?>: 
                    </label>
                    <p class="">
                        <?php if($listTC): ?>
                            <?php $__currentLoopData = $listTC; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($tc->tieuchuan_id == $tieuchuan->id): ?>
                                <?php echo app('translator')->get('project/Selfassessment/title.tc'); ?> <?php echo e($tc->stt); ?>: <?php echo e($tc->mo_ta); ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        
                    </p>

                    <p class="">
                        <?php $__currentLoopData = $listTChi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tchi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($tchi->id == $tieuchi->id): ?>
                            <?php echo app('translator')->get('project/Selfassessment/title.tc'); ?> <?php echo e($tchi->sttTC); ?>.<?php echo e($tchi->stt); ?>: <?php echo e($tchi->mo_ta); ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </p>
                </div>
                <div class="block-group">
                    <label class="font-weight-bold">
                        <?php echo app('translator')->get('project/Selfassessment/title.mctt'); ?>
                    </label>
                    <p>
                        <?php $__currentLoopData = $listMCTT; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mctt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(in_array($mctt->id, $listminhchungtoithieu)): ?>
                                <?php echo e($mctt->tieu_de); ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </p>
                </div>
                <div class="block-group">
                    <label class="font-weight-bold">
                        <?php echo app('translator')->get('project/Selfassessment/title.kmc'); ?>
                    </label>
                    <span class="badge badge-primary kieu-minh-chung">
                        <?php if($countMc > 1): ?>
                            <?php echo app('translator')->get('project/Selfassessment/title.mcgop'); ?>
                        <?php elseif($countMc == 1): ?>
                            <?php echo app('translator')->get('project/Selfassessment/title.mcdl'); ?>
                        <?php else: ?>
                            <?php echo app('translator')->get('project/Selfassessment/title.thsmcc'); ?>
                        <?php endif; ?>
                    </span>
                </div>
                <div class="block-group">
                    <label class="font-weight-bold">
                        <?php echo app('translator')->get('project/Selfassessment/title.tmc'); ?>: 
                    </label>
                    <p>
                        <?php echo e($mcgop->tieu_de); ?>

                    </p>
                </div>
                <div class="block-group">
                    <label class="font-weight-bold">
                        <?php echo app('translator')->get('project/Selfassessment/title.trichyeu'); ?>
                    </label>
                    <p>
                        <?php echo e($mcgop->trich_yeu); ?>

                    </p>
                </div>
                <div class="block-group">
                    <label><?php echo app('translator')->get('project/Selfassessment/title.congkhai'); ?></label>
                    <input type="checkbox" id="congkhai_checkbox" name="cong_khai" disabled
                        <?php if( $mcgop->cong_khai == "Y" ): ?>
                            checked
                        <?php endif; ?>
                     >
                    <label for="congkhai_checkbox"><?php echo app('translator')->get('project/Selfassessment/title.ckmc'); ?></label>
                </div>
                
            </div>
        </div>
    </section>
    <section class="content-body">

        <div class="">
            <label class="font-weight-bold"><?php echo app('translator')->get('project/Selfassessment/title.dsmc'); ?></label>
            <div class="block-list-selected">

            </div>
        </div>

        <div class="form-standard">
            <table class="table-minhchung table-striped table-bordered" id="table"  width="100%">
              <thead class="thead-light">
                <tr>
                    <th ><?php echo app('translator')->get('project/QualiAssurance/title.tdmc'); ?></th>
                    <th ><?php echo app('translator')->get('project/QualiAssurance/title.hanhd'); ?></th>
                 </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
        </div>
    </section>
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
                    if(data == 1){
                        alert("<?php echo app('translator')->get('project/QualiAssurance/message.success.delete'); ?>");
                        table.ajax.reload();
                    }else{
                        alert("<?php echo app('translator')->get('project/QualiAssurance/message.error.delete'); ?>");
                    }
                    $('#delete_confirm_modal').modal('hide');
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

        for (var i = 0; i < 6; i++) {
            if(!cur_search.includes(i)){
                switch(i){
                    case 0: nam = ''; linhvuc = ''; hoatdong = ''; break;
                    case 1: tdmc = ''; break;
                    case 2: tyeu = ''; break;
                    case 3: sohieu = ''; break;
                    case 4: diachi = ''; break;
                    case 5: tukhoa = ''; break;
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
        // table = $('#table').DataTable({
        //     responsive: true,
        //     processing: true,
        //     serverSide: true,
        //     searching: false,            
        //     ajax: {
        //         url: "<?php echo route('admin.dambaochatluong.manaproof.viewProof'); ?>",
        //         type: 'POST',
        //         cache: false,
        //         data: function (d) {
        //             return $.extend(d,getdatasearch());
        //         },
        //     },
        //     order: [],  
        //     columns: [
        //         { data: 'tieu_de', name: 'tieu_de' },
        //         { data: 'checkBoxSelect', name: 'checkBoxSelect'  },
        //     ],           
        // });

        $('#tieude_search').keyup(function(){            
            search();
        });

        $('#linhvuc_search').on('change',function(){
            loadhoatdong($('#linhvuc_search').val());
        });

        $('#year').on('change',function(){
            loadhoatdong($('#linhvuc_search').val());
        });

        $("#hoatdong_search").select2();
        $("#linhvuc_search").select2();
        $("#nam_search").select2();


        $('.div_search').hide();
        fill_list_search();

    });  
</script>



<script type="text/javascript">
    $("#select-report").select2({
        placeholder: "<?php echo app('translator')->get('project/Selfassessment/title.lcbc'); ?>",
        allowClear: true
    })
    $("#standard").select2({
        placeholder: "<?php echo app('translator')->get('project/Selfassessment/title.lctc'); ?>",
        allowClear: true
    })
    $("#criteria").select2({
        placeholder: "<?php echo app('translator')->get('project/Selfassessment/title.lctchi'); ?>",
        allowClear: true
    })
    $("#select_mctt").select2({
        placeholder: "<?php echo app('translator')->get('project/Selfassessment/title.lcmctt'); ?>",
        allowClear: true
    })

        $('#select-report').on('change', function (e) {
            if($(this).val() != null && $(this).val() != ""){
                var route = "<?php echo e(route('admin.tudanhgia.preparereport.searchPtyc')); ?>" + "?id_report=" + $(this).val();
                fetch(route, {
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'POST', 
                })
                    .then((response) => response.json())
                    .then((data) => {
                        if(data.kehoach_tieuchuan != undefined){
                            $('#standard').empty().trigger("change");
                            data.kehoach_tieuchuan.forEach((item, index) => {
                                let title = `TC ${item.stt}: ${item.mo_ta}`;
                                var option = new Option(title, item.tieuchuan_id, true, true);
                                $("#standard").append(option);
                            })
                        }
                        var option = new Option("", "", true, true);
                        $("#standard").append(option).trigger('change');
                    })
            }
        });
        $('#standard').on('change', function (e) {
            if($(this).val() != null && $(this).val() != ""){
                var route = "<?php echo e(route('admin.tudanhgia.preparereport.searchPtyc')); ?>" + "?id_standard=" + $(this).val();
                fetch(route, {
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'POST', 
                })
                    .then((response) => response.json())
                    .then((data) => {
                        if(data.tieuchi != undefined){
                            $('#criteria').empty().trigger("change");
                            data.tieuchi.forEach((item, index) => {
                                let title = `TC ${item.sttTC}.${item.stt}: ${item.mo_ta}`;
                                var option = new Option(title, item.id, true, true);
                                $("#criteria").append(option);
                            })
                        }
                        var option = new Option("", "", true, true);
                        $("#criteria").append(option).trigger('change');
                    })
            }
        });

        $('#criteria').on('change', function (e) {
            if($(this).val() != null && $(this).val() != ""){
                var route = "<?php echo e(route('admin.tudanhgia.preparereport.searchMctt')); ?>" + "?id_criteria=" + $(this).val();
                fetch(route, {
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })
                    .then((response) => response.json())
                    .then((data) => {
                        if(data != undefined && data != null){
                            $("#select_mctt").empty();
                            data.forEach((item, index) => {
                                var option = new Option(item.tieu_de, item.id , true, true);
                                $("#select_mctt").append(option);
                            })
                        }
                    })
            }
        });
        
        // select minh chứng từ thư viện
        var selectedMinhChung = [];
        $("#table").on("click", ".btn-select-item", function(){
            let check = false;
            selectedMinhChung.forEach(item => {
                if($(this).data('id') == item.id){
                    check = true;
                }
            })
            if(!check){
                let infoMC = {
                    'id' : $(this).data('id'),
                    'content' : $(this).data('content'),
                    'trichyeu'  : $(this).data('trichyeu')
                }
                selectedMinhChung.push(infoMC);
                updateUI();
                kieuMC();
            }
        })

        // load minh chứng đã có
        var infoMC
        <?php $__currentLoopData = $minhchung; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            infoMC = {
                'id' : '<?php echo e($mc->id); ?>',
                'content' : '<?php echo e($mc->tieu_de); ?>',
                'trichyeu'  : '<?php echo e($mc->trich_yeu); ?>'
            }
            selectedMinhChung.push(infoMC);
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if(!empty($minhchung)): ?>
            updateUI();
        <?php endif; ?>

        function updateUI() {
            $(".block-list-selected").empty();
            selectedMinhChung.forEach((item, index) => {
                let UI = ` 
                    <tr>
                        <td>
                            ${item.content}
                        </td>
                        <td>
                            <a target="_blank" href="<?php echo route('admin.dambaochatluong.manaproof.showProof'); ?>/${item.id}" class="btn mt-2" data-bs-placement="top" title="<?php echo app('translator')->get('project/Selfassessment/title.xemmcg'); ?>">
                                <i class="bi bi-eye-fill" style="font-size: 25px;color: #50cd89;"></i>
                            </a>
                        </td>
                    </tr>
                 `;
                 // item.id
                $(".table-minhchung tbody").append(UI)
            })
        }

        function kieuMC(){
            if(selectedMinhChung.length == 1){
                $(".kieu-minh-chung").text("<?php echo app('translator')->get('project/Selfassessment/title.mcdl'); ?>")
                $("#name_minhchung").val(selectedMinhChung[0].content);
                $("#trichyeu_mc").val(selectedMinhChung[0].trichyeu);
            }else if(selectedMinhChung.length > 1){
                $(".kieu-minh-chung").text("<?php echo app('translator')->get('project/Selfassessment/title.mcgop'); ?>")
            }else{
                $(".kieu-minh-chung").text("<?php echo app('translator')->get('project/Selfassessment/title.thsmcc'); ?>")
            }
        }

        $(".block-list-selected").on("click", ".btn-remove", function() {
            let index = undefined;
            for(let i = 0; i < selectedMinhChung.length ; i++){
                if(selectedMinhChung[i].id == $(this).attr("data-id")){
                    index = i;
                    break;
                }
            }
            if(index != undefined){
                selectedMinhChung.splice(index, 1)
            }
            updateUI()
            kieuMC()
        })  



        // submit form
        $("#btn-submit").on("click", function() {
            let baocao_id = $("#select-report").val();
            let tieuchuan = $("#standard").val();
            let tieuchi = $("#criteria").val();
            let mctthieu = $("#select_mctt").val();
            let tenminhchung = $("#name_minhchung").val();
            let trichyeu = $("#trichyeu_mc").val();
            let congkhai;
            if ($('#congkhai_checkbox').is(':checked')) {
                congkhai = "Y"
            }else{
                congkhai = "N"
            }
            let hoatdongId = $("#hoatdong_search").val();
            let listMinhChung = selectedMinhChung;


            if(tenminhchung != "" && trichyeu != "" && listMinhChung.length > 0){
                let data = {
                    baocao_id, tieuchuan, tieuchi, mctthieu, tenminhchung,
                    trichyeu, congkhai, listMinhChung, hoatdongId,
                    'idmcGop'   : '<?php echo e($mcgop->id); ?>',
                    'update': 'updated'
                }
                //console.log(data)
                var route = "<?php echo e(route('admin.tudanhgia.preparereport.gopMinhChung')); ?>";
                    fetch(route, {
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: 'POST',
                        body: JSON.stringify(data)
                    })
                        .then((response) => response.json())
                        .then((data) => {
                            if(data.status == true){
                                alert(data.message)
                            }
                        })
            }else{
                alert("<?php echo app('translator')->get('project/Selfassessment/title.thieutt'); ?>")
            }
            
             
        })
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp74\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Selfassessment/viewmcgop.blade.php ENDPATH**/ ?>