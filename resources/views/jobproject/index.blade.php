@extends('layouts.usermenu')
@section('content')
         
   <div class="container">
    <div class="row">
        <div class="col-md-12">
        <h3>Work in progress</h3>
        <div align="right"><a href="{{route('jobproject.create')}}"><button class="btn btn-primary btn-sm">เพิ่มข้อมูล</button></a></div>
        <table class="table">
            <thead>
                <th>no</th>
                <th>code</th>
                <th>projectname</th>                 
                <th>client</th>
                <th>customer</th>
                <th>prop type</th>
                <th>Prop size</th>
                <th>prop location</th>
                <th>LC duedate</th>
                <th>Action</th>
                
            </thead>
            <tbody>
                @foreach($jobs as $job)
                <tr>                    
                    <td>{{ ++$i }}</td>
                    <td>{{$job->jobcode}}</td> 
                    <td>{{$job->projectname}}</td>                   
                    <td>{{$job->client}}</td>
                    <td>{{$job->customer}}</td>
                    <td>{{$job->prop_type}}</td>
                    <td>{{$job->prop_size}}</td>
                    <td>{{$job->proplocation}}</td>
                    <td>{{$job->lcduedate}}</td>  
                    <td><a href="{{route('jobs.show',[$job->id,$job->jobsize])}}">
                            <button class="btn btn-success btn-sm">View</button>
                        </a> 
                    </td>
                    <td><a href="{{action('JobProject_Controller@edit',$job['id'])}}" class="btn btn-primary btn-sm">&nbsp&nbspEdit&nbsp&nbsp</a></td>
                    <td>
                        <form method="post" class="delete_form" action="{{action('JobProject_Controller@destroy', $job['id'])}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>    
                @endforeach
            </tbody>
        </table>
        {{$jobs->links()}}
      </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){ 
    $('.delete_form').on('submit',function(){
    if(confirm("Do you want delete ?")) {
        return true;
    }
    else {
        return false;
            }
        });
});
</script>



@endsection