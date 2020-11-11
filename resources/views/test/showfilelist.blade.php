

@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-8">
    		<div class="card">
    			@foreach($files as $file)
    				
    				<a href="{{asset('storage/'.substr($file, 7))}}">{{ substr($file, 7) }}</a> <br>
    				
    			@endforeach
    		</div>
    	</div>      
    </div>
</div>



@endsection