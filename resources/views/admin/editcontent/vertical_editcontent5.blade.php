<div class="container">
    @if(Session::has('message'))
    <div class="alert alert-success">{{Session::get('message')}}</div>
    @endif
    <div class="row">



        <div class="col-md-12">
            <!-- <div class="card">
                <div class="card-header">
                    Edit Job
                </div> -->


            <div class="card-body" style="background-color: #B0C4DE;">
                <form action="{{route('admininputjob.update',[$job->id])}}" method="POST" enctype="multipart/form-data">@csrf

                    <style>
                        .row {
                            padding-top: 7px;
                        }

                        .float-right {
                            font-size: 19px;
                        }
                    </style>


                    <div class="container">
                        <div class="row">

                            <div class="col-md-4 align-self-center p-1">
                                <label class="float-right">AFOPQMFOQMWFO{MQWFPO</label>
                            </div>
                            <div class="col-md-6">
                               
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-4 align-self-center p-1">
                                <label class="float-right">AFOPQMFOQMWFO{MQWFPO</label>
                            </div>
                            <div class="col-md-6">
                               
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-4 align-self-center p-1">
                                <label class="float-right">AFOPQMFOQMWFO{MQWFPO</label>
                            </div>
                            <div class="col-md-6">
                               
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-4 align-self-center p-1">
                                <label class="float-right">AFOPQMFOQMWFO{MQWFPO</label>
                            </div>
                            <div class="col-md-6">
                               
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-4 align-self-center p-1">
                                <label class="float-right">AFOPQMFOQMWFO{MQWFPO</label>
                            </div>
                            <div class="col-md-6">
                               
                            </div>

                        </div>

                    </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-4 align-self-center p-1">
                                <label class="float-right">AFOPQMFOQMWFO{MQWFPO</label>
                            </div>
                            <div class="col-md-6">
                               
                            </div>

                        </div>

                    </div>




                    <div class="container">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-block btn-success">Update</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->
</div>
{{csrf_field()}}