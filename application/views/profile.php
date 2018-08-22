<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?php echo $profile->name; ?>'s Profile
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">User profile</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">

		<div class="row">
			<div class="col-md-3">

				<!-- Profile Image -->
				<div class="box box-primary">
					<div class="box-body box-profile">
						<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>assets/img/user1-128x128.jpg" alt="User profile picture">

						<h3 class="profile-username text-center"><?php echo $profile->name; ?></h3>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

				
			</div>
			<!-- /.col -->
			<div class="col-md-9">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li><a href="#settings" data-toggle="tab"><?php echo $profile->name; ?>'s Profile</a></li>
					</ul>
					<div class="tab-content">
						<div class="active tab-pane" id="activity">
							<div class="tab-pane" id="settings">
								<form class="form-horizontal">
									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Name</label>
										<div class="col-sm-10">
											<input type="text" readonly="" class="form-control" id="name" name="name" value="<?php echo $profile->name; ?>" placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label for="user_login" class="col-sm-2 control-label">User Login</label>
										<div class="col-sm-10">
											<input type="text" readonly="" class="form-control" id="user_login" name="user_login" value="<?php echo $profile->user_login; ?>" placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label for="email" class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<input type="email" readonly="" class="form-control" id="email" name="email" value="<?php echo $profile->email_address; ?>" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label for="phone_number" class="col-sm-2 control-label">Phone Number</label>
										<div class="col-sm-10">
											<input type="phone_number" readonly="" class="form-control" id="phone_number" name="phone_number" value="<?php echo $profile->phone_number; ?>" placeholder="Phone Number">
										</div>
									</div>
									<div class="form-group">
										<label for="role" class="col-sm-2 control-label">Role</label>
										<div class="col-sm-10">
											<input type="text" readonly="" class="form-control" id="role" name="role" value="<?php echo $profile->role; ?>" placeholder="Phone Number">
										</div>
									</div>
									<!-- <div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-danger">Submit</button>
										</div>
									</div> -->
								</form>
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
					<!-- /.nav-tabs-custom -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->

		</section>
		<!-- /.content -->
	</div>
  <!-- /.content-wrapper -->