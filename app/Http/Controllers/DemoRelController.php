<?php

namespace App\Http\Controllers;

use App\Account;
use App\Role;
use Illuminate\Http\Request;

class DemoRelController extends Controller
{
    //
    public function demo()
    {
        $role = Role::find(1);
        $account = new Account();
        $account->username = 'hongluyen';
        $account->password = '123';
        $account->fullName = 'Hongluyen';
        $account->role_id = $role->id;
        $account->save();

    }

    public function show(Request $request)
    {
        $account = Account::find($request->get('id'));

        return view('demo')->with('account', $account);

    }
}
