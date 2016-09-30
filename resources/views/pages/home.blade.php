@extends('template')

@section('content')


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
  </ol>

   <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img style="height: 284px; width: 100%;" class="banner-img" src="{{URL::asset('images/longere1.png')}}" />
      <div class="carousel-caption">
        Un endroit calme et agréable
      </div>
    </div>
        <div class="item">
      <img style="height: 284px; width: 100%;" class="banner-img" src="{{URL::asset('images/longere2.png')}}" />
      <div class="carousel-caption">
        Un endroit calme et agréable
      </div>
    </div>
        <div class="item">
      <img style="height: 284px; width: 100%;" class="banner-img" src="{{URL::asset('images/longere3.png')}}" />
      <div class="carousel-caption">
        Un endroit calme et agréable
      </div>
    </div>
  </div>       


  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 <div>

	<p style="font-size: 18px;margin-top: 33px;padding: 10px;text-align:center;">Changez votre quotidien et venez vivre dans cette longère typique des Côtes d'Armor, sol en ardoise, murs en pierres, loin des standards des maisons contemporaines et des voitures sophistiquées...
	<p style="font-size: 18px;margin-top: 33px;padding: 10px;text-align:center;">Changez votre quotidien et venez vivre dans cette longère typique des Côtes d'Armor, sol en ardoise, murs en pierres, loin des standards des maisons contemporaines et des voitures sophistiquées...

	La plage est proche, le petit bois un repère de korigans, les panoramas uniques. Dans les bars de Plougresacant se mèlent population locale et invités temporaires, les étoiles sont toujours dans le ciel, les huîtres succulentes, les homards...bretons, le dépaysement assuré </p> 
</div> 

@endsection