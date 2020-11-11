@extends('layouts.usermenu')
@section('content')
      <div class="container"> 
        <div class="row">
		<div class="col-md-12"> <br />
			<h3 align="center">เพิ่มข้อมูล</h3> <br/>
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>@foreach($errors->all() as $error)
                                <li>{{$error}}</li>			
                        @endforeach</ul>
                            </div>
                        @endif
                        @if(\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ \Session::get('success') }}</p>
                            </div>
                        @endif
                        
			<form method="post" action="{{url('jobproject')}}">
				{{csrf_field()}}
				<div class="form-group">
					<input type="text" name="jobcode" class="form-control" placeholder="jobcode" />
				</div>
				<div class="form-group">
					<input type="text" name="projectname" class="form-control" placeholder="projectname" />
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" />
				</div>
			</form>
		</div>
	</div>	
    </div>
@endsection