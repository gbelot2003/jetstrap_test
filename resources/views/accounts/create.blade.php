<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Creación de Cuentas') }}
        </h2>
    </x-slot>
    @livewire('accounts.create-accounts')
</x-app-layout>
