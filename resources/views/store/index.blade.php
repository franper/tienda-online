@extends('store.template')

@section('content')

@include('store.partials.slider')

<div class="container text-center">
	<div id="products">
		@foreach($products as $product)
			<div class="product white-panel">
				<h3>{{ $product->name }}</h3><hr>
				<img src="{{ $product->image }}">
				<div class="product-info panel">
					<p>{{ $product->extract }}</p>
					<h3><span class="label label-primary">Precio: {{ number_format($product->price,2) }} €</span></h3>
					<p>
						<a class="btn btn-success" href="{{ route('cart-add', $product->slug) }}">
							<i class="fa fa-cart-plus"></i> Añadir el carrito
						</a>
						<a class="btn btn-default" href="{{ route('product-detail', $product->slug) }}"><i class="fa fa-chevron-circle-right"></i> Detalles</a>
					</p>
				</div>
			</div>
		@endforeach
	</div>
</div>
@stop