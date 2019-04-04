@include('template.header')

@section('content')
<div class="page-wrapper">
	<!-- Bread crumb -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-primary">Tambah Keuntungan </h3> </div>
			<div class="col-md-7 align-self-center">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Inventory</a></li>
					<li class="breadcrumb-item active">Tambah Keuntungan </li>
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
							<div class="form-validation">
								<form class="form-valide" action="#" method="post">
					
									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-currency">Keuntungan<span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="val-currency" placeholder="Keuntungan">
										</div>
									</div>							

								<div class="form-group row">
									<div class="col-lg-8 ml-auto">
										<a href="{{ url('inventory/masterkonfigurasi/keuntungan') }}" class="btn btn-danger">Cancel</a>&nbsp;
										<a href="#" class="btn btn-success">Tambah</a>
									</div>
								</div>
							</form>
						</div>

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