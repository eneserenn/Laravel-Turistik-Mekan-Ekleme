@extends('home.index')
@section('content')
<section class="w3l-cta4 py-5">
    <div class=" py-lg-5">
{!!$setting->references!!}
</div>
</section>
@endsection
@section('title')
references-{{$setting->title}}
@endsection
