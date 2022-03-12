<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Detalle</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="icon" href="../../images/card.png">
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="{{route('index')}}" class="logo">
									<span class="symbol"><img src="../images/logo.svg" alt="" /></span><span class="title">Bebidas Cool</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="{{route('inicio')}}">Inicio</a></li>
							<li><a href="{{route('noalcohol')}}">Bebidas Alcoholicas</a></li>
							<li><a href="{{route('alcohol')}}">Bebidas NO Alcoholicas</a></li>
							<li><a href="{{route('index')}}">Vodka</a></li>
							<li><a href="{{route('nosotros')}}">Nosotros</a></li>
							<li><a href="{{route('getting')}}">Documentacion API</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>La carta es {{$carta['cartas']['nombre']}}</h1>
							<h2 class="etiqueta">{{$carta['cartas']['tipo']}}</h2>
							<h2 class="etiqueta">{{$carta['cartas']['created_at']}}</h2>
							<br>
							<br>
							<div style="background-image: url('../images/pic13.jpg'); background-repeat: no-repeat;background-size: cover">
							<br>
							<img  class="centrar tamaño2" src="{{$carta['cartas']['imagen']}}" alt="" />
							<br>
							</div>
							<br>
							<p class="justificar letra"><b>{{$carta['cartas']['descripcion']}}</b></p>
						<section class="tiles">
							
							<article class="style5">
								<span class="image">
									<img src="{{$carta1['cartas']['imagen']}}" alt="" />
								</span>
								<a href="{{route('detallecarta',$carta1['cartas']['id'])}}">
									<h2>{{$carta1['cartas']['nombre']}}</h2>
									<div class="content">
										<p>{{$carta1['cartas']['tipo']}}</p>
									</div>
								</a>
							</article>	
							
							<article class="style3">
								<span class="image">
									<img src="{{$carta2['cartas']['imagen']}}" alt="" />
								</span>
								<a href="{{route('detallecarta',$carta2['cartas']['id'])}}">
									<h2>{{$carta2['cartas']['nombre']}}</h2>
									<div class="content">
										<p>{{$carta2['cartas']['tipo']}}</p>
									</div>
								</a>
							</article>
							<article class="style2">
								<span class="image">
									<img src="{{$carta3['cartas']['imagen']}}" alt="" />
								</span>
								<a href="{{route('detallecarta',$carta3['cartas']['id'])}}">
									<h2>{{$carta3['cartas']['nombre']}}</h2>
									<div class="content">
										<p>{{$carta3['cartas']['tipo']}}</p>
									</div>
								</a>
							</article>
						</section>
					</div>
					</div>
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Mandanos un mensaje</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Nombre" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Mensaje"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Enviar" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Siguenos</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>
							