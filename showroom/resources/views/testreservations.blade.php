@extends("template") @section("title", "Concerts") @section("content")
    @foreach ($concert->reservations as $reservation)
        @if ($reservation->user_id = $user->id)    
            <h1>{{$concert->titre}}</h1>
            <span> {{$reservation->nbreservation}} réservations </span>
        @endif
    @endforeach
@endsection