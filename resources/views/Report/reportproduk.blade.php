@include('template.header')

@section('content')
<div class="page-wrapper">
	<!-- Bread crumb -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-primary">Report Produk</h3> </div>
			<div class="col-md-7 align-self-center">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Report</a></li>
					<li class="breadcrumb-item active">Report Produk</li>
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
							<h4 class="card-title">Data Export</h4>
							<h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
							<!-- <a href="{{ url('inventory/masterproduk/addmasterproduk') }}" class="btn btn-primary">Tambah</a> -->
							<div class="table-responsive m-t-40">
								<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Kode Produk</th>
											<th>Nama Produk</th>
											<th>Stok</th>
											<th>Curr</th>
											<th>Harga Beli</th>
											<th>Harga Jual</th>
											<th>Unit</th>
											
										</tr>
									</thead>
									<tbody>
										@foreach($produk as $key)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$key->kodeproduk}}</td>
											<td>{{$key->namaproduk}}</td>
											<td>{{$key->stok}}</td>
											<td>{{$key->curr}}</td>
											<td>{{$key->hargabeli}}</td>
											<td>{{$key->hargajual}}</td>
											<td>{{$key->unit}}</td>
										
												</tr>
												@endforeach
											</tbody>
										</table>
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