<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Libro Mayor') }}
        </h2>
    </x-slot>

    @livewire('book.book-register')

</x-app-layout>
