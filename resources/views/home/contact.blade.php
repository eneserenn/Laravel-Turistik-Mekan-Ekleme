@extends('home.index')
@section('content')
<section class="w3l-cta4 py-5">
    <div class="container py-lg-5">
      <div class="ab-section text-center">
        <h6 class="sub-title">İletişim</h6>
    {!!$setting->contact!!}
    </div>
  </div>
</div>
</section>
@endsection
@section('title')
contact-{{$setting->title}}
@endsection
