@extends("admin.index")
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kategori Listesi</h1>
    <p class="mb-4">Kategori Eklemek için tıklayın. <a class="ml-5 btn btn-primary" 
            href="{{route('admincategoryadd')}}">Kategori Ekle</a></p>

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
                            <th>parent</th>
                            <th>title</th>
                            <th>keywords</th>
                            <th>description</th>
                            <th>image</th>
                            <th>slug</th>
                            <th>status</th>
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
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->parent_id}}</td>
                            <td>{{$category->title}}</td>
                            <td>{{$category->keywords}}</td>
                            <td>{{$category->description}}</td>
                            <td><img style="width:50px" src="{{asset("storage")}}/{{$category->image}}" alt=""></td>
                            <td>{{$category->slug}}</td>
                            <td>{{$category->status}}</td>
                            <td><a href="{{route('admincategoryedit',['id'=>$category->id])}}"><i class="far fa-edit"></i></a></td>
                            <td><a href="{{route('admincategorydestroy',['id'=>$category->id])}}" onclick="return confirm('Delete are you sure')"><i class="far fa-trash-alt"></i></a> </td>
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