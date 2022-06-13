<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Medicine;
use App\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Transaction::all();
        return view('Transaction.transaction', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataBuyer = Buyer::all();
        $dataUser = User::all();

        return view('transaction.create', compact('dataBuyer', 'dataUser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Transaction;
        $data->transaction_date = $request->transaction_date;
        $data->buyer_id = $request->buyer_id;
        $data->user_id = $request->user_id;
        $data->save();
        return redirect('transaction')->with('status', 'Transaction is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        // dd($transaction);
        $transaction = Transaction::find($transaction);
        return view('transaction.show', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function showAjax(Request $request)
    {
        $id = $request->get('id');
        $data = Transaction::find($id);
        $products = $data->medicines;
        return response()->json(array(
            'msg' => view('transaction.viewtransaction', compact('data', 'products'))->render()
        ), 200);
    }

    public function submit_front(){
        $this->authorize('checkmember');
        $cart = session()->get('cart');
        $user = \Auth::user();
        $t = new Transaction;
        $t ->buyer_id = $user->id;
        $t->transaction_date = Carbon::now()->toDateTimeString();
        $t->save();

        $totalharga = $t->insertProduct($cart,$user);
        $t->total = $totalharga;
        $t->save();

        session()->forget('cart');
        return redirect('home');
    }

    public function form_submit_front()
    {
        $this->authorize('checkmember');
        return view('frontend.checkout');
    }

    public function print_detail($id_transaction)
    {
        $transaction = Transaction::find($id_transaction);
        $pdf = PDF::loadview('transaction.detailpdf', ['transaction'=>$transaction]);
        $name = "laporan-pemesanan" .$transaction->id . $transaction->transaction_date. ".pdf";
        return $pdf->download($name);
        
    }
}
