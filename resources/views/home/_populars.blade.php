
<div class="best-rooms py-5">
    <div class="container py-md-5">
        <div class="ban-content-inf row">
            <!--/-->
@foreach($randomplacestwo as $randtwo)
@if($loop->first)
            <div class="maghny-gd-1 col-lg-6">
              <div class="maghny-grid">
                <figure class="effect-lily border-radius  m-0">
                    <img class="img-fluid" src="{{asset('storage')}}/{{$randtwo->image}}" alt="" />
                    <figcaption>
                        <div>
                            <h4>{{$randtwo->title}}</h4>
                            <p>From 1720$ </p>
                        </div>

                    </figcaption>
                </figure>
            </div>
            </div>
            <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                <div class="row mt-4">
                    @else
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="{{asset('storage')}}/{{$randtwo->image}}" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>{{$randtwo->title}}</h4>
                                        <p>{{$randtwo->entry_payment}} </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
               @endif
               @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


  <!-- //stats -->