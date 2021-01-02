@extends("admin.index")
@section('content')
<div style="width:50%">
    <h1>Kategory Ekle</h1>
    <form method="post" action="{{route('admincategorycreate')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Parent</label>
            <select class="form-control" name="parent_id">
                <option value="0">Main Category</option>
                  @foreach($parents as $parent)
                <option value="{{$parent->id}}">{{$parent->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Title</label>
            <input type="text" class="form-control" placeholder="Title" name="title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">keywords</label>
            <input type="text" class="form-control" placeholder="keywords" name="keywords">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">description</label>
            <input type="text" class="form-control" placeholder="description" name="description">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">image</label>
            <input type="file" class="form-control"  name="image">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">slug</label>
            <input type="text" class="form-control" placeholder="slug" name="slug">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Parent</label>
            <select class="form-control" name="status">
                <option value="true">true</option>
                <option value="false">false</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection