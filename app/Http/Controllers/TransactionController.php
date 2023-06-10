<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\transaction;
use App\Models\event;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function pushTransaction(Request $request){
        $pushTrans = new Transaction();
        $pushTrans->transaction_date = Carbon::now()->toDateString();
        $pushTrans->users_id = $request->userid;
        $pushTrans->event_id = $request->eventid;
        $pushTrans->save();

        return redirect()->route('transactionHistory');
    }

    public function showAllTransaction(){
        $transaction = DB::table('transactions')
        ->join('events', 'events.id', '=', 'transactions.event_id')
        ->select('transactions.id as transaction_id', 'transactions.transaction_date', 'events.eventname', 'events.singleprice')
        ->get();
        return view('transaction.transaction', compact('transaction'));
    }

    public function deleteLogic(Request $request){
        transaction::find($request->id)->delete();
        return redirect()->back();
    }

    public function checkout($id){
        transaction::where('id', $id)->delete();
        return redirect()->route('HomepageUser');
    }
}
