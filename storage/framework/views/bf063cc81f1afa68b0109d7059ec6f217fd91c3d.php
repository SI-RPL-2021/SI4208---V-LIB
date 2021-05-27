<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- bootsrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- css -->
    <style>
        body{
            background-color: #fafafa;
        }
        
    </style>

    <!-- Favicon -->
    <link href="<?php echo e(asset('img/vlib.png')); ?>" rel="icon" type="image/png">

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
        <ul class="navbar-nav">
            <li style="margin-left: 0px;" class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/home')); ?>">Home</a>
            </li>
            <li style="margin-right: 30px; margin-left: 770px;" class="nav-item">
                <a class="nav-link" href="/catalog">Catalog</a>
            </li>
            <li style="margin-right: 30px;" class="nav-item">
                <a class="nav-link" href="#">Publication</a>
            </li>
            <li style="margin-right: 30px;" class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
            </li>

            <!-- <?php if(auth()->guard()->guest()): ?>
            <li style="margin-right: 30px;" class="nav-item">
                
                <?php if(Route::has('login')): ?>
                <div class="container">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 underline">Home</a>
                    <?php else: ?>
                    <a style="border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;"  href="<?php echo e(route('login')); ?>" class="btn btn-success btn-user btn-block">Login</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            </li> -->

            <?php if(auth()->guard()->guest()): ?>
            
                <?php if(Route::has('login')): ?>
                    <li style="margin-right: 30px;" class="nav-item">
                    <a style="border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;"  href="<?php echo e(route('login')); ?>" class="btn btn-success btn-user btn-block"><?php echo e(__('Login')); ?></a>
                        <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                    </li>
                <?php endif; ?>

                <?php if(Route::has('register')): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                    </li>
                <?php endif; ?>
                
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?>

                        </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                    </li>
                
                <?php endif; ?>

        </ul>
    </nav>
    
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer -->
    <div class="jumbotron" style="background-color: #1cc88a; margin-bottom:0; margin-top:100px;">
        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-10">
                <h4><a href="" class="text-white">Home</a></h4>
                <h4><a href="" class="text-white">About Us</a></h4>
            </div>
            <div class="col-sm-2">
                <center><td colspan="3"><h4 class="text-white">Contact</h4></td>
                        <table>
                        <tr>
                            <td><a href=""><img style="width: 30px; margin-right: 10px;" src="<?php echo e(asset('img/igc.png')); ?>"></a></td>
                            <td><a href=""><img style="width: 30px; margin-right: 10px;" src="<?php echo e(asset('img/tw.png')); ?>"></a></td>
                            <td><a href=""><img style="width: 30px; margin-right: 10px;" src="<?php echo e(asset('img/fb.png')); ?>"></a></td>
                        </tr>
                        </table>
                </center>
            </div>
        </div>
        <hr style="border: 2px solid #fafafa; border-radius: 5px;">
        <div class="row">
            <div class="col-sm-9">
                <h6 class="text-white">© Virtual Library</h6>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-6">
                        <a style="text-align: right;" class="text-white" href="">Privacy Policy</a>
                    </div>
                    <div class="col-sm-6">
                        <a style="text-align: right;" class="text-white" href="">Terms & Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html><?php /**PATH C:\xampp\htdocs\SBAdmin2VLib\resources\views/layouts/apps.blade.php ENDPATH**/ ?>