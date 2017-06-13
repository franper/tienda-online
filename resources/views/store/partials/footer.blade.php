<footer class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<h3>¿Quiénes somos?</h3>
			<p> Somos una empresa pionera que nos dedicamos a la venta de aparatos tecnológicos con el objetivo de satisfacer las necesidades de nuestro cliente,
				el cual nos comprometemos en la calidad del producto, que cumpla con un buen diseño, y de que nuestros clientes 
				reciban correctamente el producto deseado </p>
			<a target="_blank" href="{{ route('lic') }}">Términos y condiciones</a>
		</div>

		<div class="col-md-4">
			<h3>Categorías</h3>
			<ul class="lista">
	            <li><a href="{{ route('category',2) }}">Cámaras</a></li>
	            <li><a href="{{ route('category',1) }}">Móviles</a></li>
	            <li><a href="{{ route('category',6) }}">Tablets</a></li>
	            <li><a href="{{ route('category',4) }}">Ordenadores</a></li>
	            <li><a href="{{ route('category',5) }}">Videojuegos</a></li>
	            <li><a href="{{ route('category',3) }}">Consolas</a></li>
          	</ul>
		</div>
			
		<div class="col-md-4">
			<h3>Síguenos en :</h3>
			<ul class="redes">
				<li>
					<a target="_blank" href="https://es-es.facebook.com"><i class="fa fa-facebook-square fa-2x"></i></a>
				 </li>	 	
				 <li>
				 	<a target="_blank" href="https://plus.google.com/?hl=es"><i class="fa fa-google-plus-square fa-2x"></i></a>
				 </li>
				 <li>
				 	<a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin-square fa-2x"></i></a>
				 </li>
				 <li>
				 	<a target="_blank" href="https://www.youtube.com/?gl=ES&hl=es"><i class="fa fa-youtube-square fa-2x"></i></a>
				 </li>
				 <li>
				 	<a target="_blank" href="https://twitter.com/?lang=es"><i class="fa fa-twitter-square fa-2x"></i></a>
				 </li>
			</ul>
			<h3>Contáctanos : </h3>
			<li class="lista"><i class="fa fa-mobile"> 655555555</i></li>
			<li class="lista"><i class="fa fa-envelope"></i><a href="#"> tecnoshop@hotmail.com</a></li>
		</div>
	</div>
</footer>