@extends("template") @section("title", "Concerts") @section("content")
<div class="card mb-3" style="max-width: 1500px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{$concert->imgartiste}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title">{{ $concert->titre }}</h3>
          <h5 class="card-title">{{ $concert->artiste }}</h5>
          <p class="card-text">{{ $concert->description }}</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Genre : {{$concert->genre}}</li> 
            <li class="list-group-item">Lieu : {{$concert->lieu}}</li>
            <li class="list-group-item">Date : {{$concert->date}}</li>
            <li class="list-group-item">Organisateur : {{$concert->organisateur}}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container d-flex h-100">
    <button type="button" class="btn btn-primary btn-lg mb-2">Reserver</button>
  </div>
  @endsection