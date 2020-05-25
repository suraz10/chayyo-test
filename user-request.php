<?php include('header-t.php'); ?>

<section class="user_page gigs_page p-tb50">
	<div class="ch_wrapper">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="gigs_block">
					<div class="gigs_btn_list">
						<a href="gigadd.php"><i class="fa fa-folder-plus"></i> Add Request</a>
					</div>
					<div class="gigs_info">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
						    	<a class="nav-link active" id="publ-tab" data-toggle="tab" href="#gpublished" role="tab" aria-controls="publ" aria-selected="true">Published<span>1</span></a>
							</li>
							<li class="nav-item">
						    	<a class="nav-link" id="rprop-tab" data-toggle="tab" href="#rproposal" role="tab" aria-controls="rprop" aria-selected="true">Taking Proposals<span>2</span></a>
							</li>
							<li class="nav-item">
						    	<a class="nav-link" id="delv-tab" data-toggle="tab" href="#rdelivery" role="tab" aria-controls="rdelv" aria-selected="true">On Delivery<span>1</span></a>
							</li>
							<li class="nav-item">
						    	<a class="nav-link" id="fulf-tab" data-toggle="tab" href="#rfulfilled" role="tab" aria-controls="rfulf" aria-selected="true">Fulfilled<span>0</span></a>
							</li>
							<li class="nav-item">
						    	<a class="nav-link" id="rsusp-tab" data-toggle="tab" href="#rsuspend" role="tab" aria-controls="rsusp" aria-selected="true">Suspended<span>1</span></a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="gpublished" role="tabpanel" aria-labelledby="publ-tab">
								<div class="gig_det">
									<h5>These requests are published but no proposals are received so far.</h5>
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Request Detail</th>
												<th>Proposals</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<span>Looking for 4X4 Land Cruiser</span>
													<span>Budget: <b>Rs. 3500000</b></span>
													<span>Deadline: <b>2019-11-04</b></span>
													<ul class="tags">
														<li>Tags:</li>
														<li>4X4</li>
														<li>landcruiser</li>
														<li>scorpio</li>
													</ul>
												</td>
												<td class="prop_btn">none</td>
												<td>
													<a href="#!"><i class="far fa-edit"></i></a>
													<a href="#!"><i class="fa fa-trash-alt"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade" id="rproposal" role="tabpanel" aria-labelledby="rprop-tab">
								<div class="gig_det">
									<h5>When you receive a proposal for a request, it'll appear under this tab. Click on '(view all)' to see all applicants.</h5>
									<table class="table table-hover">
										<thead>
											<tr>
												<th>You Requested</th>
												<th>Proposals</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<span>HP Pavilion 4520 - Used</span>
													<span>Price: <b>Rs. 15,000</b></span>
													<span>Expires on: <b>2019-11-04</b></span>
													<ul class="tags">
														<li>Tags:</li>
														<li>laptop</li>
														<li>hp</li>
														<li>computer</li>
													</ul>
												</td>
												<td class="prop_btn"><a href="#!">(3) View All</a></td>
												<td>
													<a href="#!"><i class="fa fa-trash-alt"></i></a>
												</td>
											</tr>
											<tr>
												<td>
													<span>Bajaj Pulsar 200CC</span>
													<span>Price: <b>Rs. 65,000</b></span>
													<span>Expires on: <b>2019-11-04</b></span>
													<ul class="tags">
														<li>Tags:</li>
														<li>bike</li>
														<li>motorcycle</li>
														<li>pulsar</li>
														<li>200</li>
													</ul>
												</td>
												<td class="prop_btn"><a href="#!">(5) View All</a></td>
												<td>
													<a href="#!"><i class="fa fa-trash-alt"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade" id="rdelivery" role="tabpanel" aria-labelledby="rdelv-tab">
								<div class="gig_det">
									<h5>When you accept a proposal for a request, they're shown as 'On Delivery.'</h5>
									<table class="table table-hover">
										<thead>
											<tr>
												<th>You Requested</th>
												<th>You Accepted</th>
												<th>All Proposals</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<span>HP Pavilion 4520 - Used</span>
													<span>Price: <b>Rs. 15,000</b></span>
												</td>
												<td>
													<span class="gig_price">I will be offering the least budget.</span>
													<span>Delivery Days: <b>4</b></span>
													<span>Delivery Place: <b>Lalitpur</b></span>
												</td>
												<td>
													<a href="#!">(1) View All</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade" id="rfulfilled" role="tabpanel" aria-labelledby="rfulf-tab">
								<div class="gig_det">
									<h5>If the proposed gig is delivered, then they're considered 'Fulfilled'.</h5>
									<table class="table table-hover">
										<thead>
											<tr>
												<th>You Requested</th>
												<th>You Accepted</th>
												<th>All Proposals</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<!-- <span>HP Pavilion 4520 - Used</span> -->
													<!-- <span>Price: <b>Rs. 15,000</b></span> -->
												</td>
												<td>
													<!-- <span class="gig_price">I will be offering the least budget.</span> -->
													<!-- <span>Delivery Days: <b>4</b></span> -->
													<!-- <span>Delivery Place: <b>Lalitpur</b></span> -->
												</td>
												<td>
													<!-- <a href="#!">(1) View All</a> -->
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade" id="rsuspend" role="tabpanel" aria-labelledby="rsusp-tab">
								<div class="gig_det">
									<h5>Suspended requests are marked as 'Suspended.'</h5>
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Title</th>
												<th>Reason for Suspension</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="susp_r">
													Online Disc Repair Website Development
												</td>
												<td class="susp_r">
													Suspended by admin
												</td>
												<td>
													<a href="#!"><i class="far fa-edit"></i></a>
													<a href="#!"><i class="fa fa-trash-alt"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="stats_block">
					<h4>Buyer Stats</h4>
					<ul>
                        <li>
                        	<label>Requests :</label>  <span> 8 Total</span>
                        </li>
                        <li>
                        	<label>Purchase :</label>  <span> 4 Total</span>
                        </li>
                        <li>
                        	<label></label>  <span> 42890.00 Nrs</span>
                        </li>
                        <li>
                        	<label> </label>  <span> 1 Vendor(s)</span>
                        </li>
                        <li>
                        	<label> Rating : </label>
                        	<ul>
                        		<li><i class="fa fa-star"></i></li>
                        		<li><i class="fa fa-star"></i></li>
                        		<li><i class="far fa-star"></i></li>
                        		<li><i class="far fa-star"></i></li>
                        		<li><i class="far fa-star"></i></li>
                        	</ul>
                        </li>
                    </ul>
				</div>
				<div class="stats_block">
					<h4>Popular Categories</h4>
                    <ul class="pop_cat">
                        <li>Real Estate</li>
	                    <li>Automobiles &amp; Industrial</li>
	                    <li>Software &amp; Technology</li>
	                    <li>Electronics &amp; Peripherals</li>
	                </ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>