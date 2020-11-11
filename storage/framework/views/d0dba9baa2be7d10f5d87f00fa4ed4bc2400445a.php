<?php $__env->startSection('content'); ?>

<!-- Horizontal css -->
<link href="<?php echo e(asset('external2/plugins/horizontal-menu/dropdown-effects/fade-down.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('external2/plugins/horizontal-menu/horizontal-menu.css')); ?>" rel="stylesheet">

<!-- P-scroll css -->
<link href="<?php echo e(asset('external2/plugins/p-scroll/p-scroll.css')); ?>" rel="stylesheet" type="text/css">

<!---Font icons-->
<link href="<?php echo e(asset('external2/plugins/iconfonts/plugin.css')); ?>" rel="stylesheet" />

<!-- Sidebar css -->
<link href="<?php echo e(asset('external2/plugins/sidebar/sidebar.css')); ?>" rel="stylesheet">

<!-- Dashboard Css -->
<link href="<?php echo e(asset('external2/css/style.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(asset('external2/css/boxed.css')); ?>" rel="stylesheet" />


<div class="container">

    <br>
    <form action="docsearch" method="POST" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>
        <div class="container">

            <div class="row">
                <h1>Region</h1>
                <div class="col-md-8 mb-3 mb-md-0">
                    <input type="text" name="search" class="mr-3 form-control  px-4" placeholder="title, keywords or project name ">
                </div>
                <div class="col-md-2">
                    <input type="submit" class="btn btn-search btn-primary btn-block" value="Search">
                </div>
            </div>

            <div class="btn-group mt-2 mb-2">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Action <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Select Region
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#" data-value="action">Action</a></li>
                    <li><a href="#" data-value="another action">Another action</a></li>
                    <li><a href="#" data-value="something else here">Something else here</a></li>
                    <li><a href="#" data-value="separated link">Separated link</a></li>
                </ul>
            </div>
        </div>

    </form>
    <br>

</div>
<div class="container">
    <table class="table table-dark">
        <tr>
            <th>id</th>
            <th>province_code</th>
            <th>name_th</th>
            <th>name_eng</th>
            <th>doc_category_id</th>
            <th>filepath</th>
            <th>filename</th>
        </tr>
        <?php $__currentLoopData = $docsearch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docsearch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($docsearch->id); ?></td>
            <td><?php echo e($docsearch->province_code); ?></td>
            <td><?php echo e($docsearch->name_th); ?></td>
            <td><?php echo e($docsearch->name_eng); ?></td>
            <td><?php echo e($docsearch->doc_category_id); ?></td>
            <td><?php echo e($docsearch->filepath); ?></td>

            <?php (
            $filename = basename( $docsearch->filepath )
            ); ?>
            <td><a href="<?php echo e(asset( $docsearch->filepath )); ?>" target=_blank><?php echo e($filename); ?></a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

</div>

<script type="text/JavaScript">
    $(".dropdown-menu li a").click(function() {
        window.alert($("dropdownMenu1 option:selected").text();)
        $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
        $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
    });
</script>

<!--Bootstrap.min js-->
<script src="<?php echo e(asset('external2/plugins/bootstrap/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('external2/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>

<!--Jquery js -->
<script src="<?php echo e(asset('external2/js/vendors/jquery-3.2.1.min.js')); ?>"></script>



		<!--Jquery.Sparkline js -->
		<script src="<?php echo e(asset('external2/js/vendors/jquery.sparkline.min.js')); ?>"></script>

		<!--Circle-Progress js -->
		<script src="<?php echo e(asset('external2/js/vendors/circle-progress.min.js')); ?>"></script>

		<!--Jquery.rating js -->
		<script src="<?php echo e(asset('external2/plugins/jquery.rating/jquery.rating-stars.js')); ?>"></script>

		<!--Bootstrap.min js-->
		<script src="<?php echo e(asset('external2/plugins/bootstrap/popper.min.js')); ?>"></script>
		<script src="<?php echo e(asset('external2/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>

		<!-- Custom scroll bar Js-->
		<script src="<?php echo e(asset('external2/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>

		<!--Sticky JS -->
		<script src="<?php echo e(asset('external2/js/sticky.js')); ?>"></script>

		<!--Sidemenu js-->
		<script src="<?php echo e(asset('external2/plugins/side-menu/side-menu.js')); ?>"></script>

		<!-- Sidemenu-responsive-tabs js-->
		<script src="<?php echo e(asset('external2/plugins/sidemenu-responsive-tabs/js/sidemenu-responsive-tabs.js')); ?>"></script>
		<script src="<?php echo e(asset('external2/js/left-menu.js')); ?>"></script>

		<!--Horizontal js -->
		<script src="<?php echo e(asset('external2/plugins/horizontal-menu/horizontal-menu.js')); ?>"></script>

		<!-- peitychart -->
		<script src="<?php echo e(asset('external2/plugins/peitychart/jquery.peity.min.js')); ?>"></script>

		<!--Counters -->
		<script src="<?php echo e(asset('external2/plugins/counters/counterup.min.js')); ?>"></script>
		<script src="<?php echo e(asset('external2/plugins/counters/waypoints.min.js')); ?>"></script>

		<!-- Sidebar js -->
		<script src="<?php echo e(asset('external2/plugins/sidebar/sidebar.js')); ?>"></script>

		<!-- Custom js -->
		<script src="<?php echo e(asset('external2/js/custom.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/dashboard/page.blade.php ENDPATH**/ ?>