@extends('template')

@section('content')

<div class="titre">
  <img class="icone coins" src="{{URL::asset('images/coins.png')}}" />
  <h1>Tarifs</h1>
  <!-- <div class="trait"></div> -->
</div>

<div class="contentStandard">

<button type="button" class="btn btn-info btn-l ajoutDateButton" data-toggle="modal" data-target="#popAddDate">
  Ajouter une réservation
</button>

  <script>
  $( function() {
    $( "#datedebut" ).datepicker({
    closeText: 'Fermer',
    firstDay: 1 ,
    dateFormat: 'dd/mm/yy',
    onSelect: function (selected) {
      $("#datefin").datepicker("option", "minDate", selected);
    }
    });
    $( "#datefin" ).datepicker({
    closeText: 'Fermer',
    firstDay: 1 ,
    dateFormat: 'dd/mm/yy',
    });


      /*TODO : ajouter les deux autres champs dans data, et gérer le retour des erreurs*/
    $("#formAddReservation").submit(function(e){
      e.preventDefault();
      $.ajax({
          type: "POST",
          url : "postSaveReservation",
          data : {
            nom: $("input#nom").val(),
            dateDebut: $("input#datedebut").val(),
            dateFin: $("input#datefin").val()
          },
          success : function(data){  

            if(data.success != false){
              $('#listOfReservations').html(data);
              $('#popAddDate').modal('hide');
            }
          }
      },"json");
     });
  });
  </script>

  <!-- Modal -->
  <div class="modal fade" id="popAddDate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <h2 class="titreTarif">Ajout d'une réservation</h2>
        <div class="">
          <form role="form" method="POST" id="formAddReservation">
            {!! csrf_field() !!}
              <div class="form-group">
                <label for="nom">Nom de la personne</label>
                <input type="text" id="nom" class="form-control">
              </div>
              <div class="form-group">
                <label for="datedebut">Date de début</label>
                <input type="text" id="datedebut" class="form-control">
              </div>
              <div class="form-group">
                <label for="datefin">Date de fin</label>
                <input type="text" id="datefin" class="form-control">
              </div>
              <button type="submit" class="btn btn-default">Enregistrer</button>
          </form>
        </div>
          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>

  <div id="listOfReservations">
      @include('pages.listeReservations')
  </div>


  <form class="form-horizontal" role="form" method="POST" action="{{URL::route('postDeconnection')}}">
    {!! csrf_field() !!}
    <input type="submit" name="deco" value="Déconnection">
  </form>
  
</div>

@endsection