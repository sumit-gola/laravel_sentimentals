@extends('admin.inc.layout')
@section( 'content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Create Product</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                            <li class="breadcrumb-item active">Create Product</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <form  action="{{ route('add.products') }}" method="post" enctype="multipart/form-data" autocomplete="off" class="needs-validation" novalidate>
           @csrf 
           <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        @if($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger text-danger">{{ $error }}</div>

                            @endforeach
                        @endif
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="product-title-input">Product Title</label>                              
                                <input type="text" class="form-control" id="product-title-input" name="title" value="" placeholder="Enter product Name" required>
                                @error('title')
                                    <div class="pl-2 text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="product-title-input">Slug</label>
                                <input type="text" class="form-control" id="product-title-input" name="slug" value="" placeholder="Enter product Slug" required>
                                @error('slug')
                                    <div class="pl-2 text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="stocks-input">Stocks</label>
                                            <input type="number" class="form-control" id="stocks-input" name="stock" min="1"  placeholder="Stocks" required>
                                            @error('stock')
                                                <div class="pl-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="product-price-input">Price</label>
                                            <div class="input-group has-validation mb-3">
                                                <span class="input-group-text" id="product-price-addon">$</span>
                                                <input type="number" class="form-control" name="price" id="product-price-input" placeholder="Enter price" aria-label="Price" aria-describedby="product-price-addon" required>
                                                @error('price')
                                                    <div class="pl-2 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="product-discount-input">Discount</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="product-discount-addon">%</span>
                                                <input type="number" class="form-control" name="discount" id="product-discount-input" placeholder="Enter discount" aria-label="discount" aria-describedby="product-discount-addon">
                                                @error('discount')
                                                    <div class="pl-2 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="orders-input">Size</label>
                                            <input type="text" class="form-control" name="size" id="orders-input" placeholder="Orders" required>
                                            @error('size')
                                                    <div class="pl-2 text-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                            </div>
                           
                            <div>
                                <label>Product Description</label>
                                <textarea name="description" id="ckeditor-classic"  name="desc" cols="30" rows="10" class="form-control" required></textarea>
                            </div>
                            
                    
                        </div>
                    </div>
                    <!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Product Gallery</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <h5 class="fs-13 mb-1">Product Image</h5>
                                <p class="text-muted">Add Product main Image.</p>
                                <div class="text-center">
                                    <div class="position-relative d-inline-block">
                                        <div class="position-absolute top-100 start-100 translate-middle">
                                            <label for="product-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                        <i class="ri-image-fill"></i>
                                                    </div>
                                                </div>
                                            </label>
                                            <input class="form-control d-none" value="" id="product-image-input" type="file" name="product-image" >
                                        </div>
                                        <div class="avatar-lg">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="#" id="product-img" class="avatar-md h-auto" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
 
                            <input type="file" class="form-control dropzone" name="productImages[]" id="" multiple>
                     
                        </div>
                    </div>
                    <!-- end card -->

                    <!-- end card -->
                    <div class="text-end mb-3">
                        <button type="submit" class="btn btn-success w-sm">Submit</button>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Publish</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="choices-publish-status-input" class="form-label">Status</label>

                                <select class="form-select" name="status"  >
                                    <option value="" >Select</option>
                                    <option value="Published" >Published</option>
                                    <option value="Scheduled">Scheduled</option>
                                    <option value="Draft">Draft</option>
                                </select>
                            </div>

                            <div>
                                <label for="choices-publish-visibility-input" class="form-label">Visibility</label>
                                <select class="form-select" name="visibility" id="" >
                                    <option value="" selected>Select</option>
                                    <option value="NEW ARRIVALS">NEW ARRIVALS</option>
                                    <option value="RAMADAN KAREEM">RAMADAN KAREEM</option>
                                    <option value="MOTHER'S DAY - MARCH 10TH">MOTHER'S DAY - MARCH 10TH</option>
                                    <option value="FOOD & DESSERT PLATTERS">FOOD & DESSERT PLATTERS</option>
                                </select>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

               
                    <!-- end card -->

                    <!-- end card -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Product Categories</h5>
                        </div>
                        <div class="card-body">
                            <div class="hstack gap-3 align-items-start">
                                <div class="flex-grow-1">
                                    <input class="form-control" id="p_cat" placeholder="Enter tags" type="text" value="" required />
                                    <input  class="form-control" id="p_cat_id" placeholder="Enter tags" type="hidden" name="category" value="" />
                                </div>
                                
                            </div>
                            <ul class="to-do-menu list-unstyled mt-2" id="projectlist-data">
                                <x-product-categories :categories='$datas ' />                              
                            </ul>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Product Short Description</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-2">Add short description for product</p>
                            <textarea class="form-control" name="summary" placeholder="Must enter minimum of a 100 characters" rows="3"></textarea>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </form>

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection

@push('scripts')
<script src="{{ asset('assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

<!-- dropzone js -->
<script src="{{ asset('assets/libs/dropzone/dropzone-min.js') }}"></script>

<script src="{{ asset('assets/js/pages/ecommerce-product-create.init.js') }}"></script>
<script>
    // $(document).ready(function(){
    //   $("#addNew").click(function(){
    //     $("#addNew").toggle();
    //   });
    // $("#addNew").click(function () { 
    //         $("#addNew").toggleClass("bx-plus bx-check"); 
    //         var id = $(this).data('id');
    //         var name = $(this).data('name');
    //         console.log(id);
    //         console.log(name);
    //        $("#p_cat").val(name)
    //     }); 
    // });
    $("body").on('click', '#addNew', function(e) {
            e.preventDefault();
            $("#addNew").toggleClass("bx-plus bx-check");
            var id = $(this).data('id');
            var name = $(this).data('name');
            $("#p_cat").val(name)
            $("#p_cat_id").val(id)
            console.log(id);
            // $("#parentId").val(id)           
           
      
        });
    </script>

@endpush