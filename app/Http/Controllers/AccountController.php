<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Account::all();
        return view('Admin.users.list-user',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.users.create-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAccountRequest $request)
    {
        $input= $request->validated();
        Account::create($input);
        return redirect('/user')->with('create refund admin success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $detailUser,$id)
    {
        return view('Admin.users.detail-user',[
            'detailUser'=>Account::find($id)
           ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccountRequest $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $list_user)
    {
        Account::destroy($list_user->id);
        return redirect('/user')->with('Pesan','Data berhasil dihapus');
    }
}
