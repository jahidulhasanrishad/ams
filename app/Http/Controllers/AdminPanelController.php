<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientList;
use App\Models\transaction;

class AdminPanelController extends Controller
{
    public function saveClient(Request $requ){
        $chk = ClientList::where(['clientEmail'=>$requ->clientMail])->get();
        // return count($chk);
        if(count($chk)>0):
            return back()->with('error','Sorry! Vi, apnar table e already eta ache');
        else:
            $client = new ClientList();
            $client->clientName     = $requ->clientName;
            $client->clientMobile   = $requ->clientMobile;
            $client->clientEmail    = $requ->clientMail;
            $client->clientAddress  = $requ->clientAddress;

            if($client->save()):
                return back()->with('success','Data entry successful');
            else:
                return back()->with('error','Data entry failed');
            endif;
        endif;
    }

    public function saveTrans(request $req){

        $trans = new transaction();
        $trans->clientName =  $req->clientName;
        $trans->type       =  $req->type;
        $trans->purpose    =  $req->purpose;
        $trans->Amount     =  $req->Amount;
        $trans->remark     =  $req->remark;


        if($trans->save()):
            return back()->with('success','data entry successfully');
        else:
            return back()->with('error','data entry failed');
        endif;

    }
    public function updateTrans(Request $requ){
        $trans = transaction::find($requ->id);
        $trans->clientName   = $requ->clientName;
        $trans->type = $requ->type;
        $trans->purpose  = $requ->purpose;
        $trans->Amount = $requ->Amount;
        $trans->remark = $requ->remark;

        $trans->save();
            return back()->with('success','Data Update Successfually');
    }
    
}
