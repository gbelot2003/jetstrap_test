<div class="row">
    <div class="col-md-2">
        <label for="account">Desde</label>
        <select name="cuenta" id="" class="form-control">
            <option value="">Cuenta</option>
            @foreach ($cuentas as $row)
                <option value="{{ $row->id }}">{{ $row->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-3">
        <label for="account">Debe</label>
        <input type="number" name="valor" class="form-control" />
    </div>

    <div class="col-md-3">
        <label for="account">Haber</label>
        <input type="number" name="valor" class="form-control" />
    </div>

</div>

<div class="row">
    <div class="col-md-2">
        <label for="account">Desde</label>
        <select name="cuenta" id="" class="form-control">
            <option value="">Cuenta</option>
            @foreach ($cuentas as $row)
                <option value="{{ $row->id }}">{{ $row->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-3">
        <label for="account">Debe</label>
        <input type="number" name="valor" class="form-control" />
    </div>

    <div class="col-md-3">
        <label for="account">Haber</label>
        <input type="number" name="valor" class="form-control" />
    </div>

</div>


<div class="row">
    <div class="col-md-8">
        <label for="description">Description</label>
        <textarea name="description" name="description" class="form-control" cols="30" rows="4"></textarea>
    </div>
</div>