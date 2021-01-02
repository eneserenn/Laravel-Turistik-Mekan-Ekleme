@extends("admin.index")
@section('content')

<h1>Mekan Ekle</h1>
<div>
    <form method="post" action="{{route('adminplaceupdate',['id'=>$editplace->id])}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="exampleFormControlSelect1">Mekanın Kategorisi</label>
            <select class="form-control" name="category_id">
                <option value="0">Main Category</option>
                @foreach($categories as $category)
                <option @if ($category->id == $editplace->category_id)
                    selected
                    @endif value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Title</label>
            <input type="text" class="form-control" placeholder="Title" name="title" value="{{$editplace->title}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">keywords</label>
            <input type="text" class="form-control" placeholder="keywords" name="keywords"
                value="{{$editplace->keywords}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">description</label>
            <input type="text" class="form-control" placeholder="description" name="description"
                value="{{$editplace->description}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">image</label>
            <input type="file" class="form-control" name="image" value="{{$editplace->image}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">slug</label>
            <input type="text" class="form-control" placeholder="slug" name="slug" value="{{$editplace->slug}}">
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" placeholder="user" name="user_id" value="{{Auth::user()->id}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">detail</label>
            <textarea id="summernote" class="form-control" placeholder="detail" name="detail">
                {{$editplace->detail}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">puan</label>
            <input type="text" class="form-control" placeholder="point" name="point" value="{{$editplace->point}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Ülke</label>
            <input type="text" class="form-control" placeholder="country" name="country"
                value="{{$editplace->country}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Ücret</label>
            <input type="text" class="form-control" placeholder="payment" name="entry_payment"
                value="{{$editplace->entry_payment}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select class="form-control" name="status">
                @if($editplace->status == "true")
                <option selected value="true">true</option>
                <option value="false">false</option>
                @else
                <option value="true">true</option>
                <option selected value="false">false</option>
                @endif
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
@section('headincludes')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection

@section('footerincludes')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    
 $(document).ready(function() {
        $('#summernote').summernote({height: 200});
    });
</script>
@endsection