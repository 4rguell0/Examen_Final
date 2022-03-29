<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Historia de los tacos</title>
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
									<a href="index.html" class="logo"><strong>¿Conoces la historia?	</strong> </a>
									<ul class="icons">
									<li><a href="https://www.instagram.com/4rguell0/?hl=es-la" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
									
										<header>
											
											<h1>{{$taco->Titulo}}</h1>
											<p>{{$taco->Parrafo1}}</p>	
											<p>{{$taco->Parrafo2}}</p>	
											<p>{{$taco->Parrafo3}}</p>	
											<p>{{$taco->Parrafo4}}</p>	
											
										</header> 
										<p></p>
										
									
									</div>
									<span class="image object">
										<img src="{{$taco->Imagen}}" alt="" />
									</span>
								</section>
								<section>
									<header class="major">
										<h2>Más sobre los tacos</h2>
									</header>
									<div class="posts">
										<article>
											<a href="#" class="image"><img src="{{$taco1->Imagen}}" alt="" /></a>
											<h3>{{$taco1->Titulo}}</h3>
											<p>Aquí encontraras las diferentes variedades de tacos y tipos.</p>
											<ul class="actions">
												<li><a href="{{route('tipos')}}" class="button">Leer más</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="{{$taco2->Imagen}}" alt="" /></a>
											<h3>{{$taco2->Titulo}}</h3>
											<p>Conoceras algunos datos sobre los tacos.</p>
											<ul class="actions">
												<li><a href="{{route('datotaco')}}" class="button">Leer más</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="{{$taco3->Imagen}}" alt="" /></a>
											<h3>{{$taco3->Titulo}}</h3>
											<p>Un breve resumen de como surgio taco bell.</p>
											<ul class="actions">
												<li><a href="{{route('tacob')}}" class="button">Leer más</a></li>
											</ul>
										</article>
										
									</div>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="{{route('tipos')}}">Tipos y Variedades</a></li>
										<li><a href="{{route('datotaco')}}">Datos Interesantes</a></li>
										<li><a href="{{route('tacob')}}">Taco Bell</a></li>
										
									</ul>
								</nav>

							<!-- Section -->
								
							<!-- Section -->
								<section>
								
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