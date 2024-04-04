
        <?php if($check == "sua"): ?>
            <style>
                .import_ex table{
                    border: 1px solid;
                     border-collapse: collapse;
                }
                .import_ex table th{
                    border: 1px solid;
                    text-align: center;
                    vertical-align: middle;
                    background: lightblue;
                }
                .import_ex table td{
                    border: 1px solid;
                    text-align: center;
                    vertical-align: middle;
                }
                .edit_input{
                        padding: 7px;
                        color: red;
                        font-weight: bold;
                        margin: 5px;
                }
                .edit_input::-webkit-inner-spin-button,
                .edit_input::-webkit-outer-spin-button {
                  -webkit-appearance: none;
                  margin: 0;
                }

                .edit_input {
                  -moz-appearance: textfield; /* Firefox */
                }
                .table-borderless{
                    border: 1px solid;
                }
                .table-borderless tr,td{
                    border: 1px solid;
                }

            </style>

        <?php else: ?>
             <style>
                .import_ex table{
                    border: 1px solid;
                     border-collapse: collapse;
                }
                .import_ex table th{
                    border: 1px solid;
                    text-align: center;
                    vertical-align: middle;
                    background: lightblue;
                }
                .import_ex table td{
                    border: 1px solid;
                    text-align: center;
                    vertical-align: middle;
                }
                .edit_input{
                        padding: 7px;
                        color: red;
                        font-weight: bold;
                        margin: 5px;
                        border: none;
                        outline: none;
                        background: none;
                }
                .btn-benchmarkbtn-benchmark{
                    display: none;
                }
                .edit_input::-webkit-inner-spin-button,
                .edit_input::-webkit-outer-spin-button {
                  -webkit-appearance: none;
                  margin: 0;
                }

                .edit_input {
                  -moz-appearance: textfield; /* Firefox */
                }
                .btn-benchmark{
                    display: none;
                }
                #btn_submit{
                    display: none;
                }
            </style>


        <?php endif; ?>
        <style>
            li.none_css{
                display: none !important;
            }
        </style>
      	<div class="m-t-md">

		    <div class="h5 text-center">
		        <?php echo app('translator')->get('project/Externalreview/title.csdlkdclcsdt'); ?>
		    </div>

		    <p class="text-center"><?php echo app('translator')->get('project/Externalreview/title.tdbc2'); ?> <?php echo e((($keHoachBaoCaoDetail2)?\Carbon\Carbon::parse($keHoachBaoCaoDetail2->thoi_diem_bao_cao)->format('d/m/Y'):"Chưa cập nhật")); ?></p>

		    <p> <strong><?php echo app('translator')->get('project/Externalreview/title.phan1'); ?></strong></p>
            <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.1'); ?></strong></i></p>
            <p>- TRƯỜNG ĐẠI HỌC HỌC CÔNG NGHIỆP DỆT MAY HÀ NỘI</p>
            <p>- HA NOI INDUSTRIAL TEXTTILE GARMENT UNIVERSITY</p>
            <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.2'); ?></strong></i></p>
            <p>- ĐHCNDMHN</p>
            <p>- HTU</p>
            <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.3'); ?></strong></i></p>
            <p><i><strong>4. Cơ quan/Bộ chủ quản: Tập đoàn Dệt May Việt Nam</strong></i></p>
            <p><i><strong>5. Địa chỉ : Lệ Chi - Gia Lâm - Hà Nội</strong></i></p>
            <p><i><strong>6. Thông tin liên hệ: Điện thoại: (0234) 38276514 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo app('translator')->get('project/Externalreview/title.fax'); ?></strong></i></p>
            <p><i><strong> phongtchc@hict.edu.vn &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   ww.hict.edu.vn</strong></i></p>
            <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.7'); ?> </strong></i><i>01/06/2015 (QĐ 3993/VPCP- ĐMDN) </i></p>
            <p><i><strong>8. Thời gian bắt đầu đào tạo khóa I: 2016</strong></i></p>
            <p><i><strong>9. Thời gian cấp bằng tốt nghiệp cho khoá I:  2020</strong></i></p>
            <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.10'); ?> </strong></i></p>
		    <div class="m-l-lg">
		        <p>
		            <label class="checkbox-inline">
		                <input type="checkbox" class="m-t-xs" disabled checked> <?php echo app('translator')->get('project/Externalreview/title.conglap'); ?>
		            </label>
		            <label class="checkbox-inline">
		                <input type="checkbox" class="m-t-xs" disabled> <?php echo app('translator')->get('project/Externalreview/title.bancong'); ?>
		            </label>
		            <label class="checkbox-inline">
		                <input type="checkbox" class="m-t-xs" disabled> <?php echo app('translator')->get('project/Externalreview/title.danlap'); ?>
		            </label>
		            <label class="checkbox-inline">
		                <input type="checkbox" class="m-t-xs" disabled> <?php echo app('translator')->get('project/Externalreview/title.tuthuc'); ?>
		            </label>
		        </p>
		        <p><?php echo app('translator')->get('project/Externalreview/title.lhk'); ?></p>
		    </div>

		    <?php $fiveYearAgo = $keHoachBaoCaoDetail2->nam -5 ?>

		    <p> <strong><?php echo app('translator')->get('project/Externalreview/title.ii'); ?></strong></p>
		    <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.12ten'); ?></strong></i> </p>
		    <p>- <?php echo app('translator')->get('project/Externalreview/title.tiengviett'); ?> <?php echo e(isset($keHoachBaoCaoDetail2->phutrach->ten_donvi)? $keHoachBaoCaoDetail2->phutrach->ten_donvi : ''); ?></p>
		    <p>- <?php echo app('translator')->get('project/Externalreview/title.tienganhh'); ?> <?php echo e(isset($keHoachBaoCaoDetail2->phutrach->ten_tienganh)? $keHoachBaoCaoDetail2->phutrach->ten_tienganh : ''); ?></p>
		    <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.13ten'); ?></strong></i></p>
		    <p>- <?php echo app('translator')->get('project/Externalreview/title.tiengviett'); ?> <?php echo e(isset($keHoachBaoCaoDetail2->phutrach->ten_ngan)? $keHoachBaoCaoDetail2->phutrach->ten_ngan : ''); ?></p>
		    <p>- <?php echo app('translator')->get('project/Externalreview/title.tienganhh'); ?> <?php echo e(isset($keHoachBaoCaoDetail2->phutrach->ten_tienganh)? $keHoachBaoCaoDetail2->phutrach->ten_tienganh :''); ?></p>
		    <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.14ten'); ?> </strong></i> <?php echo e(isset($keHoachBaoCaoDetail2->phutrach->ten_donvi_cu)? $keHoachBaoCaoDetail2->phutrach->ten_donvi_cu : ''); ?></p>
		    <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.15ten'); ?> </strong></i><?php echo e(isset($keHoachBaoCaoDetail2->ctdt->tennganh)? $keHoachBaoCaoDetail2->ctdt->tennganh : ''); ?></p>
		    <p>- <?php echo app('translator')->get('project/Externalreview/title.tiengviett'); ?> <?php echo e(isset($keHoachBaoCaoDetail2->ctdt->tennganh)? $keHoachBaoCaoDetail2->ctdt->tennganh :''); ?></p>
		    <p>- <?php echo app('translator')->get('project/Externalreview/title.tienganhh'); ?> <?php echo e(isset($keHoachBaoCaoDetail2->ctdt->tennganh_en)? $keHoachBaoCaoDetail2->ctdt->tennganh_en : ''); ?></p>
		    <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.16'); ?></strong></i> <?php echo e(isset($keHoachBaoCaoDetail2->phutrach->ma_ctdt)? $keHoachBaoCaoDetail2->phutrach->ma_ctdt : ''); ?></p>
		    <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.17'); ?> </strong></i> <?php echo e(isset($keHoachBaoCaoDetail2->phutrach->ten_ctdt_cu)? $keHoachBaoCaoDetail2->phutrach->ten_ctdt_cu : ''); ?></p>
		    <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.18'); ?></strong></i> <?php echo e(isset($keHoachBaoCaoDetail2->phutrach->dia_chi)? $keHoachBaoCaoDetail2->phutrach->dia_chi : ''); ?></p>
		    <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.19'); ?></strong></i> <?php echo e((isset($keHoachBaoCaoDetail2->phutrach->dien_thoai)?$keHoachBaoCaoDetail2->phutrach->dien_thoai:'.................. ')); ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo app('translator')->get('project/Externalreview/title.fax'); ?></p>
		    <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.20'); ?></strong></i> <?php echo e((($keHoachBaoCaoDetail2->phutrach->email)?$keHoachBaoCaoDetail2->phutrach->email:'.................. ')); ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo app('translator')->get('project/Externalreview/title.webs'); ?> <?php echo e((($keHoachBaoCaoDetail2->phutrach->website)?$keHoachBaoCaoDetail2->phutrach->website:'..................')); ?></p>
		    <p>
		        <i><strong><?php echo app('translator')->get('project/Externalreview/title.21'); ?></strong></i>
		        <?php echo e(isset($keHoachBaoCaoDetail2->phutrach->nam_thanhlap)?$keHoachBaoCaoDetail2->phutrach->nam_thanhlap:''); ?> <br>
		      <div> <?php echo isset($keHoachBaoCaoDetail2->phutrach->mota_nam_thanhlap)?$keHoachBaoCaoDetail2->phutrach->mota_nam_thanhlap : ''; ?> </div>
		    </p>
		    <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.22'); ?></strong></i> <?php echo e(isset($keHoachBaoCaoDetail2->phutrach->nam_batdau)?$keHoachBaoCaoDetail2->phutrach->nam_batdau : ''); ?></p>
		    <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.23'); ?></strong></i> <?php echo e(isset($keHoachBaoCaoDetail2->phutrach->nam_capbang)?$keHoachBaoCaoDetail2->phutrach->nam_capbang : ''); ?></p>
		    <p> <strong><?php echo app('translator')->get('project/Externalreview/title.iii'); ?></strong></p>
		    <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.24'); ?> <br></strong></i>
		    	<?php
		            if(isset($keHoachBaoCaoDetail2->phutrach->gioi_thieu)){

		                if($keHoachBaoCaoDetail2->phutrach->gioi_thieu != null){
		                   echo($keHoachBaoCaoDetail2->phutrach->gioi_thieu);
		                }

		            }
		        ?>

		    </p>
		    <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.25'); ?> <br>
		        <?php
		            if(isset($keHoachBaoCaoDetail2->phutrach->co_cau_tochuc)){
		                if($keHoachBaoCaoDetail2->phutrach->co_cau_tochuc != null){
		                    echo($keHoachBaoCaoDetail2->phutrach->co_cau_tochuc);
		                }

		            }
		        ?>
		        </strong></i>

		    </p>

		    <form action="<?php echo e(route('admin.tudanhgia.database.save_file_ctdt')); ?>" method="POST" enctype="multipart/form-data">
			    <p>
			        <i><strong><?php echo app('translator')->get('project/Externalreview/title.26'); ?></strong></i>
			    </p>

			    <p>
			        <em><?php echo app('translator')->get('project/Externalreview/title.rieng'); ?></em>
			    </p>
			    <div>
			    	<button href="" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
		            	<i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
		        	</button>

		        	<div class="import_ex">
		        		<?php echo isset($data['p26']) ? $data['p26'] : ''; ?>

		       	 	</div>
			    </div>

			  	<p><i><strong><?php echo app('translator')->get('project/Externalreview/title.27'); ?></strong></i></p>
			  	<div>
				    <span>Số lượng chuyên ngành đào tạo Cao đẳng :</span>
				    <span class="edit_input"><?php echo e($dulieu->p27_caodang); ?></span>
				</div>
				<div>
				    <span>Số lượng chuyên ngành đào tạo Đại học :</span>
				    <span class="edit_input"><?php echo e($dulieu->p27_daihoc); ?></span>
				</div>
				<div>
				    <span>Số lượng chuyên ngành đào tạo Thạc sĩ :</span>
				    <span class="edit_input"><?php echo e($dulieu->p27_thacsi); ?></span>
				</div>
				<div>
				    <span>Số lượng chuyên ngành đào tạo Tiến sĩ :</span>
				    <span class="edit_input"><?php echo e($dulieu->p27_tiensi); ?></span>
				</div>

				<p><?php echo app('translator')->get('project/Externalreview/title.slcndtk'); ?></p>
				<p>
				    <em>
				        <?php echo app('translator')->get('project/Externalreview/title.donvi'); ?>
				    </em>
				</p>
				<p>
				    <i><strong><?php echo app('translator')->get('project/Externalreview/title.28'); ?></strong></i>
				</p>

			    <div class="row m-t-lg">


		        <!-- đây là thẻ form -->
		        <div id="save_contenty">
		            <?php echo csrf_field(); ?>
		            <input type="hidden" value="phuluc28" name="ten">
		            <input type="hidden" value="<?php echo e($keHoachBaoCaoDetail2->id); ?>" name="id_kehoach_bc">
		            <table class="table-borderless table table-condensed">
		                <tr>
		                    <td></td>
		                    <td><?php echo app('translator')->get('project/Externalreview/title.co'); ?></td>
		                    <td><?php echo app('translator')->get('project/Externalreview/title.khong'); ?></td>
		                </tr>
		                <tr>
		                    <td><?php echo app('translator')->get('project/Externalreview/title.chinhquy'); ?></td>
		                    <td><input <?php echo e(($noiDungThem->chinhquy=='co')?'checked':""); ?> class="radiobox" type="radio"
		                               name="noidungthem[chinhquy]" value="co" data_key="chinhquy"></td>
		                    <td><input <?php echo e(($noiDungThem->chinhquy=='khong')?'checked':""); ?> class="radiobox" type="radio"
		                               name="noidungthem[chinhquy]" value="khong" data_key="chinhquy"></td>
		                </tr>

		                <tr>
		                    <td><?php echo app('translator')->get('project/Externalreview/title.khongchinhquy'); ?></td>
		                    <td><input <?php echo e(($noiDungThem->khongchinhquy=='co')?'checked':""); ?> class="radiobox" type="radio"
		                               name="noidungthem[khongchinhquy]" value="co" data_key="khongchinhquy"></td>
		                    <td><input <?php echo e(($noiDungThem->khongchinhquy=='khong')?'checked':""); ?> class="radiobox" type="radio"
		                               name="noidungthem[khongchinhquy]" value="khong" data_key="khongchinhquy"></td>
		                </tr>

		                <tr>
		                    <td><?php echo app('translator')->get('project/Externalreview/title.tuxa'); ?></td>
		                    <td><input <?php echo e(($noiDungThem->tuxa=='co')?'checked':""); ?> class="radiobox" type="radio"
		                               name="noidungthem[tuxa]" value="co" data_key="tuxa"></td>
		                    <td><input <?php echo e(($noiDungThem->tuxa=='khong')?'checked':""); ?> class="radiobox" type="radio"
		                               name="noidungthem[tuxa]" value="khong" data_key="tuxa"></td>
		                </tr>

		                <tr>
		                    <td><?php echo app('translator')->get('project/Externalreview/title.lknn'); ?></td>
		                    <td><input <?php echo e(($noiDungThem->nuocngoai=='co')?'checked':""); ?> class="radiobox" type="radio"
		                               name="noidungthem[nuocngoai]" value="co" data_key="nuocngoai"></td>
		                    <td><input <?php echo e(($noiDungThem->nuocngoai=='khong')?'checked':""); ?> class="radiobox" type="radio"
		                               name="noidungthem[nuocngoai]" value="khong" data_key="nuocngoai"></td>
		                </tr>

		                <tr>
		                    <td><?php echo app('translator')->get('project/Externalreview/title.lktn'); ?></td>
		                    <td><input <?php echo e(($noiDungThem->trongnuoc=='co')?'checked':""); ?> class="radiobox" type="radio"
		                               name="noidungthem[trongnuoc]" value="co" data_key="trongnuoc"></td>
		                    <td><input <?php echo e(($noiDungThem->trongnuoc=='khong')?'checked':""); ?> class="radiobox" type="radio"
		                               name="noidungthem[trongnuoc]" value="khong" data_key="trongnuoc"></td>
		                </tr>
		            </table>
		        </div>

			    <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.29'); ?><b>
			    	<span class="edit_input"><?php echo e($dulieu->p29_tongnganhdt); ?></span>
			    </b></strong></i></p>

			    <p> <strong><?php echo app('translator')->get('project/Externalreview/title.iv'); ?></strong></p>
		    	<p><i><strong><?php echo app('translator')->get('project/Externalreview/title.30'); ?></strong></i></p>
		    	<div>
			    	<button href="" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
		            	<i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
		        	</button>

		        	<div class="import_ex">
		        		<?php echo isset($data['p30']) ? $data['p30'] : ''; ?>

		       	 	</div>
			    </div>



		        <p><em><?php echo app('translator')->get('project/Externalreview/title.donvithuchien'); ?></em></p>
			    <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.31'); ?></strong></i></p>
			    <p>
			        <small><?php echo app('translator')->get('project/Externalreview/title.cbchla'); ?>
			        </small>
			    </p>
			    <p>
			        <small><?php echo app('translator')->get('project/Externalreview/title.gvtgla'); ?>
			    </p>

			    <div>
			    	<button href="" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
		            	<i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
		        	</button>

		        	<div class="import_ex">
		        		<?php echo isset($data['p31_1']) ? $data['p31_1'] : ''; ?>

		       	 	</div>
			    </div>

			    <p><em><?php echo app('translator')->get('project/Externalreview/title.khitinhsl'); ?></em></p>
			    <p>Tổng số giảng viên cơ hữu :
				    <span class="edit_input"><?php echo e($dulieu->p31_tongvcohuu); ?></span>
				</p>
				<p><?php echo app('translator')->get('project/Externalreview/title.tile'); ?>
				    <span class="edit_input"><?php echo e($dulieu->p31_tylegvch); ?></span>
				</p>

				<br/>
				<p><i><strong><?php echo app('translator')->get('project/Externalreview/title.32'); ?></strong></i></p>
				<p>
				    <small><?php echo app('translator')->get('project/Externalreview/title.solieub32'); ?>
				    </small>
				</p>
				<div>
				    <button class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
				        <i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
				    </button>
				    <div class="import_ex">
				        <?php echo isset($data['p31']) ? $data['p31'] : ''; ?>

				    </div>
				</div>

				<p><i><strong><?php echo app('translator')->get('project/Externalreview/title.33'); ?></strong></i></p>
				<div>
				    <button class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
				        <i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
				    </button>
				    <div class="import_ex">
				        <?php echo isset($data['p32']) ? $data['p32'] : ''; ?>

				    </div>
				</div>

				<p><?php echo app('translator')->get('project/Externalreview/title.33cham1'); ?>
				    <span class="edit_input"><?php echo e($dulieu->p33_1_tuoitb); ?></span>
				</p>
				<p><?php echo app('translator')->get('project/Externalreview/title.33cham2'); ?>
				    <span class="edit_input"><?php echo e($dulieu->p33_2_tdts); ?></span>
				</p>
				<p><?php echo app('translator')->get('project/Externalreview/title.33cham3'); ?>
				    <span class="edit_input"><?php echo e($dulieu->p33_3_tdths); ?></span>
				</p>
				<p><i><strong><?php echo app('translator')->get('project/Externalreview/title.34'); ?></strong></i></p>
				<div>
				    <button class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
				        <i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
				    </button>
				    <div class="import_ex">
				        <?php echo isset($data['p33']) ? $data['p33'] : ''; ?>

				    </div>
				</div>
				<p> <strong><?php echo app('translator')->get('project/Externalreview/title.v'); ?></strong></p>
				<p><i><strong><?php echo app('translator')->get('project/Externalreview/title.35'); ?></strong></i></p>
				<p><?php echo app('translator')->get('project/Externalreview/title.tongsonguoidk'); ?></p>
				<div>
				    <button class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
				        <i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
				    </button>
				    <div class="import_ex">
				        <?php echo isset($data['p34']) ? $data['p34'] : ''; ?>

				    </div>
				</div>
				<p><i><strong><?php echo app('translator')->get('project/Externalreview/title.36'); ?></strong></i></p>
				<p style="text-align:right"><em><?php echo app('translator')->get('project/Externalreview/title.donvii'); ?></em></p>
				<div>
				    <button class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
				        <i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
				    </button>
				    <div class="import_ex">
				        <?php echo isset($data['p35']) ? $data['p35'] : ''; ?>

				    </div>
				</div>
				<p><i><strong><?php echo app('translator')->get('project/Externalreview/title.37'); ?></strong></i></p>
				<p style="text-align:right"><em><?php echo app('translator')->get('project/Externalreview/title.donvii'); ?></em></p>
				<div>
				    <button class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
				        <i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
				    </button>
				    <div class="import_ex">
				        <?php echo isset($data['p36']) ? $data['p36'] : ''; ?>

				    </div>
				</div>
				<p><i><strong><?php echo app('translator')->get('project/Externalreview/title.38'); ?></strong></i></p>
				<div>
				    <button class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
				        <i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
				    </button>
				    <div class="import_ex">
				        <?php echo isset($data['p37']) ? $data['p37'] : ''; ?>

				    </div>
				</div>
				<p><i><strong><?php echo app('translator')->get('project/Externalreview/title.39'); ?></strong></i></p>
				<p style="text-align:right"><em><?php echo app('translator')->get('project/Externalreview/title.donvii'); ?></em></p>
				<div>
				    <button class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
				        <i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
				    </button>
				    <div class="import_ex">
				        <?php echo isset($data['p38']) ? $data['p38'] : ''; ?>

				    </div>
				</div>


		        <p><i><strong><?php echo app('translator')->get('project/Externalreview/title.40'); ?></strong></i></p>
	    		<p style="text-align:right"><em><?php echo app('translator')->get('project/Externalreview/title.donvii'); ?></em></p>
	    		<div>
		    		<input hidden type="file" class="inputFile" name="p39">
			    	<button href="" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
		            	<i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
		        	</button>

		        	<div class="import_ex">
		        		<?php echo isset($data['p39']) ? $data['p39'] : ''; ?>


		       	 	</div>
			    </div>
		        <p>(Tính cả những người học đã đủ điều kiện tốt nghiệp theo quy định nhưng đang chờ cấp bằng)</p>
		        <p><i><strong>41. Tình trạng tốt nghiệp của sinh viên hệ chính quy của CTĐT:</strong></i></p>
		        <div>
			    	<button href="" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
		            	<i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
		        	</button>

		        	<div class="import_ex">
		        		<?php echo isset($data['p40']) ? $data['p40'] : ''; ?>


		       	 	</div>
			    </div>
		        <p>Ghi chú:</p>
		        <p>Người học tốt nghiệp là người học có đủ điều kiện để được công nhận tốt nghiệp theo quy định, kể cả những người học chưa nhận được bằng tốt nghiệp</p>
		        <p>Năm đầu tiên sau khi tốt nghiệp: 12 tháng kể từ ngày tốt nghiệp.</p>
		        <p>Các mục bỏ trống đều được xem là cơ sở giáo dục/đơn vị thực hiện CTĐT không điều tra về việc này.</p>
		        <p> <strong>VI. Nghiên cứu khoa học và chuyển giao công nghệ</strong></p>
		        <p><i><strong>42. Số lượng đề tài nghiên cứu khoa học và chuyển giao khoa học công nghệ của đơn vị thực hiện CTĐT được nghiệm thu trong 5 năm gần đây:</strong></i></p>
		        <div>
			    	<button href="" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
		            	<i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
		        	</button>

		        	<div class="import_ex">
		        		<?php echo isset($data['p41']) ? $data['p41'] : ''; ?>

		       	 	</div>
			    </div>
		        <p>* Bao gồm đề tài cấp Bộ hoặc tương đương, đề tài nhánh cấp Nhà nước.</p>
		        <div>
		        	<p>Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng chức danh giáo sư Nhà nước (có điều chỉnh).</p>
		        	<span>Tổng số đề tài quy đổi : </span>
		        	<span class="edit_input">
		        		<?php echo e($dulieu->p42_tsdetaiqd); ?>

		        	</span>
		        </div>
		        <div>
		        	<span>
		        	      Tỷ số đề tài nghiên cứu khoa học và chuyển giao khoa học công nghệ (quy đổi) trên cán bộ cơ hữu của đơn vị thực hiện CTĐT:
		            </span>
		            <span class="edit_input">
		        		<?php echo e($dulieu->p42_tysodtqd); ?>

		        	</span>
		        </div>
		        <p><i><strong>43. Doanh thu từ nghiên cứu khoa học và chuyển giao công nghệ của đơn vị thực hiện CTĐT trong 5 năm gần đây:</strong></i></p>
		        <div>
			    	<button href="" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
		            	<i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
		        	</button>

		        	<div class="import_ex">
		        		<?php echo isset($data['p42']) ? $data['p42'] : ''; ?>


		       	 	</div>
			    </div>

		        <p><i><strong>44. Số lượng cán bộ cơ hữu của đơn vị thực hiện CTĐT tham gia thực hiện đề tài khoa học trong 5 năm gần đây:</strong></i></p>
		        <div>
			    	<button href="" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
		            	<i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
		        	</button>

		        	<div class="import_ex">
		        		<?php echo isset($data['p43']) ? $data['p43'] : ''; ?>

		       	 	</div>
			    </div>
		        <p>* Bao gồm đề tài cấp Bộ hoặc tương đương, đề tài nhánh cấp Nhà nước</p>
		        <p><i><strong>45. Số lượng đầu sách của đơn vị thực hiện CTĐT được xuất bản trong 5 năm gần đây:</strong></i></p>
		        <div>
			    	<button href="" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
		            	<i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
		        	</button>

		        	<div class="import_ex">
		        		<?php echo isset($data['p44']) ? $data['p44'] : ''; ?>


		       	 	</div>
			    </div>
		        <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng chức danh giáo sư Nhà nước (có điều chỉnh).</p>
		        <div>
		        	<span>Tổng số sách (quy đổi):</span>
		        	<span class="edit_input">
		        		<?php echo e($dulieu->p45_tsosach); ?>

		        	</span>
		        </div>
		        <div>
		        	<span>Tỷ số sách đã được xuất bản (quy đổi) trên cán bộ cơ hữu:</span>
		        	<span class="edit_input"><?php echo e($dulieu->p45_tysosach); ?></span>
		        </div>
		        <p><i><strong>46. Số lượng cán bộ cơ hữu của đơn vị thực hiện CTĐT tham gia viết sách trong 5 năm gần đây:</strong></i></p>
		        <div>
			    	<button href="" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
		            	<i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
		        	</button>

		        	<div class="import_ex">
		        		<?php echo isset($data['p45']) ? $data['p45'] : ''; ?>


		       	 	</div>
			    </div>
		        <p><i><strong>47. Số lượng bài của các cán bộ cơ hữu của đơn vị thực hiện CTĐT được đăng tạp chí trong 5 năm gần đây:</strong></i></p>
		        <div>
			    	<button href="" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
		            	<i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
		        	</button>

		        	<div class="import_ex">
		        		<?php echo isset($data['p46']) ? $data['p46'] : ''; ?>

		       	 	</div>
			    </div>
		        <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng chức danh giáo sư Nhà nước (có điều chỉnh).</p>
		        <div>
		        	<span>Tổng số bài đăng tạp chí (quy đổi) : </span>
		        	<span class="edit_input">
		        		<?php echo e($dulieu->p47_tsobaitapchi); ?>

		        	</span>
		        </div>
		        <div>
		        	<span>Tỷ số bài đăng tạp chí (quy đổi) trên cán bộ cơ hữu : </span>
		        	<span class="edit_input">
		        		<?php echo e($dulieu->p47_tysobaitapchi); ?>

		        	</span>
		        </div>
	      	</div>
	      	<p><i><strong>48. Số lượng cán bộ cơ hữu của đơn vị thực hiện CTĐT tham gia viết bài đăng tạp chí trong 5 năm gần đây:</strong></i></p>
	        <div>
		    	<button href="" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
	            	<i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
	        	</button>

	        	<div class="import_ex">
		        	<?php echo isset($data['p47']) ? $data['p47'] : ''; ?>


	       	 	</div>
		    </div>
		    <p><i><strong>49. Số lượng báo cáo khoa học do cán bộ cơ hữu của đơn vị thực hiện CTĐT báo cáo tại các hội nghị, hội thảo, được đăng toàn văn trong tuyển tập công trình hay kỷ yếu trong 5 năm gần đây:</strong></i></p>
	        <div>
		    	<button href="" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
	            	<i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
	        	</button>

	        	<div class="import_ex">
		        	<?php echo isset($data['p48']) ? $data['p48'] : ''; ?>


	       	 	</div>
		    </div>
		    <p>(Khi tính Hội thảo trong nước sẽ không bao gồm các Hội thảo của cơ sở giáo dục vì đã được tính 1 lần)</p>
		    <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng chức danh giáo sư Nhà nước (có điều chỉnh).</p>
		    <div>
	        	<span>Tổng số bài báo cáo (quy đổi):Tổng số bài báo cáo (quy đổi) : </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->p49_tsobaibc); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>Tỷ số bài báo cáo (quy đổi) trên cán bộ cơ hữu : </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->p49_tysobaibc); ?>

	        	</span>
	        </div>

	        <p><i><strong>50. Số lượng cán bộ cơ hữu của đơn vị thực hiện CTĐT có báo cáo khoa học tại các hội nghị, hội thảo được đăng toàn văn trong tuyển tập công trình hay kỷ yếu trong 5 năm gần đây:</strong></i></p>
	        <div>
		    	<button href="" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
	            	<i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
	        	</button>

	        	<div class="import_ex">
		        	<?php echo isset($data['p49']) ? $data['p49'] : ''; ?>


	       	 	</div>
		    </div>
	        <p>(Khi tính Hội thảo trong nước sẽ không bao gồm các Hội thảo của trường)</p>
	        <p><i><strong>51. Số bằng phát minh, sáng chế được cấp</strong></i></p>
	        <div>
		    	<button href="" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
	            	<i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
	        	</button>

	        	<div class="import_ex">
		        	<?php echo isset($data['p50']) ? $data['p50'] : ''; ?>


	       	 	</div>
		    </div>

	        <p><i><strong>52. Nghiên cứu khoa học của người học</strong></i></p>
	        <p>52.1. Số lượng người học của đơn vị thực hiện CTĐT tham gia thực hiện đề tài khoa học trong 5 năm gần đây:</p>
	        <div>
		    	<button href="" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
	            	<i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
	        	</button>

	        	<div class="import_ex">
		        	<?php echo isset($data['p51']) ? $data['p51'] : ''; ?>


	       	 	</div>
		    </div>
	        <p>* Bao gồm đề tài cấp Bộ hoặc tương đương, đề tài nhánh cấp Nhà nước</p>
	        <p>52.2. Thành tích nghiên cứu khoa học của sinh viên:</p>
	        <p>(Thống kê các giải thưởng nghiên cứu khoa học, sáng tạo, các bài báo, công trình được công bố)</p>
	        <div>
		    	<button href="" class="btn btn-benchmark mr-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Nhập Excel">
	            	<i class="bi bi-file-earmark-arrow-up" style="font-size: 35px;color: #50cd89;"></i>
	        	</button>

	        	<div class="import_ex">
		        	<?php echo isset($data['p52']) ? $data['p52'] : ''; ?>


	       	 	</div>
		    </div>

	        <p><strong>VII. Cơ sở vật chất, thư viện</strong></p>
	        <p><i><strong>
	        	53. Tổng diện tích đất sử dụng của cơ sở giáo dục (tính bằng m2):
	        	<span class="edit_input">
	        		<?php echo e($dulieu->p53_tongdtdcsgd); ?>

	        	</span>
	        </strong></i></p>
	        <p><i><strong>
	        	54. Tổng diện tích đất sử dụng của đơn vị thực hiện CTĐT (tính bằng m2):
	        	<span class="edit_input">
	        		<?php echo e($dulieu->p53_tongdtdvth); ?>

	        	</span>
	        </strong></i></p>
	        <p><i>
	        	<strong>55. Diện tích sử dụng cho các hạng mục sau (tính bằng m2):</strong>
	        </i></p>
	        <div>
	        	<span>- Nơi làm việc:</span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->p55_noilmv); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>- Nơi học:</span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->p55_noihoc); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>- Nơi vui chơi giải trí:</span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->p55_noigt); ?>

	        	</span>
	        </div>
	        <p><i><strong>
	        	56. Diện tích phòng học (tính bằng m2)
	        </strong></i></p>
	        <div>
	        	<span>- Tổng diện tích phòng học:</span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->p56_tdtphong); ?>

	        	</span>
	        </div>
	         <div>
	        	<span>- Tỷ số diện tích phòng học trên người học chính quy:</span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->p56_tysodtpcq); ?>

	        	</span>
	        </div>
	        <p><i><strong>
	        	57. Tổng số đầu sách thuộc ngành đào tạo được sử dụng tại Trung tâm Thông tin – Thư viện :
	        	<span class="edit_input">
	        		<?php echo e($dulieu->p57_tsodstndt); ?>

	        	</span>
	        </strong></i></p>
	        <div>
	        	<span>- Tổng số đầu sách trong phòng tư liệu của đơn vị thực hiện CTĐT (nếu có):</span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->p57_tsodstptl); ?>

	        	</span>
	        </div>
	        <p><i><strong>
	        	58. Tổng số máy tính của đơn vị thực hiện CTĐT:
	        </strong></i></p>
	        <div>
	        	<span>- Dùng cho hệ thống văn phòng : </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->p58_dchtvp); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>- Dùng cho người học học tập : </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->p58_dcnht); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>Tỷ số số máy tính dùng cho người học/người học chính quy: </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->p58_tsomtdcnh); ?>

	        	</span>
	        </div>
	        <p><strong>VIII. Tóm tắt một số chỉ số quan trọng</strong></p>
	        <p>Từ kết quả khảo sát ở trên, tổng hợp thành một số chỉ số quan trọng dưới đây:</p>
	        <p><i><strong>1. Giảng viên:</strong></i></p>
	        <div>
	        	<span>Tổng số giảng viên cơ hữu (người): </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_1_tsgvch); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>Tỷ lệ giảng viên cơ hữu trên tổng số cán bộ cơ hữu (%): </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_1_tlgvch); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>Tỷ lệ giảng viên cơ hữu có trình độ tiến sĩ trở lên trên tổng số giảng viên cơ hữu của đơn vị thực hiện CTĐT (%): </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_1_gvchts); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>Tỷ lệ giảng viên cơ hữu có trình độ thạc sĩ trên tổng số giảng viên cơ hữu của đơn vị thực hiện CTĐT (%): </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_1_gvchths); ?>

	        	</span>
	        </div>
	        <p><i>
	        	<strong>2. Người học:</strong>
	        </i></p>
	        <div>
	        	<span>Tổng số người học chính quy theo CTĐT (người) : </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_2_tsnhcq); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>Tỷ số người học chính quy trên giảng viên theo CTĐT: </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_2_tsngcqtgv); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>Tỷ lệ người học tốt nghiệp so với số tuyển vào (%): </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_2_tlnhtn); ?>

	        	</span>
	        </div>
	        <p><i>
	        	<strong>3. Đánh giá của người học tốt nghiệp về chất lượng CTĐT:</strong>
	        </i></p>
	        <div>
	        	<span>Tỷ lệ người học trả lời đã học được những kiến thức và kỹ năng cần thiết cho công việc theo ngành tốt nghiệp (%):</span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_3_tlngtldh); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>Tỷ lệ người học trả lời chỉ học được một phần kiến thức và kỹ năng cần thiết cho công việc theo ngành tốt nghiệp (%): </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_3_tlhmpkt); ?>

	        	</span>
	        </div>
	        <p><i>
	        	<strong>4. Người học có việc làm trong năm đầu tiên sau khi tốt nghiệp:</strong>
	        </i></p>
	        <p><i>
	        	<strong>5. Đánh giá của nhà tuyển dụng về người học tốt nghiệp có việc làm đúng ngành đào tạo:</strong>
	        </i></p>
	        <div>
	        	<span>Tỷ lệ người học đáp ứng yêu cầu của công việc, có thể sử dụng được ngay (%): </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_5_tlhdunc); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>Tỷ lệ người học cơ bản đáp ứng yêu cầu của công việc, nhưng phải đào tạo thêm (%): </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_5_nhcbdu); ?>

	        	</span>
	        </div>
	        <p><i><strong>
	        	6. Nghiên cứu khoa học và chuyển giao công nghệ:
	        </strong></i></p>
	        <div>
	        	<span>Tỷ số đề tài nghiên cứu khoa học và chuyển giao khoa học công nghệ (quy đổi) trên cán bộ cơ hữu: </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_6_tldtnckh); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>Tỷ số doanh thu từ NCKH và chuyển giao công nghệ trên cán bộ cơ hữu: </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_6_tldtnckh); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>Tỷ số sách đã được xuất bản (quy đổi) trên cán bộ cơ hữu: </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_6_tssddsb); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>Tỷ số bài đăng tạp chí (quy đổi) trên cán bộ cơ hữu: </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_6_tsbdtc); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>Tỷ số bài báo cáo (quy đổi) trên cán bộ cơ hữu: </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_6_tsbdbc); ?>

	        	</span>
	        </div>
	        <p><i><strong>
	        	7. Cơ sở vật chất:
	        </strong></i></p>
	        <div>
	        	<span>Tỷ số máy tính dùng cho người học trên người học chính quy: </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_7_tsmtdcnh); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>Tỷ số diện tích phòng học trên người học chính quy: </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_7_tsdtp); ?>

	        	</span>
	        </div>
	        <div>
	        	<span>Tỷ số diện tích ký túc xá trên người học chính quy: </span>
	        	<span class="edit_input">
	        		<?php echo e($dulieu->viii_7_tsdtkt); ?>

	        	</span>
	        </div>
		</form>

<script>
	window.addEventListener('load', (event) => {
	  // Lấy đường dẫn tới trang mà bạn muốn chuyển hướng
	  const redirectURL = "<?php echo e(route('admin.tudanhgia.completionreport.detail', ['id' => $id_khbc])); ?>";
	  
	  // Chuyển hướng tới trang đã lấy
	  window.location.href = redirectURL;
	});
</script><?php /**PATH D:\xamppkhoaluan\htdocs\Khoaluantotnghiep\kdcl-2023\resources\views/admin/project/Database/chuongtrinhdtexp.blade.php ENDPATH**/ ?>