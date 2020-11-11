<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ระบบแสดงความสัมพันธ์ของสินค้า</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    </head>
  <body>
    <div class="container">
          <br><br>
          <h2 align="center">แสดงข้อมูลสินค้าและประเภทสินค้า</h2>
          <br>
          <a href="<?php echo e(route('product.create')); ?>" class="btn btn-success">เพิ่มข้อมูล</a>
          <div class="row">
              <div class="col-md-12">
                <br><a href=""></a>
                <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>รหัสสินค้า</th>
                    <th>ชื่อ</th>
                    <th>ราคา</th>
                    <th>ประเภทสินค้า</th>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <td><?php echo e($row->id); ?></td>
                      <td><?php echo e($row->name); ?></td>
                      <td><?php echo e(number_format($row->price,2)); ?></td>
                      <td><?php echo e($row->typeProduct->type_name); ?></td>
                  </tr>
                  </tbody>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </table>
              </div>
            </div>
            </div>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/test/product/index.blade.php ENDPATH**/ ?>