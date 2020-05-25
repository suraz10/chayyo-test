<?php include('header-t.php'); ?>

<section class="user_page user_profile edit_profile">
	<div class="pro_title">		
	</div>
	<div class="ch_wrapper">
		<form method="POST" action="#" accept-charset="UTF-8" enctype="multipart/form-data">
			<div class="profile_det box__shadow">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="prof_img">
							<img src="image/client.jpg">
							<input name="img" type="file">
							<ul class="prof_social">
								<li class="prof_social_title">Social Links:</li>
								<li>
									<input type="url" class="form-control" name="" placeholder="Facebook URL">
								</li>
								<li><input type="url" class="form-control" name="" placeholder="Twitter URL">
								</li>
								<li><input type="url" class="form-control" name="" placeholder="Linkedin URL">
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-8 col-md-8">
						<div class="prof_title">
							<h3>Update Profile</h3>
							<div class="row">
								<div class="col-12">
									<label>Full Name:</label>
									<input type="text" class="form-control" placeholder="Full Name" name="" required>
								</div>
								<div class="col-lg-6 col-md-12">
									<label>Email:</label>
									<input type="email" class="form-control" name="" placeholder="Email Address">
								</div>
								<div class="col-lg-6 col-md-12">
									<label>Phone:</label>
									<input type="tel" class="form-control" name="" placeholder="Phone Number">
								</div>
								<div class="col-lg-6 col-md-12">
									<label>Gender:</label>
									<select class="form-control">
										<option value="male">Male</option>
										<option value="female">Female</option>
										<option value="others">Others</option>
									</select>
								</div>
								<div class="col-lg-6 col-md-12">
									<label>Date of Birth:</label>
									<input type="date" class="form-control" name="" placeholder="Date of Birth">
								</div>
								<div class="col-lg-6 col-md-12">
									<label>Company:</label>
									<input type="text" class="form-control" name="" placeholder="Company Name (optional)">
								</div>
								<div class="col-lg-6 col-md-12">
									<label>Address: *</label>
									<input type="text" class="form-control" name="" placeholder="Address" required>
								</div>
								<div class="col-lg-6 col-md-12">
									<label>Country: *</label>
									<select class="form-control" required>
										<option value="nepal">Nepal</option>
										<option value="india">India</option>
										<option value="china">China</option>
									</select>
								</div>
								<div class="col-lg-6 col-md-12">
									<label>District: *</label>
									<select id="district" name="district" class="form-control" required>
										<option value="1" selected="selected">Kathmandu</option>
										<option value="2">Lalitpur</option>
										<option value="3">Bhaktapur</option>
										<option value="4">Anywhere - Ktm Valley</option>
										<option value="5">Kirtipur</option>
										<option value="6">Banepa</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 prof_interest">
						<h3>Interests:</h3>
						<input type="text" class="form-control" name="" placeholder="Add your Interest.">
						<small id="emailHelp" class="form-text text-muted">seperate with comma( , ) for multiple items</small>
					</div>
				</div>
			</div>
			<div class="profile_det prof_bio">
				<h3>Biography: *</h3>
				<textarea class="form-control" placeholder="Add your Bio" required></textarea>
			</div>
			<div class="save_profile">
				<input type="submit" name="" value="SAVE">
			</div>
		</form>
	</div>
</section>

<?php include('footer.php'); ?>