<?php $__env->startSection('content'); ?>
<section id="editors" class="container mt-5">
    <div class="header text-center">
        <h2>Welcome to our store</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis mollitia cum tempore sequi, vel</p>
    </div>
    <section class="trendng">
        <div class="container">
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
            <div class="books-card mt-5">
                <div class="row mt-5 m-auto mb-5">
                    <div class=" col-md-3 col-lg-2">
                        <form class="form">
                            <div class="form-group mb-4 mr-sm-2">
                                <select id="inputState" class="form-style" name="cat_id">
                                    <option selected >Sort by Category</option>
                                    <?php if($cat->count() > 0): ?>
                                        <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option> <a href ="/publish/"><?php echo e($item->name); ?></a></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </form>
                        <div class="sidebar-box">
                            <h4 class="heading-sidebar">Category</h4>
                            <?php if($cat->count() > 0): ?>
                               
                                    <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <ul class="categories">
                                            <li>
                                                
                                                    <a href ="/publish/"><?php echo e($item->name); ?></a>
                                                
                                            </li>
                                            <hr>
                                            
                                            
                                        </ul>
                                        <?php if($item->count() > 6): ?> 
                                           <?php break; ?>
                                        <?php endif; ?>    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h4>Most Popular</h4>
                        <div class="row">

                           
                            <?php if($book->count() > 0): ?>

                                <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-3 col-lg-3">
                                        <div class="card-container manual-flip">
                                            <div class="card">
                                                <div class="front mb-5">
                                                    <div class="product">
                                                    <img class="img-circle" src="/storage/cover_page/<?php echo e($item->cover_page); ?>" />
                                                    </div>
                                                    <div class="content text-center">
                                                    <h6 class="f-w-600 m-b-10"><?php echo e($item->title); ?></h6>
                                                    <hr>
                                                    <?php if($item->available == 1): ?>
                                                        <p class="f-w-600 m-b-10">only Soft copy</p>
                                                        <?php elseif($item->available == 2): ?>
                                                            <p class="f-w-600 m-b-10">only Hard copy</p> 
                                                    <?php elseif($item->available == 3): ?>
                                                        <p class="f-w-600 m-b-10">available both Hard and soft copy</p> 
                                                    <?php endif; ?> 
                                                    <p class="price"> <?php echo e(date('d/M/Y ',strtotime($item->year_pub))); ?></p>
                                                    <?php if($item->status === 1 && $item->available == 1): ?>
                                                        <p class="price">₦<?php echo e($item->price / 100); ?></p>
                                                        
                                                        <button type="button" class=" buy btn btn-default" data-toggle="modal" data-target="#exampleModalCenter">
                                                                Buy <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <?php elseif($item->status === 1 && $item->available == 2): ?>
                                                            <p class="price">₦<?php echo e($item->price / 100); ?></p>

                                                            <form action="<?php echo e(route('addToCart')); ?>" method="POST">
                                                                <?php echo e(csrf_field()); ?>

                                                                <label>Quantity <label>
                                                                <input type="number" name="qty"  min="1" class="form-control" required>
                                                        
                                                                <input type="hidden" name="id" value="<?php echo e($item->id); ?>">
                                                                <button type="submit" class="text-white buy btn btn-danger">
                                                                    Add to Cart <i class=" text-white fa fa-shopping-cart"></i>
                                                                </button>
                                                            
                                                            </form>
                                                            
                                                        <?php elseif($item->status === 0 && $item->available == 2): ?>
                                                            <p class="price">Free</p>
                                                            <form action="<?php echo e(route('addToCart')); ?>" method="POST">
                                                                <?php echo e(csrf_field()); ?>

                                                                <label>Quantity <label>
                                                                <input type="number"  name="qty" class="form-control" required>
                                                                <input type="hidden" name="id" value="<?php echo e($item->id); ?>">
                                                                <button type="submit" class="text-white buy btn btn-danger" >
                                                                    Add to Chart <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                            
                                                            </form>
                                                        
                                                        <?php elseif($item->status === 0 && $item->available == 1): ?>
                                                        <p class="price">Free</p>
                                                        
                                                        <a href="<?php echo e(URL::signedRoute('down',['key'=> $item->id])); ?>" class="buy btn">Download <i class="fa fa-download"></i></a>
                                                        <?php endif; ?>    
                                                    <div class="footer">
                                                        <button class="btn btn-simple" onclick="rotateCard(this)">
                                                            <i class="fa fa-mail-forward"></i> view details
                                                        </button>
                                                    </div>
                                                </div>
                                            </div> <!-- end front panel -->
                                        
                                            <div class="back mb-5">
                                                
                                                <div class="user">
                                                <img class="img-circle" src="/storage/authors/<?php echo e($item->author->photo); ?>" height="50" width="60">
                                                </div>
                                                <div class="content text-center">
                                                    <div class="main">
                                                    <h6 class="m-b-10"><?php echo e($item->author->name); ?> </h6>
                                                    <a href="/authors/<?php echo e($item->author->id); ?>">View more</a>
                                                    
                                                    <hr> 
                                                    <h6 class="m-b-10">Cat: <?php echo e($item->category->name); ?></h6>
                                                    
                                                    <a href="/publish/<?php echo e($item->id); ?>">About book</a>
                                                    <p class="text-muted m-t-15"><?php echo e(str_limit($item->description, $limit = 30, $end = '...')); ?></p>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <button class="btn price p-2 mb-2" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                                <i class="fa fa-reply"></i> Back
                                                </button>
                                            </div>
                                            </div> <!-- end back panel -->
                                        </div> <!-- end card -->
                                    </div> <!-- end card-container -->
                                    </div> 
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                            <?php else: ?>    
         
                        
                            
                            <div class="col-md-3 col-lg-3">
                                <div class="card-container manual-flip">
                                    <div class="card">
                                        <div class="front mb-5">
                                            <div class="product">
                                                <img class="img-circle" src="img/book1.jpg" />
                                            </div>
                                            <div class="content text-center">
                                                <h6 class="f-w-600 m-b-10">MySQl Database</h6>
                                                <hr>
                                                <p class="price">$229.99</p>
                                                <a href="#" class="buy btn">Buy <i class="fa fa-shopping-cart"></i></a>
                                                <div class="footer">
                                                    <button class="btn btn-simple" onclick="rotateCard(this)">
                                                    <i class="fa fa-mail-forward"></i> view details
                                                    </button>
                                                </div>
                                            </div>
                                        </div> <!-- end front panel -->
                                        <div class="back mb-5">
                                            <div class="user">
                                                <img class="img-circle" src="img/authors/rotating_card_profile2.png" />
                                            </div>
                                            <div class="content text-center">
                                                <div class="main">
                                                    <h6 class="m-b-10"> prof Alessa Robert</h6>
                                                    <p class="text-muted">Active | Male </p>
                                                    <!-- <hr> -->
                                                    <p class="text-muted m-t-15">Edu Level: PHD</p>
                                                    <p class="text-muted m-t-15">"Lamborghini Mercy Your chick she so thirsty I'm in that two
                                                seat Lambo"</p>
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="footer">
                                            <button class="btn price p-2 mb-2" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                                <i class="fa fa-reply"></i> Back
                                            </button>
                                        </div>
                                    </div> <!-- end back panel -->
                                </div> <!-- end card -->
                            </div> <!-- end card-container -->
                        
                            <div class="col-md-3 col-lg-3">
                                <div class="card-container manual-flip">
                                    <div class="card">
                                        <div class="front mb-5">
                                            <div class="product">
                                                <img class="img-circle" src="img/book1.jpg" />
                                            </div>
                                            <div class="content text-center">
                                                <h6 class="f-w-600 m-b-10">MySQl Database</h6>
                                                <hr>
                                                <p class="price">$229.99</p>
                                                <a href="#" class="buy btn">Buy <i class="fa fa-shopping-cart"></i></a>
                                                <div class="footer">
                                                    <button class="btn btn-simple" onclick="rotateCard(this)">
                                                    <i class="fa fa-mail-forward"></i> view details
                                                    </button>
                                                </div>
                                            </div>
                                        </div> <!-- end front panel -->
                                        <div class="back mb-5">
                                            <div class="user">
                                                <img class="img-circle" src="img/authors/rotating_card_profile2.png" />
                                            </div>
                                            <div class="content text-center">
                                                <div class="main">
                                                    <h6 class="m-b-10"> prof Alessa Robert</h6>
                                                    <p class="text-muted">Active | Male </p>
                                                    <!-- <hr> -->
                                                    <p class="text-muted m-t-15">Edu Level: PHD</p>
                                                    <p class="text-muted m-t-15">"Lamborghini Mercy Your chick she so thirsty I'm in that two
                                                    seat Lambo"</p>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <button class="btn price p-2 mb-2" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                                    <i class="fa fa-reply"></i> Back
                                                </button>
                                            </div>
                                        </div> <!-- end back panel -->
                                    </div> <!-- end card -->
                                </div> <!-- end card-container -->
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <div class="card-container manual-flip">
                                    <div class="card">
                                        <div class="front mb-5">
                                            <div class="product">
                                                <img class="img-circle" src="img/book1.jpg" />
                                            </div>
                                            <div class="content text-center">
                                                <h6 class="f-w-600 m-b-10">MySQl Database</h6>
                                                <hr>
                                                <p class="price">$229.99</p>
                                                <a href="#" class="buy btn">Buy <i class="fa fa-shopping-cart"></i></a>
                                                <div class="footer">
                                                    <button class="btn btn-simple" onclick="rotateCard(this)">
                                                    <i class="fa fa-mail-forward"></i> view details
                                                    </button>
                                                </div>
                                            </div>
                                        </div> <!-- end front panel -->
                                        <div class="back mb-5">
                                            <div class="user">
                                                <img class="img-circle" src="img/authors/rotating_card_profile2.png" />
                                            </div>
                                            <div class="content text-center">
                                                <div class="main">
                                                    <h6 class="m-b-10"> prof Alessa Robert</h6>
                                                    <p class="text-muted">Active | Male </p>
                                                    <!-- <hr> -->
                                                    <p class="text-muted m-t-15">Edu Level: PHD</p>
                                                    <p class="text-muted m-t-15">"Lamborghini Mercy Your chick she so thirsty I'm in that two
                                                    seat Lambo"</p>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <button class="btn price p-2 mb-2" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                                    <i class="fa fa-reply"></i> Back
                                                </button>
                                            </div>
                                        </div> <!-- end back panel -->
                                    </div> <!-- end card -->
                                </div> <!-- end card-container -->
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <div class="card-container manual-flip">
                                    <div class="card">
                                        <div class="front mb-5">
                                            <div class="product">
                                                <img class="img-circle" src="img/book1.jpg" />
                                            </div>
                                            <div class="content text-center">
                                                <h6 class="f-w-600 m-b-10">MySQl Database</h6>
                                                <hr>
                                                <p class="price">$229.99</p>
                                                <a href="#" class="buy btn">Buy <i class="fa fa-shopping-cart"></i></a>
                                                <div class="footer">
                                                    <button class="btn btn-simple" onclick="rotateCard(this)">
                                                    <i class="fa fa-mail-forward"></i> view details
                                                    </button>
                                                </div>
                                            </div>
                                        </div> <!-- end front panel -->
                                        <div class="back mb-5">
                                            <div class="user">
                                                <img class="img-circle" src="img/authors/rotating_card_profile2.png" />
                                            </div>
                                            <div class="content text-center">
                                                <div class="main">
                                                    <h6 class="m-b-10"> prof Alessa Robert</h6>
                                                    <p class="text-muted">Active | Male </p>
                                                    <!-- <hr> -->
                                                    <p class="text-muted m-t-15">Edu Level: PHD</p>
                                                    <p class="text-muted m-t-15">"Lamborghini Mercy Your chick she so thirsty I'm in that two
                                                    seat Lambo"</p>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <button class="btn price p-2 mb-2" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                                    <i class="fa fa-reply"></i> Back
                                                </button>
                                            </div>
                                        </div> <!-- end back panel -->
                                    </div> <!-- end card -->
                                </div> <!-- end card-container -->
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <div class="card-container manual-flip">
                                    <div class="card">
                                        <div class="front mb-5">
                                            <div class="product">
                                            <img class="img-circle" src="img/book1.jpg" />
                                            </div>
                                            <div class="content text-center">
                                            <h6 class="f-w-600 m-b-10">MySQl Database</h6>
                                            <hr>
                                            <p class="price">$229.99</p>
                                            <a href="#" class="buy btn">Buy <i class="fa fa-shopping-cart"></i></a>
                                            <div class="footer">
                                                <button class="btn btn-simple" onclick="rotateCard(this)">
                                                <i class="fa fa-mail-forward"></i> view details
                                                </button>
                                            </div>
                                            </div>
                                        </div> <!-- end front panel -->
                                        <div class="back mb-5">
                                            <div class="user">
                                                <img class="img-circle" src="img/authors/rotating_card_profile2.png" />
                                            </div>
                                            <div class="content text-center">
                                                <div class="main">
                                                    <h6 class="m-b-10"> prof Alessa Robert</h6>
                                                    <p class="text-muted">Active | Male </p>
                                                    <!-- <hr> -->
                                                    <p class="text-muted m-t-15">Edu Level: PHD</p>
                                                    <p class="text-muted m-t-15">"Lamborghini Mercy Your chick she so thirsty I'm in that two
                                                    seat Lambo"</p>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <button class="btn price p-2 mb-2" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                                    <i class="fa fa-reply"></i> Back
                                                </button>
                                            </div>
                                        </div> <!-- end back panel -->
                                    </div> <!-- end card -->
                                </div> <!-- end card-container -->
                            </div>
                            
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br>
        <hr>
        <h4 class="trendng mt-4">Trending</h4>
           
    </section>
    
    <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($item->status === 1): ?>
      
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"  aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                      <form method="POST" action="<?php echo e(route('pay')); ?>" accept-charset="UTF-8" class="form-horizontal" role="form">
                      
                          <div class="row" style="margin-bottom:40px;">
                              <div class="col-md-8 col-md-offset-2">
                              <p>
                                  <div>
                                  <p> <?php echo e($item->title); ?></p>
                                  <p>  ₦ <?php echo e($item->price); ?></p>
                                  </div>
                              </p>
                              <input type="text" name="email" value="" placeholder="Email" class="form-control"> 
                              <small class="text-danger">use an active email</small>
                              <input type="hidden" name="amount" value="<?php echo e($item->price * 100); ?>"> 
                              <input type="hidden" name="quantity" value="1">
                              <input type="hidden" name="metadata" value="<?php echo e(json_encode($array = ['book_id' => $item->id, 'title'=>$item->title])); ?>" > 
                              <input type="hidden" name="reference" value="<?php echo e(Paystack::genTranxRef()); ?>"> 
                              <input type="hidden" name="key" value="<?php echo e(config('paystack.secretKey')); ?>"> 
                              <?php echo e(csrf_field()); ?> 
                  
                                  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                  
                  
                              <p>
                                  <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                  <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                  </button>
                              </p>
                              </div>
                          </div>
                      
                      </form>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
              </div>
              </div>
          </div>
      
            
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/store/index.blade.php ENDPATH**/ ?>