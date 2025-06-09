

<?php     
    $page_title = "Offers Page";  
    $meta_title = "Offers Page";
    $meta_description = "Offers Page";
    $meta_keyword = "Offers Page";
?>
<?php $__env->startSection('pageclass', 'abtPage offerpage'); ?>
<?php $__env->startSection('headerclass','insideHeader'); ?>
<?php $__env->startSection('pageTitle', $page_title); ?>
<?php $__env->startSection('metaTitle', $meta_title); ?>
<?php $__env->startSection('metaDescription', $meta_description); ?>
<?php $__env->startSection('metaKeywords', $meta_keyword); ?>

<?php $__env->startSection('content'); ?>
 <div class="container">
            <div class=" ">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="tp-section-title-wrapper mt-50 mb-40 text-center">
                           <h2 class="commonHeading">   Exciting Offers at Ai Hotels & Resorts </h2>
                           <p>Ai Hotels & Resorts   not only offers an opulent stay experience and amidst a host of fabulous facilities but also makes the sojourn more delightful with exclusive and attractive offers.</p>
                        </div>
                     </div>
                     
                     <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <div class="col-lg-4 col-md-6">
                            <div class="tp-suites-item round-6 mb-30 p-relative">
                               <a href="<?php echo e(route('offers-location',['location_id' => $location['id']])); ?>">
                                  <div class="tp-suites-thumb">
                                     <img class="w-100" src="<?php echo e(isset($location->image) ? asset('uploads/location/'.$location->image) : asset('assets/web/images/a.jpg')); ?>" alt="service">
                                  </div>
                               </a>
                               <div class="tp-suites-content p-absolute">
                                  <h3 class="tp-suites-title"><a href="<?php echo e(route('offers-location',['location_id' => $location['id']])); ?>">Offers in Ai Hotels <?php echo e($location['name'] ?? ""); ?></a></h3>
                                  <div class="tp-suites-hidden">
                                     <div class="tp-suites-btn">
                                        <a class="tp-btn-2" href="<?php echo e(route('offers-location',['location_id' => $location['id']])); ?>">
                                           <span>
                                              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="15" x="0" y="0" viewBox="0 0 512.003 512.003" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                                 <g>
                                                    <path d="M477.958 262.633a15.004 15.004 0 0 1 0-13.263l19.096-39.065c10.632-21.751 2.208-47.676-19.178-59.023l-38.41-20.38a15.005 15.005 0 0 1-7.796-10.729l-7.512-42.829c-4.183-23.846-26.241-39.87-50.208-36.479l-43.053 6.09a15.004 15.004 0 0 1-12.613-4.099l-31.251-30.232c-17.401-16.834-44.661-16.835-62.061 0L193.72 42.859a15.01 15.01 0 0 1-12.613 4.099l-43.053-6.09c-23.975-3.393-46.025 12.633-50.208 36.479l-7.512 42.827a15.008 15.008 0 0 1-7.795 10.73l-38.41 20.38c-21.386 11.346-29.81 37.273-19.178 59.024l19.095 39.064a15.004 15.004 0 0 1 0 13.263L14.95 301.699c-10.632 21.751-2.208 47.676 19.178 59.023l38.41 20.38a15.005 15.005 0 0 1 7.796 10.729l7.512 42.829c3.808 21.708 22.422 36.932 43.815 36.93 2.107 0 4.245-.148 6.394-.452l43.053-6.09a15 15 0 0 1 12.613 4.099l31.251 30.232c8.702 8.418 19.864 12.626 31.03 12.625 11.163-.001 22.332-4.209 31.03-12.625l31.252-30.232c3.372-3.261 7.968-4.751 12.613-4.099l43.053 6.09c23.978 3.392 46.025-12.633 50.208-36.479l7.513-42.827a15.008 15.008 0 0 1 7.795-10.73l38.41-20.38c21.386-11.346 29.81-37.273 19.178-59.024l-19.096-39.065zm-13.923 72.002-38.41 20.38c-12.246 6.499-20.645 18.057-23.04 31.713l-7.512 42.828a15.038 15.038 0 0 1-16.987 12.342l-43.053-6.09c-13.73-1.945-27.316 2.474-37.281 12.113L266.5 478.152a15.04 15.04 0 0 1-20.997 0l-31.251-30.232c-8.422-8.147-19.432-12.562-30.926-12.562-2.106 0-4.229.148-6.355.449l-43.053 6.09a15.042 15.042 0 0 1-16.987-12.342l-7.513-42.829c-2.396-13.656-10.794-25.215-23.041-31.712l-38.41-20.38a15.037 15.037 0 0 1-6.489-19.969L60.574 275.6c6.088-12.456 6.088-26.742 0-39.198l-19.096-39.065a15.037 15.037 0 0 1 6.489-19.969l38.41-20.38c12.246-6.499 20.645-18.057 23.04-31.713l7.512-42.828a15.038 15.038 0 0 1 16.987-12.342l43.053 6.09c13.725 1.943 27.316-2.474 37.281-12.113l31.252-30.232a15.04 15.04 0 0 1 20.997 0l31.251 30.232c9.965 9.64 23.554 14.056 37.281 12.113l43.053-6.09a15.04 15.04 0 0 1 16.987 12.342l7.512 42.829c2.396 13.656 10.794 25.215 23.041 31.712l38.41 20.38a15.037 15.037 0 0 1 6.489 19.969l-19.096 39.064c-6.088 12.455-6.088 26.743 0 39.198l19.096 39.064a15.039 15.039 0 0 1-6.488 19.972z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                    <path d="M363.886 148.116c-5.765-5.766-15.115-5.766-20.881 0l-194.889 194.89c-5.766 5.766-5.766 15.115 0 20.881a14.72 14.72 0 0 0 10.44 4.325c3.778 0 7.558-1.441 10.44-4.325l194.889-194.889c5.768-5.767 5.768-15.115.001-20.882zM196.941 123.116c-29.852 0-54.139 24.287-54.139 54.139s24.287 54.139 54.139 54.139 54.139-24.287 54.139-54.139-24.287-54.139-54.139-54.139zm0 78.747c-13.569 0-24.608-11.039-24.608-24.609 0-13.569 11.039-24.608 24.608-24.608s24.609 11.039 24.609 24.608c-.001 13.57-11.04 24.609-24.609 24.609zM315.061 280.61c-29.852 0-54.139 24.287-54.139 54.139s24.287 54.139 54.139 54.139c29.852 0 54.139-24.287 54.139-54.139s-24.287-54.139-54.139-54.139zm0 78.747c-13.569 0-24.609-11.039-24.609-24.608s11.039-24.608 24.609-24.608c13.569 0 24.608 11.039 24.608 24.608s-11.039 24.608-24.608 24.608z" fill="#000000" opacity="1" data-original="#000000"></path>
                                                 </g>
                                              </svg>
                                           </span>
                                           View Offer
                                        </a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                  </div>
               </div>
            </div>
         </div>
		 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layout.default', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/nni24/public_html/hotelai360/resources/views/web/offers.blade.php ENDPATH**/ ?>