<style type="text/css">
    table{
        border: 1px solid lightgrey !important;
    }
    table tr{
        border: 1px solid lightgrey !important;
    }
    table tr th,td{
        border: 1px solid lightgrey !important;
    }
</style>
<div class="m-t-md">
    <div  class="form-horizontal">
        <!-- <div class="form-group">
            <label class="col-sm-2 control-label">Mã minh chứng</label>
            <div class="col-sm-6">
                <input type="text" value=""  id="mykeySearchInputMc"  name="search" placeholder="Nhập mã minh chứng để tìm kiếm" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-8 col-sm-offset-2">
                <button class="ladda-button btn btn-primary fillterMinhChung" type="submit" data-style="expand-right">
                    <i class="fas fa-search"></i> Tìm kiếm
                </button>
            </div>
        </div> -->
        <div class="hr-line-dashed"></div>
    </div>
    <div id="phuluc10">
        
        
        <h3 class="text-center">DANH MỤC MINH CHỨNG</h3>
        <table class="table-bordered table m-t-md " >
            <thead>
            <tr>
                <th>Mã minh chứng</th>
                <th>Tên minh chứng</th>
                <th>Số, ngày/tháng ban hành</th>
                <th>Nơi ban hành</th>
                <th>Ghi chú</th>
            </tr>
            </thead>
            <tbody id="tableDsMinhChung" >
            <?php $__currentLoopData = $minhChungList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $minhChung): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <tr>
                    <td><?php echo $minhChung['mamc']; ?></td>
                    <td><?php echo $minhChung['tenmc']; ?></td>
                    <td><?php echo $minhChung['sohieubh']; ?></td>
                    <td><?php echo $minhChung['noibanhanh']; ?></td>
                    <td><?php echo $minhChung['minhchung']; ?></td>
                </tr>           
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php /**PATH D:\xamppkhoaluan\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/ExternalReview/include/phuluc10.blade.php ENDPATH**/ ?>