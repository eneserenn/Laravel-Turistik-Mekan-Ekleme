@extends('layouts.home')
@section('content')
<section class="w3l-cta4 py-5">
    <div class=" py-lg-5">
   <div class="container">
       <h2 class="mt-5">Kullanıcı Paneli</h2>
       <div class="row">
      <div class="d-flex flex-column col-md-3">
        <a class="mt-4">Profilim</a>
        <a href="{{route('usercomments')}}" class="mt-2">Yorumlarım</a>
        <a class="mt-2">Paylaştığım Mekanlar</a>
        <a class="mt-2">Mesajlarım</a>
        <a href={{route('logout')}} class="mt-5">Çıkış yap</a>
      </div>
      <div class="d-flex flex-column col-md-9">

<table class="table">
    <thead>
      <tr>
     
        <th scope="col">Mekan</th>
        <th scope="col">Konu</th>
        <th scope="col">Yorum</th>
        <th scope="col">Sil</th>
      </tr>
    </thead>
    <tbody>
        @foreach($comms as $com)
      <tr>
        <th>{{$com->place->title}}</th>
        <td>{{$com->subject}}</td>
        <td>{{$com->review}}</td>
        <td><a href="{{route('deletecommentuser',['id'=>$com->id])}}">Sil</a></td>
       
      </tr>
      @endforeach
    </tbody>
  </table>

      </div>
    </div>
   </div>
</div>
</section>
@endsection