@extends('layouts.home')
@section('content')
<section class="w3l-cta4 py-5">
    <div class="container py-lg-5">
        <div class="ab-section text-center">
            <h6 class="sub-title">FAQ</h6>

        </div>
    </div>
    </div>
</section>
<!-- stats -->
<div class="container mb-5">
@foreach($faqs as $faq)
<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne{{$faq->id}}"
                    aria-expanded=@if($loop->first) "true" @else "false" @endif aria-controls="collapseOne{{$faq->id}}">
                    {{$faq->question}}
                </button>
            </h2>
        </div>

        <div id="collapseOne{{$faq->id}}" class="collapse " aria-labelledby="headingOne"
            data-parent="#accordionExample">
            <div class="card-body">
                {!!$faq->answer!!}
            </div>
        </div>
    </div>
</div>

@endforeach
</div>
@endsection
@section('title')
hakkımızda-{{$setting->title}}
@endsection