<?php $__env->startSection('content'); ?>
<section id="store" class="container mt-5">
    <div class="header text-center">
      <h2>Meet Our Authors</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis mollitia cum tempore sequi, vel</p>
		</div>
		
		
    <div class="row">
			<?php if($author->count() > 0): ?>
				<?php $__currentLoopData = $author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				<div class="col-md-4">
						<div class="card user-card mt-5">
							<div class="card-block">
								<div class="user-image">
								<img src="/storage/authors/<?php echo e($item->photo); ?>" class="img-radius"
										alt="<?php echo e($item->name); ?>" height="60" width="70">
								</div>
								<h6 class="f-w-600 m-t-25 m-b-10"><?php echo e($item->name); ?></h6>
								<p class="text-muted">Status | Author |</p>
								
                <p><a href="/authors/<?php echo e($item->id); ?>" class="btn btn-read">read more...</a></p>
                <hr>
								<div class="row justify-content-center user-social-link">
									<div class="col-auto"><a href="<?php echo e($item->instagram); ?>"><i class="fa fa-facebook text-facebook"></i></a></div>
									<div class="col-auto"><a href="<?php echo e($item->linkin); ?>"><i class="fa fa-linkedin text-linkedin"></i></a></div>
									<div class="col-auto"><a href="<?php echo e($item->twitter); ?>"><i class="fa fa-twitter text-twitter"></i></a></div>
								</div>
							</div>
						</div>
					</div>	
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		<?php else: ?>
	
      <div class="row">
        <div class="col-md-4">
          <div class="card user-card mt-5">
            <div class="card-block">
              <div class="user-image">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-radius"
                  alt="User-Profile-Image">
              </div>
              <h6 class="f-w-600 m-t-25 m-b-10">prof Alessa Robert</h6>
              <p class="text-muted">Author | Male |</p>
              <hr>
              <p class="m-t-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              </p>
              <p><a href="/authors/1" class="btn btn-read">read more...</a></p>
              <hr>
              <div class="row justify-content-center user-social-link">
                <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                <div class="col-auto"><a href="#!"><i class="fa fa-linkedin text-linkedin"></i></a></div>
                <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card user-card mt-5">
            <div class="card-block">
              <div class="user-image">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-radius"
                  alt="User-Profile-Image">
              </div>
              <h6 class="f-w-600 m-t-25 m-b-10">prof Alessa Robert</h6>
              <p class="text-muted">Author | Male |</p>
              <hr>
              <p class="m-t-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              </p>
              <hr>
              <div class="row justify-content-center user-social-link">
                <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                <div class="col-auto"><a href="#!"><i class="fa fa-linkedin text-linkedin"></i></a></div>
                <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card user-card mt-5">
            <div class="card-block">
              <div class="user-image">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-radius"
                  alt="User-Profile-Image">
              </div>
              <h6 class="f-w-600 m-t-25 m-b-10">prof Alessa Robert</h6>
              <p class="text-muted">Authors | Male |</p>
              <hr>
              <p class="m-t-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              </p>
              <hr>
              <div class="row justify-content-center user-social-link">
                <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                <div class="col-auto"><a href="#!"><i class="fa fa-linkedin text-linkedin"></i></a></div>
                <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
              </div>
            </div>
          </div>
        </div>
     
	</section> 
	<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/authors/index.blade.php ENDPATH**/ ?>