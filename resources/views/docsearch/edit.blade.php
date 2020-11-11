@extends('layouts.main')
@section('content')

<div class="container">
  @if(Session::has('message'))
  <div class="alert alert-success">{{Session::get('message')}}</div>
  @endif
  <div class="row">
    <div class="col-md-3">
      @include('docsearch.left-menu')
    </div>

    <div class="col-md-7">
      <div class="card">
        <div class="card-header">
          Document Form 
        </div>
        <div class="card-body">
          <form action="{{route('docsearch.update',[$doc->id])}}" method="POST" enctype="multipart/form-data">
            @csrf

            @php(
            $filename = basename( $doc->filepath )
            )
            <div class="form-group">
              <label>ไฟล์แนบ</label>
              <input type="file" name="docfile" class="form-control">
              <iframe src="{{asset($doc->filepath)}}" scrolling="no" width=100% height=300 frameborder="0"></iframe>
            </div>

            <div class="form-group">
              <label class="form-label">จังหวัด</label>
              <select class="form-control select2 custom-select select2-hidden-accessible" name="province" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">

                @foreach($provinces as $province)
                <option value="{{ $province->code }}" @if( $province->code == $doc->province_code)
                  selected @endif >
                  {{ $province->name_th }}
                </option>
                <td>{{ $province->name_th }}</td>
                @endforeach

              </select>
            </div>

            <div class="form-group">
              <label class="form-label">ประเภท</label>
              <select class="form-control select2 custom-select select2-hidden-accessible" name="doc_category_id" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                <option value="1">ผังเมือง</option>
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