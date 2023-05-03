<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Vos réservations') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Consultez vos réservations.') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.reservations') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_reservation" :value="__('ConcertName')" />
            <x-secondary-button> {{ __('Supprimer') }} </x-secondary-button>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Sauvegarder') }}</x-primary-button>

            {{-- @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Sauvegardé.') }}</p>
            @endif --}}
        </div>
    </form>
</section>
