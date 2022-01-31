<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        $sAccounts = Account::all()->pluck('name', 'id');
        return view('accounts.index', compact('accounts', 'sAccounts'));
    }

    public function store(Request $request)
    {
        $account = Account::create($request->all());
        return redirect()->back();
    }
}
