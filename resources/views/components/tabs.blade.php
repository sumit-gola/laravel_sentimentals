

@foreach ($categories as $category)
<li class="nav-item">
    
        <a class="nav-link menu-link" href="#sidebarMultilevel{{ $category->id }}" data-bs-toggle="collapse"  aria-expanded="false" aria-controls="sidebarMultilevel">
            <span data-key="t-multi-level">{{ $category->name }}</span>            
        </a>   
    @if (count($category->childrenRecursive)>0) 
    <div class="collapse menu-dropdown" id="sidebarMultilevel{{ $category->id }}">
        <x-tab-list :category="$category"/>
    </div>
    @endif
</li>

    
@endforeach