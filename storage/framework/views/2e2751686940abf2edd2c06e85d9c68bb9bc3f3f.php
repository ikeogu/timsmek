<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <marquee behavior="" direction="left"><h6 class="article">Join our authors, submit your works to Timsmek Global Publishers.</h6></marquee>
    <div class="row">
      <div class="col-md-6 m-auto">
        <h5>Join our community of authors and readers. Sign up below.<br> It is easy and free.</h5>
        <div class="form-card mt-5">
          <h4 class="text-center">Sign Up</h4>
          <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div><br />
            <?php endif; ?>
            <?php if(\Session::has('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e(\Session::get('success')); ?></p>
            </div><br />
          <?php endif; ?>
          <form method="POST" action="<?php echo e(route('register')); ?>">
						<?php echo csrf_field(); ?>
            <div class="input-group mb-4 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="icon icon ion-md-person"></i>
                </div>
							</div>
							<input id="name" type="text" class="form-control py-4 <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus placeholder="Enter Full name">

							<?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
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
                  <i class="icon icon ion-md-mail"></i>
                </div>
							</div>
							<input id="email" type="email" class="form-control py-4 <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Enter Email">

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
                  <i class="icon icon ion-md-call"></i>
                </div>
							</div>
							<input  type="number" class="form-control py-4 <?php if ($errors->has('phone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="phone" value="<?php echo e(old('phone')); ?>" required autocomplete="phone" placeholder="Enter Phone">

							<?php if ($errors->has('phone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone'); ?>
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
							<input id="password" type="password" class="form-control py-4 <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="new-password" placeholder="Enter Password">

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
            <div class="input-group mb-4 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="icon icon ion-md-key"></i>
                </div>
              </div>
              <input id="password-confirm" type="password" class="form-control py-4" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
            </div>
            <div class="form-check mb-2">
                <input type="checkbox" value="1" name="agree" class="form-check-input"><small> By clicking sidn up button below, you agree to our Terms and conditions and Privacy Policy.</small>
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" value="yes" name="newslater" class="form-check-input"><small> Subscribe me to Timsmek Newsletter.</small>
            </div>
            
            <p class="text-center">Already a member?<a href="<?php echo e(url('/login')); ?>"> Login here.</a></p>
            <button type="submit" class="butn mb-2 btn-fill ">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/auth/register.blade.php ENDPATH**/ ?>