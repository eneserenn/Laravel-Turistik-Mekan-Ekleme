@foreach($children as $subcategory)
<ul class="submenu dropdown-menu">
    @if(count($subcategory->children))
    <li><a class="dropdown-item" href=""> {{$subcategory->title}} </a>

        @include('home.categorytree',['children'=>$subcategory->children]) 
    

    @else
    <li><a class="dropdown-item" href=""> {{$subcategory->title}} </a></li>
    @endif

</li>
</ul>
@endforeach