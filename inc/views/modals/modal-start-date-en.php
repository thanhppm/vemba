<!-- Modal -->
<div class="modal fade"  id="modal_start_page" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<h5 class="color-white">Register your attendance for</h5><br>
						<h2 class="color-yellow">COFFEE TALK &</h2>
						<h2 class="color-yellow">INFORMATION SESSION</h2><br>
						<h4 class="color-white">EXECUTIVE MBA, UNIVERSITY OF HAWAII, HANOI CAMPUS</h4>
						<hr>
						<span class="color-white" ><strong class="color-white" >Time: </strong>6:30pm-8:30pm, Tuesday, 7 May 2019</span>
						<div class="color-white"><strong class="color-white" >Venue: </strong>D-Cafe Lounge, Deloitte Vietnam, FI 12A Vinaconex Building, 34 Lang Ha Street, Hanoi</div>
					</div>
					<br>
					<div class="col-sm-5 col-xs-12">
						<form id="form-main" action="<?php echo $base_url?>/thankyou.php" method="post">
							<div class="form-group">
								<input class="form-control" type="text" name="name"  placeholder="Full name">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email address">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="phone_number" placeholder="Phone number">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="company" placeholder="Company">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="job_title" placeholder="Job title">
							</div>

							<div class="form-group">
								<input type="text" class="form-control" name="reason" placeholder="How do you know about this event? ">
							</div>
							<input type="hidden" name="lang" value="en">
							<button type="submit"  name="submit" value="submit" lang="en"  class="frm-button btn-lg btn btn-primary submit-form" >Send</button>
						</form>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>