@extends('admin.inc.layout')
@section('content')
<div class="">

    <div class="page-content">
        <div class="container-fluid">

            <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                <div class="file-manager-sidebar">
                    <div class="p-4 d-flex flex-column h-100">
                        <div class="mb-3">
                            <button class="btn btn-info w-100" data-bs-target="#createProjectModal" data-bs-toggle="modal"><i class="ri-add-line align-bottom"></i> Add Categories </button>
                        </div>

                        <div class="px-4 mx-n4" data-simplebar style="height: calc(100vh -100%); overflow-y:scroll">
                            <ul class="to-do-menu list-unstyled" id="projectlist-data">
                                <x-categories :categories='$datas ' />                              
                            </ul>
                        </div>
                        {{-- <div class="mt-auto text-center">
                            <img src="assets/images/task.png" alt="Task" class="img-fluid" />
                        </div> --}}
                    </div>
                </div><!--end side content-->
                <div class="file-manager-content w-100 p-4 pb-0">
                   

                    <div class="todo-content position-relative px-4 mx-n4" id="todo-content">
                       
                        <div class="todo-task" id="todo-task">
                            <div class="table-responsive">
                                <table class="table align-middle position-relative table-nowrap">
                                    <thead class="table-active">
                                        <tr>
                                            <th scope="col"> Name</th>
                                          
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody id="task-list">
                                        @foreach ($datas as $category)
                                        <tr>
                                            
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('uploads/category/'.$category->thumbnail) }}" alt="" class="avatar-xs rounded-circle image_src object-fit-cover">
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 name">{{ $category->name }}</div>
                                                </div>
                                            </td>
                                         
                                          
                                            <td>
                                                <ul class="list-inline hstack gap-2 mb-0">
                                                   
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="javascript:void(0);"><i class="ri-eye-fill align-bottom text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a class="edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Delete">
                                                        <a class="remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                            <i class="ri-delete-bin-fill align-bottom text-muted"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="py-4 mt-4 text-center" id="noresult" style="display: none;">
                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px"></lord-icon>
                            <h5 class="mt-4">Sorry! No Result Found</h5>
                        </div>
                    </div>
                    
                </div>
                
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © .
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>



    <!-- removeFileItemModal -->
    <div id="removeTaskItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-removetodomodal"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this task ?</p>
                        </div>
                    </div>
                    {{-- <form action="{{ route('categories.delete') }}" method="POST">
                        @csrf
                        <input type="hidden" class="form-control" id="catId" name='parent_id' value="" placeholder="Enter project name">
                    
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn w-sm btn-danger" id="remove-todoitem">Yes, Delete It!</button>
                    </div>
                </form> --}}
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--end delete modal -->
       <!-- Start Create Project Modal -->
       <div class="modal fade zoomIn" id="createProjectModal" tabindex="-1" aria-labelledby="createProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-3 bg-success-subtle">
                    <h5 class="modal-title" id="createProjectModalLabel">Create Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" id="addProjectBtn-close" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add.category') }}" method="POST" enctype="multipart/form-data" class="needs-validation createProject-form" novalidate>
                        @csrf
                        <div class="mb-4">
                            <label for="projectname-input" class="form-label"> Category Name</label>
                            <input type="text" class="form-control" id="categoryName"name='name' autocomplete="off" placeholder="Enter project name" required>
                            <div class="invalid-feedback">Please enter a project name</div>
                            <input type="hidden" class="form-control" id="parentId" name='parent_id' value="" placeholder="Enter project name">
                        </div>
                        <div class="mb-2 mt-2">
                            <input type="file" class="form-control" name="product-image" id="" >
                        </div>
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-ghost-success" data-bs-dismiss="modal"><i class="ri-close-line align-bottom"></i> Close</button>
                            <button type="submit" class="btn btn-primary">Add </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end modal-dialog -->
    </div>
    <!-- End Create Project Modal -->
  
  
@endsection

@push('scripts')
    {{-- <script src="assets/libs/list.js/list.min.js"></script>
    <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script> --}}

    <!-- Sweet Alerts js -->
    {{-- <script src="{{ assets/libs/sweetalert2/sweetalert2.min.js }}"></script> --}}
    {{-- <script src="assets/js/pages/api-key.init.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        $("body").on('click', '#addNew', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $("#parentId").val(id)           
           
      
        });
        $("body").on('click', '#delete', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            // console.log(id);
           $("#cat_id").val(id)

          
      
        });


    </script>
@endpush
