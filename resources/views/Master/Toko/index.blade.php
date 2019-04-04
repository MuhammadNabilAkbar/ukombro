@include('template.header')

@section('content')
<div class="page-wrapper">
	<!-- Bread crumb -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-primary">Informasi Toko</h3> </div>
			<div class="col-md-7 align-self-center">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Master</a></li>
					<li class="breadcrumb-item active">Informasi Toko</li>
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
								<form class="form-valide" action="{{ action('MasterController@savetoko') }}" method="post">
							<div class="form-validation">
									@csrf
									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-username">Nama Instansi <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" id="val-username" name="namainstansi" placeholder="Nama Instansi">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-email">Telepon <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="telepon" placeholder="Telepon">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-skill">Kode POS <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="kodepos" placeholder="Kode POS">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-currency">Deskripsi <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control"  name="deskripsi" placeholder="Deskripsi">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-website">Alamat <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" id="val-website" name="alamat" placeholder="Alamat">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-website">Foto <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<form action="#" class="dropzone">
												<div class="fallback">
													<input name="file" type="file" multiple />
												</div>
											</form>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-lg-8 ml-auto">
											<button type="submit" class="btn btn-success">Save</button>
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