@extends("admin.index")
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kullanıcı Listesi</h1>


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

                            <th>id</th>
                            <th>photo</th>
                            <th>name</th>
                            <th>phone</th>
                            <th>email</th>
                            <th>address</th>
                            <th>roles</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
              
                            <th>id</th>
                            <th>photo</th>
                            <th>name</th>
                            <th>phone</th>
                            <th>email</th>
                            <th>address</th>
                            <th>roles</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($datalist as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            @if($data->profile_photo_path)
                            <td><img height="80" width="70" src="{{Storage::url($data->profile_photo_path)}}" alt=""> </td>
                            @else
                            <td>Profil fotoğrafı yok</td>
                              @endif
                            <td><a href="{{route('show_user',['id'=>$data->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')">{{$data->name}}</a></td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->address}}</td>
                            <td>@foreach($data->roles as $role)
                                <span>{{$role->name}}</span> 
                            @endforeach
                            <a href="{{route('admin_user_roles',['id'=>$data->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')">
                                <i class="nav-icon fas fa-plus-circle">
                                </i></a>
                            </td>
                            <td><a href="{{route('edit_user',['id'=>$data->id])}}"><i class="far fa-edit"></i></a></td>
                            <td><a href="{{route('delete_user',['id'=>$data->id])}}" onclick="return confirm('Delete are you sure')"><i class="far fa-trash-alt"></i></a> </td>
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