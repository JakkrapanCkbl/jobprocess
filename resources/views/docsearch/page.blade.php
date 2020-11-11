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
    <br>
    <form action="docsearch" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">

            <div class="row">
                <h2> <span style="margin:10px"> <a href="/docsearch">Document</a> </span></h2>
                <div class="col-md-8 mb-3 mb-md-0">
                    <input type="text" name="search" class="mr-3 form-control  px-4" placeholder="title, keywords or project name ">
                </div>
                <div class="col-md-2">
                    <input type="submit" class="btn btn-search btn-primary btn-block" value="Search">
                </div>
            </div>
        </div>

    </form>
    <br>

</div>
<div class="container">

    <table class="table table-dark">
        <tr>
            <th>id</th>
            <!-- <th>province_code</th> -->
            <th>name_th</th>
            <!-- <th>name_en</th> -->
            <!-- <th>doc_category_id</th> -->
            <!-- <th>filepath</th> -->
            <th>date</th>
            <th>filename</th>

            <td><a href="/docsearch/create"><i class="fa fa-plus fa-2x" style="color:white"></i></a></td>
        </tr>

        @foreach ($docsearch as $docsearch)
        <tr>
            <td>{{ $docsearch->id }}</td>
            <!-- <td>{{ $docsearch->province_code }}</td> -->
            <td>{{ $docsearch->name_th }}</td>
            <!-- <td>{{ $docsearch->name_en }}</td> -->
            <!-- <td>{{ $docsearch->doc_category_id }}</td> -->
            <!-- <td>{{ $docsearch->filepath }}</td> -->

            <?php
            $date = substr($docsearch->created_at, 0, -9);
            $date = date("d/m/Y", strtotime($date));
            $filename = basename($docsearch->filepath);
            // if (strlen($filename) > 70) $filename = substr($filename, 0, -3) . '...';
            ?>
            <td>{{ $date }}</td>
            <td><a href="{{asset( $docsearch->filepath )}}" target=_blank>{{ $filename }}</a></td>



            <!-- Menu Bar -->

            <!-- <td><a href="{{route('docsearch.edit',[$docsearch->id])}}"><i class="fa fa-pencil-square-o" style="color:white"></i></a></td> -->
            <td><a href="#"><i class="fa fa-trash" style="color:white" data-toggle="modal" data-target="#deleteModal{{$docsearch->id}}"></i></a></td>

            <!-- Modal -->
            <div class="modal fade" id="deleteModal{{$docsearch->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Do you want to delete this file?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @php(
                        $filename = basename( $docsearch->filepath )
                        )

                        <div class="modal-body">
                            {{ $filename }}
                        </div>

                        <form action="{{route('docsearch.delete')}}" method="POST">
                            @csrf
                            <div class="modal-footer">
                                <input type="hidden" name="id" value="{{$docsearch->id}}">
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