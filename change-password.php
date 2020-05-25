<?php include('header-t.php'); ?>

<section class="user_page user_profile edit_profile">
	<div class="pro_title">		
	</div>
	<div class="ch_wrapper">
		<form method="POST" action="#" accept-charset="UTF-8" enctype="multipart/form-data">
			<div class="profile_det">
				<h3>Change Password</h3>
				<div class="row">
					<div class="col-12">
						<label>Current Password:</label>
						<input type="password" name="" placeholder="Current Password" class="form-control">	
					</div>
					<div class="col-12">
						<label>New Password:</label>
						<input type="password" name="" placeholder="New Password" class="form-control">	
					</div>
					<div class="col-12">
						<label>Confirm New Password:</label>
						<input type="password" name="" placeholder="Confirm New Password" class="form-control">	
					</div>
					<div class="col-12">
						<input type="submit" name="" value="SUBMIT">	
					</div>
				</div>
			</div>
		</form>
	</div>
</section>

<?php include('footer.php'); ?>