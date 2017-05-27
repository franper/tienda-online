<footer class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<h3>¿Quienes Somos?</h3>
			<p> Somos una empresa pionera que nos dedicamos a la ventas de aparatos tecnológicos con el objetivo de satisfacer las necesidades de nuestro cliente,
				el cual nos comprometemos en la calidad del producto, que cumpla con un buen diseño, y de que nuestros clientes 
				reciba correctamente el producto deseado </p>
		</div>

		<div class="col-md-4">
			<h3>Categorías</h3>
			<ul class="lista">
	            <li><a href="{{ route('category',2) }}">Camaras</a></li>
	            <li><a href="{{ route('category',1) }}">Móviles</a></li>
	            <li><a href="{{ route('category',6) }}">Tables</a></li>
	            <li><a href="{{ route('category',4) }}">Ordenadores</a></li>
	            <li><a href="{{ route('category',5) }}">Video Juegos</a></li>
	            <li><a href="{{ route('category',3) }}">Consolas</a></li>
          	</ul>
		</div>
			
		<div class="col-md-4">
			<h3>Siguenos en :</h3>
			<ul class="redes">
				<li>
					<a href=""><i class="fa fa-facebook-square fa-2x"></i></a>
				 </li>	 	
				 <li>
				 	<a href=""><i class="fa fa-google-plus-square fa-2x"></i></a>
				 </li>
				 <li>
				 	<a href=""><i class="fa fa-linkedin-square fa-2x"></i></a>
				 </li>
				 <li>
				 	<a href=""><i class="fa fa-youtube-square fa-2x"></i></a>
				 </li>
				 <li>
				 	<a href=""><i class="fa fa-twitter-square fa-2x"></i></a>
				 </li>
			</ul>
			<h3>Contactanos : </h3>
			<li class="lista"><i class="fa fa-mobile"> 686674876</i></li>
			<li class="lista"><i class="fa fa-envelope"></i><a href="#"> correo@tecnoshop.com</a></li>
		</div>
	</div>
</footer>