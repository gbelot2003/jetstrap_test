<h2>Accounts</h2>

<div>
    <form action="{{ route("account.store") }}" method="post">
        @csrf

        <p>
            <label for="reference_id">Reference</label>
            <select name="reference_id" id="reference_id">
                <option value="">---------</option>
                @foreach ($sAccounts as $key => $opt)
                    <option value="{{ $key }}">{{ $opt }}</option>
                @endforeach
            </select>
        </p>

        <p>
            <label for="code">Code</label>
            <input type="number" name="code" id="code">
        </p>
        <p>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>
</div>
<hr />
<table>
    <thead>
        <th>Code</th>
        <th>Name</th>
    </thead>
    <tbody>
        @foreach ($accounts as $row)
            @foreach ($row->childs as $child)
                <tr>

                    <td>{{ $child->code }}</td>
                    <td>{{ $child->name }}</td>

                </tr>
            @endforeach
        @endforeach

    </tbody>
</table>
