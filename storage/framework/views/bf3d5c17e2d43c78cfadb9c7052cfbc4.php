

<?php $__env->startSection('admin_css'); ?>
     <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/toastr/toastr.min.css')); ?>">

  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/select2/css/select2.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Offer</h1>
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
                        <h3>Offer details </h3>
                        <form id='saveform' enctype="multipart/form-data">
                            <input type="hidden" name="eid" value="<?php echo e($offer['id']); ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                    <label for="city" class="col-form-label">City </label>
                                   <select class="form-control" name="location" id="location">
                                    
                                        <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($location['id']); ?>"  ><?php echo e($location['name']); ?></option>
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </select>
                                    <div id="location_error"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                    <label for="city" class="col-form-label">Hotels </label>
                                   <select class="form-control" name="hotel_id" id="hotel_id" onchange="getRooms(this.value)">
                                    
                                        <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($hotel['id']); ?>" <?php echo e($hotel['id'] == $offer['hotel_id'] ? 'selected' : ''); ?>  ><?php echo e($hotel['name']); ?></option>
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </select>
                                    <div id="hotel_error"> </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                    <label for="name" class="col-form-label">Rooms</label>
                                     <div class="">
                                        <select class="select2" multiple="multiple" name="rooms[]" class="form-control" data-placeholder="Select a State" id="rooms_select" style="width: 100%;">
                                            <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($room['id']); ?>" selected><?php echo e($room['name']); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div id="rooms_error"> </div>
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                    <div class="mb-3">
                                    <label for="title" class="col-form-label">Title </label>
                                    <input type="text" name='title' class="form-control" id="title"  value="<?php echo e($offer['title'] ?? ""); ?>"  placeholder="Enter Offer Title">
                                    <div id="title_error"> </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                    <label for="offer_amount" class="col-form-label">Offer Amount(%) </label>
                                    <input type="text" name='offer_amount' class="form-control"  value="<?php echo e($offer['offer_amount'] ?? ""); ?>"  id="offer_amount" placeholder="Enter Offer price ">
                                    <div id="offer_amount_error"> </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Description </label>
                                        
                                        <textarea class="form-control" name="description" id="description" cols="15" rows="6"> <?php echo e($offer['description'] ?? ""); ?></textarea>
                                        <div id="description_error"> </div>
                                    </div>
                                </div>

                            </div>
                        
                       

                           <div class="row justify-content-end">
                                <button type="submit" id="formSubmitButton" class="btn btn-primary">Update</button>    
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

<!-- Select2 -->
<script src="<?php echo e(asset('assets/plugins/select2/js/select2.full.min.js')); ?>"></script>


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

function getRooms(hotel_id){
    $.ajax({
        type:'GET',
        url:"<?php echo e(route('offer.getrooms')); ?>",
        data:{hotel_id:hotel_id},
        success:function(data){
            if(data.status == 'success'){
                var html = '';
                $.each(data.rooms, function(key, value) {
                    html += '<option value="'+value.id+'">'+value.name+'</option>';
                });
                $('#rooms_select').html(html);
            }
        },
        error:function(error){
            Swal.fire({
                title: "Opps!",
                text: data.msg,
                icon: "error"
            })
        }
    });
}

   
$(document).ready(function() {

     //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    
    
    $('#saveform').submit(function(event){
        event.preventDefault();

        var formdata = new FormData($('#saveform')[0]);

        formdata.append('_token', '<?php echo e(csrf_token()); ?>');

        $.ajax({
            type:'POST',
            url:"<?php echo e(route('offer.update')); ?>",
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
                            location.href = "<?php echo e(route('offer.index')); ?>"
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

<?php echo $__env->make('admin.layout.mainlayout',['title'=>"Offer"], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/nni24/public_html/hotelai360/resources/views/admin/offer/edit.blade.php ENDPATH**/ ?>