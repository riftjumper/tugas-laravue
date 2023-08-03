<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // -- Query Builder-- //

        // $transaction= DB::table('transactions')
        //             ->join('users','transactions.user_id','=','users.id')
        //             ->get();
        // return $transaction;

        // -- Test eloquent relationship transaction->user (belongsTo) -- //
        
        // $transaction= Transaction::with('user')->get();
        // return $transaction;
        
        // -- Test eloquent relationship user->transaction (hasMany) -- //
        
        // $user = User::with('transactions')->get();
        // return $user;
        
        // -- Test eloquent relationship transaction->product -- //

        $transactions= Transaction::with('user','product')->get();

        return view('admin.transaction.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.transaction.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
