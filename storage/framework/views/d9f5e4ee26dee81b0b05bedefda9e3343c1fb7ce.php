<?php $__env->startSection('content'); ?>
<section id="contact">
    <div class="container">
      <section id="address">
        <div class="header text-center mt-5">
          <h2>Contact</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis mollitia cum tempore sequi, vel</p>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="address-1">
              <i class="fa fa-street-view"></i>
              <h4>Address</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, minima?</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="address-2">
              <i class="fa fa-phone"></i>
              <h4>Phone</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, minima?</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="address-1">
              <i class="fa fa-envelope"></i>
              <h4>Email</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, minima?</p>
            </div>
          </div>
        </div>
      </section>
      <section id="form" class="mt-5 mx-5 text-center">
        <div >
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
        </div>
      <form action="<?php echo e(route('contact.store')); ?>" method="POST"> 
          <?php echo csrf_field(); ?>
          <div class="form-row">
            <div class="col-md-6">
              <input type="text" class="form-control mt-4" placeholder="Full name" name="name" required>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control mt-4" placeholder="Phone" name="phone" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <input type="email" class="form-control mt-4" placeholder="Email" name="email" required>
            </div>
          </div>
          <div class="form-row">
            <textarea class="form-control mt-4" placeholder="Message" rows="5" name="reason" required></textarea>
          </div>
          <button type="submit" class="butn-outline my-4">Send</button>
        </form>
      </section>
    </div>
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/pages/contact.blade.php ENDPATH**/ ?>