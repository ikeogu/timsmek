<?php $__env->startSection('content'); ?>
    

    <div class="wrapper">
        
        <div class="content-area">
            <div class="user-profile container">
                <div class="row justify-content-center">
                    <div class="col-md-3 mb-md-3 mx-auto">
                        <div class="user-nav">
                            <ul>
                            <li><a href="<?php echo e(route('profile')); ?>">My Orders</a></li>
                                <div class="dropdown-divider"></div>
                            <li><a href="<?php echo e(route('editProfile',['id' => Auth::user()->id])); ?>" class="active">Edit Account</a></li>
                                <div class="dropdown-divider"></div>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="profile-header">
                            <h2>Edit Profile</h2>
                        </div>
                        <div class="form-card mt-5">
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
                        <div class="edit-profile container">
                            <?php if(Auth::user()): ?>
                        <form class="mt-5" action="<?php echo e(route('updateProfile')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <input type="text" value="<?php echo e($user->first_name); ?>" required name="first_name" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <input type="text" value="<?php echo e($user->last_name); ?>" required name="last_name" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <input type="email" value="<?php echo e($user->email); ?>" name="email" required class="form-control" placeholder="E-mail">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <input type="text" value="<?php echo e($user->phone); ?>" name="phone" required class="form-control" placeholder="Phone number">
                                    </div>
                                </div>

                                <h5 class="mt-md-5">Personal Address</h5>
                                <div class="form-group">
                                <input type="text" value="<?php echo e($user->address); ?>" name="address" class="form-control" placeholder="Apartment, street, or floor">
                                </div>
                                <h5 class="mt-md-4">Zip code</h5>
                                <div class="form-group">
                                <input type="text" value="<?php echo e($user->zip); ?>" name="zip" class="form-control" placeholder="500006">
                                </div>

                                

                               
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <input type="text" name="state" value="<?php echo e($user->state); ?>" required class="form-control" placeholder="state">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="country" value="<?php echo e($user->country); ?>" required class="form-control" placeholder="country">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-danger"> Update </button>
                            </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>


        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/pages/edit_profile.blade.php ENDPATH**/ ?>