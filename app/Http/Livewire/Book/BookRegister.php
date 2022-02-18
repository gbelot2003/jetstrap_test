<?php

namespace App\Http\Livewire\Book;

use App\Models\Book;
use App\Models\Account;
use App\Models\AccountBook;
use Livewire\Component;

class BookRegister extends Component
{

    public $name;
    public $description;
    public Book $book;
    public AccountBook $accountBook;
    public $accounts = [];
    public $inputs = [];


    public function mount()
    {
        $this->addNew();
        $this->book = new Book();
    }


    public function addNew()
    {
        $this->inputs[] = [];
    }

    public function remove($index)
    {
        unset($this->inputs[$index]);
        $this->inputs = array_values($this->inputs);
    }

    public $rules = [
        'book.name' => 'required',
        'book.description' => 'nullable',
    ];

    public function save()
    {
        $this->validate();
        $book = $this->book->save();
        $this->resetErrorBag();
        $this->resetValidation();
        redirect()->to('/book');

    }


    public function render()
    {
        $this->accounts = Account::where('type_id', "=", '1')->get();

        return view('livewire.book.book-register', [
            'accounts' => $this->accounts,
        ]);
    }
}
