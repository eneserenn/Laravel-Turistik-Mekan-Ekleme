@extends('layouts.home')
@section('content')
<section class="w3l-about-breadcrumb text-left">
  <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
    <div class="container">

    </div>
  </div>
</section>
<section class="w3l-cta4 py-5">
  <div class="container py-lg-5">
    <div class="row">
      <div class="col-md-8">
        <div class="ab-section ">
          <h6 class="sub-title">İletişim</h6>
          {!!$setting->contact!!}
        </div>
      </div>
      <div class="col-md-4">
        @include('home.messages')
        <form method="post" action ="{{route("sendmessage")}}">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">İsim</label>
            <input type="text" class="form-control" placeholder="isim" name="name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">email</label>
            <input type="text" class="form-control" placeholder="email" name="email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">phone</label>
            <input type="text" class="form-control" placeholder="phone" name="phone">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Konu</label>
            <input type="text" class="form-control" placeholder="Konu" name="subject">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Mesaj</label>
            <textarea rows="10" cols="20" class="form-control" placeholder="Mesaj" name="message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Gönder</button>
        </form>
      </div>
    </div>
  </div>
  </div>
</section>
@endsection
@section('title')
contact-{{$setting->title}}
@endsection