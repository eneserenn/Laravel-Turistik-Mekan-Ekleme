@extends('layouts.home')
@section('content')
<section class="w3l-cta4 py-5">
  <div class=" py-lg-5">
    <div class="container">
      <h2 class="mt-5">Kullanıcı Paneli</h2>
      <div class="row">
        <div class="d-flex flex-column col-md-3">
          <a href="{{route('myuserprofile')}}" class="mt-4">Profilim</a>
          <a href="{{route('usercomments')}}" class="mt-2">Yorumlarım</a>
          <a href="{{route('sharedplaces')}}" class="mt-2">Paylaştığım Mekanlar</a>
          <a href={{route('logout')}} class="mt-5">Çıkış yap</a>
        </div>
        <div class="d-flex flex-column col-md-9">
          @include('profile.show')
        </div>
      </div>
    </div>
  </div>
</section>
@endsection