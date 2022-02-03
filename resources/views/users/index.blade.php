<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    @livewire('users.users')

</x-app-layout>