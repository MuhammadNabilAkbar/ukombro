@include('template.header')

@section('content')
<div class="page-wrapper">
	<!-- Bread crumb -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-primary">Tambah User</h3> </div>
			<div class="col-md-7 align-self-center">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Master</a></li>
					<li class="breadcrumb-item active">Tambah User</li>
				</ol>
			</div>
		</div>
		<!-- End Bread crumb -->
		<!-- Container fluid  -->
		<div class="container-fluid">
			<!-- Start Page Content -->

			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<form class="form-valide" action="{{url('master/user/saveuser')}}" method="post">
								@csrf
								<div class="form-validation">
									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-username">Nama <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" id="val-username" name="nama" placeholder="Nama">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-email">Telepon <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="telepon" placeholder="Telepon">
										</div>
									</div>

									
									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-currency">Username <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control"  name="username" placeholder="Username">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-website">Password <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input type="password" class="form-control" id="val-website" name="password" placeholder="Password">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-skill">Hak Akses <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<select class="form-control" id="val-skill" name="hakakses">
												<option value="">Please select</option>
												<option value="Admin">Admin</option>
												<option value="SuperAdmin">SuperAdmin</option>
												<option value="User">User</option>									
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-website">Foto <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<form action="#" class="dropzone">
												<div class="fallback">
													<input name="foto" type="file" multiple />
												</div>
											</form>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-lg-8 ml-auto">
											<a href="{{ url('master/user') }}" class="btn btn-danger">Cancel</a>&nbsp;
											<button type="submit" class="btn btn-success">Tambah</button>
										</div>
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>

			<!-- End PAge Content -->

		</div>
		<!-- End Container fluid  -->


	</div>
	<footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
	@include('template.footer')