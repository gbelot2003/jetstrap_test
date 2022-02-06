<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }


    public function create()
    {
        return view('accounts.create');
    }


    public function edit($id)
    {
        $account = Account::findOrFail($id);
        return view('accounts.edit', compact('account'));
    }
}
