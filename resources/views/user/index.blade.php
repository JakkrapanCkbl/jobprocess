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
            <td>{{$user->email}}</td>
            <td>{{$user->user_type}}</td>
            <td>{{$user->email_verified_at}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>

            <td><a href="{{route('user.edit',[$user->id])}}"><i class="fa fa-pencil-square-o" style="color:white"></i></a></td>
            <td><a href="#"><i class="fa fa-trash" style="color:white" data-toggle="modal" data-target="#deleteModal{{$user->id}}"></i></a></td>

        </tr>
        <!-- Modal -->
        <div class="modal fade" id="deleteModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Do you want to delete this user?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ $user->name }}
                    </div>

                    <form action="{{route('user.delete')}}" method="POST">
                        @csrf
                        <div class="modal-footer">
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-danger">
                                Delete
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

    </table>


</div>

<style type="text/css">
    .fa {
        color: white;
    }
</style>

@endsection