<!-- Modal -->
<div class="modal fade" id="modal_start_page" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	 aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">>
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body ">

				<div class="row ">
					<div class="col-sm-7  col-xs-12">
						<h5 class="color-white">Đăng ký tham gia</h5><br>
						<h2 class="color-yellow">COFFEE TALK &</h2>
						<h2 class="color-yellow">INFORMATION SESSION</h2><br>
						<h4 class="color-white">MBA CẤP CAO, ĐẠI HỌC HAWAII, CAMPUS HÀ NỘI</h4>
						<hr>
						<span class="color-white"><strong class="color-white">Thời gian: </strong>18h30 - 20h30, Thứ 4, 7/5/2019</span>
						<div class="color-white"><strong class="color-white">Địa điểm: </strong>D-Cafe Lounge, Deloitte Việt Nam, tầng 12A, tòa nhà Vinaconex, 34 Láng Hạ, Hà Nội
						</div>
					</div>
					<br>
					<div class="col-sm-5 col-xs-12">
						<form id="form-main" action="<?php echo $base_url ?>/thankyou.php" method="post">
							<div class="form-group">
								<input class="form-control" type="text" name="name" placeholder="Họ và tên">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email ">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="phone_number"
									   placeholder="Điện thoại">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="company" placeholder="Nhập tên công ty">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="job_title"
									   placeholder="Tiêu đề công việc">
							</div>

							<div class="form-group">
								<input type="text" class="form-control" name="reason" placeholder="Làm thế nào bạn biết về sự kiện này ? ">
							</div>

							<input type="hidden" name="lang" value="vi">
							<button type="submit" name="submit" value="submit" lang="vi"
									class="frm-button btn-lg btn btn-primary submit-form">Gửi
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>