 <!--header-->
 <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        <h1><a class="navbar-brand mr-lg-5" href="{{route('home')}}">
            Traversal
          </a></h1>
        <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.html">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>
@php
$parentCategories = \App\Http\Controllers\Admin\HomeController::categoryList();    
@endphp
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
         <ul class="navbar-nav">
<li class="nav-item"> <a class="nav-link" href="{{route('home')}}"> Anasayfa </a> </li>
<li class="nav-item"> <a class="nav-link" href="{{route("aboutus")}}"> Hakkımızda </a></li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">  Kategoriler  </a>
    <ul class="dropdown-menu">
      @foreach($parentCategories as $category)
	  <li><a class="dropdown-item" href="#"> {{$category->title}} </a>
      @if(count($category->children))
      @include('home.categorytree',['children'=>$category->children]) 

		
     @endif
    </li>
    @endforeach

    </ul>
</li>
<li class="nav-item"> <a class="nav-link" href="{{route("aboutus")}}"> Referanslar </a></li>
<li class="nav-item"> <a class="nav-link" href="{{route("aboutus")}}"> SSS </a></li>
</ul>
        </div>
        <div class="d-lg-block d-none">
          <a href="{{route('contact')}}" class="btn btn-style btn-secondary">İletişim</a>
        </div>
       
     
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        @auth
        <div class="d-flex ">
          <a href="{{route("myuserprofile")}}" class="btn btn-link ">{{Auth::user()->name}}</a>
          <a href="{{route('adminlogout')}}" class="btn btn-link ">Çıkış Yap</a>
        </div>
        @endauth
        @guest
        <div class="d-flex ">
          <a href="{{route("adminlogin")}}" class="btn btn-link ">Login</a>
          <a href="/register" class="btn btn-link ">Register</a>
        </div>
       @endguest
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!-- //header -->