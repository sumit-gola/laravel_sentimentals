@extends('frontend.layout.layout')
@push('styles')
<link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

@endpush
@section( 'content')
      <!-- start page title -->
    <div class="main-content bg-white">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                            <h4 class="mb-sm-0">Product Details</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Products</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                 <!-- end page title -->

                  <!-- start blog -->
                <section class="section bg-white" id="blog">
                    <div class="container-fluid ">
                        <div class="row ">
                            <div class="col-lg-12">
                                <div class=" mb-5">
                                    {{-- <h2 class="font-weight-light texl-left mt-5 mb-5">ALL YOUR FAVOURITES</h2> --}}

                                    <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base"> FAVOURITES<span
                                            class="text-primary">Products</span></h1>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            @if(!count($products) > 0 )
                                <h3>  Products Not Found!</h3>
                          
                            @endif
                            @foreach ($products as $product)
                            <div class="col-lg-3 col-md-6 ">
                                <a href="{{ url('/product-details/'.$product->id)}}">
                                    <div class="card shadow-lg">
                                        <img class="card-img-top img-fluid" src="{{ asset('uploads/thumbnail/'.$product->gallery) }}" alt="Card image cap" style="height:300px; object-fit:cover;">
                                        <div class="card-body">
                                            <h4 class="card-title mb-2">{{ $product->title }}</h4>
                                            <a href="#" class="text-primary d-block">Tommy Hilfiger</a>
                                            
                                            <div class="d-flex justify-content-between">
                                                <h5 class="" class="mb-0">₹{{ $product->price }}</h5>
                                                <div class="text-end" >
                                                    <a href="{{ route('cart') }}" class="btn btn-sm btn-outline-success waves-effect waves-light"><i class="bx bx-shopping-bag fs-22"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                      
                    
                            

                        </div>
                        {{-- <div class="row">
                            <div class="col-lg-3 col-md-6 ">
                                <a href="{{ route('product.details') }}">
                                    <div class="card shadow-lg">
                                        <img class="card-img-top img-fluid" src="{{ asset('assets/images/products/f2.webp') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title mb-2">Laptop</h4>
                                            <a href="#" class="text-primary d-block">Tommy Hilfiger</a>
                                            
                                            <div class="d-flex justify-content-between">
                                                <h5 class="" class="mb-0">$120.40</h5>
                                                <div class="text-end" >
                                                    <a href="{{ route('cart') }}" class="btn btn-sm btn-outline-success waves-effect waves-light"><i class="bx bx-shopping-bag fs-22"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ route('product.details') }}">
                                    <div class="card shadow-lg">
                                        <img class="card-img-top img-fluid" src="{{ asset('assets/images/products/f3.webp') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title mb-2">Laptop</h4>
                                            <a href="#" class="text-primary d-block">Tommy Hilfiger</a>
                                            
                                            <div class="d-flex justify-content-between">
                                                <h5 class="" class="mb-0">$120.40</h5>
                                                <div class="text-end" >
                                                    <a href="{{ route('cart') }}" class="btn btn-sm btn-outline-success waves-effect waves-light"><i class="bx bx-shopping-bag fs-22"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ route('product.details') }}">
                                    <div class="card shadow-lg">
                                        <img class="card-img-top img-fluid" src="{{ asset('assets/images/products/f4.webp') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title mb-2">Laptop</h4>
                                            <a href="#" class="text-primary d-block">Tommy Hilfiger</a>
                                        
                                            <div class="d-flex justify-content-between">
                                                <h5 class="" class="mb-0">$120.40</h5>
                                                <div class="text-end" >
                                                    <a href="{{ route('cart') }}" class="btn btn-sm btn-outline-success waves-effect waves-light"><i class="bx bx-shopping-bag fs-22"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ route('product.details') }}">
                                    <div class="card shadow-lg">
                                        <img class="card-img-top img-fluid" src="{{ asset('assets/images/products/f5.webp') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title mb-2">Laptop</h4>
                                            <a href="#" class="text-primary d-block">Tommy Hilfiger</a>
                                    
                                            <div class="d-flex justify-content-between">
                                                <h5 class="" class="mb-0">$120.40</h5>
                                                <div class="text-end" >
                                                    <a href="{{ route('cart') }}" class="btn btn-sm btn-outline-success waves-effect waves-light"><i class="bx bx-shopping-bag fs-22"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    
                            

                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 ">
                                <a href="{{ route('product.details') }}">
                                    <div class="card shadow-lg">
                                        <img class="card-img-top img-fluid" src="{{ asset('assets/images/products/f2.webp') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title mb-2">Laptop</h4>
                                            <a href="#" class="text-primary d-block">Tommy Hilfiger</a>
                                            
                                            <div class="d-flex justify-content-between">
                                                <h5 class="" class="mb-0">$120.40</h5>
                                                <div class="text-end" >
                                                    <a href="{{ route('cart') }}" class="btn btn-sm btn-outline-success waves-effect waves-light"><i class="bx bx-shopping-bag fs-22"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ route('product.details') }}">
                                    <div class="card shadow-lg">
                                        <img class="card-img-top img-fluid" src="{{ asset('assets/images/products/f3.webp') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title mb-2">Laptop</h4>
                                            <a href="#" class="text-primary d-block">Tommy Hilfiger</a>
                                            
                                            <div class="d-flex justify-content-between">
                                                <h5 class="" class="mb-0">$120.40</h5>
                                                <div class="text-end" >
                                                    <a href="{{ route('cart') }}" class="btn btn-sm btn-outline-success waves-effect waves-light"><i class="bx bx-shopping-bag fs-22"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ route('product.details') }}">
                                    <div class="card shadow-lg">
                                        <img class="card-img-top img-fluid" src="{{ asset('assets/images/products/f4.webp') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title mb-2">Laptop</h4>
                                            <a href="#" class="text-primary d-block">Tommy Hilfiger</a>
                                        
                                            <div class="d-flex justify-content-between">
                                                <h5 class="" class="mb-0">$120.40</h5>
                                                <div class="text-end" >
                                                    <a href="{{ route('cart') }}" class="btn btn-sm btn-outline-success waves-effect waves-light"><i class="bx bx-shopping-bag fs-22"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ route('product.details') }}">
                                    <div class="card shadow-lg">
                                        <img class="card-img-top img-fluid" src="{{ asset('assets/images/products/f5.webp') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title mb-2">Laptop</h4>
                                            <a href="#" class="text-primary d-block">Tommy Hilfiger</a>
                                    
                                            <div class="d-flex justify-content-between">
                                                <h5 class="" class="mb-0">$120.40</h5>
                                                <div class="text-end" >
                                                    <a href="{{ route('cart') }}" class="btn btn-sm btn-outline-success waves-effect waves-light"><i class="bx bx-shopping-bag fs-22"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    
                            

                        </div> --}}
                    </div>
                    <!-- end container -->
                </section>
                <!-- end blog -->
   
            </div>
        </div>
    </div>



@endsection

@push('scripts')
            <!--Swiper slider js-->
            <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
            <!-- ecommerce product details init -->
            <script src="{{ asset('assets/js/pages/ecommerce-product-details.init.js') }}"></script>         
@endpush