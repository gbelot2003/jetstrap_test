<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Edición de Cuentas') }}
        </h2>
    </x-slot>

    @livewire('accounts.edit-accounts', ['editing' => $account])

</x-app-layout>
