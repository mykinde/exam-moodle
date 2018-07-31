@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
               
            <div class="card">
                <div class="card-header bg-primary">Search Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary" href="{{ route('search') }}">Search Home</a>
                    You are logged in!
                   

                    <form method="GET" action="{{ route('search') }}">
                            <div class="row">
                            <div class="col-md-6">
                            <input type="text" name="search" class="form-control" placeholder="Search" value="{{ old('search') }}">
                            </div>
                            <div class="col-md-6">
                            <button class="btn btn-success">Search</button>
                            </div>
                            </div>
                            </form>
                            
                            
                            <table class="table table-bordered">
                            <tr>
                            <th>SN</th>
                            <th colspan="3">Names</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Dept</th>
                            </tr>
                            {{--@if(isset($users))--}}
                            @if($users->count())
                            @foreach($users as $user)
                            <tr>
                            <td>{{ $user->id }}</td>
                            <td colspan="3">{{ $user->lastname }} {{ $user->firstname }} {{ $user->middlename }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->department }}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                            <td colspan="7">Result not found.</td>
                            </tr>
                            @endif
                            </table>
                  
                    <li class="class"></li>
                   
                
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
