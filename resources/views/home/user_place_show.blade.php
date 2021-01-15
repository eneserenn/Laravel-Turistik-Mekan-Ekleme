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
       <a href="{{route('addplaceuser')}}" class="btn btn-primary">Mekan Ekle</a>
       <table class="table">
        <thead>
          <tr>
         
            <th scope="col">Mekan</th>
            <th scope="col">Resim</th>
            <th scope="col">Ücret</th>
            <th scope="col">Ülke</th>
            <th scope="col">Tarih</th>
            <th scope="col">Güncelle</th>
            <th scope="col">Sil</th>
          </tr>
        </thead>
        <tbody>
            @foreach($places as $place)
          <tr>
            <th>{{$place->title}}</th>
            <th><img width="50" src="{{asset('storage')}}/{{$place->image}}"></img></th>
            <th>{{$place->entry_payment}}</th>
            <td>{{$place->country}}</td>
            <td>{{$place->created_at}}</td>
            <td><a href="{{route('editplaceuser',['id'=>$place->id])}}">Güncelle</a></td>
            <td><a href="{{route('deleteplaceuser',['id'=>$place->id])}}">Sil</a></td>
           
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
