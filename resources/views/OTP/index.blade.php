<x-guest-layout>
   

    <form method="POST" action="{{ route('otp.store') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="number" :value="__('OTP')" />

            <x-text-input id="number" class="block mt-1 w-full"
                            type="number"
                            name="code"
                            required  />

            <x-input-error :messages="$errors->get('code')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('save') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
