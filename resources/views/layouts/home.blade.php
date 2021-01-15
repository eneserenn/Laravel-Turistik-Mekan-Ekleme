<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content=@yield("description")>
	<meta name="keywords" content=@yield("keywords")>
	<title>@yield("title")</title>
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link href="//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&display=swap"
		rel="stylesheet">
	<!-- google fonts -->
	<!-- Template CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<link rel="stylesheet" href="{{asset('assets')}}/css/style-starter.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	@yield('home_style')
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<style>
		@media (min-width: 992px) {
			.dropdown-menu .dropdown-toggle:after {
				border-top: .3em solid transparent;
				border-right: 0;
				border-bottom: .3em solid transparent;
				border-left: .3em solid;
			}

			.dropdown-menu .dropdown-menu {
				margin-left: 0;
				margin-right: 0;
			}

			.dropdown-menu li {
				position: relative;
			}

			.nav-item .submenu {
				display: none;
				position: absolute;
				left: 125%;
				top: -7px;
			}

			.nav-item .submenu-left {
				right: 100%;
				left: auto;
			}

			.dropdown-menu>li:hover {
				background-color: #f1f1f1
			}

			.dropdown-menu>li:hover>.submenu {
				display: flex;
				flex-direction: column;
			}

			.dropdown-menu.show {
				display: flex;
				flex-direction: column;
			}

		}
	</style>
</head>

<body>
	@include('home._header')
	@yield("content")
	@include('home._footer')
</body>

</html>