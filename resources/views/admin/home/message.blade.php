@extends("admin.index")
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Mesaj Listesi</h1>
    {{-- <p class="mb-4">Kategori Eklemek için tıklayın. <a class="ml-5 btn btn-primary" 
            href="{{route('admincategoryadd')}}">Kategori Ekle</a></p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@include('home.messages')</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>isim</th>
                            <th>email</th>
                            <th>telefon</th>
                            <th>konu</th>
                            <th>mesaj</th>
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>isim</th>
                            <th>email</th>
                            <th>telefon</th>
                            <th>konu</th>
                            <th>mesaj</th>
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($messages as $message)
                        <tr>
                            <td>{{$message->name}}</td>
                            <td>{{$message->email}}</td>
                            <td>{{$message->phone}}</td>
                            <td>{{$message->subject}}</td>
                            <td>{{$message->message}}</td>
                            <td>{{$message->status}}</td>
                            <td><a href="{{route('adminmessageedit',['id'=>$message->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100 height=700')"><i class="far fa-images"></i></a></td>
                            <td><a href="{{route('adminmessagedelete',['id'=>$message->id])}}"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
