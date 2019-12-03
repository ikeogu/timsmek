<?php $__env->startSection('adminMain'); ?>
<div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">Published Article</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Authors</th>
                  <th>Title</th>
                  <th>Email</th>
                  <th>Category</th>
                  
                  <th>Code</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $art; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->title); ?></td>
                        <td><?php echo e($item->email); ?></td>
                        
                        <td><?php echo e($item->code); ?></td>
                        <td class="d-flex justify-content-between flex-wrap">
 
                          <a href="<?php echo e(route('preview',[$item->id])); ?>" target="_blank" class="btn btn-danger btn-user btn-block"></i>Preview</a>
                          <a href="<?php echo e(route('download',[$item->id])); ?>" class="btn btn-warning btn-user btn-block"> Download</a>
                                  
                        </td>
                      </tr> 
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($art->links()); ?>


              </tbody>
            </table>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/admin/allarticles.blade.php ENDPATH**/ ?>