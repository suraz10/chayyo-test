<?php include('header-t.php'); ?>

<section class="user_page gigs_page p-tb50">
	<div class="ch_wrapper">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="gigs_block">
					<div class="gigs_btn_list">
						<a href="request.php"><i class="fa fa-hand-holding-usd"></i> Start Selling</a>
						<a href="gigadd.php"><i class="fa fa-folder-plus"></i> Add Gig</a>
					</div>
					<div class="gigs_info">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
						    	<a class="nav-link active" id="publ-tab" data-toggle="tab" href="#gpublished" role="tab" aria-controls="publ" aria-selected="true">Published<span>2</span></a>
							</li>
							<li class="nav-item">
						    	<a class="nav-link" id="acti-tab" data-toggle="tab" href="#gactive" role="tab" aria-controls="acti" aria-selected="true">Active<span>1</span></a>
							</li>
							<li class="nav-item">
						    	<a class="nav-link" id="susp-tab" data-toggle="tab" href="#gsuspend" role="tab" aria-controls="susp" aria-selected="true">Suspended<span>1</span></a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="gpublished" role="tabpanel" aria-labelledby="publ-tab">
								<div class="gig_det">
									<h5>Gigs that are published but not proposed anywhere yet, will show here.</h5>
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Gig Detail</th>
												<th>Total Sales</th>
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
												<td class="gig_price">Rs. 15,000</td>
												<td>
													<a href="#!"><i class="far fa-edit"></i></a>
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
												<td class="gig_price">Rs. 130,000</td>
												<td>
													<a href="#!"><i class="far fa-edit"></i></a>
													<a href="#!"><i class="fa fa-trash-alt"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade" id="gactive" role="tabpanel" aria-labelledby="acti-tab">
								<div class="gig_det">
									<h5>Gigs that are proposed are marked as 'Active'.</h5>
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Gig Detail</th>
												<th>Total Sales</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<span>Web Developer</span>
													<span>Price: <b>Rs. 25,000</b></span>
													<span>Expires on: <b>2019-10-19</b></span>
													<ul class="tags">
														<li>Tags:</li>
														<li>web development</li>
														<li>software</li>
														<li>website</li>
														<li>html</li>
														<li>design</li>
													</ul>
												</td>
												<td class="gig_price">Rs. 75,000</td>
												<td>
													
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade" id="gsuspend" role="tabpanel" aria-labelledby="susp-tab">
								<div class="gig_det">
									<h5>Suspended gigs will show here.</h5>
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
												<td>
													<span>Web Developer Needed</span>
												</td>
												<td class="susp_r">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit.
												</td>
												<td>
													
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
					<h4>Seller Stats</h4>
					<ul>
                        <li>
                        	<label>Gigs :</label>  <span> 1 Total</span>
                        </li>
                        <li>
                        	<label>Sold :</label>  <span> 0 Total</span>
                        </li>
                        <li>
                        	<label></label>  <span> 0.00 Nrs</span>
                        </li>
                        <li>
                        	<label> </label>  <span> 0 Client(s)</span>
                        </li>
                        <li>
                        	<label> Rating : </label>
                        	<ul>
                        		<li><i class="fa fa-star"></i></li>
                        		<li><i class="fa fa-star"></i></li>
                        		<li><i class="fa fa-star"></i></li>
                        		<li><i class="fa fa-star"></i></li>
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