@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">This is the games.index page</h1>
      </div>
      <div class="column">
        <a href="{{route('gameathlons.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New GameAthlon</a>
      </div>
    </div>
    <hr class="m-t-0">



  </div> <!-- end of .flex-container -->

@endsection