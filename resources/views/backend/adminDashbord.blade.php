@extends('backend.include')
@section('backtitle') AMS Dashboard @stop
@section('backcontent')
<div class="card">
  <div class="card-body text-center">
    <h1>Welcome to AMS Dashboard</h1>
    <a href="{{ route('clientList') }}" class="btn btn-primary text-white"><i class="fas fa-users"></i><br>Client Manage</a>
    <a href="{{ route('goTrans') }}" class="btn btn-primary text-white"><i class="fas fa-money-bill"></i><br>Transactions</a>
  </div>
</div>
@stop