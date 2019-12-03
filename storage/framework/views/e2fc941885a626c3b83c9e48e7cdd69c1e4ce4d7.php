<?php $__env->startSection('content'); ?>
<div class="container">
    <section id="section-a" class="mt-5">
      <h2 class="cart-header">Cart(<?php echo e($totalQty); ?> items)</h2>

        <div class="card mt-3 p-0">
          <div class="container">
           <h5 class="item-title mb-4"> Cart Items </h5>
           <?php if(session()->has('cart')): ?>
           <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="row">
                
                <div class="col-md-4 ">
                  
                    
                    <div class="item-img d-flex mb-4">
                    
                        <img src="/storage/cover_page/<?php echo e($product['item']['cover_page']); ?>" alt="..." width="auto" height="150px">
                        <div class="details pl-4">
                          <h4 class="book-title"><?php echo e($product['item']['title']); ?></h4>
                          <h5 class="author mb-4"><?php echo e($product['item']['author']['name']); ?></h5>
                        <a href="<?php echo e(route('removeItem',['id'=>$product['item']['id']])); ?>" class="btn btn-outline-danger">Remove</a>

                        
                      </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                  <h5 class="item-title mb-4">Quantity</h5>
                    <input type="number" name="qty" class="form-control" value="<?php echo e($product['qty']); ?>" readonly>
                
                </div>
              

                <div class="col-md-3">
                  <h5 class="item-title">Unit Price</h5>
                  <div class="price-container mt-5">
                    <h4 class="item-prices text-success"><?php echo e($currency.''.number_format($product['item']['price']/100,2)); ?></h4>
                  </div>
                </div>  
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            <div class="total d-flex mt-5 pl-2">
                <h4 class="mr-4"><b>Total</b></h4>
                <h4 class="text-danger"><b><?php echo e($currency.''.number_format($totalPrice,2)); ?></b></h4>
            </div>
              
              <?php endif; ?>
            <p class="muted">shipping fee not included yet</p>
          </div>
        </div>
      
    </section>



    
    <section id="section-b pl-5 mb-5">
        <div class="checkout">
            <div class="row text-center">
              <div class="col-md-4">
               <a class="btn btn-outline-info btn-fill" href="<?php echo e(route('publish.index')); ?>">CONTINUE SHOPPING</a>
              </div>
              <div class="col-md-4">
                  <a class="btn btn-outline-danger btn-fill" href="<?php echo e(route('emptyCart')); ?>">EMPTY CART</a>
                </div>
              <div class="col-md-4">
                <?php if(session()->has('cart')): ?>
                
                <a class="btn btn-outline-primary btn-fill" href="<?php echo e(route('checkout')); ?>">PROCEED CHECKOUT</a>
                <?php elseif(session()->has('cart') < 1): ?>
                <a class="btn btn-outline-primary btn-fill" style="display:block;">PROCEED CHECKOUT</a>
                <?php endif; ?>
              </div>
            </div>
          </div>
    </section>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/pages/carts.blade.php ENDPATH**/ ?>