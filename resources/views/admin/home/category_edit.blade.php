@extends("admin.index")
@section('content')
<div style="width:50%">
    <h1>{{$edit_category->title}} Kategorisini Güncelle</h1>
    <form method="post" action="{{route('admincategoryupdate',['id'=>$edit_category->id])}}">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Parent</label>
            <select class="form-control" name="parent_id">
                <option value="0">Main Category</option>
                  @foreach($parents as $parent)
                <option @if($parent->id == $edit_category->parent_id)selected @endif value="{{$parent->id}}">{{$parent->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Title</label>
            <input type="text" class="form-control" placeholder="Title" name="title" value="{{$edit_category->title}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">keywords</label>
            <input type="text" class="form-control" placeholder="keywords" name="keywords" value="{{$edit_category->keywords}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">description</label>
            <input type="text" class="form-control" placeholder="description" name="description" value="{{$edit_category->description}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">image</label>
            <input type="text" class="form-control" placeholder="image" name="image" value="{{$edit_category->image}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">slug</label>
            <input type="text" class="form-control" placeholder="slug" name="slug" value="{{$edit_category->slug}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Parent</label>
            <select class="form-control" name="status">
                @if($edit_category->status == 'true')
                <option selected value="true">true</option>
                <option value="false">false</option>
                @else
                <option selected value="true">true</option>
                <option value="false">false</option>
                @endif
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection