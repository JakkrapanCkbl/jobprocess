<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!--<a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>-->
                <a class="navbar-brand" href="https://landmarkcon.net">
                    Home
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                           <li class="nav-item dropdown menu-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Search Database
                                </a>
                                <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">VB-Report (WIP)</a>
                                  <a class="dropdown-item" href="#">VB-Report (Joblist)</a>
                                  <a class="dropdown-item" href="#">VB+ Hyperlink to PDF</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">API-Shown in Google Map</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">ข้อมูลตลาด-Internal Database</a>
                                  <a class="dropdown-item" href="#">ข้อมูลตลาด-Website</a>
                                </div>
                            </li> 
                            <li class="nav-item dropdown menu-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Valuer/Checker
                                </a>
                                <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">ผังเมือง</a>
                                  <a class="dropdown-item" href="#">กฎหมายควบคุมอาคาร</a>
                                  <a class="dropdown-item" href="#">ป่าไม้/เสาไฟฟ้าแรงสูง</a>
                                  <a class="dropdown-item" href="#">โครงการเวนคืนรัฐบาล</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">ราคาประเมินค่าก่อสร้าง</a>
                                  <a class="dropdown-item" href="#">ต้นทุนค่าก่อสร้าง</a>
                                  <a class="dropdown-item" href="#">วัสดุก่อสร้าง</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">ใบปะเอกสารแนบ</a>
                                  <a class="dropdown-item" href="#">อช./10/13</a>
                                  <a class="dropdown-item" href="#">ระวางที่ดิน</a>
                                  <a class="dropdown-item" href="#">สรุปจดหมายเวียนจากธนาคาร</a>
                                  <a class="dropdown-item" href="#">ตัวอย่างรายงานการประเมิน</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">เบิก OPE</a>
                                  <a class="dropdown-item" href="#">อัตราการเบิก OPE</a>
                                </div>
                            </li>
                             <li class="nav-item dropdown menu-item">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Admin
                              </a>
                              <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Template-Appendix</a>
                                <a class="dropdown-item" href="#">Template-PPT</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">ตัวอย่างแปลน VISIO</a>
                                <a class="dropdown-item" href="#">การจัดส่งงานแก่ธนาคาร</a>
                                <a class="dropdown-item" href="#">อื่น ๆ</a>
                              </div>
                          </li>

                          <li class="nav-item dropdown menu-item">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              News
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">ประกาศต่าง ๆ ของทางบริษัท</a>
                              <a class="dropdown-item" href="#">กฎระเบียบของบริษัท</a>
                              <a class="dropdown-item" href="#">จดหมายเวียน</a>
                              <a class="dropdown-item" href="#">วันหยุดของบริษัท</a>
                              <a class="dropdown-item" href="#">อื่น ๆ</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown menu-item">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            E-library
                          </a>
                          <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">สัมมนาวิชาชีพ</a>
                            <a class="dropdown-item" href="#">VDO-ความรู้ทั่วไปอสังหาริมทรัพย์</a>
                            <a class="dropdown-item" href="#">VDO-ความรู้เกี่ยวกับการประเมิน</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">เอกสารประกอบการสอบวิชาชีพ</a>
                            <a class="dropdown-item" href="#">โครงการพัฒนาของรัฐ</a>
                            <a class="dropdown-item" href="#">กฎหมายเกี่ยวกับการประเมิน</a>
                          </div>
                      </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH /home/landmar2/jobprocess.landmarkcon.net/jobprocess/resources/views/layouts/app.blade.php ENDPATH**/ ?>