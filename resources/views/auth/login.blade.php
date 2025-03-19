<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>

    <form method="POST" action="/login">

        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    {{-- for the last email address --}}
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-1">
                            <x-form-input name="email" id="email" type="email" required />
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    {{-- for the last password --}}
                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-1">
                            <x-form-input name="password" id="password" type="password" required />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>

                </div>
            </div>
        </div>
        {{-- Button  --}}
        <div class="mt-4 flex items-center justify-start gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Log In</x-form-button>
        </div>
    </form>

</x-layout>
