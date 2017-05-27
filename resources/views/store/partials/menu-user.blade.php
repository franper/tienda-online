@if(Auth::check())
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user"></i> {{ Auth::user()->user }} <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
		@if(Auth::user()->type == 'admin')
			<li>{!! link_to('admin/home', "Panel de administración") !!}</li>
		@endif
			<li><a href="{{ route('logout') }}">Finalizar sesión</a></li>
		</ul>
	</li>
@else
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user"></i> Hola, Identifícate <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="{{ route('login-get') }}">Iniciar sesión</a></li>
	        <li><a href="{{ route('register-get') }}">Registrarse</a></li>  
		</ul>
	</li>
@endif