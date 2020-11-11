<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload Image</title>
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
  </head>
  <body>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <!--<h1 class="text-center">Multiple Upload</h1><br>-->
           id = <?php echo e(request()->route('id')); ?> 
          <div class="form-group">
            <div class="file-loading">
            <input id="image-file" type="file" name="file" accept="*" data-min-file-count="1" multiple>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <!-- <form action="<?php echo e(route('admininputjob.update',[$job->id])); ?>" method="POST" enctype="multipart/form-data"> -->

  <script type="text/javascript">
        $("#image-file").fileinput({
            uploadUrl:"<?php echo e(route('image.upload',request()->route('id'))); ?>",
            theme:'fa',
            uploadExtraData:function(){
              return{
                  _token:"<?php echo e(csrf_token()); ?>",
              }
            },
            allowedFileExtensions:['jpg','pdf','gif'],
            maxFileSize:10000
        })
  </script>
</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/test/upload.blade.php ENDPATH**/ ?>