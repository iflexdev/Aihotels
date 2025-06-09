

<?php $__env->startSection('admin_css'); ?>
     <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/toastr/toastr.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Room</h1>
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
                        <h3>Room details </h3>
                        <form id='saveform' enctype="multipart/form-data">
                            <input type="hidden" name="eid" value="<?php echo e($room['id']); ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                    <label for="city" class="col-form-label">Hotels </label>
                                   <select class="form-control" name="hotel_id" id="hotel_id">
                                    
                                        <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotels): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($hotels['id']); ?>" <?php echo e($room['hotel_id'] == $hotels['id'] ? 'selected' : ''); ?> ><?php echo e($hotels['name']); ?></option>
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </select>
                                    <div id="city_error"> </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                    <label for="name" class="col-form-label">Name</label>
                                    <input type="text" name='name' class="form-control" id="name" value="<?php echo e($room['name'] ?? ""); ?>" placeholder="Enter Room Name">
                                    <div id="name_error"> </div>
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                    <div class="mb-3">
                                    <label for="room_type" class="col-form-label">Room Type </label>
                                    <input type="text" name='room_type' class="form-control" id="room_type" value="<?php echo e($room['type'] ?? ""); ?>" placeholder="Enter Room Type">
                                    <div id="room_type_error"> </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                    <label for="price" class="col-form-label">Price </label>
                                    <input type="text" name='price' class="form-control" value="<?php echo e($room['price'] ?? ""); ?>" id="price" placeholder="Enter room price ">
                                    <div id="price_error"> </div>
                                    </div>
                                </div>

                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                    <label for="capacity" class="col-form-label">Capacity</label>
                                    <input type="text" name='capacity' class="form-control" id="capacity" value="<?php echo e($room['capacity'] ?? ""); ?>" placeholder="Enter room capacity" >
                                    <div id="capacity_error"> </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="room_image" class="col-form-label">Room Image</label>
                                        <input type="file" name='room_image' class="form-control" id="room_image">
                                        <div id="room_image_error"> </div>
                                        <img class="mt-2" src="<?php echo e(asset('uploads/room/'.$room['image'])); ?>" width="100px" height="100px" alt="">
                                    </div>  
                                </div>
                                     <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Description </label>
                                    
                                    <textarea class="form-control" name="description" id="description" cols="15" rows="6"> <?php echo e($room['description'] ?? ""); ?></textarea>
                                    <div id="description_error"> </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="size_sqm" class="col-form-label">Size Sqm</label>
                                <input type="text" name='size_sqm' value="<?php echo e($room['size_sqm'] ?? ""); ?>" class="form-control" id="size_sqm" placeholder="Enter room size in Sqm">
                                <div id="size_sqm_error"> </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="size_sqf" class="col-form-label">Size Sqf</label>
                                <input type="text" name='size_sqf' value="<?php echo e($room['size_sqft'] ?? ""); ?>" class="form-control" id="size_sqf" placeholder="Enter room size in Sqf">
                                <div id="size_sqf_error"> </div>
                                </div>
                            </div>
                            
                             <div class="col-md-12 mb-3">
                            <div class="row">
                                <div class="col-4">
                                    <div class="custom-control custom-checkbox">
                                      <input class="custom-control-input" name="room_amenities[]" <?php echo e(str_contains($room['room_amenities'],'Breakfast') ? 'checked' : ""); ?> type="checkbox" id="breakfastCheck" value="Breakfast">
                                      <label for="breakfastCheck" class="custom-control-label">Breakfast</label>
                                    </div>
                                </div>    
                                <div class="col-4">
                                    <div class="custom-control custom-checkbox">
                                      <input class="custom-control-input" name="room_amenities[]" <?php echo e(str_contains($room['room_amenities'],'Lunch') ? 'checked' : ""); ?> type="checkbox" id="lunchCheck" value="Lunch">
                                      <label for="lunchCheck" class="custom-control-label">Lunch</label>
                                    </div>
                                </div>    
                                <div class="col-4">
                                    <div class="custom-control custom-checkbox">
                                      <input class="custom-control-input" name="room_amenities[]" <?php echo e(str_contains($room['room_amenities'],'Dinner') ? 'checked' : ""); ?> type="checkbox" id="dinnerCheck" value="Dinner">
                                      <label for="dinnerCheck" class="custom-control-label">Dinner</label>
                                    </div>
                                </div>    
                             </div>
                            </div>

                             <div class="col-md-12">
                                <div class="mb-3">
                                    <select class="form-control" name="status" id="stutus">
                                    
                                       
                                        <option value="1" <?php echo e($room['status'] == '1' ? 'selected' : ''); ?> >Active</option>
                                        <option value="0" <?php echo e($room['status'] == '0' ? 'selected' : ''); ?> >In Active</option>
                                       
                                        
                                    </select>
                                </div>
                             </div>
                             
                           

                            </div>
                        
                       

                           <div class="row justify-content-end">
                                <button type="submit" id="formSubmitButton" class="btn btn-primary">Update </button>    
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

<!-- Add this in your HTML head or before closing body tag -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script>

  
function tostor(message){
     var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
    
        Toast.fire({
            icon: 'error',
            title: message
        })
}

   
$(document).ready(function() {
    
    $('#saveform').submit(function(event){
        event.preventDefault();

        var formdata = new FormData($('#saveform')[0]);

        formdata.append('_token', '<?php echo e(csrf_token()); ?>');

        $.ajax({
            type:'POST',
            url:"<?php echo e(route('room.update')); ?>",
            contentType: false, // Required when sending FormData object
            processData: false, // Required when sending FormData object
            data:formdata,
            // beforeSend: function () {
            //     $('#formSubmitButton').attr('disabled', true).text('Please wait...');
            // },
            success:function(data){
                if(data.status == 'success'){
                    Swal.fire({
                        title: "Good job!",
                        text: data.msg,
                        icon: "success"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.href = "<?php echo e(route('room.index')); ?>"
                        }
                    });
                }
            },
            error:function(error){
                if(error.status == 500){
                    Swal.fire({
                        title: "Opps",
                        text: error.responseJSON.msg,
                        icon: "error"
                    })
                }
                if (error.responseJSON) {
                  
                    $.each(error.responseJSON, function(key, value) {
                        if (value[0]) {
                            $('#' + key + '_error').html(
                            '<p class="text-danger">' + value[0] +
                                '</p>').delay(3000).show().fadeOut('slow');
                            }
                    });
                }


            }

        });
        
    });

});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.mainlayout',['title'=>"Rooms"], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/nni24/public_html/hotelai360/resources/views/admin/room/edit.blade.php ENDPATH**/ ?>