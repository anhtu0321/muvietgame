<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
	@yield('title')
	<link rel="stylesheet" href="{{asset('lib/public/fontawesome6.4.0/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('lib/public/bootstrap/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('lib/public/css/mystyle.css')}}">

</head>
<body>
	<div class="wrapper" id="app">
		@include('fontend/layouts.header')
		@include('fontend/layouts.banner')
		<div id="content">
			<div class="content">
				<div class="content__header"></div>
				<div class="content__main">
					<div class="content__sidebar">
						<div class="content__logo">
							<a href="https://drive.google.com/file/d/1Zl5UC-6HIALk1e9Ujrfs-CLNUhybu3Yn/view?usp=share_link"><img src="lib/public/image/download-logo.png" alt=""></a>
						</div>
						<div class="content__menu">
							<ul>
								<li><a href="#">Hướng dẫn</a></li>
								<li><a href="#">Thông báo</a></li>
								<li><a href="#">Nạp thẻ</a></li>
								<li><a href="https://www.facebook.com/muatlantic.info">FANPAGE</a></li>
								<li><a href="https://zalo.me/g/tzopjg068">Nhóm Zalo</a></li>
							</ul>
						</div>
					</div>
					<div class="content__center">
						@yield('content')
					</div>
				</div>
			</div>
		</div>
		
		@include('fontend/layouts.footer')
	</div>
<script src="{{asset('lib/public/build/assets/app-4ed993c7.js')}}"></script>
<script src="{{asset('lib/public/js/myjs.js')}}"></script>
</body>
</html>