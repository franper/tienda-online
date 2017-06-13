@extends('store.template')

@section('title')
Productos
@stop

@section('content')
<div class="container text-center">
	<div class="page-header">
	  <h1><i class="fa fa-shopping-cart"></i> Detalle del producto</h1>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="product-block">
				<img src="{{ $product->image }}">
			</div>	
		</div>
		<div class="col-md-6">
			<div class="product-block">
				<h3>{{ $product->name }}</h3><hr>
				<div class="product-info panel">
					<p>{{ $product->description }}</p>
					<h3>
						<span class="label label-primary">Precio: {{ number_format($product->price,2) }} €</span>
					</h3>
					<p>
						<a class="btn btn-success btn-block" href="{{ route('cart-add', $product->slug) }}">
							Añadir al carrito <i class="fa fa-cart-plus fa-2x"></i>
						</a>
					</p>
				</div>
			</div>	
		</div>
	</div><hr>

	<p>
		<a class="btn btn-primary" href="{{ URL::previous() }}">
			<i class="fa fa-chevron-circle-left"></i> Regresar
		</a>
	</p>
</div>
@stop