<?php

namespace App\Http\Livewire\Accounts;

use App\Models\Account;
use App\Models\Element;
use App\Models\Group;
use App\Models\Type;
use Livewire\Component;

class CreateAccounts extends Component
{

    public Account $editing;
    public $elements = [];
    public $element;
    public $groups = [];
    public $group;
    public $subcuenta = false;
    public $accounts = [];


    public $rules = [
        'editing.element_id' => 'required',
        'editing.group_id' => 'required',
        'editing.reference_id' => 'nullable',
        'editing.name' => 'required',
        'editing.description' => 'nullable',
        'editing.type_id' => 'required',
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


    public function edit(Account $account)
    {
        $this->editing = $account;
    }

    public function save()
    {
        $this->validate();
        $this->editing->save();
        $this->resetErrorBag();
        $this->resetValidation();
        redirect()->to('/accounts');
    }

    public function render()
    {
        $this->elements = Element::all();
        $this->accounts = Account::all();

        $grupos = $this->groups;
        return view('livewire.accounts.create-accounts', [
            'elem' => $this->elements,
            'groups' => $grupos,
            'accounts' => $this->accounts,
            'types' => Type::all(),
        ]);


    }
}
