<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Upload to google drive</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
 
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
 
            .full-height {
                height: 100vh;
            }
 
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .title {
                font-size: 84px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">               
                <div class="title m-b-md">
                    Upload file to google drive
                    <form action="/upload-to-google" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                            <input type="file" class="form-control" name="thing">
                            <br>
                            <input type="submit" class="btn btn-sm btn-block btn-danger" value="upload">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/test/googledrive.blade.php ENDPATH**/ ?>