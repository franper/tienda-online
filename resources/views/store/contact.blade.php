@extends('store.template')

@section('title')
Contacto
@stop

@section('content')
<div class="container">
  <div class="row">    
      <div class="col-md-6 text-justify">
        <h3 class="titulo">Contáctanos en: </h3><hr> 
       <div class="contacto">   
        <p>Calle pájaro 28,</p>
        <p>28750, San Agustín del Guadalix, Madrid</p>
        <p>Teléfono: 655555555</p>
        <p>Fax: 916555555</p>
        <p>Correo: tecnoshop@hotmail.com</p>
        <p>www.tecnoshop.com</p>
        </div>
      </div>

      <div class="col-md-6">
        <h3 class="titulo">Localízanos en: </h3><hr>
        <iframe class="col-md-12" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24209.29904150914!2d-3.61529985!3d40.670390999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1493641849359" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
  </div>
  <hr>
</div>
@stop