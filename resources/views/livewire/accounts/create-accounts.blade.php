<div>
    <div class="row">
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

    <div class="row">
        <br />
        <div class="col-md-6">
            <x-jet-label for="name" value="{{ __('Nombre') }}" />
            <x-jet-input id="name" type="text" class="form-control" autofocus placeholder="name"
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
