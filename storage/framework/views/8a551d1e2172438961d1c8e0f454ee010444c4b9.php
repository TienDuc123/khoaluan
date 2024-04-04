<?php $__env->startSection('title'); ?>
    Trang chủ
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <style>
        #kt_post{
            background: transparent !important;
        }
        .left, .right{
           margin-bottom: 40px;
            padding: 0 10px;
        }
        .common-info, .info-user, .block-table{
            width: 100%;
            background: white;
            border-radius: 10px;
            padding: 20px 30px;
            box-shadow: 0 0 12px #b1b1b1;
        }
        .info-item{
            width: 48%;
            margin-bottom: 35px;
            box-shadow: 0 0 12px #b1b1b1;
            border-radius: 5px;
            padding: 33px 30px 3px 37px;
        }
        .common-info-content{
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .bg-blue{
            background: #03a9f4;
        }
        .bg-green{
            background: #8bc34a;
        }
        .bg-orange{
            background: #ffc107;
        }
        .bg-red{
            background: #a65998;
        }
        .block-flex{
            padding: 10px 15px;
            text-align: center;
        }
        .block-flex a{
            color: rgb(96, 125, 139);
        }
        .bg{
            display: flex;
            padding: 30px 20px;
        }
        .bg i{
            font-size: 80px !important;
            color: white;
            width: 58%;
        }
        .block-text{
            text-align: right;
        }
        .block-text h1{
            font-size: 50px;
            color: white;
        }
        .block-text p{
            font-size: 20px !important;
            color: white;
        }
        .content-user img{
            border-radius: 50%;
        }
        .info-user h1{
            margin-bottom: 60px;
        }
        .link-name{
            font-size: 20px !important;
            color: #373737;
        }
        .link-email{
            font-size: 15px !important;
        }
        .table-img{
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .chucvu{
            color: #bda5f8!important;
            font-weight: 400;
            font-size: 14px;
            display: block;
        }
        .avatar{
            display: flex;
            align-items: center;
        }
        .block-chucvu{
            margin-left: 20px;
        }
        .mt-50{
            margin-top: 50px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('default.trangchu'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        

        <div class="container-fuild">
            <div class="row">
                <div class="left col-md-12">
                    <div class="block-table">
                        <h1 class="mb-4">Thông tin nhân sự</h1>
                        <table class="table table-striped table-bordered" id="table">
                            <thead>
                                <th>Avatar</th>
                                <th>Tên nhân sự</th>
                                <th>Email</th>
                                <th>Đơn vị</th>
                                <?php if(Sentinel::inRole('admin') || Sentinel::inRole('operator')): ?>
                                    <th>Hành động</th>
                                <?php endif; ?>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>


        <!-- <div class="container-fuild mt-50">
            <div class="row">

                <div class="right col-md-4">
                    <div class="info-user">
                        <h1>Thống kê nổi bật</h1>
                        <div class="content-user text-center">

                        </div>
                    </div>
                </div>
                <div class="left col-md-8">
                    <div class="common-info">
                        <h1 class="mb-5">Lịch làm việc chung</h1>
                        <div class="common-info-content">

                        </div>
                    </div>
                </div>

            </div>
        </div> -->
    </section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <script>
        $(function(){
            table = $('#table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                lengthMenu: [[5, 10, 20, -1],[5, 10, 20, "All"]],
                ajax: "<?php echo route('admin.dashboardTable'); ?>",
                columns: [
                    { data: 'avatar', name: 'avatar' , className:'avatar' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'tenDV', name: 'tenDV' },
                    <?php if(Sentinel::inRole('admin') || Sentinel::inRole('operator')): ?>
                        { data: 'actions', name: 'actions' },
                    <?php endif; ?>
                ],
            });
        });


    let routeApi = "<?php echo e(route('admin.getDataCommon')); ?>";
    fetch(routeApi, {
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
        .then((response) => response.json())
        .then((data) => {
            var numContent = document.querySelectorAll(".numContent")


            let i1 = 0, i2 = 0, i3 = 0, i4 = 0
            let animation1 = setInterval(() => {
                numContent[0].textContent = i1
                i1++
                if(numContent[0].textContent == data.countNS){
                    clearInterval(animation1)
                }
            }, 50);

            let animation2 = setInterval(() => {
                numContent[1].textContent = i2
                i2++
                if(numContent[1].textContent == data.countBC){
                    clearInterval(animation2)
                }
            }, 50);

            let animation3 = setInterval(() => {
                numContent[2].textContent = i3
                i3++
                if(numContent[2].textContent == data.countMC){
                    clearInterval(animation3)
                }
            }, 50);

            let animation4 = setInterval(() => {
                numContent[3].textContent = i4
                i4++
                if(numContent[3].textContent == data.countBB){
                    clearInterval(animation4)
                }
            }, 50);
        })
    </script>

<!--//jquery-ui-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamppkhoaluan\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/index.blade.php ENDPATH**/ ?>