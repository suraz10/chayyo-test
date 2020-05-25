<?php include('header-t.php'); ?>

<section class="user_page notify_page p-tb50">
	<div class="ch_wrapper">
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<div class="notify_type">
					<h1><i class="fa fa-align-justify" aria-hidden="true"></i> Notification Type</h1>
					<ul>
						<li>
							<a href="">
								<div class="square sq_gray"></div>All Types
							</a>
						</li>
						<li>
							<a href="">
								<div class="square sq_red"></div>Action Required
							</a>
						</li>
						<li>
							<a href="">
								<div class="square sq_orange"></div>Requests Added
							</a>
						</li>
						<li>
							<a href="">
								<div class="square sq_orange"></div>Proposal Received
							</a>
						</li>
						<li>
							<a href="">
								<div class="square sq_maroon"></div>Terms Changed
							</a>
						</li>
						<li>
							<a href="">
								<div class="square sq_maroon"></div>Terms Accepted
							</a>
						</li>
						<li>
							<a href="">
								<div class="square sq_orange"></div>Requests Delivered
							</a>
						</li>
						<li>
							<a href="">
								<div class="square sq_blue"></div>Message Received
							</a>
						</li>
						<li>
							<a href="">
								<div class="square sq_blue"></div>Proposal Accepted
							</a>
						</li>
						<li>
							<a href="">
								<div class="square sq_pink"></div>Feedback
							</a>
						</li>
					</ul>					
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="notify_list_top">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="notif_select">
								<input type="checkbox" name="" id="noti_slct">
								<span>Select all</span>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="notif_delete">
								<a href="#!" class=""><i class="fa fa-trash-alt"></i> &nbsp;Delete</a>
							</div>
						</div>
					</div>
				</div>
				<div class="notify_list">
					<div class="row">
						<div class="col-12">
							<div class="notif_all notif_orange">
								<div class="notif_cont">
									<input type="checkbox" name="">
									<a href="">You have received a new proposal. See details here.</a>
								</div>
								<span class="notif_date">On 2019-10-22</span>
							</div>	
						</div>
						<div class="col-12">
							<div class="notif_all notif_blue">
								<div class="notif_cont">
									<input type="checkbox" name="">
									<a href="">
										You have received a new message. See details here.</a>
								</div>
								<span class="notif_date">On 2019-07-16</span>
							</div>	
						</div>
						<div class="col-12">
							<div class="notif_all notif_maroon">
								<div class="notif_cont">
									<input type="checkbox" name="">
									<a href="">
										Terms have been updated. See details here.</a>
								</div>
								<span class="notif_date">On 2019-03-10</span>
							</div>	
						</div>
						<div class="col-12">
							<div class="notif_all notif_blue">
								<div class="notif_cont">
									<input type="checkbox" name="">
									<a href="">
										You have received a new message. See details here.</a>
								</div>
								<span class="notif_date">On 2019-07-16</span>
							</div>	
						</div>
						<div class="col-12">
							<div class="notif_all notif_orange">
								<div class="notif_cont">
									<input type="checkbox" name="">
									<a href="">You have received a new proposal. See details here.</a>
								</div>
								<span class="notif_date">On 2019-10-22</span>
							</div>	
						</div>
						<div class="col-12">
							<div class="notif_all notif_pink">
								<div class="notif_cont">
									<input type="checkbox" name="">
									<a href="">
										Congratulation! You received a feedback. See details here.</a>
								</div>
								<span class="notif_date">On 2019-06-07</span>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="message_right">
					<h4>Related</h4>
					<div class="ong_bus">
						<h5>My Ongoing Business</h5>
						<p>You have 14 ongoing businesses that you're either buying or selling.</p>
						<a href="business.php">View all business</a>
					</div>
				</div>
				<div class="st_buyer">
					<h5>Your status as a buyer</h5>
					<ul class="client-status">
						<li><label>Rate :</label> <span class="amount">50%</span></li>
						<li><label>Requests Posted :</label> <span class="amount">6</span></li>
						<li><label>Total Purchased(Nrs) :</label> <span class="amount">0</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>