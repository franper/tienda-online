<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {!! link_to('admin/home', "TECNOSHOP", $attributes = array('class' => 'navbar-brand main-title')) !!}
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text"><i class="fa fa-dashboard"></i> Panel de administracion</p>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('admin.category.index') }}">Categorias</a></li>
        <li><a href="{{ route('admin.product.index') }}">Productos</a></li>
        <li><a href="{{ route('admin.order.index') }}">Pedidos</a></li>
        <li><a href="{{ route('admin.user.index') }}">Usuarios</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <i class="fa fa-user"></i> {{ Auth::user()->user }} <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('home') }}">Volver a la tienda</a></li>
            <li><a href="{{ route('logout') }}">Finalizar sesión</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>