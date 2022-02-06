<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Cuentas') }}
        </h2>
    </x-slot>

    @livewire('accounts.create-accounts')

    <div class="row">
        <div class="col-md-12">
            <hr />
            <table class="table">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($accounts as $row)
                        <tr>
                            <td>{{ $row->element->name }}</td>
                            <td>{{ $row->code }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->description }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
