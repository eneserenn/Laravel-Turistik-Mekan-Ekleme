@extends('admin.index')
@section('content')
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
            aria-controls="pills-home" aria-selected="true">Genel</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
            aria-controls="pills-profile" aria-selected="false">Smtp</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
            aria-controls="pills-contact" aria-selected="false">Sosyal Medya</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="pills-about-tab" data-toggle="pill" href="#pills-about" role="tab"
            aria-controls="pills-contact" aria-selected="false">About us</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="pills-iletisim-tab" data-toggle="pill" href="#pills-iletisim" role="tab"
            aria-controls="pills-contact" aria-selected="false">Contact</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="pills-reference-tab" data-toggle="pill" href="#pills-reference" role="tab"
            aria-controls="pills-contact" aria-selected="false">Reference</a>
    </li>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <form method="post" action="{{route('adminsettingupdate')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="type" value="general">
            <div class="form-group">
                <label for="exampleInputPassword1">Setting title</label>
                <input type="text" class="form-control" placeholder="Title" name="title" value="{{$data->title}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Keywords</label>
                <input type="text" class="form-control" placeholder="Title" name="keywords" value="{{$data->keywords}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">description</label>
                <input type="text" class="form-control" placeholder="description" name="description"
                    value="{{$data->description}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Company</label>
                <input type="text" class="form-control" placeholder="company" name="company" value="{{$data->company}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" class="form-control" placeholder="address" name="address" value="{{$data->address}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="text" class="form-control" placeholder="email" name="email" value="{{$data->email}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">fax</label>
                <input type="text" class="form-control" placeholder="fax" name="fax" value="{{$data->fax}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">phone</label>
                <input type="text" class="form-control" placeholder="phone" name="phone" value="{{$data->phone}}">
            </div>
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>

    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <form method="post" action="{{route('adminsettingupdate')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="type" value="smtp">
            <div class="form-group">
                <label for="exampleInputPassword1">smtpserver</label>
                <input type="text" class="form-control" placeholder="smtpserver" name="smtpserver"
                    value="{{$data->smtpserver}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">smtpsemail</label>
                <input type="text" class="form-control" placeholder="smtpsemail" name="smtpemail"
                    value="{{$data->smtpsemail}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">smtppassword</label>
                <input type="text" class="form-control" placeholder="smtppassword" name="smtppassword"
                    value="{{$data->smtppassword}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">setport</label>
                <input type="text" class="form-control" placeholder="setport" name="setport" value="{{$data->setport}}">
            </div>
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="form-group">
            <form method="post" action="{{route('adminsettingupdate')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="type" value="social">
                <label for="exampleInputPassword1">facebook</label>
                <input type="text" class="form-control" placeholder="facebook" name="facebook"
                    value="{{$data->facebook}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">instagram</label>
            <input type="text" class="form-control" placeholder="instagram" name="instagram"
                value="{{$data->instagram}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">twitter</label>
            <input type="text" class="form-control" placeholder="twitter" name="twitter"
                value="{{$data->instagram}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">youtube</label>
            <input type="text" class="form-control" placeholder="youtube" name="youtube" value="{{$data->youtube}}">
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>
    <div class="tab-pane fade" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
        <form method="post" action="{{route('adminsettingupdate')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="type" value="aboutus">
            <div class="form-group">
                <label for="exampleInputPassword1">aboutus</label>
                <textarea class="form-control" name="aboutus" id="summernoteabout" cols="30" rows="10">
        {{$data->aboutus}}
       </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>
    <div class="tab-pane fade" id="pills-iletisim" role="tabpanel" aria-labelledby="pills-iletisim-tab">
        <form method="post" action="{{route('adminsettingupdate')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="type" value="contact">
        <div class="form-group">
            <label for="exampleInputPassword1">contact</label>
            <textarea class="form-control" name="contact" id="summernotecontact" cols="30" rows="10">
{{$data->contact}}
</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
    </div>
    <div class="tab-pane fade" id="pills-reference" role="tabpanel" aria-labelledby="pills-reference-tab">
        <form method="post" action="{{route('adminsettingupdate')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="type" value="references">
        <div class="form-group">
            <label for="exampleInputPassword1">references</label>
            <textarea class="form-control" name="references" id="summernotereference" cols="30" rows="10">
    {{$data->references}}
   </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
    </div>
</div>

@endsection
@section('headincludes')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection

@section('footerincludes')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    
 $(document).ready(function() {
        $('#summernoteabout').summernote({height: 200});
        $('#summernotecontact').summernote({height: 200});
        $('#summernotereference').summernote({height: 200});
    });
    
</script>
@endsection