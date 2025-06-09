<?php     
    $page_title = "Gallery Page";  
    $meta_title = "Gallery Page";
    $meta_description = "Gallery Page";
    $meta_keyword = "Gallery Page";
?>
<?php $__env->startSection('pageclass', 'abtPage offerpage offerDetails'); ?>
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
                           <h2 class="commonHeading">  All Photos</h2>
                        </div>
                     </div>
                     <div class="gallery-container" id="Gallery">
                        <div class="big-image">
                           <figure>
                              <a href="<?php echo e(asset('assets/web/images/a.jpg')); ?>" data-fancybox="gallery" data-caption="Caption Images 1"><img src="<?php echo e(asset('assets/web/images/a.jpg')); ?>"></a>				  
                           </figure>
                           <figure>
                              <a href="<?php echo e(asset('assets/web/images/e.jpg')); ?>" data-fancybox="gallery" data-caption="Caption Images 1"><img src="<?php echo e(asset('assets/web/images/e.jpg')); ?>"></a>
                              
                           </figure>
                           <figure>
                              <a href="<?php echo e(asset('assets/web/images/d.jpg')); ?>" data-fancybox="gallery" data-caption="Caption Images 1"><img src="<?php echo e(asset('assets/web/images/d.jpg')); ?>"></a>
                           </figure>
                           <figure>
                              <a href="<?php echo e(asset('assets/web/images/c.jpg')); ?>" data-fancybox="gallery" data-caption="Caption Images 1"><img src="<?php echo e(asset('assets/web/images/c.jpg')); ?>"></a>
                           </figure>
                           <figure>
                              <a href="<?php echo e(asset('assets/web/images/b.jpg')); ?>" data-fancybox="gallery" data-caption="Caption Images 1"><img src="<?php echo e(asset('assets/web/images/b.jpg')); ?>"></a>
                           </figure>
                           <figure>
                              <a href="<?php echo e(asset('assets/web/images/a.jpg')); ?>" data-fancybox="gallery" data-caption="Caption Images 1"><img src="<?php echo e(asset('assets/web/images/a.jpg')); ?>"></a>
                              
                           </figure>
                           <figure>
                              <a href="<?php echo e(asset('assets/web/images/c.jpg')); ?>" data-fancybox="gallery" data-caption="Caption Images 1"><img src="<?php echo e(asset('assets/web/images/c.jpg')); ?>"></a>
                           </figure>
                           <figure>
                              <a href="<?php echo e(asset('assets/web/images/a.jpg')); ?>" data-fancybox="gallery" data-caption="Caption Images 1"><img src="<?php echo e(asset('assets/web/images/a.jpg')); ?>"></a></figure>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
	<script src="<?php echo e(asset('assets/web/js/gallery.js')); ?>"></script>	  
      <script>
         lightGallery(document.getElementById('animated-thumbnails-gallery'), {
         	thumbnail: true,
         });
      </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layout.default', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/nni24/public_html/hotelai360/resources/views/web/hotel-gallery.blade.php ENDPATH**/ ?>