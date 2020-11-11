@extends('layouts.main')
@section('content')



<div class="container">
    <div class="row">
    <form action="{{route('alljobs')}}" method="GET">
    <!--    
    <div class="form-inline">
        <div class="form-group">
            <label>Position&nbsp;</label>
            <input type="text" name="position" class="form-control" placeholder="job position">&nbsp;&nbsp;&nbsp;
        </div>
        <div class="form-group">
            <label>Employment &nbsp;</label>
            <select class="form-control" name="type">
                    <option value="">-select-</option>
                    <option value="fulltime">fulltime</option>
                    <option value="parttime">parttime</option>
                    <option value="casual">casual</option>
                </select>
                &nbsp;&nbsp;
        </div>
        <div class="form-group">
            <label>category</label>
            <select name="category_id" class="form-control">
                <option value="">-select-</option>

                    
                        <option value="x1"></option>
                        <option value="x2"></option>
                   
                </select>
                &nbsp;&nbsp;
        </div>

        <div class="form-group">
            <label>address</label>
            <input type="text" name="address" class="form-control" placeholder="address">&nbsp;&nbsp;
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-search btn-primary btn-block" value="Search">

        </div>
    </div>    <br>
    -->
    
    </form>

    <div class="col-md-12">
        <div class="rounded border jobs-wrap">
            @if(count($jobs)>0)
                @foreach($jobs as $job)

                  <a href="{{route('jobs.show',[$job->id,$job->jobsize])}}" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime;">
                    <div class="company-logo blank-logo text-center text-md-left pl-3">
                      <img src="" alt="Image" class="img-fluid mx-auto">
                    </div>
                    <div class="job-details h-100">
                      <div class="p-3 align-self-center">
                        <h3>{{$job->jobcode}} : {{$job->projectname}}</h3>
                        <div class="d-block d-lg-flex">
                          <div class="mr-3"><span class="icon-suitcase mr-1"></span> {{$job->jobcode}}</div>
                          <div class="mr-3"><span class="icon-room mr-1"></span> {{str_limit($job->projectname,10)}}</div>
                          <div><span class="icon-money mr-1"></span>{{$job->jobcode}}</div>
                          <div>&nbsp;<span class="fa fa-clock-o mr-1"></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="job-category align-self-center">
                      
                      <div class="p-3">
                        <span class="text-info p-2 rounded border border-info">Completed</span>
                      </div>
                      

                    </div>  
                  </a>

                @endforeach
              @else
                No jobs found
              @endif


            </div>
        </div>

        {{$jobs->appends(Illuminate\Support\Facades\Input::except('page'))->links()}}

    </div>

</div>




@endsection

