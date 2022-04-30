@extends('backend.include')
@section('backtitle') Trans list @stop
@section('backcontent')
<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                @if(!empty($trans))
                <div class="card-header align-items-center d-flex bg-dark text-white">
                    <h4 class="card-title mb-0 flex-grow-1">View Data for {{ $trans->clientName }}</h4>
                    <div class="flex-shrink-0">
                        
                
                    </div>
                </div>
                <!-- <table  class="table table-responsive"> -->
                <div class="table-responsive-xl">
                    <table id="myDataTable" class="table table-dark table-bordered table-hover">
                        <tr>
                            <th>Name</th>
                            <th>{{ $trans->clientName }}</th>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <th>{{ $trans->type }}</th>
                        </tr>
                        <tr>
                            <th>Purpose</th>
                            <th>{{ $trans->purpose }}</th>
                        </tr>
                        <tr>
                            <th>Amount</th>
                            <th>{{ $trans->Amount }}</th>
                        </tr>
                        <tr>
                            <th>Remark</th>
                            <th>{{ $trans->remark }}</th>
                        </tr>
                    </table>
                </div>
                @else
                <div class="alert alert-info">Sorry! No data found</div>
                @endif
            </div>
        </div>
    </div>
    <br />
</div>
@stop