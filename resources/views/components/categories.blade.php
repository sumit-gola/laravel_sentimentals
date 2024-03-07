
@foreach ($categories as $category )
<li >
    <a data-bs-toggle="collapse" href="#projectManagement{{ $category->id }}" class="nav-link d-flex ">
        <i class="ri-send-plane-2-fill me-3 align-middle fw-medium"></i> 
        <span class="mail-list-link">{{ $category->name }}</span> 
        <span class="badge align-middle bg-info ms-auto  ">{{ $total = count($category->childrenRecursive)>0 }}</span>      
             <i id="addNew" data-id="{{ $category->id }} "data-bs-target="#createProjectModal" data-bs-toggle="modal"  class="ms-auto bx bx-plus fs-16"></i> 
             <i  id="delete" data-id="{{ $category->id }}"data-bs-target="#removeTaskItemModal" data-bs-toggle="modal" class="ri-delete-bin-5-fill me-3 text-danger align-middle fw-medium"></i>
    
    </a>
    
    <div class="collapse" id="projectManagement{{ $category->id }}">
        <x-catagories-list :category="$category" />

    </div>
</li>

@endforeach