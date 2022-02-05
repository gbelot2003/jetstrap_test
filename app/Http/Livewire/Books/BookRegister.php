<?php

namespace App\Http\Livewire\Books;

use App\Models\Account;
use Livewire\Component;

class BookRegister extends Component
{



    public function render()
    {
        $cuentas = Account::all();
        return view('livewire.books.book-register', compact('cuentas'));
    }
}
