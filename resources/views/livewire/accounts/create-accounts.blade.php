<div>
    <div class="row mb-3">
        <div class="col-md-3">
            <label for="element_id">Tipo</label>
            <select name="element" class="form-control" wire:model="editing.element_id">
                <option class="" value="">Seleccione un Tipo</option>
                @foreach ($elem as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-3">
            <label for="group_id">Grupo</label>
            <select name="group" class="form-control" wire:model="editing.group_id">
                <option class="" value="">Seleccione un Grupo</option>
                @foreach ($groups as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="row mb-3">
        <div class="col-md-12">
            <input type="checkbox" id="subcuenta" name="subcuenta" wire:model="subcuenta">
                <label for="subcuenta">Sub Cuenta</label>
            </input>
        </div>
        @if ($subcuenta)
            <div class="col-md-3">
                <label for="reference_id">SubCuenta de:</label>
                <select name="references" class="form-control" wire:model="editing.reference_id">
                    <option class="" value="">Seleccione una Referencia</option>
                    @foreach ($accounts as $row)
                        <option value="{{ $row->id }}">{{$row->group->name }} - {{ $row->name }}</option>
                    @endforeach
                </select>
            </div>
        @endif
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
                <label for="type_id">Tipo de Cuenta:</label>
                <select name="tipo" class="form-control" wire:model="editing.type_id">
                    <option class="" value="">Que Tipo de Cuenta es?</option>
                    @foreach ($types as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @endforeach
                </select>
            </div>
    </div>

    <div class="row mb-3">
        <br />
        <div class="col-md-6">
            <x-jet-label for="name" value="{{ __('Nombre') }}" />
            <x-jet-input id="name" type="text" class="form-control" autofocus placeholder="Nombre"
                wire:model="editing.name" />
            <x-jet-input-error for="editing.name" class="mt-2" />
        </div>
    </div>

    <div class="row  mb-5">
        <div class="col-md-6">
            <x-jet-label for="name" value="{{ __('Descripción') }}" />
            <textarea name="description" id="description" class="form-control" rows="4"
                wire:model="editing.description"></textarea>
        </div>
    </div>
    <div class="row">

        <div class="col-md-3">
            <x-jet-button class="btn btn-primary" wire:click="save">
                {{ __('Create') }}
            </x-jet-button>
        </div>
    </div>
</div>
