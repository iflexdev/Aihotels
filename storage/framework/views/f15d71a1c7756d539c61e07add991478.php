<?php     
    $page_title = "Contact Us";  
    $meta_title = "Contact Us";
    $meta_description = "Contact Us";
    $meta_keyword = "Contact Us";
?>
<?php $__env->startSection('pageclass', ' abtPage contactPage'); ?>
<?php $__env->startSection('headerclass',''); ?>
<?php $__env->startSection('pageTitle', $page_title); ?>
<?php $__env->startSection('metaTitle', $meta_title); ?>
<?php $__env->startSection('metaDescription', $meta_description); ?>
<?php $__env->startSection('metaKeywords', $meta_keyword); ?>

<?php $__env->startSection('content'); ?>
         <div class="  aboutHotelInside">
            <figure>
               <img src="images/imge.jpg">
            </figure>
            <div class="container bannerAbso">
            </div>
         </div>
         <!-- contact-area-start -->
         <div class="tp-contact-area p-relative pt-120 mb-120">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-xl-8 col-lg-10">
                     <div class="tp-contact-form-wrap">
                        <div class="tp-contact-content mb-35 text-center">
                           <h2 class="tp-about-top-title tp-about-top-title-2">  <span>Contact </span>Us</h2>
                           <p class="tp-contact-dis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non enim lacus.<br>
                              Nullam congue blandit quam, sit amet
                           </p>
                        </div>
                        <div class="tp-contact-form tp-postbox-comment-input">
                           <form  id="contact-form" action="" method="POST">
                              <div class="row">
                                 <div class="col-lg-6 col-md-6">
                                    <div class="tp-contact-input mb-25">
                                       <label class="tp-label mb-5" for="fname">Full Name *</label>
                                       <input name="name" class="tp-input" type="text" id="fname" placeholder="John" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                    <div class="tp-contact-input mb-25">
                                       <label class="tp-label mb-5" for="lname">Last Name *</label>
                                       <input name="l_name" class="tp-input" type="text" id="lname" placeholder="Smith" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                    <div class="tp-contact-input mb-25">
                                       <label class="tp-label mb-5" for="email">Email *</label>
                                       <input name="email" class="tp-input" type="email" id="email" placeholder="housey@mail.com" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                    <div class="tp-contact-input mb-25">
                                       <label class="tp-label mb-5" for="phone">Phone Number *</label>
                                       <input name="phone" class="tp-input" type="text" id="phone" placeholder="Phone Number" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="tp-contact-input mb-25">
                                       <label class="tp-label mb-5" for="subject">Subject</label>
                                       <input name="subject" class="tp-input" type="text" id="subject" placeholder="Enter Subject" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="tp-contact-textarea mb-15">
                                       <label class="tp-label mb-5" for="textarea">Message *</label>
                                       <textarea name="message" class="tp-textarea" id="textarea"  placeholder="Leave us a  message..." required></textarea>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="tp-contact-agree mb-30 d-flex align-items-start mb-25">
                                       <input name="checkbox" class="tp-checkbox" type="checkbox" id="agree" required>
                                       <label class="tp-agree" for="agree">I agree to <a href="<?php echo e(route('terms-conditions')); ?>">terms & conditions </a></label>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="tp-contact-comment-btn-wrap">
                                       <button class="tp-btn-large w-100 text-center comm-hover-eft" type="submit">Send Message</button>
                                    </div>
                                    <p class="ajax-response mt-20"></p>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- contact-area-end -->
         <div class=" ">
            <div class="col-lg-12">
               <div class="tp-section-title-wrapper mb-40">
                  <h2 class="commonHeading">Main Branch</h2>
               </div>
            </div>
            <div class="map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d891440.9514676718!2d77.29408524731217!3d29.217929557647384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390982b9e5122989%3A0x2798532cabd61501!2sLansdowne%2C%20Uttarakhand%20246155!5e0!3m2!1sen!2sin!4v1746954712187!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               <div class="col-lg-12">
                  <div class="tp-offer-bg bg-position jarallax p-relative" data-background="<?php echo e(asset('assets/web/images/land.png')); ?>" style="background-image: none; z-index: 0;" data-jarallax-original-styles="background-image: url(&quot;<?php echo e(asset('assets/web/images/land.png')); ?>&quot;);">
                     <div class=" getinTo">
                        <div class="col-xl-5 col-lg-6 col-md-7 col-sm-10 col-12">
                           <div class="tp-offer-info-wrapper">
                              <div class=" ">
                                 <div>
                                    <div class="circl">
                                       <div class=" ">
                                       </div>
                                       <div class=" ">
                                          <h3 class="tp-offcanvas-title sm">Gurugram Branch</h3>
                                          <ul>
                                             <li><a href="">+91 1234567890</a></li>
                                             <li><a href="">hello@ai360.com</a></li>
                                             <li><a href="#">C block, Plot no, 1530, Sector 17, Gurugram, Haryana 122001</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="jarallax-container-0" class="jarallax-container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);">
                        <div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;file:///D:/Projects/IFLEX/New%20Folder/AI-360/Website/images/land.png&quot;); position: fixed; top: 0px; left: 952.5px; width: 952.5px; height: 838.8px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; margin-top: 36.1px; transform: translate3d(0px, 4.025px, 0px);"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
     
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layout.default', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/nni24/public_html/hotelai360/resources/views/web/contact.blade.php ENDPATH**/ ?>