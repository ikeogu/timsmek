<?php $__env->startSection('content'); ?>
    
<div class="container mt-5 p-5">
    
        <div class="container checkout-table">
            <!--Breadcrumbs-->
            <ul class="breadcrumb">
            <li><a href="<?php echo e(route('getCart')); ?>">view products</a></li>
            </ul>
            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(Session::has('cart')): ?>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product['item']['title']); ?></td>
                            <td><?php echo e($product['qty']); ?></td>
                            <td><?php echo e($currency.''.number_format(($product['item']['price']/100),2)); ?></td>
                            <td><?php echo e($currency.''.number_format($product['price'],2)); ?></td>
                        
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        
                        
                        <tr>
                            <td></td>
                            <td></td>
                            <td><b>TOTAL</b></td>
                        <td><b><?php echo e($currency.''.number_format($totalPrice,2)); ?></b></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    
    <h4>Shipping Address</h4>
    <div class="card p-5">
      <form action="<?php echo e(route('payH')); ?>" method="POST" accept-charset="UTF-8">
          <?php echo e(csrf_field()); ?>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="">First name</label>
          <input type="text" class="form-control" value="<?php echo e($user->first_name); ?>"placeholder="First name" name="first_name">
          </div>
          <div class="form-group col-md-6">
            <label for="">Last name</label>
          <input type="text" class="form-control" value="<?php echo e($user->last_name); ?>"placeholder="last name" name="last_name">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Email Address</label>
        <input type="text" class="form-control" value="<?php echo e($user->email); ?>" placeholder="Johndoe@gmail.com" name="email">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Address </label>
          <input type="text" class="form-control" name="address" placeholder=" Room 12 Apartment, street, or floor">
        </div>
        
        <div class="form-row">
          
          <div class="form-group col-md-4">
            <label for="inputState">State/Province</label>
            <select id="inputState" class="form-control" name="state">
              <option >Choose...</option>
              <option>Abia</option>
              <option>Adamawa</option>
              <option>Akwa-ibom</option>
              <option>Anambra</option>
              <option>Bauchi</option>
              <option>Bayelsa</option>
              <option>Benue</option>
              <option>Borno</option>
              <option>Cross River</option>
              <option>Delta</option>
              <option>Ebonyi</option>
              <option>Edo </option>
              <option>Ekiti </option>
              <option>Enugu</option>
              <option>Gombe</option>
              <option>Jigawa</option>
              <option>Kaduna</option>
              <option>Kano</option>
              <option>Kastina</option>
              <option>Kebbi</option>
              <option>Kogi</option>
              <option>Kwara</option>
              <option>Nassarawa</option>
              <option>Niger</option>

            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" placeholder=" enter city" name="city">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip" name="zip">
          </div>
          <div class="form-group col-md-8">
            <label for="phone">Phone</label>
          <input type="number" class="form-control" id="inputZip" value="<?php echo e($user->phone); ?>" name="phone">
          </div>
        </div>
        <div class="form-group">
          
        </div>
        <input type="hidden" name="amount" value="<?php echo e($totalPriceCheckout); ?>"> 
        <input type="hidden" name="quantity" value="<?php echo e($totalQty); ?>">
        <input type="hidden" name="" value="<?php echo e(json_encode($array = ['key_name' => 'value',])); ?>" > 
        <input type="hidden" name="reference" value="<?php echo e(Paystack::genTranxRef()); ?>"> 
        <input type="hidden" name="key" value="<?php echo e(config('paystack.secretKey')); ?>"> 
            <div class="form-group">
            
            <button type="submit" class="btn btn-outline-danger">Place Order</button>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/pages/checkout.blade.php ENDPATH**/ ?>