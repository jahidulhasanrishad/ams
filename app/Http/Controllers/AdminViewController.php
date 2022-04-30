<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientList;
use App\Models\transaction;

class AdminViewController extends Controller
{
    public function newClient(){
        return view('backend.newClient');
    }

    public function clientList(){
        $client['alldata'] = ClientList::all();
       return view('backend.clientList',$client);
    }

    public function viewProfile($id){
        $client = ClientList::find($id);
       return view('backend.viewProfile',['client'=>$client]);
    }

    public function clientDel($id){
        $client = ClientList::find($id);
        $client->delete();
        return back()->with('success','client data delete success');
    }

    public function editClient($id){
        $editData = ClientList::find($id);
        return view('backend.updateClient',compact('editData'));
     }

    public function updateClientPage(Request $requ){
        $client = ClientList::find($requ->id);
        $client->clientName   = $requ->clientName;
        $client->clientMobile = $requ->clientMobile;
        $client->clientEmail  = $requ->clientMail;
        $client->clientAddress = $requ->clientAddress;

        $client->save();
          return back()->with('success','Data Update Successfually');
    }
    public function dashbord(){
        return view('backend.newEntry');
    }

    // transaction controller start here
    public function newTransaction(){
        return view('backend.newTransaction');
    }

    public function goTrans(){
        $transaction = transaction::all();
        return view('backend.transactionList',['alldata'=>$transaction]);
    }

    public function transDel($id){
        $trans = transaction::find($id);
        $trans->delete();
        return back()->with('');
    }


    public function viewTrans($id){
        $trans = transaction::find($id);
        return view('backend.viewTrans',['trans'=>$trans]);
    }

    public function editTrans($id){
        $editData = transaction::find($id);
        return view('backend.editTrans',compact('editData'));
    }
    // transaction controller end here

//    TransactionReort controler start here

            public function transactionReport(){
                return view('backend.transactionReport');
            }
//    TransactionReort controler start here


}

