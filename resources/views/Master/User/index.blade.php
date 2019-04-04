@include('template.header')

@section('content')
<div class="page-wrapper">
	<!-- Bread crumb -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-primary">Daftar User</h3> </div>
			<div class="col-md-7 align-self-center">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Master</a></li>
					<li class="breadcrumb-item active">Daftar User</li>
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
							<a href="{{ url('master/user/adduser') }}" class="btn btn-primary">Tambah</a>
							<div class="table-responsive m-t-40">
								<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Telepon</th>
											<th>Hak Akses</th>
											<th colspan="2">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($user as $key)
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>{{ $key->nama }}</td>
											<td>{{ $key->telepon }}</td>
											<td>{{ $key->hakakses }}</td>
											<td>
												<center>
													<a href="{{action('MasterController@edituser', $key->id)}}" class="btn btn-primary ti-pencil"></a>
												</center>
											</td>
											<td>
												<center>
													<form action="{{ action('MasterController@deleteuser', $key->id) }}" method="post">
														@csrf
														<input type="hidden" name="_method" value="DELETE">
														<button class="btn btn-danger ti-trash" type="submit"></button>
													</center>
													</form>
												</td>
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