<?php $__env->startSection('content'); ?>
    
    <div class="wrapper">
       
        <div class="content-area">
            <div class="user-profile container">
                <div class="row">
                    <div class="col-md-3 col-sm-10">
                        <div class="user-nav">
                            <ul>
                            <li><a href="<?php echo e(route('profile')); ?>" class="active">My Orders</a></li>
                                <div class="dropdown-divider"></div>
                            <li><a href="<?php echo e(route('editProfile',['id'=> Auth::user()->id
                                ])); ?>">Edit Account</a></li>
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
                    <div class="col-md-9 col-sm-12 mx-auto">
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
                        <div class="profile-header">
                            <h2>My Orders</h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="">Order Id</th>
                                        <th scope="">Date</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($orders): ?>
                                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <tr>
                            
                                    <td><?php echo e($order->order_id); ?></td>
                                   <td> <?php echo e(date('d/M/Y h:i:s',strtotime($order->paid_at))); ?> </td>
                                    <td><?php echo e($order->quantity); ?></td>
                                    <td><?php echo e($currency .' '. number_format(($order->amount/100),2)); ?></td>

                                    <td><?php echo e($order->status); ?></td>
                                    <td><a href="<?php echo e(route('orderDetails',['id' => $order->id])); ?>" class="btn btn-sm btn-danger text-white">View details</a></td>
                                    </tr>
                                
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                    
                                </tbody>
                            </table>
                           </div>
                    </div>
                </div>
                <?php if(count($orders) > 0): ?>
                <div class="row justify-content-center">
                        <div class="featured-product">
                            <div class="featured-title container">
                                <h2>Buyers who bought this item also bought:</h2>
                                <hr>
                            </div>
                            <div class="container">
                                  
                                 <?php $__currentLoopData = $relatedProducts->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedProductsChunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <div class="row">
                                     <?php $__currentLoopData = $relatedProductsChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="container">
                                                <div  class="product-card">
                                                <a href="<?php echo e(route('publish.show', ['id' =>$relatedProduct->id])); ?>">
                                                <img src="/storage/cover_page/<?php echo e($relatedProduct->cover_page); ?>" height="250" width="auto"> 
                                                <h4 class="product-title"><?php echo e($relatedProduct->title); ?></h4> 
                                                </a>
                                                <del></del>
                                                 <p class="price"><?php echo e($relatedProduct->price/100); ?></p> 
                                                 <button class="add-to-cart" data-toggle="modal" data-target="#cart<?php echo e($relatedProduct->id); ?>" class="btn btn-outline-danger"> Add to Cart </button> 
                                                 <div class="modal fade" id="cart<?php echo e($relatedProduct->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"> 
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                 <button type="button" class="close" data-dismiss="modal"aria-label="Close"> 
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                    <form action="<?php echo e(route('addToCart')); ?>" class="text-center" method="POST"> 
                                                                             <?php echo e(csrf_field()); ?> 
                                                                    <input type="hidden" name="id"  value="<?php echo e($relatedProduct->id); ?>"> 
                                                                     <input type="number" class="form-control" name="qty">           
                                                                                
                                                                                <div class="row justify-content-center">
                                                                                    <div class="col-md-6">
                                                                                        <button type="submit" class="btn btn-block btn-outline-info mt-md-3">Add to cart</button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                            </div> 
                                
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            
                            </div>
                            
                        <?php endif; ?> 
                        </div>
            </div>
        </div>
    </div>

                       
<?php $__env->stopSection(); ?>
    
    
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/pages/profile.blade.php ENDPATH**/ ?>