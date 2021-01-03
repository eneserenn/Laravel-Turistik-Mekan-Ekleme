<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('admin')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin')}}/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="{{asset('admin')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-2">
    <h1>{{$place->title}}</h1>
  
    <form method="post" action="{{route('adminimagescreate')}}" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="place_id" value="{{$id}}">
        <div class="form-group">
            <label for="exampleInputPassword1">Title</label>
            <input type="text" class="form-control" placeholder="Title" name="title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">image</label>
            <input type="file" class="form-control" name="image">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<div class="card shadow mb-4 mt-2">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>place_id</th>
                        <th>title</th>
                        <th>image</th>
                       
                        <th>sil</th>
                       
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>place_id</th>
                        <th>title</th>
                        <th>image</th>
                       
                        <th>sil</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($images as $image)
                    <tr>
                        <td>{{$image->place_id}}</td>
                        <td>{{$image->title}}</td>
                        
                     
                        <td><img style="width:50px" src="{{asset('storage')}}/{{$image->image}}" alt=""></td>
                       
                       
                    
                        <td><a href="{{route('adminimagesdestroy',['id'=>$image->id])}}" onclick="return confirm('Delete are you sure')"><i class="far fa-trash-alt"></i></a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
</div>
<script src="{{asset('admin')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('admin')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('admin')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('admin')}}/js/sb-admin-2.min.js"></script>
<script src="{{asset('admin')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/js/demo/datatables-demo.js"></script>
</body>
</html>
