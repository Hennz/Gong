@extends('layouts.app')

@section('content')
<div class="container">
    <div class='row'>
        <div class='col-md-12 text-center'>
            <div class='page-header'>
                <h3>{{ Auth::user()->name }}</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Profile <a href="{{ route('home')}}" class="btn-lg">Back</a></div>
                <div class="panel-body">
                    <p>These are your account details, you can change them using the edit button below</p>
                </div>
                <table class='table table-condensed'>
                    <thead>
                    <th colspan="2">Profile</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Full Name</td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class='row'>
        <div class='col-md-12'>
            <div class='text-center'>
                <a href='' class='btn-lg btn-default'>Edit Profile</a>
            </div>
        </div>
    </div>
</div>
@endsection
