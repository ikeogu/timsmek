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
              <h6 class="m-0 font-weight-bold text-danger">Add A Book</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <form class="user" action="<?php echo e(route('publish.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="Name" aria-describedby="name"
                    placeholder="Enter Book Title" name="title">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="Name" aria-describedby="name"
                    placeholder="Enter Book ISBN" name="isbn">
                </div>
                <div class="form-group">
                  <textarea class="form-control form-control-user" aria-describedby="name" cols="7"row="7"
                    placeholder="Enter Description" name="description"></textarea>
                </div>
                <div class="form-group">
                  <input type="date" class="form-control form-control-user" id="Name" aria-describedby="name"
                    placeholder="Enter Date of Publication " name="year_pub">
                    <small>Date of Publication</small>
                </div>
                <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="Name" aria-describedby="name"
                          placeholder="Enter Price of Book" name="price">
                      </div>
                <div class="form-group">
                        <select class="form-control " id="Name" 
                           name="available">
                           <option >-Select Availablity-</option>
                           <option value="1" >Soft copy</option>
                           <option value="2" >Hard copy</option>
                           <option value="3" >Both</option>
                      </select>   
                </div>
                <div class="form-group">
                    <select class="form-control " id="Name" 
                        name="category_id">
                        <option  >-Select Category-</option>
                        <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>" ><?php echo e($item->name); ?></option>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </select>   
                </div>
                <div class="form-group">
                    <select class="form-control " id="Name" 
                        name="author_id">
                        <option  >-Select Author-</option>
                        <?php $__currentLoopData = $author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>" ><?php echo e($item->name); ?></option>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </select>   
                </div>
                <div class="form-group">
                  <input type="file" class="form-control form-control-user" id="Name" aria-describedby="name"
                   name="cover_page">
                    <small>Upload Cover page</small>
                </div>
                <div class="form-group">
                  <input type="file" class="form-control form-control-user" id="Name" aria-describedby="name"
                   name="content">
                    <small>Upload Book PDF</small>
                </div>
                <button type="submit" class="btn btn-danger btn-user btn-block">
                  Add Book
                </button>
                <hr>
              </form>
            </div>
          </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Bitnami\wampstack-7.2\apache2\htdocs\LaravelProjects\timsmek\resources\views/admin/pub_book.blade.php ENDPATH**/ ?>