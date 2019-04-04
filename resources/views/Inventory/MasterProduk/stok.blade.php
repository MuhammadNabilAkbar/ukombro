@include('template.header')

@section('content')
<div class="page-wrapper">
	<!-- Bread crumb -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-primary">Tambah Stok </h3> </div>
			<div class="col-md-7 align-self-center">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Inventory</a></li>
					<li class="breadcrumb-item active">Tambah Stok </li>
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
							<form class="form-valide" action="{{ action('InventoryController@updatestok', $id) }}" method="post">
								@csrf
								<div class="form-validation">

									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-currency">Nama Produk<span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input value="{{ $produk->namaproduk }}" type="text" class="form-control" readonly  name="val-currency" placeholder="Nama Produk">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-website">Stok <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input value="{{ $produk->stok }}" type="number" class="form-control" id="val-website" name="stok" placeholder="Stok">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-lg-8 ml-auto">
											<a href="{{ url('inventory/masterproduk') }}" class="btn btn-danger">Cancel</a>&nbsp;
											<button type="submit" class="btn btn-primary">Tambah</button>
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