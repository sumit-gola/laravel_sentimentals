@extends('frontend.layout.layout')
@push('styles')
{{-- <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" /> --}}


@endpush
@section('content')    
    <!-- start hero section -->    
    <div class=" " >
        <div class=" ">
            <div class="mt-5">               
                <div class="col-lg-12 pt-5">
                    <!-- With Captions -->
                    <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/banners/Ramadan_banner_english-02_d1ec34c7-72a4-4f10-902f-0650582ae4c7_1944x.webp') }}" alt="" class="d-block img-fluid mx-auto">
                                <div class="carousel-caption d-none d-md-block text-white-50">
                                    <h5 class="text-white">Sunrise above a beach</h5>
                                    <p>You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to combine font styles that are different but complementary.</p>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/banners/Mothers_day_banner-01_1944x.webp') }}" alt="" class="d-block img-fluid mx-auto">
                                <div class="carousel-caption d-none d-md-block text-white-50">
                                    <h5 class="text-white">Working from home little spot</h5>
                                    <p>Consistency piques people’s interest is that it has become more and more popular over the years, which is excellent.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/banners/Chinese_Banner-01_1944x.webp') }}" alt="" class="d-block img-fluid mx-auto">
                                <div class="carousel-caption d-none d-md-block text-white-50">
                                    <h5 class="text-white">Dramatic clouds at the Golden Gate Bridge</h5>
                                    <p>Increase or decrease the letter spacing depending on the situation and try, try again until it looks right, and each letter.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!--end col-->             
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end hero section -->
 
    <div class="col-lg-12">
        <div class="bg-white">            
            <div class="container-fluid bg-white  py-3">
                <div class="row mx-auto my-auto justify-content-center">
                    <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <h2 class="font-weight-light  mt-5 mb-5">ALL YOUR FAVOURITES</h2>
                            @php
                                $categories = App\Models\Categories::whereNull('parent_id')->get();
                            @endphp
                            @foreach ($categories as $category)  
                            <div class="carousel-item ci active bg-white">
                                <div class="col-lg-2 text-center col-md-6 col-sm-12">
                                    <a href="{{ url('all-product/'.$category->id) }}">
                                        <img class="rounded-circle" src="{{ asset('uploads/category/'.$category->thumbnail) }}" alt="Categories image" class="d-block img-fluid mx-auto" style="width: 150px; height:150px">
                                        <h4>{{ $category->name }}</h4> 
                                    </a>                  
                                </div>
                               
                            </div>
                            @endforeach
                            
                        </div>
                        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
   
  
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
                <div class="col-lg-3 col-md-6 ">
                    <a href="{{ route('product.details') }}">
                        <div class="card shadow-lg">
                            <img class="card-img-top img-fluid" src="assets/images/products/f2.webp" alt="Card image cap">
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
                            <img class="card-img-top img-fluid" src="assets/images/products/f3.webp" alt="Card image cap">
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
                            <img class="card-img-top img-fluid" src="assets/images/products/f4.webp" alt="Card image cap">
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
                            <img class="card-img-top img-fluid" src="assets/images/products/f5.webp" alt="Card image cap">
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
        </div>
        <!-- end container -->
    </section>
    <!-- end blog -->
     <!-- start blog -->
        @php
            $Products = App\Models\Produts::where('visibility', '=', 'NEW ARRIVALS')->get();
        @endphp
     <section class="section" >
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">New Arrivals <span
                                class="text-primary">Products</span></h1>
                        
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                @foreach ($Products as $product)
                <div class="col-lg-3 col-md-6">
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
        </div>
        <!-- end container -->
    </section>
    <!-- end blog -->
  <!-- start features -->
  <section class="section bg-white">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between justify-content-center gy-4 ">
            <div class="col-lg-5 col-sm-7 ">
                <div class="about-img-section mb-5 mb-lg-0 text-center">

                    <img src="assets/images/small/g1.webp" alt="" class="img-fluid mx-auto rounded-3" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-muted">
                    <h1 class="mb-3 lh-base"><span class="text-primary">GIFT BUNDLES</span></h1>
                    <p class="ff-secondary mb-2">Whether you are looking for a gift bundles for your best friend with a sweet tooth, a cousin who is a Cabernet connoisseur, or co-worker celebrating that milestone birthday, there are gift baskets for an array of interests and celebrations!</p>
                    <div>
                        <a href="#!" class="btn btn-primary">Find Your Jobs <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end features -->


    <!-- start find jobs -->
    <section class=" ">
        <div class="container-fluid">
            <div class="row align-items-center ">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="text-muted mt-5 mt-lg-0">
                        <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Get <span
                                class="text-primary ">GIFT BUNDLES</span></h1>
                        <p class="ff-secondary mb-2">Whether you are looking for a gift bundles for your best friend with a sweet tooth, a cousin who is a Cabernet connoisseur, or co-worker celebrating that milestone birthday, there are gift baskets for an array of interests and celebrations!</p>

                        <div class="mt-4">
                            <a href="index.html" class="btn btn-primary">View More Gifts <i
                                    class="ri-arrow-right-line align-middle ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4 col-sm-7 col-10 mx-auto mt-5 order-1 order-lg-2">
                    <div  class="text-muted mt-5 mt-lg-0">
                        <img src="assets/images/small/g2.webp" alt="" class="img-fluid  rounded-3" />

                        
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end find jobs -->
    <div class="pt-5 mt-5 bg-white">
        <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="text-center mt-5">
                            <h5 class="fs-20">Trusted <span class="text-primary text-decoration-underline">by</span> the world's best</h5>

                            <!-- Swiper -->
                            <div class="swiper trusted-client-slider mt-sm-5 mt-4 mb-sm-5 mb-4" dir="ltr">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="assets/images/clients/amazon.svg" alt="client-img" class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="assets/images/clients/walmart.svg" alt="client-img" class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="assets/images/clients/lenovo.svg" alt="client-img" class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="assets/images/clients/paypal.svg" alt="client-img" class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="assets/images/clients/shopify.svg" alt="client-img" class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="assets/images/clients/verizon.svg" alt="client-img" class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end row -->
        </div>
            <!-- end container -->
    </div> 

    <!-- start blog -->
    <section class="" id="blog">
        <div class="container-fluid pb-0">
            <div class="row ">
                <div class="col-lg-8">
                    <div class=" mt-5">
                        <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Our  <span
                                class="text-primary">Gifts</span></h1>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/images/small/g1.webp" alt="" class="img-fluid rounded" />
                        </div>
                        <div class="card-body">
                           
                            <a href="javascript:void(0);">
                                <h3 class='text-center'>BIRTHDAY GIFTS</h3>
                            </a>

                            <div>
                                <a href="#" class="btn btn-outline-success waves-effect waves-light w-100">GIFT NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/images/small/g2.webp" alt="" class="img-fluid rounded" />
                        </div>
                        <div class="card-body">
                            
                            <a href="javascript:void(0);">
                                <h3 class='text-center'>CONGRATULATE</h3>
                            </a>
                            <div>
                                <a href="#" class="btn btn-outline-success waves-effect waves-light w-100">GIFT NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/images/small/g3.webp" alt="" class="img-fluid rounded" />
                        </div>
                        <div class="card-body">
                           
                            <a href="javascript:void(0);">
                                <h3 class='text-center'>WEDDING GIFTS</h3>
                            </a>
                            

                            <div>
                                <a href="#" class="btn btn-outline-success waves-effect waves-light w-100">GIFT NOW</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end blog -->
       <!-- start review -->
       <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Blogs</h4>
            </div><!-- end card header -->
            <div class="card-body">
                {{-- <p class="text-muted">Use <code>responsive-swiper</code> class to set a responsive swiper.</p> --}}

                <!-- Swiper -->
                <div class="swiper responsive-swiper rounded gallery-light pb-4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="width: 150px !importent">
                            <div class="gallery-box card">
                                <div class="gallery-container">
                                    <a class="image-popup" href="assets/images/small/img-1.jpg" title="">
                                        <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-1.jpg" alt="" />
                                        <div class="gallery-overlay">
                                            <h5 class="overlay-caption">Glasses and laptop from above</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="box-content">
                                    <div class="d-flex align-items-center mt-1">
                                        <div class="flex-grow-1 text-muted">by <a href="#" class="text-body text-truncate">Ron Mackie</a></div>
                                        <div class="flex-shrink-0">
                                            <div class="d-flex gap-3">
                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                </button>
                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-box card">
                                <div class="gallery-container">
                                    <a class="image-popup" href="assets/images/small/img-2.jpg" title="">
                                        <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-2.jpg" alt="" />
                                        <div class="gallery-overlay">
                                            <h5 class="overlay-caption">Working at a coffee shop</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="box-content">
                                    <div class="d-flex align-items-center mt-1">
                                        <div class="flex-grow-1 text-muted">by <a href="#" class="text-body text-truncate">Nancy Martino</a></div>
                                        <div class="flex-shrink-0">
                                            <div class="d-flex gap-3">
                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.2K
                                                </button>
                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.1K
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-box card mb-0">
                                <div class="gallery-container">
                                    <a class="image-popup" href="assets/images/small/img-10.jpg" title="">
                                        <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-10.jpg" alt="">
                                        <div class="gallery-overlay">
                                            <h5 class="overlay-caption">Fun day at the Hill Station</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="box-content">
                                    <div class="d-flex align-items-center mt-1">
                                        <div class="flex-grow-1 text-muted">by <a href="#" class="text-body text-truncate">Henry Baird</a></div>
                                        <div class="flex-shrink-0">
                                            <div class="d-flex gap-3">
                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 632
                                                </button>
                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 95
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-box card">
                                <div class="gallery-container">
                                    <a class="image-popup" href="assets/images/small/img-4.jpg" title="">
                                        <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-4.jpg" alt="" />
                                        <div class="gallery-overlay">
                                            <h5 class="overlay-caption">Drawing a sketch</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="box-content">
                                    <div class="d-flex align-items-center mt-1">
                                        <div class="flex-grow-1 text-muted">by <a href="#" class="text-body text-truncate">Jason McQuaid</a></div>
                                        <div class="flex-shrink-0">
                                            <div class="d-flex gap-3">
                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 825
                                                </button>
                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 101
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-box card">
                                <div class="gallery-container">
                                    <a class="image-popup" href="assets/images/small/img-6.jpg" title="">
                                        <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-6.jpg" alt="" />
                                        <div class="gallery-overlay">
                                            <h5 class="overlay-caption">Project discussion with team</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="box-content">
                                    <div class="d-flex align-items-center mt-1">
                                        <div class="flex-grow-1 text-muted">by <a href="#" class="text-body text-truncate">Erica Kernan</a></div>
                                        <div class="flex-shrink-0">
                                            <div class="d-flex gap-3">
                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.4K
                                                </button>
                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3k
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-dark"></div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end review -->

   
@endsection

@push('scripts')
<script>
let items = document.querySelectorAll('.carousel .ci')

items.forEach((el) => {
    const minPerSlide = 6
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})

</script>
<script src="{{ asset('assets/libs/prismjs/prism.js') }}"></script>

<!--Swiper slider js-->
<script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/profile.init.js') }}"></script>

<!-- swiper.init js -->
<script src="{{ asset('assets/js/pages/swiper.init.js') }}"></script>
<script src="{{ asset('assets/js/pages/landing.init.js') }}"></script>



@endpush