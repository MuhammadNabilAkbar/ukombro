@include('template.header')

@section('content')
<div class="page-wrapper">
	<!-- Bread crumb -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-primary">Edit Kategori {{ $kategori->kategori }}</h3> </div>
			<div class="col-md-7 align-self-center">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Inventory</a></li>
					<li class="breadcrumb-item active">Edit Kategori {{ $kategori->kategori }}</li>
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
							<form class="form-valide" action="{{ action('InventoryController@updatekategori', $id) }}" method="post">
								@csrf
								<div class="form-validation">
									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-username">Kategori <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input value="{{ $kategori->kategori }}" type="text" class="form-control" id="val-username" name="kategori" placeholder="Kategori">
										</div>
									</div>									
									<div class="form-group row">
										<div class="col-lg-8 ml-auto">
											<a href="{{ url('inventory/masterkonfigurasi/kategori') }}" class="btn btn-danger">Cancel</a>&nbsp;
											<button type="submit" class="btn btn-primary">Edit</button>
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