<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Cuentas') }}
        </h2>
        <div class="flex align-items-end">
            <span class="float-right">
                <a class="btn btn-primary" href="{{ route('account.create') }}">Crear Cuenta</a>
            </span>

        </div>

    </x-slot>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Grupo</th>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($accounts as $row)
                        <tr>
                            <td>{{ $row->element->name }}</td>
                            <td>{{ $row->group->name }}</td>
                            <td>{{ $row->code }}</td>
                            <td>
                                <a href="{{ route('account.edit', $row->id) }}">{{ $row->name }}</a>
                            </td>
                            <td>{{ $row->description }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
