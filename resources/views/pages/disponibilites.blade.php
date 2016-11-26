@extends('template')

@section('content')

<div class="titre">
  <img class="icone coins" src="{{URL::asset('images/coins.png')}}" />
  <h1>Disponibilités</h1>
  <!-- <div class="trait"></div> -->
</div>

<div class="contentStandard">

  <div id="calendar"></div>

</div>

<script>
var unavailableDates = [
{start: '2015-08-31', end: '2015-09-05'},
    {start: '2015-09-11', end: '2015-09-15'},
    {start: '2015-09-15', end: '2015-09-23'},
    {start: '2015-10-01', end: '2015-10-07'}
];

$('#calendar').availabilityCalendar(unavailableDates);
</script>
@endsection