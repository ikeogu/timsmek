<?php $__env->startSection('adminMain'); ?>
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
<div class="row">

        <!-- Donut Chart -->
        <div class="col-xl-4 col-lg-5">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">Post a Blog news</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <form class="user" action="<?php echo e(route('blog.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <div class="custom-file">
                    <input type="file" class="form-control form-control-user" name="image" required>
                    <small>Upload Image</small>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="Name" aria-describedby="name"
                    placeholder="Enter blog title" name="caption">
                </div>
                <div class="form-group">
                  <textarea name="body" id="" cols="36" rows="5" placeholder="Write blog content..."
                    class="p-3 form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="Name" aria-describedby="name"
                    placeholder="Enter blog Author" name="writter">
                </div>
                <button class="btn btn-danger btn-user btn-block" type="submit">
                  Post blog
                </button>
                <hr>
              </form>
            </div>
          </div>
        </div>

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">

          <!-- Area Chart -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">All blog post</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Image</th>
                      <th class="text-center">Blog</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                            <td><?php echo e($item->caption); ?></td>
                            <td class="text-center">
                            <img class="rounded-circle" src="/storage/blog_post/<?php echo e($item->image); ?>" alt="<?php echo e($item->id); ?>" height="80" width="70">
                              <span><?php echo e($item->caption); ?></span>
                            </td>
                            <td><?php echo e($item->body); ?></td>
                            <td class="d-flex justify-content-between flex-wrap">
                              <a href="/blog/<?php echo e($item->id); ?>/edit" class="btn btn-danger btn-user btn-block">Edit</a>

                                <form action="<?php echo e(route('blog.destroy' , $item->id)); ?>" method="POST">
                                        <input name="_method" type="hidden" value="DELETE">
                                        <?php echo e(csrf_field()); ?>                                                       
                                            <button type="submit" class="btn btn-danger btn-user btn-block" onclick="return confirm('Are you sure?')">Delete</button>
                                        
                                </form>
                            </td>
                          </tr>  
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    

                    
                  </tbody>
                </table>
                <?php echo e($blog->links()); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/blog/allblog.blade.php ENDPATH**/ ?>