@extends('layouts.main')
@section('content')

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div class="container">
    <div class="container">
        @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>
        @endif
    </div>
    <h1>User List</h1>

</div>
<div class="container">

    <table class="table table-dark">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>password</th>
            <th>email</th>
            <th>user_type</th>
            <th>email_verified_at</th>
            <th>created_at</th>
            <th>updated_at</th>

            <td><a href="/user/create"><i class="fa fa-plus fa-2x" style="color:white"></i></a></td>
        </tr>

        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->user_type}}</td>
            <td>{{$user->email_verified_at}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>

            <td><a href="{{route('user.restore',[$user->id])}}"><button>Restore</button></a></td>
        </tr>
        @endforeach

    </table>


</div>

<style type="text/css">
    .fa {
        color: white;
    }
</style>

@endsection