@extends("admin.index")
@section('content')

<h1>Mekan Ekle</h1>
<div>
    <form method="post" action="{{route('update_user')}}" enctype="multipart/form-data">
        @csrf
         <input type="hidden" name="user_id" value={{$user->id}}>

        <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" class="form-control" placeholder="name" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="text" class="form-control" placeholder="email" name="email"
                value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input type="text" class="form-control" placeholder="phone" name="phone"
                value="{{$user->phone}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" class="form-control" name="address" value="{{$user->address}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <img height="80" width="70" src="{{Storage::url($user->profile_photo_path)}}" alt="">
            <input type="file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
@section('headincludes')


@endsection

@section('footerincludes')

@endsection