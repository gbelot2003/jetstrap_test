<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Libro Diario') }}
        </h2>
        <div class="flex align-items-end">
            <span class="float-right">
                <a class="btn btn-primary" href="{{ route('book.create') }}">Nuevo Registro</a>
            </span>

        </div>

    </x-slot>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Fecha</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registers as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->description }}</td>
                        <td>{{ $row->created_at }}</td>
                        @foreach ($row->transaction as $trans)
                            <tr style="background-color: rgb(214, 202, 202)">
                                <td></td>
                                <td></td>
                                <td>{{ $trans->account->code }}</td>
                                <td>{{ $trans->account->name }}</td>
                                <td>{{ $trans->debit }}</td>
                                <td>{{ $trans->credit }}</td>
                            </tr>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $registers->links() }}

    </div>
</x-app-layout>
