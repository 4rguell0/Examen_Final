<!DOCTYPE HTML>

<html>
	<head>
		<title>Origen de Taco Bell</title>
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

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Un breve resumen</h1>
										<h1>De Taco Belll</h1>
									</header>

									<!-- Content -->
										<h2 id="content">{{$taco->Titulo}}</h2>
										<p>{{$taco->Parrafo1}}</p>
										<div class="row">
											<div class="col-6 col-12-small">
												<p>{{$taco->Parrafo2}}</p>
											</div>
											
											<div class="col-4 col-12-medium">
												<h3>{{$taco1->Titulo}}</h3>
												<p>{{$taco1->Parrafo1}}</p>
											</div>
										
										</div>

									<hr class="major" />

										<div class="row gtr-200">
											<div class="col-6 col-12-medium">

													<div class="row">
														<div class="col-6 col-12-small">

														</div>
														<div class="col-6 col-12-small">

														</div>
													</div>
																		
													<div class="row">
														<div class="col-6 col-12-small">
															
														</div>
														<div class="col-6 col-12-small">
															
														</div>
														<div class="col-6 col-12-small">
															
														</div>
														<div class="col-6 col-12-small">
															
														</div>
													</div>
											</div>
											<div class="col-6 col-12-medium">
											</div>
										</div>

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
										<li><a href="{{route('tipos')}}">Tipos y Variedades</a></li>
										<li><a href="{{route('datotaco')}}">Datos Curiosos</a></li>	
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