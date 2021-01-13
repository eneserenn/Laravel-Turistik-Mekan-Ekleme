@extends('layouts.home')
@section('content')
<section class="w3l-cta4 py-5">
    <div class="container py-lg-5">
      <div class="ab-section text-center">
        <h6 class="sub-title">About Us</h6>
    {!!$setting->aboutus!!}
    </div>
  </div>
</div>
</section>
<!-- stats -->
<section class="w3l-statshny py-5" id="stats">
  <div class="container py-lg-5 py-md-4">
    <div class="w3-stats-inner-info">
      <div class="row">
        <div class="col-lg-4 col-6 stats_info counter_grid text-left">
          <span class="fa fa-smile-o"></span>
          <p class="counter">1730</p>
          <h4>Happy Customers</h4>
        </div>
        <div class="col-lg-4 col-6 stats_info counter_grid1 text-left">
          <span class="fa fa-users"></span>
          <p class="counter">730</p>
          <h4>Custom Products</h4>
        </div>
        <div class="col-lg-4 col-6 stats_info counter_grid mt-lg-0 mt-5 text-left">
          <span class="fa fa-database"></span>
          <p class="counter">30</p>
          <h4>branches</h4>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //stats -->
<!-- team -->
<section class="w3l-team" id="team">
  <div class="team-block py-5">
    <div class="container py-lg-5">
      <div class="title-content text-center mb-lg-3 mb-4">
        <h6 class="sub-title">Our team</h6>
        <h3 class="hny-title">Meet our Guides</h3>
      </div>
      <div class="row">
        <div class="col-lg-3 col-6 mt-lg-5 mt-4">
          <div class="box16">
            <a href="#url"><img src="assets/images/team1.jpg" alt="" class="img-fluid" /></a>
            <div class="box-content">
              <h3 class="title"><a href="#url">Alexander</a></h3>
              <span class="post">Description</span>
              <ul class="social">
                <li>
                  <a href="#" class="facebook">
                    <span class="fa fa-facebook-f"></span>
                  </a>
                </li>
                <li>
                  <a href="#" class="twitter">
                    <span class="fa fa-twitter"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 mt-lg-5 mt-4">
          <div class="box16">
            <a href="#url"><img src="assets/images/team2.jpg" alt="" class="img-fluid" /></a>
            <div class="box-content">
              <h3 class="title"><a href="#url">Victoria</a></h3>
              <span class="post">Description</span>
              <ul class="social">
                <li>
                  <a href="#" class="facebook">
                    <span class="fa fa-facebook-f"></span>
                  </a>
                </li>
                <li>
                  <a href="#" class="twitter">
                    <span class="fa fa-twitter"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 mt-lg-5 mt-4">
          <div class="box16">
            <a href="#url"><img src="assets/images/team3.jpg" alt="" class="img-fluid" /></a>
            <div class="box-content">
              <h3 class="title"><a href="#url">Smith roy</a></h3>
              <span class="post">Description</a></span>
              <ul class="social">
                <li>
                  <a href="#" class="facebook">
                    <span class="fa fa-facebook-f"></span>
                  </a>
                </li>
                <li>
                  <a href="#" class="twitter">
                    <span class="fa fa-twitter"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 mt-lg-5 mt-4">
          <div class="box16">
            <a href="#url"><img src="assets/images/team4.jpg" alt="" class="img-fluid" /></a>
            <div class="box-content">
              <h3 class="title"><a href="#url">Johnson</a></h3>
              <span class="post">Description</a></span>
              <ul class="social">
                <li>
                  <a href="#" class="facebook">
                    <span class="fa fa-facebook-f"></span>
                  </a>
                </li>
                <li>
                  <a href="#" class="twitter">
                    <span class="fa fa-twitter"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('title')
hakkımızda-{{$setting->title}}
@endsection
