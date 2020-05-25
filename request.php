<section class="t_header">
	<?php include('header.php'); ?>
</section>

<section class="ch_page page_request p-tb50">
	<div class="ch_wrapper">
		<div class="row">
			<div class="col-lg-3 col-md-4">
				<div class="search_filter">
					<h1><i class="fa fa-align-justify"></i> Refine Results</h1>
					<div class="full_filter">
						<div class="filter_list">
							<h4><a href="#!" class="drp_show">Select Category <i class="fa fa-chevron-down"></i></a></h4>
							<ul id="select_category" class="filter__show">
								<li><a href="#!">Automobiles & Industrial <span>23</span></a></li>
								<li><a href="#!">Electronics & Peripherals <span>9</span></a></li>
								<li><a href="#!">Home Decor, Lifestyle & Furniture <span>21</span></a></li>
								<li><a href="#!">Local Services <span>29</span></a></li>
								<li><a href="#!">Real Estate <span>33</span></a></li>
								<li><a href="#!">Software & Technology <span>15</span></a></li>
								<li><a href="#!">View all...</a></li>
							</ul>
						</div>
						<div class="filter_list">
							<h4><a href="#!" class="drp_show">Request Deadline <i class="fa fa-chevron-down"></i></a></h4>
							<div class="filter__show filter_radio" id="request_deadline">
								<form action="">
									<ul>
										<li>
											<input type="radio" name="deadline" id="any-req"> <label for="any-req">Any</label>
										</li>
										<li>
											<input type="radio" name="deadline" id="24hr"> <label for="24hr">Upto 24 hour</label>
										</li>
										<li>
											<input type="radio" name="deadline" id="3days"> <label for="3days">Upto 3 days</label>		
										</li>
										<li>
											<input type="radio" name="deadline" id="7days"> <label for="7days">Upto 7 days</label>
										</li>
										<li>
											<input type="radio" name="deadline" id="30days"> <label for="30days">Upto 30 days</label>
										</li>
									</ul>
								</form>
							</div>
						</div>
						<div class="filter_list">
							<h4><a href="#!" class="drp_show">Budget <i class="fa fa-chevron-down"></i></a></h4>
							<div class="filter__show filter_radio" id="request_budget">
								<form action="">
									<ul>
										<li>
											<input type="radio" name="deadline" id="any-bud"> <label for="any-bud">Any</label>
										</li>
										<li>
											<input type="radio" name="deadline" id="1k"> <label for="1k">Upto Rs. 1000</label>
										</li>
										<li>
											<input type="radio" name="deadline" id="10k"> <label for="10k">Upto Rs. 10000</label>		
										</li>
										<li>
											<input type="radio" name="deadline" id="100k"> <label for="100k">Upto Rs. 100000</label>
										</li>
										<li>
											<input type="radio" name="deadline" id="1000k"> <label for="1000k">Upto Rs. 10000000</label>
										</li>
									</ul>
								</form>
							</div>
						</div>
						<div class="filter_list">
							<h4><a href="#!" class="drp_show">New / Used <i class="fa fa-chevron-down"></i></a></h4>
							<div class="filter__show filter_radio" id="request_newused">
								<form action="">
									<ul>
										<li>
											<input type="radio" name="deadline" id="any-new"> <label for="any-new">Any</label>
										</li>
										<li>
											<input type="radio" name="deadline" id="new"> <label for="new">New</label>
										</li>
										<li>
											<input type="radio" name="deadline" id="used"> <label for="used">Used</label>		
										</li>
									</ul>
								</form>
							</div>
						</div>
						<div class="filter_list">
							<h4><a href="#!" class="drp_show">Delivery Location <i class="fa fa-chevron-down"></i></a></h4>
							<div class="filter__show filter_radio" id="request_location">
								<form action="">
									<ul>
										<li>
											<input type="radio" name="deadline" id="any-loc"> <label for="any-loc">Any</label>
										</li>
										<li>
											<input type="radio" name="deadline" id="ktm"> <label for="ktm">Kathmandu</label>
										</li>
										<li>
											<input type="radio" name="deadline" id="ltp"> <label for="ltp">Lalitpur</label>
										</li>
										<li>
											<input type="radio" name="deadline" id="bkt"> <label for="bkt">Bhaktapur</label>		
										</li>
									</ul>
								</form>
							</div>
						</div>
						<div class="filter_list">
							<h4><a href="#!" class="drp_show">Buyer History <i class="fa fa-chevron-down"></i></a></h4>
							<div class="filter__show filter_radio" id="request_bhistory">
								<form action="">
									<ul>
										<li>
											<input type="radio" name="deadline" id="all-buyer"> <label for="all-buyer">All</label>
										</li>
										<li>
											<input type="radio" name="deadline" id="new-b"> <label for="new-b">New Buyer - 0 Purchase</label>
										</li>
										<li>
											<input type="radio" name="deadline" id="new-begg"> <label for="new-begg">Beginner - Less than 5 Purchases</label>
										</li>
										<li>
											<input type="radio" name="deadline" id="new-exp"> <label for="new-exp">Expert - More than 5 Purchases</label>
										</li>
									</ul>
								</form>
							</div>
						</div>
					</div>	
				</div>
			</div>
			<div class="col-lg-9 col-md-8">
				<div class="filter__show filter_sort">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-8">
							<ul class="search_tags">
								<li>Deadline: Upto 24 hours</li>
								<li>Budget: Upto Rs. 10000</li>
								<li>Location: Kathmandu</li>
								<li>Warranty: No warranty</li>
							</ul>
						</div>
						<div class="col-md-4 col-md-4 col-sm-4">
							<div class="select_sort">
								<select id="" class="custom-select">
									<option>Order by:</option>
									<option>Default</option>
									<option>Request Title ASC</option>
									<option>Request Title DESC</option>
									<option>End Date ASC</option>
									<option>End Date DESC</option>
									<option>Budget ASC</option>
									<option>Budget DESC</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="content-divider-req">
							<div class="title-list mt-center">
								<h2><a href="request-detail.php">Looking to buy 5x10 Dining Table with 6 chairs</a></h2>
							</div>
							<div class="listings">
								<ul>
									<li><span>Posted:</span> 2019-09-24</li>
									<li><span>Ends:</span> 2019-10-17</li>
									<li>0 proposals</li>
								</ul>
							</div>
							<div class="list-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</div>
							<div class="tag-btn req_tags">
								<h5>Tags:</h5>
								<ul>
									<li>diningtable</li>
									<li>chairs</li>
									<li>furniture</li>
									<li>decor</li>
								</ul>
							</div>
							<div class="last-list">
								<ul class="last-rating mrg-0 spacers">
									<li>
										<span class="posted-by">Buyer :</span><i class="fa fa-map-marker-alt"></i>New Road
									</li>
									<li>
										<span class="posted-by">Since: </span>2018-03-28
									</li>
									<li>
										<span class="posted-by">Purchase: </span>0.00k
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12">
						<div class="content-divider-req">
							<div class="title-list mt-center">
								<h2><a href="request-detail.php">Looking to buy 5x10 Dining Table with 6 chairs</a></h2>
							</div>
							<div class="listings">
								<ul>
									<li><span>Posted:</span> 2019-09-24</li>
									<li><span>Ends:</span> 2019-10-17</li>
									<li>0 proposals</li>
								</ul>
							</div>
							<div class="list-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</div>
							<div class="tag-btn req_tags">
								<h5>Tags:</h5>
								<ul>
									<li>diningtable</li>
									<li>chairs</li>
									<li>furniture</li>
									<li>decor</li>
								</ul>
							</div>
							<div class="last-list">
								<ul class="last-rating mrg-0 spacers">
									<li>
										<span class="posted-by">Buyer :</span><i class="fa fa-map-marker-alt"></i>New Road
									</li>
									<li>
										<span class="posted-by">Since: </span>2018-03-28
									</li>
									<li>
										<span class="posted-by">Purchase: </span>0.00k
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>