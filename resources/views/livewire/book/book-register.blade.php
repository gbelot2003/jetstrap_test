<div class="row">
    <fieldset class="col-md-12">
        <legend>Transacción</legend>
        <div class="col-md-12 mb-3">
            <input type="text" name="name" placeholder="Nombre" class="form-control" wire:model="book.name">

        </div>
        <div class="col-md-12">
            <textarea name="description" cols="10" rows="5" class="form-control" placeholder="Descrición"
                wire:model="book.description"></textarea>

        </div>
        <h5>Montos</h5>

        <div class="row">
            <div class="col-md-12">
                <button class="btn-info" wire:click="addNew">+</button>
            </div>
        </div>
    </fieldset>
    @if ($this->inputs)
        <fieldset class="col-mb-12 mb-3" style="border: 0.5px dotted gray; padding-left:16px; padding-top: 10px">
            @foreach ($this->inputs as $key => $item)
                <div class="row">
                    <div class="col-md-5 mb-2">
                        <select class="form-control" wire:model="inputs.{{ $key }}.account">
                            <option value="">Seleccione una cuenta</option>
                            @foreach ($accounts as $value => $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-md-3 mb-2">
                        <input type="number" wire:model="inputs.{{ $key }}.debit" class="form-control"
                            placeholder="Debe">
                    </div>
                    <div class="col-md-3 mb-2">
                        <input type="number" wire:model="inputs.{{ $key }}.credit" class="form-control"
                            placeholder="Haber">
                    </div>
                    <div class="col-md-1">
                        <button class="btn-danger" wire:click="remove({{ $key }})">X</button>
                    </div>
                </div>
            @endforeach
        </fieldset>
    @endif
    <div class="col-md-12">
        <button wire:click="save" class="btn btn-primary">Guardar</button>
    </div>

</div>
