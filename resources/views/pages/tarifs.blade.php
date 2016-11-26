@extends('template')

@section('content')

<div class="titre">
  <img class="icone coins" src="{{URL::asset('images/coins.png')}}" />
  <h1>Tarifs</h1>
  <!-- <div class="trait"></div> -->
</div>

<div class="contentTarif contentStandard">

<div class="tarif part1">
  <h2 class="titreTarif">
     La maison principale
  </h2>
  <div class="detailsTarifs">
    <ul>
      <li>Salon/Salle à manger</li>
      <li>Salon/chambre</li>
      <li>Cuisine</li>
      <li>Chambre 1 : lit double 160 cm</li>
      <li>Chambre 2 : 2 lits simple 90 cm</li>
      <li>Salle d'eau</li>
      <li>2 WC</li>
    </ul>
    </div>
  <div class="prix">400 € / semaine</div>

  <a href="#" class="showPopupPhotos" data-toggle="modal" data-target="#popUp1Tarif">
    <img class="loupe" src="{{URL::asset('images/loupe.png')}}">
</a>
</div>

<!-- Modal -->
<div class="modal fade" id="popUp1Tarif" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <h2 class="titreTarif">La maison principale</h2>
      <div class="imgPopup">
         <img src="{{URL::asset('images/longere_img1.jpg')}}">
         <img src="{{URL::asset('images/longere_img2.jpg')}}">
         <img src="{{URL::asset('images/longere_img3.jpg')}}">
      </div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
    </div>
  </div>
</div>

<div class="tarif part2">
  <h2 class="titreTarif">
     Le studio
  </h2>
  <div class="detailsTarifs">
    <ul>
      <li>Salon/Salle à manger/Cuisine</li>
      <li>Chambre</li>
      <li>Salle d'eau</li>
      <li>WC</li>
    </ul>
    </div>
  <div class="prix">250 € / semaine</div>
</div>

<div class="tarif part3">
  <h2 class="titreTarif">
      La 2 Chevaux
  </h2>
  <div>
    <img src="{{URL::asset('images/longere_img4.jpg')}}">
  </div>
  <div class="prix">300 € / semaine</div>
</div>

<div class="tarif part4">
  <h2 class="titreTarif">
      Les plus
  </h2>

  <div class="detailsTarifs">
    <ul>
      <li>Vélos</li>
      <li>Baby Foot</li>
      <li>Billard</li>
      <li>Flipper</li>
    </ul>
  </div>

  <div class="prix">gratuit</div>
  <div class="complement">
   Possibilité de louer des instruments de musique :
   <br/>
      &nbsp;&nbsp;- piano électronique "Clavinova" , Batterie "Sonor"
    <br/>
      &nbsp;&nbsp;- Guitare électrique et ampli, percussions...
  </div>
</div>

</div>

@endsection