<style>
	.img-rounded{
		display: none;
	}
	#side-menu{
		padding: 0;
	}
	#side-menu li a{
		padding: 10px 0;
		padding-left: 15px;
		display: flex;
		align-items: center;

		color: white;
	}
	#side-menu li a:hover{
		background-color: red;
	}
	.nav-label{
		display: block;
		margin-left: 5px;
	}
</style>

<?php echo $__env->make("admin.project.ExternalReview.include.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp74\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/layouts/_left_menu_baocao.blade.php ENDPATH**/ ?>