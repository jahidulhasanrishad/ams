@extends('backend.include')
@section('backtitle') new entry @stop
@section('backcontent')
<div class="card">
    <div class="card-header">
        <div class="card-title">
            <h2>Add New Client</h2>
        </div>
    </div>
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
    <form action="{{ route('saveClient') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="clientName" class="form-label">Name</label>
            <input type="text" class="form-control" id="clientName" name="clientName" placeholder="Enter client name">
        </div>
        <div class="mb-3">
            <label for="clientMobile" class="form-label">Mobile</label>
            <input type="mobile" class="form-control" id="clientMobile" name="clientMobile" placeholder="Enter client mobile">
        </div>
        <div class="mb-3">
            <label for="clientMail" class="form-label">Email</label>
            <input type="email" class="form-control" id="clientMail" name="clientMail" placeholder="Enter client mail">
        </div>
        <div class="mb-3">
            <label for="clientAddress" class="form-label">Address</label>
            <textarea class="form-control" id="clientAddress"  cols="30" rows="6" name="clientAddress" placeholder="Enter client address"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        <a href="{{ route('clientList')}}" class="btn btn-info btn-sm">Client List</a>
    </form>
  </div>
</div>
@stop 