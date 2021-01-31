<div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
              
                <h2 class="mb-0 site-logo"><a href="/">Home<!--  <strong class="font-weight-bold">Big Data</strong> --></a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
<!--                       
                      <li class="has-children">
                        <a href="category.html">For Employees</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="category.html">Category</a></li>
                          <li><a href="#">Browse Candidates</a></li>
                          <li><a href="new-post.html">Post a Job</a></li>
                          <li><a href="#">Employeer Profile</a></li>
                          <li class="has-children">
                            <a href="#">More Links</a>
                            <ul class="dropdown">
                              <li><a href="#">Browse Candidates</a></li>
                              <li><a href="#">Post a Job</a></li>
                              <li><a href="#">Employeer Profile</a></li>
                              <li><a href="<?php echo e(asset('docs/townplan/bangkok/0. แผนผังเมืองกรุงเทพมหานคร.pdf')); ?>" target='_blank'>test</a></li>
                            </ul>
                          </li>
                          

                        </ul>
                      </li>
                      <li><a href="contact.html">Contact</a></li> -->
                      <!--<li><a href="/login">Login</a></li>-->
                      <li><a href="<?php echo e(url('jobs/1234')); ?>"><span class="bg-primary text-white py-3 px-4 rounded">Valuer</span></a></li>
                      <li><a href="<?php echo e(route('dashboard')); ?>"><span class="bg-primary text-white py-3 px-4 rounded">Admin</span></a></li>
                      <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <!--
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('visitor.register')); ?>"><?php echo e(__('Visitor Register')); ?></a>
                            </li>-->
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                    <img src="<?php echo e(asset(Auth::user()->avatar)); ?>" style="height:35px;width:35px; border-radius:50%; margin-right:15px;" alt="">
                                    <!--<img src="<?php echo e(asset('storage/images/users/dido1.jpg')); ?>" style="height:50px;width:50px; border-radius:50%; margin-right:15px;" alt="">-->
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
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php /**PATH C:\xampp\htdocs\jobprocess\resources\views////partials/nav.blade.php ENDPATH**/ ?>