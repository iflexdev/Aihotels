

<?php $__env->startSection('admin_css'); ?>
   <!-- DataTables -->
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
                        <h1 class="m-0">Services</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header row">
                                <div class="col-md-10">

                                </div>
                                <div class="col-md-2 text-right">

                                    <a href="<?php echo e(route('location.create')); ?>"> <button type="button"
                                            class="btn btn-primary">Add New</button> </a>

                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S no.</th>
                                            <th>Name </th>
                                            <th>Status </th>
                                            <th class="text-center">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($locations) && count($locations) > 0): ?>
                                            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($key + 1); ?></td>
                                                    <td><?php echo e($location['name'] ?? ''); ?></td>
                                                    <td> <?php echo e($location['status'] ?? ""); ?></td>
                                                    <td class="text-center">
                                                        <a
                                                            href="<?php echo e(route('location.edit', ['id' => $location['id']])); ?>">
                                                            <button class="btn bg-gradient-warning btn-sm">Edit</button>
                                                        </a>
                                                        <a class="btn btn-sm btn-danger"
                                                            href="<?php echo e(route('location.delete', ['id' => $location['id']])); ?>">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <tr class="text-center">
                                                <td colspan="6" class="text-center">No data available</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th>S no.</th>
                                            <th>Name</th>
                                            <th>Status </th>
                                            <th class="text-center">Action</th>

                                        </tr>
                                    </tfoot>
                                </table>
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
     <!-- Include DataTables -->
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

    <script>
        $(document).ready( function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.mainlayout',['title'=>"Location"], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/nni24/public_html/hotelai360/resources/views/admin/location/index.blade.php ENDPATH**/ ?>