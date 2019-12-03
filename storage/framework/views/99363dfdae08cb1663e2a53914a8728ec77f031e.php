<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        
        <div class="content-area">
            <div class="user-profile container">
                <div class="row">
                    <div class="col-md-3 col-sm-10 text-center mb-md-3 mx-auto">
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
                    <div class="col-md-9">
                        <div class="card">
                            <div class="profile-header">
                                <h2>My Order Detail</h2>
                            </div>
                            <?php if($order): ?>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="">Order ID</th>
                                            <td><?php echo e($order->order_id); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Quantity</th>
                                            <td><?php echo e($order->quantity); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Payment date</th>
                                            <td><?php echo e(date('d/M/Y h:i:s',strtotime($order->paid_at))); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Status</th>
                                            <td><?php echo e($order->status); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Total</th>
                                            <td><b><?php echo e($currency .' '.number_format(($order->amount/100),2)); ?></b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if($cart): ?>
                        <?php $__currentLoopData = $cart->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div id="product-card">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="/storage/cover_page/<?php echo e($item['item']['cover_page']); ?>"  alt="" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <table class="table ">
                                        <tbody>
                                            <tr>
                                                <th scope="">Products name</th>
                                                
                                                <td><?php echo e($item['item']['title']); ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Quantity</th>
                                                <td><?php echo e($item['qty']); ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Amount</th>
                                                <td><?php echo e($currency .' '.number_format($item['price'],2)); ?></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <hr>
                    <a href="<?php echo e(route('customerInvoice',['id' => $order->id])); ?>" class="btn btn-outline-inf">See Invoice</a>
                        <div class="complain-form mt-5">
                            <div class="container">
                                <h1>Contact Support </h1>
                                <hr>
                            <form action="<?php echo e(route('postComplain')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputname">NAME</label>
                                        <input type="text" value="<?php echo e(Auth::user()->name); ?>" name="name" class="form-control" id="inputname" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputemail">ORDER ID</label>
                                            <input type="text" class="form-control" id="inputorderid"
                                        placeholder="Order ID" name="order_id" readonly value="<?php echo e($order->order_id); ?>">
                                        </div>
                                    <input type="hidden" name="phone" value="<?php echo e(Auth::user()->phone); ?>">
                                        <div class="form-group col-md-12">
                                            <label for="inputemail">EMAIL</label>
                                        <input value="<?php echo e(Auth::user()->email); ?>" type="email" class="form-control" id="inputemail"
                                               name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-12">
                                                <label for="inputemail">Subject</label>
                                            <input  type='text' class="form-control" id="inputemail"
                                                   name="subject" placeholder="Subject">
                                            </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleFormControlTextarea1">Write to us</label>
                                            <textarea name="body" class="form-control" id="exampleFormControlTextarea1"
                                                rows="3" placeholder="Type here..!!"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-inf">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
<?php $__env->stopSection(); ?>

       
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/pages/order_details.blade.php ENDPATH**/ ?>