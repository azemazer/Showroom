<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Vos réservations') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Consultez vos réservations.') }}
        </p>
    </header>


        @forelse ($reservations as $reservation)
        @if ($reservation->user_id = $user->id)    
            @foreach ($concerts as $concert)
                @if ($concert->id = $reservation->concert_id)
                <h3> {{$concert->titre}} : {{$reservation->nbreservation}} réservations </h3>
                    <form method="post" action="{{ route('profile.reservationDestroy') }}" class="p-6">
                        @csrf
                        @method('delete')
            
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ $concert->artiste }}
                        </h2>
            
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $concert->description }}
                        </p>
                        <div class="mt-6 flex justify-end">
                            <x-secondary-button x-on:click="$dispatch('close')">
                                {{ __('Annuler') }}
                            </x-secondary-button>
            
                            <x-danger-button class="ml-3">
                                {{ __('Supprimer ma réservation') }}
                            </x-danger-button>
                        </div>
                    </form>
                    {{-- <x-input-label for="current_reservation" :value="{{$concert->titre}} {{$reservation->nbreservation}} réservations" />
                    <x-secondary-button> {{ __('Supprimer') }} </x-secondary-button> --}}
                @endif
            @endforeach
        @endif
        @empty 
            <h1>Pas de réservation.</h1>
    @endforelse

            {{-- @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Sauvegardé.') }}</p>
            @endif --}}
    </form>
</section>
