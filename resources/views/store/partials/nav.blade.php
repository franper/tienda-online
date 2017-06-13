<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main-title" href="{{ route('home') }}"> 
        <img class="logo" style="width:100px;" src="/img/logo.png" />
       TECNOSHOP</a>
    </div>

    <div class="navbar-collapse collapse"> 
      <ul class="nav navbar-nav">
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('category',2) }}">Cámaras</a></li>
            <li><a href="{{ route('category',1) }}">Móviles</a></li>
            <li><a href="{{ route('category',6) }}">Tablets</a></li>
            <li><a href="{{ route('category',4) }}">Ordenadores</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Juegos/consolas</li>
            <li><a href="{{ route('category',5) }}">Videojuegos</a></li>
            <li><a href="{{ route('category',3) }}">Consolas</a></li>
          </ul>
        </li>
        <li><a href="{{ route('contact') }}">Contacto</a></li>
      </ul>
      <ol class="nav navbar-nav navbar-right">
        @include('store.partials.menu-user')
        <li><a href="{{ route('help') }}"><i class="fa fa-info-circle fa-lg"></i> Ayuda </a></li>
        <li><a href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i> Carrito</a></li>
      </ol>
    </div>

  </div>
</nav>
