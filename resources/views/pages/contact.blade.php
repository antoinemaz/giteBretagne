@extends('template')

@section('content')

<div class="titre">
  <img class="icone" src="{{URL::asset('images/contact.png')}}" />
  <h1>Contactez-nous</h1>
  <!-- <div class="trait"></div> -->
</div>


<div class="contentContact contentStandard">
  <div class="map">
<iframe width="420" height="385" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJE8XJerXf5UcR4t875BNA31c&key=AIzaSyDr0-TqgI63mJ-zA29ERkMEroRk-TYP2Zg" allowfullscreen></iframe> 

  </div>

  {{ Form::open(array('url' => '/postContact', 'class' => 'formContact')) }}
      
    <div class="form-group">
      {{Form::label('name', 'Nom')}}
      {{Form::text('name', '', array('id' => 'name', 'class' => 'form-control'))}}
    </div>

    <div class="form-group">
      {{Form::label('mail', 'Adresse Mail')}}
      {{Form::text('mail', '', array('id' => 'mail', 'class' => 'form-control'))}}
    </div>

    <div class="form-group">
      {{Form::label('msg', 'Message')}}
      {{Form::textarea('msg', '', array('id' => 'msg', 'class' => 'form-control'))}}
    </div>

  </div>

  {{ Form::close() }}

@endsection