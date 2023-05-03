@extends("template") @section("title", "Concerts") @section("content")
    <div class="d-flex justify-content-center">
        @forelse ($concert as $show)
        @if ($show->full)
        <div class="card" style="width: 30rem;">
            <img src="{{$show->imgartiste}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">{{$show->titre}}</h3>
          <h5 class="card-title">{{$show->artiste}}</h5>
          <p class="card-text">{{$show->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Genre : {{$show->genre}}</li> 
          <li class="list-group-item">Lieu : {{$show->lieu}}</li>
          <li class="list-group-item">Date : {{$show->date}}</li>
          <li class="list-group-item">Organisateur : {{$show->organisateur}}</li>
        </ul>
        <div class="card-body">
          <a href="#" class="btn btn-primary">Reserver</a>
          
        </div>
    </div>
        @else
    <div class="card" style="width: 30rem;">
            <img src="{{$show->imgartiste}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">{{$show->titre}}</h3>
          <h5 class="card-title">{{$show->artiste}}</h5>
          <p class="card-text">{{$show->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Genre : {{$show->genre}}</li> 
          <li class="list-group-item">Lieu : {{$show->lieu}}</li>
          <li class="list-group-item">Date : {{$show->date}}</li>
          <li class="list-group-item">Organisateur : {{$show->organisateur}}</li>
        </ul>
        <div class="card-body">
            <a href="{{route('concert.show', $show)}}" class="btn btn-primary" value='viewconcert'>Reserver</a>
          
        </div>
    </div>
        @endif
        @empty
        <h2> Pas de concerts. </h2>
        @endforelse
<div class="col-3 mt-2 ms-5"></div>
 <div class="col-3 mt-2 ms-5"></div>
    </div>
@endsection