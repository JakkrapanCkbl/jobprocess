<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload Image</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="<?php echo e(asset('fileinput/css/fileinput.css')); ?>" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <link href="<?php echo e(asset('fileinput/themes/explorer-fas/theme.css')); ?>" media="all" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('fileinput/js/plugins/piexif.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('fileinput/js/plugins/sortable.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('fileinput/js/fileinput.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('fileinput/js/locales/fr.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('fileinput/js/locales/es.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('fileinput/themes/fas/theme.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('fileinput/themes/explorer-fas/theme.js')); ?>" type="text/javascript"></script>



  </head>
  
  <body>
    <br>
   
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
            

              <!-- <h5><?php echo e($id); ?></h5>
              <h5><?php echo e($jobcode); ?></h5>
              <h5><?php echo e($uploadfiletype); ?></h5>

              <?php switch($uploadfiletype):
                case ('report'): ?>
                    <h5><?php echo e(asset('storage/project_reports/'.$jobcode.'/report/')); ?></h5>
                    <input type="hidden" id="savepath" name="savepath" value="<?php echo e(asset('storage/project_reports/'.$jobcode.'/report/')); ?>">
                   
                    <?php break; ?>
                <?php case ('image'): ?>
                    <h5><?php echo e(asset('storage/project_reports/'.$jobcode.'/')); ?></h5>
                    <input type="hidden" id="savepath" name="savepath" value="<?php echo e(asset('storage/project_reports/'.$jobcode.'/')); ?>">
                    <?php break; ?>
                <?php default: ?>
                    <span>Something went wrong, please try again</span>
            <?php endswitch; ?> -->

              
             
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
            uploadUrl:"<?php echo e(route('image.upload',[$id,$jobcode,$uploadfiletype])); ?>",
            theme:'fas',
            uploadExtraData:function(){
              return{
                  _token:"<?php echo e(csrf_token()); ?>",
              }
            },
            allowedFileExtensions:['pdf','jpg','pdf','gif'],
            maxFileSize:100000
        });

  </script>

  
</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/uploadfile/upload.blade.php ENDPATH**/ ?>