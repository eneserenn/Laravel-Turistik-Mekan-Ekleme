<section class="w3l-main-slider" id="home">
    <div class="banner-content">
      <div id="demo-1"
        data-zs-src='[@foreach($slider as $item)"{{asset('storage')}}/{{$item->image}}"@if(!$loop->last),@endif @endforeach]'
        data-zs-overlay="dots">
        <div class="demo-inner-content">
          <div class="container">
            <div class="banner-infhny">
              <h4 class="text-white mb-3">Öyle zamanlar olur ki; Nereye gittiğin önemini yitirir. Çünkü asıl önemli olan, yanında kiminle gittiğindir.</h4>
              <h6 class="mb-3">Bir sonraki maceranı keşfet</h6>
              <div class="flex-wrap search-wthree-field mt-md-5 mt-4">
                <form action="{{route('discover')}}" method="post" class="booking-form">
                  @csrf
                  <div class="row book-form">
                    <div class="form-input col-md-4 mt-md-0 mt-3">

                      <select name="id" class="selectpicker">
                     @foreach($slider as $item)
                        <option  value="{{$item->id}}">{{$item->title}}</option>
                     @endforeach
                      </select>
                    </div>
                    <div class="bottom-btn col-md-4 mt-md-0 mt-3">
                      <button class="btn btn-style btn-secondary"><span class="fa fa-search mr-3"
                          aria-hidden="true"></span>Keşfet!</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>