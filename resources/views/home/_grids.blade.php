<!--/grids-->
<section class="w3l-grids-3 py-5">
    <div class="container py-md-5">
      <div class="title-content text-left mb-lg-5 mb-4">
        <h6 class="sub-title">Gez</h6>
        <h3 class="hny-title">En sevilen mekanlar</h3>
      </div>
      <div class="row bottom-ab-grids">
  <!--/row-grids-->
  @foreach ($randomplaces as $placerand)
      
  
        <div class="col-lg-6 subject-card mt-lg-0 mt-4">
          <div class="subject-card-header p-4">
            <a href="#" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="{{asset('storage')}}/{{$placerand->image}}" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>{{$placerand->title}}</h4>
                  <p>Puan: {{$placerand->point}}</p>
                  <div class="dst-btm">
                    <h6 class=""> Ülke: {{$placerand->country}}</h6>
                    <span>@if($placerand->entry_payment > 0)Ücret: {{$placerand->entry_payment}}₺@else <span>Ücretsiz</span>@endif</span>
                  </div>
                  <p class="sub-para"></p>
                </div>
              </div>
            </a>
          </div>
        </div>
      
        @endforeach
          <!--//row-grids-->
      </div>
    </div>
  </section>
  <!--//grids-->