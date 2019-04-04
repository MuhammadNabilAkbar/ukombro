@include('template.header')

@section('content')
<div class="page-wrapper">
	<!-- Bread crumb -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-primary">Edit Produk {{ $produk->namaproduk }}</h3> </div>
			<div class="col-md-7 align-self-center">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Inventory</a></li>
					<li class="breadcrumb-item active">Edit Produk {{ $produk->namaproduk }}</li>
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
							<form class="form-valide" action="{{ action('InventoryController@updatemasterproduk', $id) }}" method="post">
								@csrf
								<div class="form-validation">
									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-username">Kode Produk <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input value="{{ $produk->kodeproduk }}" type="text" class="form-control" id="val-username" name="kodeproduk" placeholder="Kode Produk">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-email">Barcode <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input value="{{ $produk->barcode }}" type="text" class="form-control" name="barcode" placeholder="Barcode">
										</div>
									</div>

									
									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-currency">Nama Produk <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input value="{{ $produk->namaproduk }}" type="text" class="form-control"  name="namaproduk" placeholder="Nama Produk">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-website">Stok <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input value="{{ $produk->stok }}" type="text" readonly class="form-control" id="val-website" name="val-website" placeholder="Stok">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-skill">Kategori <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<select class="form-control" id="val-skill" name="kategori">
												@foreach($kategori as $key)
												<option value="{{ $key->kategori }}">{{ $key->kategori }}</option>
												@endforeach
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-skill">Curr <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<select class="form-control" id="val-skill" name="curr">
												@foreach($curr as $key)
												<option value="{{ $key->curr }}">{{ $key->curr }}</option>
												@endforeach
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-skill">Unit <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<select class="form-control" id="val-skill" name="unit">
												@foreach($unit as $key)
												<option value="{{ $key->unit }}">{{ $key->unit }}</option>
												@endforeach
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-website">Harga Beli <span class="text-danger">*</span></label>
										<div class="col-lg-1">
											<span>Rp</span>
										</div>
										<div class="col-lg-5">
											<input value="{{ $produk->hargabeli }}" type="number" class="form-control" id="val-website" name="hargabeli" placeholder="Harga Beli">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-website">Harga Jual <span class="text-danger">*</span></label>
										<div class="col-lg-1">
											<span>Rp</span>
										</div>
										<div class="col-lg-5">
											<input value="{{ $produk->hargajual }}" type="number" class="form-control" id="val-website" name="hargajual" placeholder="Harga Jual">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-website">Disc <span class="text-danger">*</span></label>
									<div class="col-lg-1">
										<span>%</span>
									</div>
									<div class="col-lg-5">
										<input value="{{ $produk->disc }}" type="number" class="form-control" id="val-website" name="disc" placeholder="Disc">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-website">Keterangan <span class="text-danger">*</span></label>
									<div class="col-lg-6">
										<input value="{{ $produk->keterangan }}" type="text" class="form-control" id="val-website" name="keterangan" placeholder="Keterangan">
									</div>
								</div>



								<div class="form-group row">
									<div class="col-lg-8 ml-auto">
										<a href="{{ url('inventory/masterproduk') }}" class="btn btn-danger">Cancel</a>&nbsp;
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