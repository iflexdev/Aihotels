

<?php $__env->startSection('admin_css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/toastr/toastr.min.css')); ?>">

    <style>
        .image-container {
            position: relative;
            display: inline-block;
        }

        .remove-image {
            position: absolute;
            top: 0px;
            right: 5px;
            background: rgba(255, 0, 0, 0.7);
            color: white;
            border: none;
            border-radius: 50%;
            padding: 2px 7px;
            cursor: pointer;
            font-weight: bold;
            font-size: 24px;
            line-height: 1;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Hotel</h1>
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
                                <h3>Hotel details </h3>
                                <form id='saveform'>

                                    <input type="hidden" name="eid" value="<?php echo e($hotel['id']); ?> ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="name" class="col-form-label">Name</label>
                                                <input type="text" name='name' class="form-control"
                                                    value="<?php echo e($hotel['name'] ?? ''); ?>" id="name"
                                                    placeholder="Enter Service Name">
                                                <div id="name_error"> </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="email" class="col-form-label">Contact Email </label>
                                                <input type="email" name='email' class="form-control"
                                                    value="<?php echo e($hotel['contact_email'] ?? ''); ?>" id="email"
                                                    placeholder="Enter Contact Email">
                                                <div id="email_error"> </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="col-form-label">Contact Phone </label>
                                                <input type="text" name='phone' class="form-control"
                                                    value="<?php echo e($hotel['contact_phone'] ?? ''); ?>" id="phone"
                                                    placeholder="Enter Contact Phone No.">
                                                <div id="phone_error"> </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="city" class="col-form-label">City </label>
                                                <select class="form-control" name="city" id="city">
                                                    <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($location['id']); ?>" <?php if($location['id'] == $hotel['city_id']): ?> selected <?php endif; ?> ><?php echo e($location['name']); ?></option>                                                        
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                </select>
                                                <div id="city_error"> </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="address" class="col-form-label">Address</label>
                                                <textarea type="text" name='address' class="form-control" id="address"> <?php echo e($hotel['address'] ?? ''); ?> </textarea>
                                                <div id="address_error"> </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="hotel_logo" class="col-form-label">Hotel Logo</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="hotel_logo"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                <img class="mt-1" src="<?php echo e(asset('uploads/hotel/' . $hotel['logo']) ?? ''); ?>"
                                                    height="100px" alt="">
                                                <div id="hotel_logo_error"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="hotel_image" class="col-form-label">Hotel Image</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="hotel_image"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                <img class="mt-1"
                                                    src="<?php echo e(asset('uploads/hotel/' . $hotel['banner']) ?? ''); ?>"
                                                    height="100px" alt="">
                                                <div id="hotel_image_error"> </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Description </label>
                                        
                                        <textarea class="form-control" name="description" id="description" cols="15" rows="6"> <?php echo e($hotel['description'] ?? ''); ?> </textarea>
                                        <div id="description_error"> </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="resto_description" class="col-form-label">Restaurant Description </label>
                                        
                                        <textarea class="form-control" name="resto_description" id="resto_description" cols="15" rows="6"> <?php echo e($hotel['resto_description'] ?? ''); ?> </textarea>
                                        <div id="resto_description_error"> </div>
                                    </div>

                                    <div class="mb-3">
                                    <label for="resto_image" class="col-form-label">Restaurant Image</label>
                                    <input type="file" name='resto_image' class="form-control" id="resto_image">
                                    <div id="resto_image_error"> </div>
                                    <img src="<?php echo e(asset('uploads/hotel/' . $hotel['resto_image']) ?? ''); ?>" height="100px" alt="">
                                    </div>

                                    <div class="mb-3">
                                        <label for="gallery_images" class="col-form-label">Gallery Images</label>
                                        <input type="file" name='gallery_images[]' multiple class="form-control"
                                            id="image">
                                        <div id="gallery_images_error"> </div>

                                        <div class="row">
                                            <?php $__currentLoopData = $hotel['gallery']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-md-3 my-1">
                                                    <div class="image-container">
                                                        <img src="<?php echo e(asset('uploads/hotel/' . $image['image_path'])); ?>"
                                                            width="200px" height="100px" alt="">
                                                        <button type="button" class="remove-image"
                                                            onclick="removeImage('gallery', <?php echo e($image['id']); ?> )"
                                                            data-id="<?php echo e($image['id']); ?>">×</button>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>


                                    <hr>
                                    
                                    <h3>Hotel Amentities</h3>
                                    <hr>

                                    <div id="amenties_box">
                                        <div class="row amentity_row ">
                                            <?php if(count($hotel['aminities'])): ?>
                                                <?php $__currentLoopData = $hotel['aminities']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $amenity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-md-5">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Amenity Name</label>
                                                            <input type="text" name="amentity_name[]"
                                                                class="form-control"
                                                                value="<?php echo e($amenity['amenitiy_name'] ?? ''); ?>"
                                                                placeholder="Enter amenity name">
                                                            <div class="text-danger" id="amentity_name_error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Amenity Image</label>
                                                            <input type="file" class="form-control"
                                                                name="amentity_image[]" id="exampleInputFile">

                                                        </div>
                                                        <img src="<?php echo e(asset('uploads/hotel/amenity/' . $amenity['amenitiy_image'])); ?>"
                                                            height="100px" alt="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="mb-3">
                                                            <div>
                                                                <label class="col-form-label">Action</label>
                                                            </div>
                                                            <button type="button" class="btn btn-danger " onclick="deleteAmenityAttraction('amenity',<?php echo e($amenity['id']); ?>)"
                                                                id="">Remove</button>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <!-- No remove button for first row -->
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Amenity Name</label>
                                                        <input type="text" name="amentity_name[]" class="form-control"
                                                            placeholder="Enter amenity name">
                                                        <div class="text-danger" id="amentity_name_error"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Amenity Image</label>
                                                        <input type="file" class="form-control"
                                                            name="amentity_image[]" id="exampleInputFile">

                                                    </div>

                                                </div>

                                                <div class="text-end">
                                                    <!-- No remove button for first row -->
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <!-- Add More Button -->
                                    <button type="button" class="btn btn-success btn-sm mt-2" id="add_more_amenity">Add
                                        More</button>

                                    

                                    

                                    <hr>
                                    <h3>Hotel Attraction</h3>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="col-form-label">Attraction Image</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            name="attraction_image" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                <img class="mt-1" src="<?php echo e(asset('uploads/hotel/attraction/'.$hotel['attraction'][0]['attraction_image'])); ?>" width="150px"  height="100px" alt="asdf">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="attraction_box">
                                        <div class="row attraction_row align-items-end">
                                            <?php if(count($hotel['attraction'])): ?>
                                            <?php $__currentLoopData = $hotel['attraction']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $attraction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input type="hidden" name="attraction_id[]" value="<?php echo e($attraction['id']); ?>">
                                                <div class="col-md-5">
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Attraction Name</label>
                                                        <input type="text" name="attraction_name[]"
                                                            class="form-control"
                                                            value="<?php echo e($attraction['attraction_name'] ?? ''); ?>"
                                                            placeholder="Enter Attraction name">
                                                        <div class="text-danger" id="attraction_name_error"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Attraction Distance</label>
                                                        <input type="text" name="attraction_distance[]"
                                                            class="form-control"
                                                            value="<?php echo e($attraction['attraction_distance'] ?? ''); ?>"
                                                            placeholder="Enter Attraction Distance">
                                                        <div class="text-danger" id="attraction_distance_error"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="mb-3">
                                                        <div>
                                                            <label class="col-form-label">Action</label>
                                                        </div>
                                                        <button type="button" class="btn btn-danger " onclick="deleteAmenityAttraction('attraction',<?php echo e($attraction['id']); ?>)"
                                                            id="">Remove</button>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <!-- No remove button for first row -->
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                             <div class="row attraction_row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Attraction Name</label>
                                                        <input type="text" name="attraction_name[]" class="form-control" placeholder="Enter Attraction name">
                                                        <div class="text-danger attraction_name_error"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Attraction Distance</label>
                                                        <input type="text" name="attraction_distance[]" class="form-control" placeholder="Enter Attraction Distance">
                                                        <div class="text-danger attraction_distance_error"></div>
                                                    </div>
                                                </div>
                                            </div>;
                                            <?php endif; ?>

                                        </div>
                                    </div>


                                    <!-- Add More Button -->
                                    <button type="button" class="btn btn-success btn-sm mt-2"
                                        id="add_more_attraction">Add More</button>



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
    
    <!-- Add this in your HTML head or before closing body tag -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    

    <script>
        $(document).ready(function() {
            $('#add_more_amenity').click(function() {
                let html = `
            <div class="row amentity_row align-items-end mb-2">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="col-form-label">Amenity Name</label>
                        <input type="text" name="amentity_name[]" class="form-control" placeholder="Enter amenity name">
                        <div class="text-danger" id="amentity_name_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="col-form-label">Amenity Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="amentity_image[]">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="text-danger" id="amentity_image_error"></div>
                    </div>
                </div>
                <div class="col-md-2 ">
                    <button type="button" class="btn btn-danger btn-sm remove_row">Remove</button>
                </div>
            </div>
        `;

                $('#amenties_box').append(html);
            });

            // Remove row on click
            $('#amenties_box').on('click', '.remove_row', function() {
                $(this).closest('.amentity_row').remove();
            });


            // Attraction box add more


        $('#add_more_attraction').click(function () {
            let html = `
            <div class="row attraction_row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="col-form-label">Attraction Name</label>
                        <input type="text" name="attraction_name[]" class="form-control" placeholder="Enter Attraction name">
                        <div class="text-danger attraction_name_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="col-form-label">Attraction Distance</label>
                        <input type="text" name="attraction_distance[]" class="form-control" placeholder="Enter Attraction Distance">
                        <div class="text-danger attraction_distance_error"></div>
                    </div>
                </div>
                <div class="col-md-2 text-end remove_col">
                    <button type="button" class="btn btn-danger btn-sm remove_row">Remove</button>
                </div>
            </div>`;

            $('#attraction_box').append(html);
        });

        // Use event delegation for dynamically added remove buttons
        $('#attraction_box').on('click', '.remove_row', function () {
            $(this).closest('.attraction_row').remove();
        });

// Attraction box remove row on click

        });

        function tostor(message) {
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

            $('#saveform').submit(function(event) {
                event.preventDefault();

                var formdata = new FormData($('#saveform')[0]);

                formdata.append('_token', '<?php echo e(csrf_token()); ?>');

                $.ajax({
                    type: 'POST',
                    url: "<?php echo e(route('hotel.update')); ?>",
                    contentType: false, // Required when sending FormData object
                    processData: false, // Required when sending FormData object
                    data: formdata,
                    success: function(data) {
                        if (data.status == 'success') {
                            Swal.fire({
                                title: "Good job!",
                                text: data.msg,
                                icon: "success"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href = "<?php echo e(route('hotel.index')); ?>"
                                }
                            });
                        }
                    },
                    error: function(error) {
                        if (error.status == 500) {
                            Swal.fire({
                                title: "Opps",
                                text: error.responseJSON.msg,
                                icon: "error"
                            })
                        }
                        if (error.responseJSON) {
                            let errors = error.responseJSON.errors;
                            let delay = 0;

                            $.each(error.responseJSON.errors, function(key, value) {
                                if (value.length > 0) {
                                    setTimeout(function() {
                                        tostor(value[0]);
                                    }, delay);
                                    delay += 1500;
                                }
                            });

                        }


                    }

                });

            });

        });

        function removeImage(type, id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "This image will be deleted permanently.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    // Proceed with deletion
                    $.ajax({
                        type: 'POST',
                        url: "<?php echo e(route('hotel.removeImages')); ?>",
                        data: {
                            _token: '<?php echo e(csrf_token()); ?>',
                            type: type,
                            id: id
                        },
                        success: function(data) {
                            if (data.status === 'success') {
                                Swal.fire({
                                    title: "Deleted!",
                                    text: data.msg,
                                    icon: "success"
                                }).then(() => {
                                    location.reload();
                                });
                            }
                        },
                        error: function(error) {
                            Swal.fire({
                                title: "Oops!",
                                text: error.responseJSON?.msg || "Something went wrong!",
                                icon: "error"
                            });
                        }
                    });

                }
            });
        }

        function deleteAmenityAttraction(type, id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Proceed with deletion
                        $.ajax({
                            type: 'POST',
                            url: "<?php echo e(route('hotel.removeAmenityAttraction')); ?>",
                            data: {
                                _token: '<?php echo e(csrf_token()); ?>',
                                type: type,
                                id: id
                            },
                            success: function(data) {
                                if (data.status === 'success') {
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: data.msg,
                                        icon: "success"
                                    }).then(() => {
                                        location.reload();
                                    });
                                } else {
                                    Swal.fire({
                                        title: "Error!",
                                        text: data.msg || "Something went wrong.",
                                        icon: "error"
                                    });
                                }
                            },
                            error: function(xhr) {
                                let message = "Something went wrong!";
                                if (xhr.responseJSON && xhr.responseJSON.message) {
                                    message = xhr.responseJSON.message;
                                }
                                Swal.fire({
                                    title: "Oops!",
                                    text: msg,
                                    icon: "error"
                                });
                            }
                        });
                    }
                });
            }

        
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.mainlayout', ['title' => 'Hotel'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/nni24/public_html/hotelai360/resources/views/admin/hotel/edit.blade.php ENDPATH**/ ?>