<?php

namespace App\Http\Livewire\Accounts;

use App\Models\Account;
use App\Models\Element;
use App\Models\Group;
use Livewire\Component;



class CreateAccounts extends Component
{

    public Account $editing;
    public $elements = [];  
    public $element;
    public $groups = [];
    public $group;

    public $rules = [
        'editing.element_id' => 'required',
        'editing.group_id' => 'required', 
        'editing.reference_id' => 'nullable',
        'editing.name' => 'required',
        'editing.description' => 'nullable'
    ];

    public function mount()
    {
        $this->editing = new Account();

    }

    public function updatingEditingElementId($data)
    {
        if (!empty($data)){
            $this->groups = Group::where('element_id', $data)->get();
        }
    }

    public function clean()
    {
        $this->editing = new Account();
    }

    public function save()
    {
        $this->validate();
        $this->editing->save();
        $this->resetErrorBag();
        $this->resetValidation();
        $this->clean();
    }

    public function render()
    {
        $this->elements = Element::all();
        $grupos = $this->groups;
        return view('livewire.accounts.create-accounts', [
            'elem' => $this->elements,
            'groups' => $grupos,
        ]);
    }
}
