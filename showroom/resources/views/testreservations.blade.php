@extends("template") @section("title", "Concerts") @section("content")
    @forelse ($reservations as $reservation)
        @if ($reservation->user_id = $user->id)    
            @foreach ($concerts as $concert)
                @if ($concert->id = $reservation->concert_id)
                    <h1>{{$concert->titre}}</h1>
                @endif
            @endforeach
            <span> {{$reservation->nbreservation}} réservations </span>
        @endif
        @empty 
            <h1>Pas de réservartion.</h1>
    @endforelse
@endsection