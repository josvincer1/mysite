<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <title>Jeyenthi Sweets</title>
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linearicons/style.css" rel="stylesheet">
        <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">
        <link href="vendors/stroke-icon/style.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/datetime-picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/nice-select/css/nice-select.css" rel="stylesheet">
        <link href="vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
    </head>
    <body>
		<header class="main_header_three">
			<div class="top_logo_header">
				<div class="container">
					<div class="header_logo_inner">
						<div class="h_left_text">
							<div class="media">
								<div class="d-flex">
									<i class="flaticon-auricular-phone-symbol-in-a-circle"></i>
								</div>
								<div class="media-body">
									<a href="tel:+91 94428 01068">+91 94428 01068</a>
									
								</div>
							</div>
						</div>
						<div class="h_middle_text">
							<a href="index.html"><img src="img/logo-3.png" alt=""></a>
						</div>
						<div class="h_right_text">
							<a class="pink_btn" href="#">Order online</a>
						</div>
					</div>
				</div>
			</div>
			<div class="middle_menu_three">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="index.html"><img src="img/logo-2.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav">
                                <li class="{{(request()->is('/'))?'active':''}}"><a href="{{URL('/')}}">Home</a></li>
								<li class="{{(request()->is('/#about'))?'active':''}}"><a href="{{URL('/#about')}}">About Us</a></li>
								<li class="{{(request()->is('/product'))?'active':''}}"><a href="{{URL('/product')}}">Products</a></li>
                                <li class="{{(request()->is('/#services'))?'active':''}}"><a href="{{URL('/#services')}}">Services</a></li>
								<li class="{{(request()->is('/#contact'))?'active':''}}"><a href="{{URL('/#contact')}}">Contact</a></li>
								
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>
		