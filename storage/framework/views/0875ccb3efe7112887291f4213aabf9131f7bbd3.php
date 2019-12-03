<?php $__env->startSection('content'); ?>

<div class="container-fluid mt-5">

        <div class="container p-5">
            <marquee behavior="" direction="left"><a href="#"><h6 class="article">Join our authors, submit your works to Timsmek Global Publishers.</h6></a></marquee>
          <div class="row">
            <div class="col-md-6 m-auto">
              <div class="form-card mt-5">
                <h4 class="text-center">Login</h4>
                <form method="POST" action="<?php echo e(route('login')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="input-group mb-4 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="icon icon ion-md-mail"></i>
                        </div>
                      </div>
                      <input  type="email" class="form-control py-4 <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Email address">
        
                        <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                      
                    </div>
                    <div class="input-group mb-4 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="icon icon ion-md-key"></i>
                        </div>
                      </div>
                      <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password" placeholder="Enter password">
        
                      <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($message); ?></strong>
                          </span>
                      <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                   
        
                    <p>Not yet a member? <a href="/register">Sign Up</a></p>
                    <button type="submit" class="butn mb-2 btn-fill">Sign in</button>
                    <?php if(Route::has('password.request')): ?>
                        <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                            <?php echo e(__('Forgot Your Password?')); ?>

                        </a>
                    <?php endif; ?>
                  </form>
              </div>
            </div>
          </div>
        </div>

  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/auth/login.blade.php ENDPATH**/ ?>