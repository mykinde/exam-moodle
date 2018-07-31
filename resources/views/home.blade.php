@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary">{{ Auth::user()->email }} Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                   

                    {{ Auth::user()->lastname }} {{ Auth::user()->firstname }} {{ Auth::user()->middlename }}
                    <table class="table  table-hover">
                       
                        <tr class="table-active">
                            <td><b>Matri/Exam No</b> </td>
                            <td>{{ Auth::user()->idnumber }}</td>
                        </tr>
                        <tr>
                            <td><b> Username</b></td>
                            <td> {{ Auth::user()->username }}</td>
                        </tr>

                        <tr>
                            <td><b><b>Password</b> </b></td>
                            <td>{{ Auth::user()->secret }} </td>
                        </tr>
                        <tr>
                            <td><b>College/Faculty </b></td>
                            <td>{{ Auth::user()->institution }}</td>
                        </tr>

                        <tr>
                            <td><b>Department/Program </b></td>
                            <td>{{ Auth::user()->department }}</td>
                        </tr>

                        <tr>
                            <td><b>Gender</b> </td>
                            <td>{{ Auth::user()->gender }}</td>
                        </tr>

                        <tr>
                            <td><b> Email</b></td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>

                        <tr>
                            <td><b>Phone</b> </td>
                            <td>{{ Auth::user()->phone }} </td>
                        </tr>
                        <tr>
                            <td><b>Registered Date</b></td>
                            <td>{{ Auth::user()->created_at }} </td>
                        </tr>
                        <tr>
                            <td><b>Updated Date</b></td>
                            <td>{{ Auth::user()->updated_at }} </td>
                        </tr>
                    </table>
                  
                    <li class="class"></li>
                   
                
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
