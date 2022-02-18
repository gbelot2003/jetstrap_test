<?php

namespace App\Http\Livewire\Book;

use App\Models\Book;
use App\Models\Account;
use Livewire\Component;
use App\Models\AccountBook;
use Illuminate\Support\Facades\DB;

class BookRegister extends Component
{

    public $name;
    public $description;
    public Book $book;
    public AccountBook $accountBook;
    public $accounts = [];
    public $inputs = [];
    public $creditTotal = 0;
    public $debitTotal = 0;

    public function mount()
    {
        $this->addNew();
        $this->book = new Book();
        $this->accountBook = new AccountBook();
    }


    public function addNew()
    {
        $this->inputs[] = [
            'account_id' => '',
            'debit' => 0,
            'credit' => 0
        ];
    }

    public function updatedInputs()
    {
    }

    public function remove($index)
    {
        unset($this->inputs[$index]);
        $this->inputs = array_values($this->inputs);
    }



    public $rules = [
        'book.name' => 'required',
        'book.description' => 'nullable',
        'inputs' => 'required|array|between:2,6',
        'inputs.*.account_id' => 'required',
        'inputs.*.credit' => 'required',
        'inputs.*.debit' => 'required',
    ];

    public function save()
    {
        $this->validate();
        DB::transaction(function () {
            $book = $this->book->save();
            foreach ($this->inputs as $input) {
                $this->accountBook->create([
                    'book_id' => $this->book->id,
                    'account_id' => $input['account_id'],
                    'debit' => $input['debit'],
                    'credit' => $input['credit']
                ]);
            }
        });

        $this->resetErrorBag();
        $this->resetValidation();
        redirect()->to('/book');
    }


    public function render()
    {
        $this->accounts = Account::where('type_id', "=", '1')->get();
        //$total = count($this->inputs);
        //$this->creditTotal =+ $total;

        $this->creditTotal = array_reduce($this->inputs, function ($carry, $item) {
            return $carry + $item['credit'];
        });

        $this->debitTotal = array_reduce($this->inputs, function ($carry, $item) {
            return $carry + $item['debit'];
        });



        return view('livewire.book.book-register', [
            'accounts' => $this->accounts,
        ]);
    }
}
