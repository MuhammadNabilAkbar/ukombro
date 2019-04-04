@include('template.header')

@section('content')
<div class="page-wrapper">
	<!-- Bread crumb -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-primary">Transaksi</h3> </div>
			<div class="col-md-7 align-self-center">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Point Of Sale</a></li>
					<li class="breadcrumb-item active">Transaksi</li>
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

							<form action="{{action('TransaksiController@transaksisementara')}}" method="POST">
								@csrf
								<div class="row">
									<div class="col-lg-10">
										<select class="form-control" data-role="select" name="nama">
											<option value="">Pilih Produk</option>
											@foreach($produks as $key)
											<option value="{{$key->namaproduk}}">{{$key->namaproduk}} || Rp. {{$key->hargajual}}</option>
											@endforeach
										</select>
									</div>
									<button type="submit" class="btn btn-success">Tambahkan!</button>
								</div>								
								<br>								
							</form>

							<div class="table-responsive m-t-40">
								<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Nama</th>
											<th>QTY</th>
											<th>Harga</th>
											<th>Action</th>
											
										</tr>
									</thead>
									<tbody>
										@foreach($trans as $key)
										<tr>
											<td>{{ $key->nama}}</td>
											<td>{{ $key->jumlah }}</td>											
											<td>{{ $key->harga }}</td>											
											<td>
												<center>
													<form action="{{ action('TransaksiController@deletetransaksi', $key->id) }}" method="post">
														@csrf
														<input type="hidden" name="_method" value="DELETE">
														<button class="btn btn-danger ti-trash" type="submit"></button>
													</center>
												</form>
											</center>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							<br>
							<h3>Total : Rp. {{$datatotal}}</h3>							
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