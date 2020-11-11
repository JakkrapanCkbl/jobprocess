@extends('layouts.app')

@section('content')




@include('test/fraction')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div class="container">

    @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>
    @endif
    <a class="navbar-brand" href="https://www.jobprocess.landmarkcon.net/welcomalbum">back</a>
    <h1>{{$albums->name}}({{$albums->images->count()}})</h1>
	<div class="row">
		@foreach($albums->images as $album)
		<div class="col-sm-4">           
			<div class="item">
				<img src="{{asset('storage/'.$album->name)}}" class="img-thubnail" style="width:300px;height:300px;border:2px solid red;">
			</div>
          

           <!-- Button delete modal -->
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$album->id}}">Delete</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$album->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Do you want to delete?
                  </div>
                  <div class="modal-footer">
                        <form action="{{route('image.delete')}}" method="POST">@csrf
                            <input type="hidden" name="id" value="{{$album->id}}">
                             <button class="btn btn-danger" type="submit">Delete</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- end model -->



		</div>
		@endforeach
	</div>	
</div>

@endsection

