@extends('layouts.app')

@section('content')
<div class="container">
    
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('user.admin') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('user.create') }}">Create</a></li>
          <li class="breadcrumb-item active" aria-current="page">Show </li>
          <li class="breadcrumb-item active" aria-current="page">Edit </li>
          <li class="breadcrumb-item"><a href="{{ route('search') }}">Seach</a></li>
          <li class="breadcrumb-item active" aria-current="page">User </li>
        </ol>
      </nav>

    <div class="row justify-content-center">
        <div class="col-md-10">
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


                  <!--Table-->
<table class="table table-sm">

    <!--Table head-->
    <thead>
        <tr>
            <th>#</th>
            <th>LastName</th>
            <th>FirstName</th>
            <th>OtherName</th>
            <th>Username</th>
            <th>College</th>
            <th>Department</th>
            <th>Gender</th>
            <th colspan="2">Admin</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        @foreach ($users as $user)
        <tr>
                
            <th scope="row">{{++$i}}</th>
            <td>{{ $user->lastname }}</</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->middlename }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->institution }}</td>
            <td>{{ $user->department }}</td>
            <td>{{ $user->gender }}</td>
            <td><a class="btn btn-info" href="{{ route('user.show',$user->id) }}">Show</a></td>
            <td><a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a></td>
               
        </tr>
         @endforeach
        
    {{--    <tr>
            <th scope="row">3</th>
            <td colspan="5">Larry the Bird</td>
            <td>@twitter</td>
        </tr>---}}
    </tbody>
    <!--Table body-->

</table>
<!--Table-->
                  
                    <li class="class"></li>
                    {!! $users->links() !!}
                   
                
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
