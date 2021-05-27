<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top: 80px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align: center;" class="card-header"><?php echo e(__('Login')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <div class="container" >
                                <label style="margin-left: 17.5%;" for="email" class=""><?php echo e(__('E-Mail Address')); ?>*</label>
                                <input style="width: 65%; margin-left: 17.5%; border: 1.5px solid #cacaca; border-radius: 60px; padding: 20px;" id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="container">
                            <label style="margin-left: 17.5%;" for="password"><?php echo e(__('Password')); ?>*</label>
                            <input style="width: 65%; margin-left: 17.5%; border: 1.5px solid #cacaca; border-radius: 60px; padding: 20px;" id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <center>
                            <table style="margin-top: -20px;">
                                <tr>
                                    <td style="padding-top: 15px;">
                                        <div class="form-group row">
                                            <div class="container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                    <label class="form-check-label" for="remember">
                                                        <?php echo e(__('Remember Me')); ?>

                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td style="padding-left: 120px">
                                        <?php if(Route::has('password.request')): ?>
                                            <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                                <?php echo e(__('Forgot Your Password?')); ?>

                                            </a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            </table>
                        </center>                        
                    
                        <center>
                            <div class="form-group row mb-0">
                                <div class="container" style="margin-top: 10px;">
                                    <button style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 200px; padding-right: 200px; background-color:  #1cc88a;" type="submit" class="btn btn-primary">
                                        <?php echo e(__('Login')); ?>

                                    </button>
                                </div>
                            </div>
                        </center>

                        <center>
                            <div class="container" style="margin-top: 40px;">
                                <p>Not Registered yet? <a style="color: ;" href="<?php echo e(route('register')); ?>">Create an account</a></p>
                            </div>
                        </center>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SBAdmin2VLib\resources\views/auth/login.blade.php ENDPATH**/ ?>