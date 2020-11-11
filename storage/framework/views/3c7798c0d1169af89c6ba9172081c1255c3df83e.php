<?php $__env->startSection('content'); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Work in progress</h2>         
            <div align="right">                     
                <a href="<?php echo e(route('test.search')); ?>" class="btn btn-success btn-sm">Search</a>               
            </div>
            <br>
            <input type="text" name="search" id="search" placeholder="Search" class="form-control">
            <br>
            <h3 align="center">Total Data : <span id="total_records"></span></h3>
            <table class="table">
                <thead>
                    <th>id</th>
                    <th>job code</th>                
                    <th>project name</th>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        fetch_data('');
    });

    $(document).on('keyup','#search', function(){
        var query = $(this).val();
        //console.log(query);
        fetch_data(query);
    });

    function fetch_data(query = '')
    {
        $.ajax({
         url:"<?php echo e(route('test.action')); ?>",
         method:'GET',
         data:{query:query},
         dataType:'json',
         success:function(data)
         {
            $('tbody').html(data.table_data);
            $('#total_records').text(data.total_data);
         }
      })
    }

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.usermenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/test/search.blade.php ENDPATH**/ ?>