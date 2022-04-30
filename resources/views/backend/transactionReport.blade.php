@extends('backend.include')
@section('backtitle') Transaction Report @stop
@section('backcontent')

<div class="card">
<h2 class="card-header">Transaction Repoter Generate</h2>
  <div class="card-body">
  <form action="#" class="row g-3">
  <div class="col-md-12">
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
  <div class="col-md-6">
    <label for="inputState" class="form-label">From Date</label>
      <input type="date" name="date" class="form-control">
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label">To Date</label>
      <input type="date" name="date" class="form-control">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Generate</button>
  </div>
</form>
  </div>
</div>
@stop