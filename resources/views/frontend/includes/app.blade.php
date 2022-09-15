<!DOCTYPE html>
<html>
<head>

	<title>Vagabond Experiences | @yield('title')</title>
	<meta charset="utf-8">

	<meta name="description" content="@yield('description')">
	<meta name="image" content="@yield('cover', asset('/img/seopopup.jpg'))">

	<meta name="keywords" content="@yield('keywords')">

	<meta name="og:title" content="@yield('media_title', 'Vagabond Experiences')" />
	<meta name="og:url" content="{{ URL::current() }}" />
	<meta name="og:description" content="@yield('description')">
	<meta name="og:image" content="@yield('cover', asset('/img/seopopup.jpg'))">
	<meta name="og:site_name" content="Vagabond Experiences">

	<meta name="twitter:card" content="summary_large_image">

	<meta itemprop="name" content="@yield('media_title', 'Vagabond Experiences')">
	<meta itemprop="description" content="@yield('description')">
	<meta itemprop="image" content="@yield('cover', asset('/img/seopopup.jpg'))">


	<link rel=”canonical” href=”{{ URL::current() }}” />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Itim&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">   
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('trumbowyg/dist/ui/trumbowyg.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('tagsinput/jquery.tagsinput.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.css') }}">


	<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicon/android-icon-192x192.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon-144x144.png') }}">
	<meta name="theme-color" content="#ffffff">

	<style type="text/css">
        .flash {
            top: 64px;
            position: fixed;
            right: 10px;
            z-index: 10000;
        }
	</style>

	@include('frontend.includes.seo')
	
</head>
<body>

	<div class="wrapper">

		<div class="holdem">

		<a id="floating-whatsapp" class="wlogo" href="https://wa.me/917400054929"><img src="{{ asset('img/w_logo.png') }}" alt="" class="w_logo"></a>

		@yield('loader')

		@include('frontend.includes.navbar')

		@include('frontend.includes.flash')

		<div class="mobile-spacer"></div>
		
		@yield('content')

		</div>
		
		@include('frontend.includes.footer')
	
	</div>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="{{ asset('trumbowyg/dist/trumbowyg.min.js') }}"></script>
	<script src="{{ asset('tagsinput/jquery.tagsinput.min.js') }}"></script>
	<script src="{{ asset('js/lightbox.js') }}"></script>

	<script>
		
		if($(window).width() > 768) {

			$(function() {
				//caches a jQuery object containing the header element
				var header = $('#nav');
				$(window).scroll(function() {
					var scroll = $(window).scrollTop();
					if (scroll >= header.height()) {
						header.addClass('solid');
					} else {
						header.removeClass('solid');
					}
				});
			});

		} else {
			$('#nav').addClass('solid');
		}

		$(document).scroll(function() {
			checkOffset();
		});

		$(document).on('click', '[data-toggle="lightbox"]', function(event) {
			event.preventDefault();
			$(this).ekkoLightbox({
				wrapping: true,
				showArrows: true,
			});
		});

		function goToByScroll(id) {
			// Remove "link" from the ID
			id = id.replace("link", "");
			// Scroll
			$('html, body').animate({
				scrollTop: $("#" + id).offset().top - 60.5
			}, 'slow');
		}

		function checkOffset() {
			if($('#floating-whatsapp').offset().top + $('#floating-whatsapp').height() 
												>= $('#footer').offset().top - 10)
				$('#floating-whatsapp').css('position', 'absolute');
			if($(document).scrollTop() + window.innerHeight < $('#footer').offset().top)
				$('#floating-whatsapp').css('position', 'fixed'); // restore when you scroll up
		}
	
	</script>

	@yield('scripts')

</body>
</html>