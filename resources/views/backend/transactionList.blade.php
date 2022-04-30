@extends('backend.include')
@section('backtitle') Transaction List @stop
@section('backcontent')
<div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header align-items-center d-flex bg-dark text-white">
                        <h4 class="card-title mb-0 flex-grow-1">Transaction List</h4>
                        <div class="flex-shrink-0">
    
                        </div>
                    </div>
                        <div class="table-responsive-xl card-body">
                            <table id="myDataTable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">clientName</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Purpose</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Remark</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(count($alldata)>0)
                                    @foreach($alldata as $key => $trans)
                                        @php
                                            $singleClient = \App\Models\ClientList::find($trans->clientName);
                                        @endphp
                                        <tr>
                                            <th scope="row">{{ $key+1 }}</th>
                                            <td>{{ $singleClient->clientName }}</td>
                                            <td>{{ $trans->type }}</td>
                                            <td>{{ $trans->purpose }}</td>
                                            <td>{{ $trans->Amount }}</td>
                                            <td>{{ $trans->remark }}</td>
                                            <td>
                                                <a title="Edit" id="edit" class="btn-sm btn btn-info" href="{{route('editTrans', ['id'=>$trans->id])}}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a title="Delete" id="delete" onclick="return confirm('are you sure to delete this record?')" class="btn-sm btn btn-danger" href="{{route('transDel', ['id'=>$trans->id])}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7"><div class="alert alert-info">Sorry! No data found</div></td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                            <a href="{{ route('newTransaction') }}" class="btn btn-primary">New Transaction</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
    </div>
    @stop