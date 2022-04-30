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
    <form action="{{ route('saveTrans')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="clientName" class="form-label">Client Name</label>
            <select name="clientName" id="clientName" class="form-control" required>
                @php
                    $clientList = \App\Models\ClientList::orderBy('id','DESC')->get();
                @endphp
                @if(!empty($clientList) && count($clientList)>0)
                    @foreach($clientList as $cl)
                        <option value="{{ $cl->id }}">{{ $cl->clientName }}</option>
                    @endforeach
                @else
                    <option value="">-</option>
                @endif
            </select>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select name="type" class="form-select" aria-label="Default select example">
            <option selected>Select Type</option>
            <option value="Debit">Debit</option>
            <option value="Credit">Credit</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Purpose" class="form-label">Purpose</label>
            <select name="purpose" class="form-select" aria-label="Default select example">
            <option selected>Select Purpose</option>
            <option value="Bank">Bank</option>
            <option value="Bkash">Bkash</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Amount" class="form-label">Amount</label>
            <input type="number" class="form-control" id="Amount" name="Amount" placeholder="Amount">
        </div>
    
        <div class="mb-3">
            <label for="remark" class="form-label">Remark</label>
            <textarea class="form-control" id="remark"  cols="30" rows="6" name="remark" placeholder="Remark"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('goTrans')}}" class="btn btn-info btn-sm"> <i class="ri-building-2-line align-middle"></i>Trans_List</a>
    </form>
  </div>

</div>
@stop 