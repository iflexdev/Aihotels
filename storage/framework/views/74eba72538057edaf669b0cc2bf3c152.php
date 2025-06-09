

<?php $__env->startSection('admin_css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">

    
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Rooms</h1>
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
                            <div class="card-header row">
                                <div class="col-md-10">
                                </div>
                                <div class="col-md-2 text-right">
                                    <a href="<?php echo e(route('room.create')); ?>"> <button type="button" class="btn btn-primary">Add
                                            New</button> </a>
                                </div>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S no.</th>
                                            <th>Name </th>
                                            <th>Hotel Name </th>
                                            <th>Price </th>
                                            <th>Capacity </th>
                                            <th>Image</th>
                                            <th>Status </th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($rooms) && count($rooms) > 0): ?>
                                            <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($key + 1); ?></td>
                                                    <td><?php echo e($room['name'] ?? ''); ?></td>
                                                    <td><?php echo e($room['hotel']['name'] ?? ''); ?></td>
                                                    <td><?php echo e($room['price'] ?? ''); ?>

                                                    <td><?php echo e($room['capacity'] ?? ''); ?>

                                                    </td>
                                                    <td>
                                                        <?php if(!empty($room['image'])): ?>
                                                            <img src="<?php echo e(asset('uploads/room/' . $room['image'])); ?>"
                                                                height="100px" alt="room Image">
                                                        <?php else: ?>
                                                            <span>No image</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="status" id="status"
                                                            onchange="statusUpdate(<?php echo e($room['id']); ?>)">
                                                            <option value="1"
                                                                <?php echo e($room['status'] == 1 ? 'selected' : ''); ?>>Active
                                                            </option>
                                                            <option value="0"
                                                                <?php echo e($room['status'] == 0 ? 'selected' : ''); ?>>Inactive
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td>
                                                        <a href="<?php echo e(route('room.edit', ['id' => $room['id']])); ?>">
                                                            <button class="btn bg-gradient-warning btn-sm">Edit</button>
                                                        </a>
                                                        <button class="btn btn-sm btn-danger"
                                                            onclick="destroy(<?php echo e($room['id']); ?>)">Delete</button>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="6" class="text-center">No data available</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th>S no.</th>
                                            <th>Name </th>
                                            <th>Hotel Name </th>
                                            <th>Price </th>
                                            <th>Capacity </th>
                                            <th>Image</th>
                                            <th>Status </th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    

    

    <script src="<?php echo e(asset('assets/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/pdfmake/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/pdfmake/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });


        function destroy(id) {
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
                    $.ajax({
                        type: 'get',
                        url: "<?php echo e(route('room.delete')); ?>",
                        data: {
                            '_token': '<?php echo e(csrf_token()); ?>',
                            id,
                        },
                        success: function(data) {
                            if (data.status == 'success') {
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
                        error: function(error) {
                            if (error) {

                            }
                        }

                    });
                }
            });
        }

        function statusUpdate(id) {

            var status = $('#status').val();

            $.ajax({
                type: 'POST',
                url: "<?php echo e(route('room.statusupdate')); ?>",
                data: {
                    '_token': '<?php echo e(csrf_token()); ?>',
                    id,
                    status: status
                },
                success: function(data) {
                    if (data.status == 'success') {
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
                error: function(error) {
                    if (error) {

                    }
                }

            });

        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.mainlayout', ['title' => 'Rooms'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/nni24/public_html/hotelai360/resources/views/admin/room/index.blade.php ENDPATH**/ ?>