@extends('backend.include')
@section('backtitle') new entry @stop
@section('backcontent')
<div class="card">
  <div class="card-body">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-warning">
            {{ Session::get('error') }}
        </div>
    @endif
    <form action="{{ route('updateTrans')}}" method="POST">
    <input type="hidden" name="id" value="{{ $editData->id }}">
        @csrf
        <div class="mb-3">
            <label for="clientName" class="form-label">Name</label>
            <input type="text" value="{{$editData->clientName}}" class="form-control" id="clientName" name="clientName" placeholder="Enter client name">
        </div>
        <div class="mb-3">
        <label for="type" class="form-label">Type</label>
            <select name="type" class="form-select" aria-label="Default select example">
            <option selected>{{$editData->type}}</option>
            <option value="Debit">Debit</option>
            <option value="Credit">Credit</option>
            </select>
        </div>
        <div class="mb-3">
        <label for="Purpose" class="form-label">Purpose</label>
            <select name="purpose" class="form-select" aria-label="Default select example">
            <option selected>{{$editData->purpose}}</option>
            <option value="Bank">Bank</option>
            <option value="Bkash">Bkash</option>
            </select>
        </div>
        <div class="mb-3">
        <label for="Amount" class="form-label">Amount</label>
            <input type="number" value="{{$editData->Amount}}" class="form-control" id="Amount" name="Amount" placeholder="Amount">
        </div>
        <div class="mb-3">
            <label for="remark" class="form-label">Remark</label>
            <textarea class="form-control" id="remark"  cols="30" rows="6" name="remark" placeholder="Remark">{{$editData->remark}}</textarea>
        </div>
        <button type="submit" value="submit" class="btn btn-primary">update</button>
        <a href="{{ route('clientList')}}" class="btn btn-info btn-sm"><i class="ri-building-2-line align-middle"></i>Trans_List</a>
        
    </form>
  </div>

</div>
@stop 