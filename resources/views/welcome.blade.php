<!DOCTYPE html>
<html lang="en">

<body>

    @include('template.header')

    @section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->

                <div class="row">
                    <div class="col-md-3">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i style="color: black" class="ti-folder f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                        <h2 class="color-white">Master</h2>
                                    <a href="{{ url('master/toko') }}">
                                       <i style="color: white" class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-pink p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i style="color: black" class="ti-cloud f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                        <h2 class="color-white">Inventory</h2>
                                    <a href="{{ url('inventory/masterproduk') }}">
                                         <i style="color: white" class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-success p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i style="color: black" class="ti-shopping-cart f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                        <h2 class="color-white">Point Of Sale</h2>
                                    <a href="{{ url('transaksi') }}">
                                         <i style="color: white" class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-danger p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i style="color: black" class="ti-list f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                        <h2 class="color-white">Laporan</h2>
                                    <a href="{{ url('report/reportproduk') }}">
                                         <i style="color: white" class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End PAge Content -->
                <!-- footer -->
                <!-- End footer -->
            </div>
            <!-- End Container fluid  -->


        </div>
        <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
        <!-- End Page wrapper  -->
        @include('template.footer')
    </body>
    </html>