

<?php $__env->startSection('admin_css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/toastr/toastr.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Location</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                <div class="card">
                    
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form action="<?php echo e(route('location.update')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id" value="<?php echo e($location['id']); ?> ">
                            <div class="mb-3">
                              <label for="name" class="col-form-label">Name</label>
                              <input type="text" name='name' class="form-control" id="name" value="<?php echo e($location['name'] ?? ''); ?>" placeholder="Enter Location Name">
                              <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <span class="text-danger"> <?php echo e($message); ?> </span>
                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                              <div id="name_error"> </div>
                            </div>

                            <div class="mb-3">
                              <label for="name" class="col-form-label">Status</label>
                              <select class="form-control" name="status" id="status">
                                  <option value="Active" <?php echo e($location['status'] == 'Active' ? 'selected' : ''); ?>>Active</option>
                                  <option value="Upcoming" <?php echo e($location['status'] == 'Upcoming' ? 'selected' : ''); ?>>Upcoming</option>
                              </select>
                              <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <span class="text-danger"> <?php echo e($message); ?> </span>
                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                              <div id="status_error"> </div>
                            </div>

                            <div class="mb-3">
                              <label for="image" class="col-form-label">Image</label>
                              <input type="file" name='image' class="form-control" id="image">
                              <img src="<?php echo e(asset('uploads/location/' . $location['image'])); ?>" width="100px" height="100px" alt="">
                              <div id="image_error"> </div>
                             </div>
                            
                         
                           <div class="row justify-content-end">
                            <button type="submit" class="btn btn-primary">Submit </button>  
                           </div>                          
                          </form>
                      
                    </div>
                    <!-- /.card-body -->
                  </div>
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assets/plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/toastr/toastr.min.js')); ?>"></script>
    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.mainlayout',['title'=>"Location"], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/nni24/public_html/hotelai360/resources/views/admin/location/edit.blade.php ENDPATH**/ ?>