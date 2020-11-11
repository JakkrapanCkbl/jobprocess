<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

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

                <a class="navbar-brand" href="https://landmarkcon.net">
                    Home
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Search Database</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown2">
                        <li class="dropdown-item"><a target="_blank" href="#"></a>VB-Report (WIP)</li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>VB-Report (Job to Done)</li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>VB+ Hyperlink to PDF</li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>API-Shown in Google Map</li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>ข้อมูลตลาด-Internal Database</li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>ข้อมูลตลาด-Website</li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown"
                        aria-expanded="true">Valuer/Checker</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown1">
                        <li class="dropdown-item"><a href="#" target="_blank"></a>ผังเมือง</li>
                        <li class="dropdown-item"><a href="#" target="_blank"></a>กฎหมายควบคุมอาคาร</li>
                        <li class="dropdown-item"><a href="#" target="_blank"></a>ป่าไม้/เสาไฟฟ้าแรงสูง</li>
                        <li class="dropdown-item"><a href="#" target="_blank"></a>โครงการเวนคืนรัฐบาล</li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li class="dropdown-item"><a href="#" target="_blank"></a>ราคาประเมินค่าก่อสร้าง</li>
                        <li class="dropdown-item"><a href="#" target="_blank"></a>ต้นทุนค่าก่อสร้าง</li>
                        <li class="dropdown-item"><a href="#" target="_blank"></a>วัสดุก่อสร้าง</li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li class="dropdown-item"><a href="#" target="_blank"></a>ใบปะเอกสารแนบ</li>
                        <li class="dropdown-item"><a href="#" target="_blank"></a>อช./10/13</li>
                        <li class="dropdown-item"><a href="#" target="_blank"></a>ระวางที่ดิน</li>
                        <li class="dropdown-item"><a href="#" target="_blank"></a>สรุปจดหมายเวียนจากธนาคาร</li>

                        <!-- เมนูย่อย -->
                        <li class="dropdown-item dropdown">
                            <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">ตัวอย่างรายงานการประเมิน</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                <li class="dropdown-item dropdown">
                                    <a class="dropdown-toggle" id="dropdown1-1-1" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">HL</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown1-1-1">
                                        <li class="dropdown-item"><a target="_blank" href="#"></a>Condo</li>
                                        <li class="dropdown-item"><a target="_blank" href="#"></a>TH</li>
                                        <li class="dropdown-item"><a target="_blank" href="#"></a>SH</li>
                                        <li class="dropdown-item"><a target="_blank" href="#"></a>DH</li>
                                        <li class="dropdown-item"><a target="_blank" href="#"></a>SDH</li>
                                    </ul>
                                </li>

                                <li class="dropdown-item dropdown">
                                    <a class="dropdown-toggle" id="dropdown1-1-1" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">BB</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown1-1-1">
                                        <li class="dropdown-item"><a target="_blank" href="#"></a>VL</li>
                                        <li class="dropdown-item"><a target="_blank" href="#"></a>FAC</li>
                                        <li class="dropdown-item"><a target="_blank" href="#"></a>APT</li>
                                        <li class="dropdown-item"><a target="_blank" href="#"></a>HO</li>
                                        <li class="dropdown-item"><a target="_blank" href="#"></a>VL+Estimage Cost</li>
                                    </ul>
                                </li>

                                <li class="dropdown-item dropdown">
                                    <a class="dropdown-toggle" id="dropdown1-1-1" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">CM</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown1-1-1">
                                        <li class="dropdown-item"><a target="_blank" href="#"></a>VL</li>
                                        <li class="dropdown-item"><a target="_blank" href="#"></a>FAC</li>
                                        <li class="dropdown-item"><a target="_blank" href="#"></a>APT</li>
                                        <li class="dropdown-item"><a target="_blank" href="#"></a>HO</li>
                                        <li class="dropdown-item"><a target="_blank" href="#"></a>VL+Estimage Cost</li>
                                        <li class="dropdown-item"><a target="_blank" href="#"></a>Condo Project</li>
                                        <li class="dropdown-item"><a target="_blank" href="#"></a>Housing Project</li>
                                    </ul>
                                </li>
                            </ul>

                        </li>
                    <!-- จบเมนูย่อย -->
                    </ul>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Admin.</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown2">
                        <li class="dropdown-item"><a target="_blank" href="#"></a>Template-Appendix</li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>Template-PPT</li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>ตัวอย่างแปลน VISIO</li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>การจัดส่งงานแก่ธนาคาร</li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>อื่น ๆ</li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">News</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown2">
                        <li class="dropdown-item"><a target="_blank" href="#"></a>ประกาศต่างๆ ของทางบริษัท</li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>กฎระเบียบของบริษัท</li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>จดหมายเวียน</li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>วันหยุดของบริษัท</li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>อื่น ๆ</li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">E-Library</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown2">
                        <li class="dropdown-item"><a target="_blank" href="#"></a>สัมมนาวิชาชีพ</li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>VDO-ความรู้ทั่วไปอสังหาริมทรัพย์</li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>VDO-ความรู้เกี่ยวกับการประเมิน</li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>เอกสารประกอบการสอบวิชาชีพ</li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>โครงการพัฒนาของรัฐ</li>
                        <li class="dropdown-item"><a target="_blank" href="#"></a>กฎหมายเกี่ยวกับการประเมิน</li>
                    </ul>
                </li>

            </ul>




                    <!-- End Left Side Of Navbar -->

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
                                    <img src="<?php echo e(asset(Auth::user()->avatar)); ?>" style="height:60px;width:60px; border-radius:50%; margin-right:15px;" alt="">
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
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {

            $('.navbar .dropdown-item.dropdown').on('click', function (e) {
                var $el = $(this).children('.dropdown-toggle');
                if ($el.length > 0 && $(e.target).hasClass('dropdown-toggle')) {
                    var $parent = $el.offsetParent(".dropdown-menu");
                    $(this).parent("li").toggleClass('open');

                    if (!$parent.parent().hasClass('navbar-nav')) {
                        if ($parent.hasClass('show')) {
                            $parent.removeClass('show');
                            $el.next().removeClass('show');
                            $el.next().css({ "top": -999, "left": -999 });
                        } else {
                            $parent.parent().find('.show').removeClass('show');
                            $parent.addClass('show');
                            $el.next().addClass('show');
                            $el.next().css({ "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 });
                        }
                        e.preventDefault();
                        e.stopPropagation();
                    }
                    return;
                }
            });

            $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
                $(this).find('li.dropdown').removeClass('show open');
                $(this).find('ul.dropdown-menu').removeClass('show open');
            });

        });
    </script>
</html>
<?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/layouts/usermenu.blade.php ENDPATH**/ ?>