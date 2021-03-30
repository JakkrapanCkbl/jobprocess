<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload Image</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="{{asset('fileinput/css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <link href="{{asset('fileinput/themes/explorer-fas/theme.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('fileinput/js/plugins/piexif.js')}}" type="text/javascript"></script>
    <script src="{{asset('fileinput/js/plugins/sortable.js')}}" type="text/javascript"></script>
    <script src="{{asset('fileinput/js/fileinput.js')}}" type="text/javascript"></script>
    <script src="{{asset('fileinput/js/locales/fr.js')}}" type="text/javascript"></script>
    <script src="{{asset('fileinput/js/locales/es.js')}}" type="text/javascript"></script>
    <script src="{{asset('fileinput/themes/fas/theme.js')}}" type="text/javascript"></script>
    <script src="{{asset('fileinput/themes/explorer-fas/theme.js')}}" type="text/javascript"></script>



  </head>
  
  <body>
    <br>
   
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
            <script src="{{asset('fileinput/js/fileinput.js')}}"></script>
            <script src="{{asset('fileinput/themes/fas/theme.js')}}"></script>
              <h3>{{ $id }}</h3>
              <div class="file-loading">
                  <input id="image-file" type="file" name="file" accept="*" data-min-file-count="1" multiple>
              </div>
            
            </div>
          </div>
        </div>
      </div>
   
  </body>


  
  <script type="text/javascript">
        $("#image-file").fileinput({
            uploadUrl:"{{route('image.upload')}}",
            theme:'fas',
            uploadExtraData:function(){
              return{
                  _token:"{{csrf_token()}}",
              }
            },
            allowedFileExtensions:['jpg','pdf','gif'],
            maxFileSize:10000
        })
  </script>





  
</html>