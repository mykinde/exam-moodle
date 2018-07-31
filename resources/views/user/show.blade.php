@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    {{ Auth::user()->lastname }} {{ Auth::user()->firstname }} {{ Auth::user()->middlename }}

                <div class="card-header bg-primary">{{ $user->email }} Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                   

                    <table class="table  table-hover">
                       
                        <tr class="table-active">
                            <td><b>Matri/Exam No</b> </td>
                            <td>{{ $user->idnumber }}</td>
                        </tr>
                        <tr>
                            <td><b> Username</b></td>
                            <td> {{ $user->username }}</td>
                        </tr>

                        <tr>
                            <td><b><b>Password</b> </b></td>
                            <td>{{ $user->secret }} </td>
                        </tr>
                        <tr>
                            <td><b>College/Faculty </b></td>
                            <td>{{ $user->institution }}</td>
                        </tr>

                        <tr>
                            <td><b>Department/Program </b></td>
                            <td>{{ $user->department }}</td>
                        </tr>

                        <tr>
                            <td><b>Gender</b> </td>
                            <td>{{ $user->gender }}</td>
                        </tr>

                        <tr>
                            <td><b> Email</b></td>
                            <td>{{ $user->email }}</td>
                        </tr>

                        <tr>
                            <td><b>Phone</b> </td>
                            <td>{{ $user->phone }} </td>
                        </tr>
                        <tr>
                            <td><b>Registered Date</b></td>
                            <td>{{ $user->created_at }} </td>
                        </tr>
                        <tr>
                            <td><b>Updated Date</b></td>
                            <td>{{ $user->updated_at }} </td>
                        </tr>
                    </table>
                  
                    <li class="class"></li>
                   
                
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
