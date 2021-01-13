<ul class="submenu dropdown-menu ">
@foreach($children as $subcategory)


    @if(count($subcategory->children))
    <li><a href="{{route('categoryelems',['id'=>$subcategory->id,'slug'=>$subcategory->slug])}}" class="dropdown-item" href=""> {{$subcategory->title}} </a>

        @include('home.categorytree',['children'=>$subcategory->children])


        @else
    <li><a href="{{route('categoryelems',['id'=>$subcategory->id,'slug'=>$subcategory->slug])}}" class="dropdown-item" href=""> {{$subcategory->title}}</a></li>
    @endif

    </li>


@endforeach
</ul>