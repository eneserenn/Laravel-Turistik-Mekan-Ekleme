@extends("admin.index")
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Mekan Listesi</h1>
    <p class="mb-4">Kategori Eklemek için tıklayın. <a class="ml-5 btn btn-primary" 
            href="{{route('adminplaceadd')}}">Mekan Ekle</a></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>category</th>
                            <th>title</th>
                            <th>ücret</th>
                            <th>description</th>
                            <th>image</th>
                            <th>ülke</th>
                            <th>status</th>
                            <th>gallery</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>parent</th>
                            <th>title</th>
                            <th>keywords</th>
                            <th>description</th>
                            <th>image</th>
                            <th>slug</th>
                            <th>status</th>
                            <th>gallery</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($places as $place)
                        <tr>
                            <td>{{$place->category_id}}</td>
                            <td>{{$place->title}}</td>
                            <td>{{$place->entry_payment}}$</td>
                            <td>{{$place->description}}</td>
                            <td><img style="width:50px" src="{{asset('storage')}}/{{$place->image}}" alt=""></td>
                            <td>{{$place->country}}</td>
                            <td>{{$place->status}}</td>
                            <td><a href="{{route('adminimageslist',['id'=>$place->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100 height=700')"><i class="far fa-images"></i></a></td>
                            <td><a href="{{route('adminplaceedit',['id'=>$place->id])}}"><i class="far fa-edit"></i></a></td>
                            <td><a href="{{route('adminplacedestroy',['id'=>$place->id])}}" onclick="return confirm('Delete are you sure')"><i class="far fa-trash-alt"></i></a> </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


@endsection
@section('headincludes')
<link href="{{asset('admin')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('footerincludes')
    <!-- Page level plugins -->
    <script src="{{asset('admin')}}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('admin')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admin')}}/js/demo/datatables-demo.js"></script>

@endsection