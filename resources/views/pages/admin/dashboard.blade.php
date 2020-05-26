@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-lg-3">
            <div class="card card-eco">
                <div class="card-body">  
                    <div class="row">
                        <div class="col-8">
                            <h4 class="title-text mt-0">PAKET TRAVEL</h4>
                            <h3 class="font-weight-semibold mb-1">{{ $travel_package }}</h3>
                        </div><!--end col-->
                        <div class="col-4 text-center align-self-center">
                            <!-- <span class="card-eco-icon">ðŸ‘³ðŸ»</span> -->
                            <i class="fas fa-hotel card-eco-icon  align-self-center"></i>  
                        </div>  <!--end col-->                                                                           
                    </div> <!--end row-->
                    <div class="bg-pattern"></div>  
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
        <div class="col-lg-3">
            <div class="card card-eco">
                <div class="card-body">  
                    <div class="row">
                        <div class="col-8">
                            <h4 class="title-text mt-0">TRANSAKSI</h4>
                            <h3 class="font-weight-semibold mb-1">{{ $transaction }}</h3>
                        </div><!--end col-->
                        <div class="col-4 text-center align-self-center">
                            <!-- <span class="card-eco-icon">ðŸ›’</span> -->
                            <i class="fas fa-dollar-sign card-eco-icon  align-self-center"></i>  
                        </div>  <!--end col-->                                                                           
                    </div> <!--end row-->
                    <div class="bg-pattern"></div> 
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
        <div class="col-lg-3">
            <div class="card card-eco">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="title-text mt-0">PENDING</h4>
                            <h3 class="font-weight-semibold mb-1">{{ $transaction_pending }}</h3>
                        </div><!--end col-->
                        <div class="col-4 text-center align-self-center">
                            <!-- <span class="card-eco-icon">ðŸŽ²</span> -->
                            <i class="fas fa-spinner card-eco-icon  align-self-center"></i>  
                        </div>  <!--end col-->                                                                           
                    </div> <!--end row-->
                    <div class="bg-pattern"></div> 
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
        <div class="col-lg-3">
            <div class="card card-eco">
                <div class="card-body">                                    
                    <div class="row">
                        <div class="col-8">
                            <h4 class="title-text mt-0">SUKSES</h4>
                            <h3 class="font-weight-semibold mb-1">{{ $transaction_success }}</h3>
                        </div><!--end col-->
                        <div class="col-4 text-center align-self-center">
                            <!-- <span class="card-eco-icon">ðŸ’°</span> -->
                            <i class="fas fa-check card-eco-icon  align-self-center"></i>  
                        </div>  <!--end col-->                                                                           
                    </div> <!--end row-->
                    <div class="bg-pattern"></div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->

</div><!-- container -->
@endsection