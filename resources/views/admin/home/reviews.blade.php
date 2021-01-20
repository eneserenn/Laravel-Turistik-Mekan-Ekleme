@extends("admin.index")
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Yorumlar Listesi</h1>



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
                            <th>user</th>
                            <th>place</th>
                            <th>subject</th>
                            <th>review</th>
                            <th>IP</th>
                            <th>like</th>
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>user</th>
                            <th>place</th>
                            <th>subject</th>
                            <th>review</th>
                            <th>IP</th>
                            <th>like</th>
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($reviews as $review)
                        <tr>
                            <td><a href="{{route('show_user',['id'=>$review->user->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')">{{$review->user->name}}</a></td>
                            <td>{{$review->place->title}}</td>
                            <td>{{$review->subject}}</td>
                            <td>{{$review->review}}</td>
                            <td>{{$review->IP}}</td>
                            <td>{{$review->like}}</td>
                            <td>{{$review->status}}</td>
                            <td><a href="{{route('reviewedit',['id'=>$review->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100 height=700')"><i class="far fa-images"></i></a></td>
                            <td><a href="{{route('deletecommentuser',['id'=>$review->id])}}" onclick="return confirm('Delete are you sure')"><i class="far fa-trash-alt"></i></a> </td>
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