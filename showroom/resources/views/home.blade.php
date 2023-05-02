@extends("template") @section("title", "Concerts") @section("content")
    <div class="d-flex justify-content-center">
        @forelse ($concert as $show)
        @if ($show->full)
        <div class="row ms-1">
            <div class="col ms-5">
                <img src="{{$show->imgartiste}}" width="640" height="450">
            </div>
            <div class="col mt-4">
                <h2>{{$show->titre}}</h2>
                <h3>{{$show->artiste}}</h3>
                <a href="/" class="btn btn-dark" title = "Réserver pour" role="button"> Réserver </a>
            </div>
        </div>
        @else
        <div class="row ms-1">
            <div class="col ms-5">
                <img src="{{$show->imgartiste}}" width="640" height="450">
            </div>
            <div class="col mt-4">
                <h2>{{$show->titre}}</h2>
                <h3>{{$show->artiste}}</h3>
                <a href="/" class="btn btn-dark" title = "Réserver pour" role="button"> Réserver </a>
            </div>
        </div>
        @endif
        @empty
        <h2> Pas de concerts. </h2>
        @endforelse
    </div>
@endsection