<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{

    public function index(Request $request)
    {
        return view('add_account');
    }

    public function addAccount(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);

        $acc = new Account;
        $acc->user_id = Auth()->id();
        $acc->name = $request->name;
        $acc->amount = 0;
        $acc->is_default = 0;
        $acc->save();
        return redirect()->route('add')->with('success','Account Created Successfully');

    }

    public function editAccount($id)
    {
        $account = Account::find($id);
        return view('edit_account',['account'=> $account]);
    }   
    public function uptAccount(Request $request,$id)
    {
        $account = Account::find($id);
        $account->name = $request->name;
        $account->save();
        return redirect()->route('home')->with('name_success','Account Name Change Successfully');
    }

    public function delAccount(Request $request,$id)
    {
        $account = Account::find($id);
        $account->delete();
        return redirect()->route('home')->with('acc_delete','Account Delete Successfully');
    }
}