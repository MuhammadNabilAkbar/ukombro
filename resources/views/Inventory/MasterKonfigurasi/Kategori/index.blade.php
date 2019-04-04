@include('template.header')

@section('content')
<div class="page-wrapper">
	<!-- Bread crumb -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-primary">Daftar Kategori</h3> </div>
			<div class="col-md-7 align-self-center">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Inventory</a></li>
					<li class="breadcrumb-item active">Daftar Kategori</li>
				</ol>
			</div>
		</div>
		@if (\Session::has('success'))
		<div class="alert alert-success">
			<p>{{ \Session::get('success') }}</p>
		</div><br />
		@endif
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
							<a href="{{ url('inventory/masterkonfigurasi/addkategori') }}" class="btn btn-primary">Tambah</a>
							<div class="table-responsive m-t-40">
								<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Kategori</th>
											<th colspan="2">Action</th>
											
										</tr>
									</thead>
									<tbody>
										@foreach($kategori as $key)
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>{{ $key->kategori }}</td>											
											<td>
												<center>
													<a href="{{ action('InventoryController@editkategori', $key->id) }}" class="btn btn-primary ti-pencil"></a>&nbsp;
												</center>
											</td>
											<td>
												<center>
													<a href="{{ route('kategori.delete', $key->id) }}" class="btn btn-danger ti-trash"></a>
													</center>
											</td>
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