@extends("admin.index")
@section('headincludes')
<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
@endsection
@section('footerincludes')
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection('footerincludes')
@section('content')
<div style="width:50%">
    <h1>FaQ Ekle</h1>
    <form method="post" action="{{route('faqupdate',['id'=>$faq->id])}}" enctype="multipart/form-data">
        @csrf
        {{-- <div class="form-group">
            <label for="exampleFormControlSelect1">Parent</label>
            <select class="form-control" name="parent_id">
                <option value="0">Main Category</option>
                  @foreach($parents as $parent)
                <option value="{{$parent->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($parent,$parent->title)}}</option>
                @endforeach
            </select>
        </div> --}}
        <div class="form-group">
            <label for="exampleInputPassword1">position</label>
            <input type="text" class="form-control" placeholder="position" name="position" value="{{$faq->position}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">question</label>
            <input type="text" class="form-control" placeholder="question" name="question" value="{{$faq->question}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">answer</label>
            <textarea id="editor" type="text" class="form-control" placeholder="answer" name="answer">{{$faq->answer}}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">status</label>
            <select class="form-control" name="status">
                <option value="true">true</option>
                <option value="false">false</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection