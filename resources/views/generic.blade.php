<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Tipos y variedades</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<ul class="icons">
										<li><a href="https://www.instagram.com/4rguell0/?hl=es-la" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>

	
								<section>

									
									<header class="main">
										<h1>Tipos & Variedades</h1>
										@foreach($taco as $taquitos)
										<h2>{{$taquitos->Subtitulo}}</h2>
									</header>

									<span class="image main"><img src="{{$taquitos->Imagen}}" alt="" /></span>

									<p>{{$taquitos->Parrafo1}}</p>
									<p>{{$taquitos->Parrafo2}}</p>
									<p>{{$taquitos->Parrafo3}}</p>
									
									@endforeach
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="{{route('inicio')}}">Inicio</a></li>
										<li><a href="{{route('datotaco')}}">Datos</a></li>
										<li><a href="{{route('tacob')}}">Taco Bell</a></li>
										
									</ul>
								</nav>
								
							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>