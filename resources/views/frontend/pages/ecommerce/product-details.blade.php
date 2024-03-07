@extends('frontend.layout.layout')
@push('styles')
<link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

@endpush
@section( 'content')

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
       <!-- start page title -->
       <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                            <h4 class="mb-sm-0">Product Details</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Product Details</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row gx-lg-5">
                        <div class="col-xl-6 col-md-8 mx-auto">
                            <div class="product-img-slider sticky-side-div">
                                <div class="swiper product-thumbnail-slider p-2 rounded bg-light">
                                    <div class="swiper-wrapper">
                                        @foreach ($arr as $image)                                        
                                            <div class="swiper-slide">
                                                <img src="{{ asset('uploads/products/gallery/'. $image  ) }}" alt="" class="img-fluid " style="height:500px; width:100%; object-fit:cover;"/>
                                            </div>
                                        @endforeach
                                       
                                    </div>
                                    <div class="swiper-button-next material-shadow"></div>
                                    <div class="swiper-button-prev material-shadow"></div>
                                </div>
                                <!-- end swiper thumbnail slide -->
                                <div class="swiper product-nav-slider mt-2">
                                    <div class="swiper-wrapper">
                                        @foreach ($arr as $image)   
                                        <div class="swiper-slide">
                                            <div class="nav-slide-item">
                                                <img src="{{ asset('uploads/products/gallery/'. $image  ) }}" alt="" class="img-fluid " style="height:100px; width:100%; object-fit:cover;" />
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                                <!-- end swiper nav slide -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="mt-xl-0 mt-5">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                   
                                        <h4>{{ $products->title }}</h4>
                                        <div class="hstack gap-3 flex-wrap">
                                            <div><a href="#" class="text-primary d-block">Categories</a></div>
                                            <div class="vr"></div>
                                            <div class="text-muted">Seller : <span class="text-body fw-medium"></span></div>
                                            <div class="vr"></div>
                                            <div class="text-muted">Published : <span class="text-body fw-medium">26 Mar, 2021</span></div>
                                        </div>
                                    </div>
                                   
                                </div>

                                <div class="d-flex flex-wrap gap-2 align-items-center mt-3">
                                    <div class="text-muted fs-16">
                                        <span class="mdi mdi-star text-warning"></span>
                                        <span class="mdi mdi-star text-warning"></span>
                                        <span class="mdi mdi-star text-warning"></span>
                                        <span class="mdi mdi-star text-warning"></span>
                                        <span class="mdi mdi-star text-warning"></span>
                                    </div>
                                    <div class="text-muted">( 5.50k Customer Review )</div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="p-2 border border-dashed rounded">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm me-2">
                                                    <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                        <i class="ri-money-dollar-circle-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="text-muted mb-1">Price :</p>
                                                    <h5 class="mb-0">{{ $products->price }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                 
                                    <!-- end col -->
                                </div>
                                
                                <div class="mt-2 " >

                                    <a href="{{ route('cart') }}" class="btn btn-primary"><i class="bx bx-shopping-bag fs-22"></i> Add to Cart</a>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mt-4">
                                            <h5 class="fs-14">Sizes :{{ $products->size }}</h5>
                                         
                                        </div>
                                    </div>
                                    <!-- end col -->

                            
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="mt-4 text-muted">
                                    <h5 class="fs-14">Description :</h5>
                                    <p>{{ $products->description }}</p>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <h5 class="fs-14">Features :</h5>
                                            <ul class="list-unstyled">
                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i> Full Sleeve</li>
                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i> Cotton</li>
                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i> All Sizes available</li>
                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i> 4 Different Color</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <h5 class="fs-14">Services :</h5>
                                            <ul class="list-unstyled product-desc-list">
                                                <li class="py-1">10 Days Replacement</li>
                                                <li class="py-1">Cash on Delivery available</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                      
                                <!-- end card body -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
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