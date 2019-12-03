    <div class="col-md-3">
        <div class="container">
          <div class="cards">
            <div class="card-header">
              Recent Publications
            </div>
            <div class="card-body">
              <?php if(count($recent ) > 0): ?>
                 <?php $__currentLoopData = $recent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="card-inner">
                    <p><i class="icon ion-md-journal mr-2"></i><?php echo e($item->title); ?></p>
                    <ul>
                      <li>by: <span><?php echo e($item->author->name); ?></span></li>
                      <li>Date: <span><?php echo e($item->created_at->diffForHumans()); ?></span></li>
                    </ul>
                  </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              <?php else: ?>
              


              <div class="card-inner">
                <p><i class="icon ion-md-journal mr-2"></i>Notes on Language and Linguistics</p>
                <ul>
                  <li>by: <span>Stephen john</span></li>
                  <li>Date: <span>22-11-2019</span></li>
                </ul>
              </div>

              <div class="card-inner">
                <p><i class="icon ion-md-journal mr-2"></i>Notes on Language and Linguistics</p>
                <ul>
                  <li>by: <span>Stephen john</span></li>
                  <li>Date: <span>22-11-2019</span></li>
                </ul>
              </div>

              <div class="card-inner">
                <p><i class="icon ion-md-journal mr-2"></i>Notes on Language and Linguistics</p>
                <ul>
                  <li>by: <span>Stephen john</span></li>
                  <li>Date: <span>22-11-2019</span></li>
                </ul>
              </div>

              <?php endif; ?>
            </div>
          </div>
        </div>
      </div><?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>