@extends('layouts.main')
@section('content')

<div class="container">
  @if(Session::has('message'))
  <div class="alert alert-success">{{Session::get('message')}}</div>
  @endif
  <div class="row">
    <div class="col-md-3">
      @include('user.left-menu')
    </div>

    <div class="col-md-7">
      <div class="card">
        <div class="card-header">
          Edit User
        </div>
        <div class="card-body">
          <form action="{{route('user.update',[$user->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label class="form-label">Name</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}">

              @if ($errors->has('name'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name')}}</strong>
              </span>
              @endif
            </div>

            <div class="form-group">
              <label class="form-label">E-mail</label>
              <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}">

              @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email')}}</strong>
              </span>
              @endif
            </div>

            <!--
            <div class="form-group">
              <label class="form-label">Password</label>

              <!--<input type="text" name="password" class="form-control @error('password') is-invalid @enderror" value="{{$password}}"> 
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="">
              @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password')}}</strong>
              </span>
              @endif
            </div>
           -->

            <div class="form-group">
              <label class="form-label">User Type</label>
              <select class="form-control select2 custom-select select2-hidden-accessible" name="user_type" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                <option value="visitor" {{$user->user_type=='visitor'?'selected':''}}>visitor</option>
                <option value="employee" {{$user->user_type=='employee'?'selected':''}}>employee</option>
                <option value="admin" {{$user->user_type=='admin'?'selected':''}}>admin</option>
              </select>
            </div>

            <div class=" mt-2 mb-0">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button class="btn btn-secondary" type="button"><a href="/docsearch">Cancel</a></button>
            </div>

          </form>
        </div>
      </div>
    </div>


  </div>
</div>
</div>


@endsection