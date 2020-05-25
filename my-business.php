<?php include('header-t.php'); ?>

<section class="user_page business_page p-tb50">
	<div class="ch_wrapper">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="business_block">
					<div class="business_info">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
						    	<a class="nav-link active" id="sales-tab" data-toggle="tab" href="#bsales" role="tab" aria-controls="sales" aria-selected="true">Sales<span>3</span></a>
							</li>
							<li class="nav-item">
						    	<a class="nav-link" id="purch-tab" data-toggle="tab" href="#bpurchase" role="tab" aria-controls="purch" aria-selected="true">Purchase<span>2</span></a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="bsales" role="tabpanel" aria-labelledby="sales-tab">
								<div class="business_det">
									<table class="table table-hover table-responsive">
										<thead>
											<tr>
												<th>S.N.</th>
												<th>Client Request</th>
												<th>You Earned</th>
												<th>Rating & Feedback</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1.</td>
												<td>
													<a href=""><span>HP Pavilion 4520 - Used</span></a>
													<span>Requested on: <b>2019-11-04</b></span>
													<span class="status updated">Delivered</span>
												</td>
												<td class="gig_price">Rs. 15,000</td>
												<td>
													<ul class="rating">
														<li>Rating:</li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="far fa-star"></i></li>
													</ul>
													<p>Great provider! Fixed many issues and added some small features for free and he was very responsive all the time.</p>
												</td>
											</tr>
											<tr>
												<td>2.</td>
												<td>
													<a href=""><span>Bajaj Pulsar 200CC</span></a>
													<span>Requested on: <b>2019-11-04</b></span>
													<span class="status success">Active</span>
												</td>
												<td class="gig_price">Rs. 130,000</td>
												<td>
													<ul class="rating">
														<li>Rating: N/A</li>
													</ul>
													<p>Feedback: N/A</p>
												</td>
											</tr>
											<tr>
												<td>3.</td>
												<td>
													<a href=""><span>Bajaj Pulsar 200CC</span></a>
													<span>Requested on: <b>2019-11-04</b></span>
													<span class="status updated">Delivered</span>
												</td>
												<td class="gig_price">Rs. 130,000</td>
												<td>
													<ul class="rating">
														<li>Rating: N/A</li>
													</ul>
													<p>Feedback: N/A</p>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade" id="bpurchase" role="tabpanel" aria-labelledby="purch-tab">
								<div class="gig_det">
									<table class="table table-hover table-responsive">
										<thead>
											<tr>
												<th>S.N.</th>
												<th>Your Purchase Detail</th>
												<th>Rating & Feedback</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1.</td>
												<td>
													<a href=""><span>You requested: Looking for 4x4 Land cruiser</span></a>
													<span class="price">Price: <b>Rs. 12,000</b></span>
													<span>On: <b>2019-10-19</b></span>
													<div class="divider"></div>
													<span>You Requested: HP Pavilion 4520 - Used</span>
													<span>On: <b>2019-11-04</b></span>
													<span class="status updated">Delivered</span>
												</td>
												<td>
													<ul class="rating">
														<li>Rating: N/A</li>
													</ul>
													<p>Feedback: N/A</p>
												</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<th></th>
												<th>Total Purchase</th>
												<th>3,704,000.00</th>
											</tr>
										</tfoot>
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