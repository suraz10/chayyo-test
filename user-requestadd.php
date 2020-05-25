<?php include('header-t.php'); ?>

<section class="user_page gigs_page gigs_add p-tb50">
	<div class="ch_wrapper">
		<div class="addGig">
			<form method="" action="" class="form">
				<h3><i class="fa fa-edit"></i> Fill up the form below to add request:</h3>
				<p class="mandatory">Fields marked with <span>(*)</span> are mandatory.</p>
				<div class="row">
					<!-- <h4>Category</h4> -->
					<div class="col-12">
						<label>What are you looking for? <span>*</span></label>
						<select id="cat_id" class="form-control custom-select" name="cat_id">
							<option value="">Select a category</option>
							<option value="1">Automobiles &amp; Industrial</option>
							<option value="2">Electronics &amp; Peripherals</option>
							<option value="3">Home Decor, Lifestyle &amp; Furniture</option>
							<option value="7">Local Services</option>
							<option value="6">Real Estate</option>
							<option value="4">Software &amp; Technology</option>
						</select>
					</div>
					<div class="col-12">
						<label>Sub Category <span>*</span></label>
						<select id="remove_select" name="sub_cat_id" class="form-control custom-select">
							<option value=""> Select a subcategory </option>
							<option value="9">Heavy Vehicles</option>
							<option value="10">Cars</option>
							<option value="11">Motorcycle</option>
							<option value="12">Parts &amp; Accessories</option>
						</select>
					</div>
					<hr>
					<!-- <h4>General</h4> -->
					<div class="col-12">
						<label>Title of your request <span>*</span></label>
						<input type="text" name="" class="form-control" placeholder="Eg. iPhone 6S, Web Design, Writing">
					</div>
					<div class="col-12">
						<label>Describe your request</label>
						<textarea type="text" name="" class="form-control" placeholder="Description"></textarea>
					</div>
					<div class="col-12">
						<label>Are you looking for new or used product?</label>
						<select id="" name="" class="form-control custom-select">
							<option value="">New</option>
							<option value="">Used</option>
						</select>
					</div>
					<div class="col-12">
						<label>Request Price <span>*</span></label>
						<input type="number" name="" class="form-control" placeholder="Gig Price">
					</div>
					<div class="col-12">
						<label>Post request till <span>*</span></label>
						<input type="date" name="" class="form-control">
					</div>
					<div class="col-12">
						<label>Upload any reference image</label>
						<input type="file" name="" class="" placeholder="Delivery Days">
						<small>(Optional), max. 5MB</small>
					</div>
					<div class="col-12">
						<label>Provide some relevant tags <span>*</span></label>
						<input type="text" name="" class="form-control" placeholder="max. 5, seperated by (,) comma">
					</div>
					<hr>
					<!-- <h4>Delivery</h4> -->
					<div class="col-12">
						<label>Delivery required to</label>
						<select id="delivery_district" class="form-control custom-select" name="delivery_district">
							<option value="">None</option>
							<option value="4">Anywhere - Ktm Valley</option>
							<option value="6">Banepa</option>
							<option value="3">Bhaktapur</option>
							<option value="1">Kathmandu</option>
							<option value="5">Kirtipur</option>
							<option value="2">Lalitpur</option>
						</select>
					</div>
					<hr>
					<!-- <h4>Warranty</h4> -->
					<div class="col-12">
						<label>Warranty required for</label>
						<select id="" class="form-control custom-select" name="">
							<option value="">None</option>
							<option value="1">Less than 1 year</option>
							<option value="2">1 to 2 years</option>
							<option value="3">More than 2 years</option>
						</select>
					</div>
					<div class="col-12 gig_submit">
						<label></label>
						<input type="submit" name="" value="SUBMIT">
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>