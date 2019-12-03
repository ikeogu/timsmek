<?php $__env->startSection('content'); ?>
<section>
  <div class="container">
    <marquee behavior="" direction="left">Post article for publication Post article for publication</marquee>
    <div class="row">
      <div class="col-md-12">
        <div class="about">
          <div class="about-title">
            <h1 class="mt-5">Our History</h1>
          </div>
          <div class="row">
            <div class="col-md-4 p-3">
              <div class="about-logo">
                <img src="./img/logo.png" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-md-8 p-3">
              <p class="about-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi exercitationem
                officia dolorem necessitatibus iusto debitis illum possimus doloremque in consequuntur, similique
                corporis sint veniam sed doloribus dicta non accusamus ut eaque maxime tempore quidem! At modi ab
                numquam hic reiciendis facilis laudantium. Labore laudantium ea maiores cupiditate error doloremque
                totam ipsum vitae optio nulla cum sit debitis deserunt pariatur sed, animi quo libero neque. Culpa
                doloremque aliquid placeat, temporibus, aperiam quibusdam esse amet tenetur commodi blanditiis
                provident vero aspernatur tempore, maiores corporis quae. Esse eveniet quos saepe facilis recusandae
                eligendi quasi non, iste ratione nesciunt animi omnis dolorum odio amet.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="bg-color">
  <div class="container">
    <div class="row">
      <div class="col-md-6 m-auto">
        <div class="about-title text-center p-5">
          <h1>
            <i class="icon ion-md-globe"></i>
            Our Mission
            <i class="icon ion-md-globe"></i>
          </h1>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident delectus ipsam facere non quae sint, asperiores id perspiciatis sequi aut voluptatem, minima accusantium? Architecto consequuntur, impedit animi molestias possimus officia!</p>
        </div>
      </div>
      <div class="col-md-6 m-auto">
        <div class="about-title text-center p-5">
          <h1>
            <i class="icon ion-md-globe"></i>
            Our Vission
            <i class="icon ion-md-globe"></i>
          </h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At ratione quae natus aspernatur esse sit nesciunt qui est rerum sunt impedit similique, commodi ullam, iure quisquam magni, obcaecati pariatur tenetur!</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="editors">
  <div class="container">
    <div class="header text-center mt-5">
      <h2>Meet Our Editors</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis mollitia cum tempore sequi, vel</p>
    </div>
    <div class="row">
      <?php $__currentLoopData = $editor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
          <div class="card user-card mt-5">
            <div class="card-block">
              <div class="user-image">
              <img src="/storage/editors/<?php echo e($item->photo); ?>" class="img-radius" alt="User-Profile-Image">
              </div>
              <h6 class="f-w-600 m-t-25 m-b-10"><?php echo e($item->name); ?></h6>
              
              <hr>
              <p class="m-t-15 text-muted"><?php echo e($item->bio); ?>

              </p>
              <hr>
              
            </div>
          </div>
        </div> 
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php echo e($editor->links()); ?>

      
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/pages/about.blade.php ENDPATH**/ ?>