

<?php $__env->startSection('css'); ?>
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Websetting</h1>
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

                        <form id='saveform'>

                            <div class="mb-3">
                              <label for="Phone" class="col-form-label">Phone</label>
                              <input type="text" name='phone' value="<?php echo e($setting->phone ?? ""); ?>" class="form-control" id="phone">
                            </div>
                            <div class="mb-3">
                              <label for="Address" class="col-form-label">Address</label>
                              <input type="text" name='address' value="<?php echo e($setting->address ?? ""); ?>" class="form-control" id="address">
                            </div>
                            <div class="mb-3">
                              <label for="Email" class="col-form-label">Email</label>
                              <input type="text" name='email' value="<?php echo e($setting->email ?? ""); ?>" class="form-control" id="email">
                            </div>

                            <div class="mb-3">
                              <label for="Map Link" class="col-form-label">Map Link</label>
                              <input type="text" name='map' value="<?php echo e($setting->map ?? ""); ?>" class="form-control" id="map">
                            </div>

                            <div class="mb-3">
                              <label for="logo" class="col-form-label">Logo</label>
                              <input type="file" name='logo' class="form-control" id="h_logo">
                              <img class="my-2" src="<?php echo e(isset($setting->logo) ? asset('uploads/setting/'.$setting->logo ) : ""); ?>" height="100px" alt="">
                              <div id="header_logo_error"> </div>
                            </div>

                            <div class="mb-3">
                                <label for="" class="col-form-label">Linkdin</label>
                                <input type="text" name='linkdin' value="<?php echo e($setting->linkdin ?? ""); ?>" class="form-control" id="linkdin_link">
                                <div id="linkdin_link_error"> </div>
                            </div>

                            <div class="mb-3">
                                <label for="footer_logo" class="col-form-label">Youtube Link</label>
                                <input type="text" name='youtube' value="<?php echo e($setting->youtube ?? ""); ?>" class="form-control" id="youtube_link">
                                <div id="youtube_link_error"> </div>
                            </div>

                            <div class="mb-3">
                                <label for="instagram" class="col-form-label">Instagram</label>
                                <input type="text" name='instagram' value="<?php echo e($setting->instagram ?? ""); ?>" class="form-control" id="instagram">
                                <div id="instagram_error"> </div>
                            </div>
                            <div class="mb-3">
                                <label for="facebook" class="col-form-label">Facebook</label>
                                <input type="text" name='facebook' value="<?php echo e($setting->facebook ?? ""); ?>" class="form-control" id="facebook">
                                <div id="facebook_error"> </div>
                            </div>
                            <div class="mb-3">
                                <label for="Twitter" class="col-form-label">Twitter</label>
                                <input type="text" name='twitter' value="<?php echo e($setting->twitter ?? ""); ?>" class="form-control" id="twitter">
                                
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Privacy Policy </label>
                                
                                <textarea class="form-control" name="privacy_policy" id="texteditor" > <?php echo $setting->privacy_policy ?? ""; ?> </textarea>
                                <div id="privacy_policy_error"> </div>
                            </div>

                           
                           <div class="row justify-content-end">
                            <button type="submit" class="btn btn-primary">Update </button>  
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?php echo e(asset('assets/plugins/summernote/summernote-bs4.min.js')); ?>"></script>

<script>

$(document).ready(function() {

    $(function () {
        $('#texteditor').summernote()
    })

    $('#saveform').submit(function(event){

        event.preventDefault();
        var formdata = new FormData($('#saveform')[0]);
        formdata.append('_token', '<?php echo e(csrf_token()); ?>');

        $.ajax({
            type:'POST',
            url:"<?php echo e(route('setting.storeOrupdate')); ?>",
            contentType: false, // Required when sending FormData object
            processData: false, // Required when sending FormData object
            data:formdata,
            success:function(data){
                if(data.status == 'success'){
                    Swal.fire({
                        title: "Good job!",
                        text: data.msg,
                        icon: "success"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload()
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

<?php echo $__env->make('admin.layout.mainlayout',['title'=>"WebSetting"], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/nni24/public_html/hotelai360/resources/views/admin/setting/index.blade.php ENDPATH**/ ?>