<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('project/Selfassessment/title.bctdg'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/project/Selfassessment/selfassessment.css')); ?>">
<link href="<?php echo e(asset('vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css')); ?>"  rel="stylesheet" media="screen"/>
    <link href="<?php echo e(asset('css/pages/editor.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page'); ?>
    <?php echo app('translator')->get('project/Selfassessment/title.ketluan'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content indexpage pr-3 pl-3">
        <!-- Bắt đầu trang -->
<!-- page trang ở đây -->
<section class="content-body">
	<div class="general">
		<h2>
       		<?php echo app('translator')->get('project/Selfassessment/title.phan3'); ?>
    	</h2>
    	<ol class="list_ol">
    		<li>
    			<a href=""><?php echo app('translator')->get('project/Selfassessment/title.trangchu'); ?></a>/
    		</li>
    		
    		<li><span><?php echo app('translator')->get('project/Selfassessment/title.baocao'); ?></span>/</li>
    		
    		<li><span><?php echo $KHBaCaoDetail->ten_bc; ?></span></li>
    		
    		<li><strong><?php echo app('translator')->get('project/Selfassessment/title.phan3'); ?></strong>/</li>
    	</ol>
	</div>

	<div class="body_content">     
			<div class="col-sm-12">
                <h3><?php echo app('translator')->get('project/Selfassessment/title.gypkl'); ?></h3>
                <span><?php echo app('translator')->get('project/Selfassessment/title.noidungtomtatndm'); ?></span>
                <br/><span><?php echo app('translator')->get('project/Selfassessment/title.tomtatndtt'); ?></span> <br/>
                <span> <?php echo app('translator')->get('project/Selfassessment/title.khct'); ?></span><br>
                <span> <?php echo app('translator')->get('project/Selfassessment/title.thdg'); ?></span>
            </div>
		
		<div class="update_text"> 
            <form action="<?php echo route('admin.tudanhgia.detailedplanning.updateconclusion'); ?>" method="POST">
                <input type="hidden" name="kh" class="id_kh" value="<?php echo e($KHBaCaoDetail->id); ?>">
                <input type="hidden" name="id_kehoacchung" class="id_khc" value="<?php echo e($id_kehoacchung); ?>">
                <?php echo csrf_field(); ?>  
        		<div class="row">
                    <div class="col-12">
                        <div class="card my-3">
                               
                                <div class="bootstrap-admin-card-content">
                                    <textarea name="text" id="tinymce_full" class="text_kl">
                                        <?php echo $text; ?>

                                    </textarea>
                                
                            </div>
                        </div>
                    </div>
                </div>
        		<div class="to_back">
        			<p>
                        <a href="<?php echo e(route('admin.tudanhgia.detailedplanning.index')); ?>">
            				<i class="fas fa-chevron-left"></i>
            				<?php echo app('translator')->get('project/Selfassessment/title.trove'); ?>
                        </a>
        			</p>
        			<button style="background-color: #1ab394;border-color: #1ab394;color: #FFFFFF;" type="button" onclick="update_kl()">
        				<i class="fas fa-edit"></i>
        				<?php echo app('translator')->get('project/Selfassessment/title.capnhat'); ?>
        			</button> 
        		</div>
            </form>
        </div>

	</div>
</section>
<!-- /Kết thúc page trang -->

    <!-- Kết thúc trang -->
    </section>
    
<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>

 <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo e(asset('vendors/ckeditor/js/ckeditor.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('vendors/tinymce/js/tinymce.min.js')); ?>" type="text/javascript"></script>
    <!-- <script src="<?php echo e(asset('js/pages/editor.js')); ?>" type="text/javascript"></script> -->

    <script>
        tinymce.init({
            selector: '#tinymce_full',
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor',
            ],
            toolbar1:
                'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons',
            image_advtab: true,
            templates: [
                {
                    title: 'Test template 1',
                    content: 'Test 1',
                },
                {
                    title: 'Test template 2',
                    content: 'Test 2',
                },
            ],
            setup: function (ed) {
                ed.on('init', function(args) {
                    
                });
            }
        });


        function update_kl(){
               let kh = $('.id_kh').val();
               let id_kehoacchung = $('.id_khc').val();
               tinymce.triggerSave();
               let text = $('.text_kl').val();
  
               $.ajax({
                        url: "<?php echo route('admin.tudanhgia.detailedplanning.updateconclusion'); ?>",
                        type: "POST",
                        data:{
                            kh : kh,
                            id_kehoacchung : id_kehoacchung,
                            text : text,
                            _token: '<?php echo e(csrf_token()); ?>'
                        },    
                        error: function(err) {

                        },

                        success: function(data) {
                            alert("Bạn đã cập nhật thành");
                        },
                    })
            }
    </script>
<?php $__env->stopSection(); ?>












<?php echo $__env->make('admin/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp74\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Selfassessment/conclusion.blade.php ENDPATH**/ ?>