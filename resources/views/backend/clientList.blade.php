@extends('backend.include')
@section('backtitle') client list @stop
@section('backcontent')
<div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header align-items-center d-flex bg-dark text-white">
                        <h4 class="card-title mb-0 flex-grow-1">Client list</h4>
                        <div class="flex-shrink-0">
                        </div>
                    </div>
                        <div class="table-responsive-xl card-body">
                            <table id="myDataTable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">clientName</th>
                                        <th scope="col">clientMobile</th>
                                        <th scope="col">clientEmail</th>
                                        <th scope="col">clientAddress</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(!empty($alldata) && count($alldata)>0)
                                    @foreach($alldata as $key => $client)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{$client->clientName}}</td>
                                            <td>{{$client->clientMobile}}</td>
                                            <td>{{$client->clientEmail}}</td>
                                            <td>{{$client->clientAddress}}</td>
                                            <td>
                                                <a title="Edit" id="delete" class="btn-sm btn btn-info" href="{{route('editClient', ['id'=>$client->id])}}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a title="Delete" id="delete" onclick="return confirm('are you sure to delete this record?')" class="btn-sm btn btn-danger" href="{{route('clientDel', ['id'=>$client->id])}}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6">Sorry! No data found</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                            <a href="{{ route('newClient') }}" class="btn btn-primary">Add New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
    </div>
    @stop