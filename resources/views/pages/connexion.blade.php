@extends('template')

@section('content')

<div class="titre">
  <img class="icone coins" src="{{URL::asset('images/coins.png')}}" />
  <h1>Tarifs</h1>
  <!-- <div class="trait"></div> -->
</div>

<div class="contentStandard">
  
      <form class="form-horizontal" role="form" method="POST" action="{{URL::route('postLogin')}}">

        {!! csrf_field() !!}

        <div class="form-group">
            <label class="col-md-4 control-label">Login</label>
            <div class="col-md-6">
                <input type="login" class="form-control" name="login" value="{{ old('login') }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Mot de passe</label>
            <div class="col-md-6">
                <input type="password" class="form-control" name="password">
            </div>
        </div>

        <div class="form-group">
       		<input type="submit" value="Save">
        </div>

    </form>
</div>

@endsection