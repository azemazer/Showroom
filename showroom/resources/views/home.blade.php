<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Rave Emblem</title>
    <title>Document</title>
</head>
<body>
    <div class="row bg-dark pt-3">
        <div class="col-3 mt-2 ms-4">
            <img src="assets/images/Logo.png" width="320" height="80">
        </div>
        <div class="col-3 mt-2 ms-2 text-white text-end">
            <a href="/dashboard">Se connecter</a>
        </div>
        <div class="col-3 mt-2 ms-5 text-white text-end">
            <p>Tous les concerts</p>
        </div>
    </div>
    <br>
    <br>
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
          <a href="#" class="btn btn-primary">Réserver</a>
          
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
          <a href="#" class="btn btn-primary">Reserver</a>
          
        </div>
    </div>
        @endif
        @empty
        <h2> Pas de concerts. </h2>
        @endforelse
<div class="col-3 mt-2 ms-5"></div>
 <div class="col-3 mt-2 ms-5"></div>
    </div>
</body>
</html>