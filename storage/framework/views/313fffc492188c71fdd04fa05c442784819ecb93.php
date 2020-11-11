 

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="show"></div>
            <div id="errMsg"></div>
            <div class="card">
                <div class="card-body">
                      <form id="form" action="<?php echo e(route('album.store')); ?>" method="POST" enctype="multipart/form-data"><?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label>Name of album</label>
                                <input type="text" name="album" class="form-control">
                            </div>  

                            <div class="input-group control-group intial-add-more">
                                <input type="file" name="image[]" class="form-control" id="image">
                                    <div class="input-group-btn">
                                        <button class="btn btn-success btn-add-more" type="button">Add</button>
                                    </div>
                            </div>
                            <div class="copy" style="display: none;">
                                <div class="input-group control-group add-more" style="margin-top:12px;">
                                    <input type="file" name="image[]" class="form-control" id="image">
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger remove" type="button">Remove</button>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                      </form>                  
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $(".btn-add-more").click(function(){
            //alert("ok");
            var html= $(".copy").html();
            $(".intial-add-more").after(html);

        });

        $("body").on("click",".remove",function(){
            $(this).parents(".control-group").remove();
        });
        
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#form").on('submit',(function(e) {
        e.preventDefault();

        /**var album = $("#album").val();
        if(album==""){
            alert("error")
            return false;
        }**/


        $.ajax({
        url: "/album",
        type: "POST",
        data:  new FormData(this),
        contentType: false,
             cache: false,
        processData:false,
       
        success: function(response)
        {
            console.log(response);
            $('.show').html(response);
            $("#form")[0].reset(); 
            $("#errMsg").empty()


         },
        error: function(data) {
            //console.log(data.responseJSON)
            var error = data.responseJSON;
            $("#errMsg").empty()
            $.each(error.errors,function(key,value){
                $("#errMsg").append('<p class="text-center text-danger">'+value+'</p>');

            });            
        }


        });
        }));
    });

</script>

<style>
.text-danger{
    color: red;
}
    

</style>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/test/album.blade.php ENDPATH**/ ?>