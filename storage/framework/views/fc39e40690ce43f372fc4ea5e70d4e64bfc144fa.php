
<?php $__currentLoopData = $doc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <h1>xx <?php echo e($item->filepath); ?>  xx</h1> 

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="wrapper">
    <embed src="<?php echo e(asset('storage/docs/townplan/bangkok/1.Map-แผนผังเมืองกรุงเทพมหานคร.pdf')); ?>#toolbar=0" width="100%" height="100%">
    <div class="embed-cover"></div>
</div>


<style type="text/css">

    .embed-cover {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
    }

    .wrapper {
        position: relative;
        overflow: hidden;
    }

</style><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/docsearch/docshow.blade.php ENDPATH**/ ?>