@extends('layouts.home')
@section('content')
<section class="w3l-cta4 py-5">
    <div class="container py-lg-5">
        <div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($place->gallery as $image)
                @if($loop->first)
              <div class="carousel-item active">
                <img class="d-block w-100" style="width:700px;height:500px" src="{{asset('storage')}}/{{$image->image}}" alt="First slide">
              </div>
              @else
              <div class="carousel-item">
                <img class="d-block w-100" style="width:700px;height:500px" src="{{asset('storage')}}/{{$image->image}}" alt="Second slide">
              </div>
             @endif
             @endforeach
            </div>
            
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="mt-4 mb-4">
         {!!$place->detail!!}
        </div>
        <div class="row">
          <div class="col-md-6">
            <h3 class="mb-2">Yorumlar</h3>
           @foreach ($place->reviews as $review)
           <div class="d-flex flex-row p-4"style="border:solid 1px black">
           <div class="d-flex flex-column " >
               <span>{{$review->user->name}}</span>
               <span>{{$review->subject}}</span>
               <span>{{$review->review}}</span>
             
              </div>
              <h3 class="ml-5">{{$review->like}} puan verdi</h3>
            </div>
           @endforeach
          </div>
          <div class="col-md-6">
            <h3>Lütfen Bir yorum bırakın</h3>
            @livewire('review',['id'=>$place->id])
            
          </div>
        </div>
    </div>
    </div>
  </section>

@endsection