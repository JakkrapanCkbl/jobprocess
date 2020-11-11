@extends('layouts.main')
@section('content')
<div class="container">
    <!-- xxxxxxxxxxxxxxxxxx Peste code for test heare xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
      <div class="row" id="app">
          <div class="title" style="margin-top: 20px;">
                <h2>ทดสอบ sql</h2> 
          </div>
             
          <!-- Left Column -->
          <div class="col-lg-10">
          
          
           <div id="map"></div>

            <div class="title" style="margin-top: 20px;">
                <p>                  
                    <form action="{{ route('testdb_insert') }}" method="POST" enctype="multipart/form-data">
                        @csrf                       
                        <input type="submit" value="Import" class="btn btn-info" />
                    </form>
                </p>
                <!--
               <p>                  
                    <form action="{{ route('testdb_update') }}" method="POST" enctype="multipart/form-data">
                        @csrf                       
                        <input type="submit" value="Update" class="btn btn-info" />
                    </form>
                </p>
              -->

          </div>    

          </div>
          <!-- End Left Column -->


               
      <div>   
         
    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
</div>

@endsection
