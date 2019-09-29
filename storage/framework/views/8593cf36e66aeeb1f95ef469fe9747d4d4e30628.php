<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>VA</b>NP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b> Virna</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo e(asset('backend/dist/img/user2-160x160.jpg')); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo e($user->name); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo e(asset('backend/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">

                <p>
                  <span class="hidden-xs"><?php echo e($user->name); ?></span>
                  <small>Member since April. 2019</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="text-center">
                <form  action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                  <button class="btn btn-default btn-flat">Sign out</i>
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header><?php /**PATH C:\xampp7\htdocs\pi-baru\resources\views/partials/navbar.blade.php ENDPATH**/ ?>