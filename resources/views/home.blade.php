@extends('layouts.app')

@section('content')
<div class="container">
    <div class='row'>
        <div class='col-md-12 text-center'>
            <div class='page-header'>
                <h3>Welcome {{ Auth::user()->name }}</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div id="dashboard"></div>
                <div class='panel-body'>
                    <ul class='list-group'>
                        <li class='list-group-item'><a href="{{ route('profile') }}" class='btn-lg'>My Account</a></li>
                        <li class='list-group-item'><a href="{{ route('users') }}" class='btn-lg'>Users</a></li>
                        <li class='list-group-item'><a href="{{ route('inventory') }}" class='btn-lg'>Inventory</a></li>
                        <li class='list-group-item'><a href="{{ route('checkout') }}" class='btn-lg'>Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
