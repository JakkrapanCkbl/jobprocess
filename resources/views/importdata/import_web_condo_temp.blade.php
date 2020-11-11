@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Project Condos from web</div>
                <div class="card-body">
                    <!--<a href="{{ route('excel_condoexport') }}" class="btn btn-primary">Export to excel</a>-->
                    <br><br>
                    <hr />
                    <form action="{{ route('excel_condoimport') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="import_file" />
                        <br>
                        <input type="submit" value="Import" class="btn btn-info" />
                    </form>
                    <!--{{ $tempdatas }}-->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>web_scraper_order</th>
                                <th>web_scraper_start_url</th>
                                <th>pagination</th>
                                <th>pagination_href</th>
                                <th>list_project_name</th>
                            </tr>
                        </thead>
                        <tbody>
                           @forelse($tempdatas as $tempdata)
                                <tr>
                                    <td>{{ $tempdata->web_scraper_order }}</td>
                                    <td>{{ $tempdata->web_scraper_start_url }}</td>
                                    <td>{{ $tempdata->pagination }}</td>
                                    <td>{{ $tempdata->pagination_href }}</td>
                                    <td>{{ $tempdata->list_project_name }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center">No temp data found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
