@extends('layouts.home')
@section('content')
<section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">{{$category->title}} </h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> {{$category->title}} </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
 <!--  Work gallery section -->
 <section class="grids-1 py-5">
  <div class="grids py-lg-5 py-md-4">
      <div class="container">
       
          <div class="row">
              @foreach($categoryelems as $el)
              <div class="col-lg-4 col-md-4 col-6">
                  <div class="column">
                      <a href="blog-single.html"><img src="{{asset('storage')}}/{{$el->image}}" alt="" class="img-fluid"></a>
                      <div class="info">
                          <h4><a href="blog-single.html">{{$el->title}}</a></h4>
                          <p>Puan: {{$el->point}} </p>
                          <div class="dst-btm">
                            <h6 class="">Ülke: {{$el->country}} </h6>
                            <span>@if($el->entry_payment > 0)Ücret: {{$el->entry_payment}}₺@else <span>Ücretsiz</span>@endif</span>
                          </div>
                      </div>
                  </div>
              </div>
               @endforeach
          </div>
      </div>
</div></section>
@endsection