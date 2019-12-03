<?php $__env->startSection('content'); ?>

<div class="container-fluid mt-5">
    <div class="row">
      <?php echo $__env->make('partials/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="col-md-6">
        <section id="landingPage">
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
            <marquee behavior="" direction="left">Post article for publication Post article for publication</marquee>
            <div class="banner">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/banner.webp"  alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/banner1.jpg"  alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/banner3.jpg"  alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/banner.jpg"  alt="Fourth slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
           
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
                                    <p class="price"><?php echo e(date('d/M/Y ',strtotime($item->year_pub))); ?></p>
                                    <?php if($item->status === 1 && $item->available == 1): ?>
                                        <p class="price">₦<?php echo e($item->price / 100); ?></p>
                                        
                                        <button type="button" class=" buy btn btn-default" data-toggle="modal" data-target="#exampleModalCenter">
                                                Buy <i class="fa fa-shopping-cart"></i>
                                        </button>
                                        <?php elseif($item->status === 1 && $item->available == 2): ?>
                                            <p class="price">₦<?php echo e($item->price /100); ?></p>

                                            <form action="<?php echo e(route('addToCart')); ?>" method="POST">
                                                <?php echo e(csrf_field()); ?>

                                                <label>Quantity <label>
                                                <input type="number" name="qty" min="1" class="form-control" required>
                                        
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
                <?php echo e($book->links()); ?>

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
             
              
              <?php endif; ?>
          </div>

          </div>
        </section>
        <br><br><br><br><br><br><br>
        <hr>
        <section id="recent-blog-post">
          <div class="header text-center">
            <h2>Our Blog</h2>
            <p>Read interesting topics from Timsmek Global Publishers.</p>
          </div>
          <div class="container">
              <div class="row">
                  <?php if($blog->count() > 0): ?>
                      <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="col-md-4">
                              <a href="/blog/<?php echo e($item->id); ?>" class="blog-card mt-5">
                                <div class="card-img">
                                <img src="/storage/blog_post/<?php echo e($item->image); ?>" alt="" class="img-fluid">
                                </div>
                                <div class="blog-title">
                                  <h3 class="heading"><?php echo e($item->caption); ?></h3>
                                  <date><?php echo e($item->created_at->diffForHumans()); ?> <?php echo e($item->writter); ?><i class="icon ion-md-chatbubbles"></i> </date>
                                  <p><?php echo e(str_limit($item->body, $limit = 30, $end = '...')); ?></p>
                                </div>
                              </a>
                            </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php echo e($blog->links()); ?>

                  <?php else: ?>
                      <div class="col-md-8">
                        <h3>We Don't have recent Post on Our Blog.</h3>
                      </div>
                  <?php endif; ?>
              </div>
          </div>
        </section>
      </div>
      <?php echo $__env->make('partials/sidebar2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
    </div>
  </div>
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
  
<?php $__env->stopSection(); ?>

<!-- Button trigger modal -->
   
      <!-- Modal -->
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/pages/index.blade.php ENDPATH**/ ?>