<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css'>
	  <link rel="icon" href="<?php echo e(asset('assets/web/images/favicon.png')); ?>" type="image/x-icon">
      <link rel="stylesheet" href="<?php echo e(asset('assets/web/css/bootstrap.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/web/css/animate.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/web/css/swiper-bundle.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/web/css/magnific-popup.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/web/css/font-awesome-pro.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/web/css/spacing.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/web/css/main.css')); ?>?var=1">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
	  <link rel="stylesheet" href="<?php echo e(asset('assets/web/css/custom.css')); ?>">
	  
   </head>
   <body class="tp-home-3-bg <?php echo $__env->yieldContent('pageclass'); ?>">
      <div class="input-body-overlay"></div>
       <?php
         $locations = \App\Models\Location::all();
      ?>
      <!-- back-to-top -->
      <div class="back-to-top-wrapper">
         <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
         </button>
      </div>
      <div class="body-overlay"></div>
      <!-- tp-offcanvus-area-end -->      
      <header class="tp-header-height  <?php echo $__env->yieldContent('headerclass'); ?> mnone">
         <!-- header-area-start -->
         <div  id="header-sticky" class="tp-header-three-area p-relative tp-header-3-border tp-header-bg">
            <div class="container container-1700">
               <div class="row align-items-center">
                  <div class="col-xxl-4 col-xl-5 col-lg-6 col-2">
                     <div class="col-xxl-4 col-xl-2 col-lg-2 col-10">
                        <div class="tp-header-logo tp-header-logo-width tp-header-logo-3 text-center">
                           <a href="<?php echo e(url('/')); ?>"><img data-width="155" src="<?php echo e(asset('assets/web/images/logo1.svg')); ?>" alt="logo"></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-8 col-xl-5 col-lg-4">
                     <div class="tp-header-3-right d-flex align-items-center justify-content-end">
                        <div class="tp-main-menu tp-main-menu-3 tp-main-menu-4 d-none d-lg-block">
                           <nav class="tp-mobile-menu-active">
                              <ul>
                                 <li>
                                    <a href="<?php echo e(url('/')); ?>">
                                       Our Hotels  
                                       <svg class="dd-arrow" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                          <g>
                                             <path d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z" data-name="16" fill="#000000" opacity="1" data-original="#000000"></path>
                                          </g>
                                       </svg>
                                    </a>
                                    <ul class="tp-submenu submenu">
                                       <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <?php if($location->status == 'Upcoming'): ?>
                                          <li><a href="<?php echo e(route('hotel-listing', ['id' => $location->id])); ?>"><?php echo e($location->name); ?> <span>(Coming soon)</span></a></li>
                                         <?php else: ?>
                                          <li><a href="<?php echo e(route('hotel-listing', ['id' => $location->id])); ?>"><?php echo e($location->name); ?> </a></li>
                                       <?php endif; ?>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                 </li>
                                 <li><a href="<?php echo e(route('about-us')); ?>">Why AI Hotels  </a> </li>
                                 <li> <a href="<?php echo e(route('offers')); ?>">Offers  </a> </li>
                                 <li> <a href="<?php echo e(route('hotel-gallery')); ?>">Gallery  </a> </li>
                                 <li> <a href="<?php echo e(route('contact-us')); ?>">Contact  </a> </li>
                              </ul>
                           </nav>
                        </div>
                        <div class="tp-header-3-btn d-none d-lg-block ml-30">
							<a class="whatsapp-wrap" href="">
								<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 176 176" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><linearGradient id="a" x1="88" x2="88" y1=".72" y2="167.48" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#35db23"></stop><stop offset="1" stop-color="#27a11a"></stop></linearGradient><g data-name="Layer 2"><g data-name="08.whatsapp"><rect width="176" height="176" fill="url(#a)" rx="16.33" opacity="1" data-original="url(#a)" class=""></rect><g fill="#fff"><path d="M126.8 49.2a54.57 54.57 0 0 0-87.42 63.13l-5.79 28.11a2.08 2.08 0 0 0 .33 1.63 2.11 2.11 0 0 0 2.24.87l27.55-6.53A54.56 54.56 0 0 0 126.8 49.2zm-8.59 68.56a42.74 42.74 0 0 1-49.22 8l-3.84-1.9-16.89 4 .05-.21 3.5-17-1.88-3.71a42.72 42.72 0 0 1 7.86-49.59 42.73 42.73 0 0 1 60.42 0 2.28 2.28 0 0 0 .22.22 42.72 42.72 0 0 1-.22 60.19z" fill="#ffffff" opacity="1" data-original="#ffffff" class=""></path><path d="M116.71 105.29c-2.07 3.26-5.34 7.25-9.45 8.24-7.2 1.74-18.25.06-32-12.76l-.17-.15C63 89.41 59.86 80.08 60.62 72.68c.42-4.2 3.92-8 6.87-10.48a3.93 3.93 0 0 1 6.15 1.41l4.45 10a3.91 3.91 0 0 1-.49 4l-2.25 2.92a3.87 3.87 0 0 0-.35 4.32c1.26 2.21 4.28 5.46 7.63 8.47 3.76 3.4 7.93 6.51 10.57 7.57a3.82 3.82 0 0 0 4.19-.88l2.61-2.63a4 4 0 0 1 3.9-1l10.57 3a4 4 0 0 1 2.24 5.91z" fill="#ffffff" opacity="1" data-original="#ffffff" class=""></path></g></g></g></g></svg>
                           </a>
                           <a class="tp-btn-4 bookstay" href="https://live.ipms247.com/booking/book-rooms-a1360degree">
                              <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M13.9444 2.60059H3.05556C2.19645 2.60059 1.5 3.31691 1.5 4.20054V15.4002C1.5 16.2839 2.19645 17.0002 3.05556 17.0002H13.9444C14.8036 17.0002 15.5 16.2839 15.5 15.4002V4.20054C15.5 3.31691 14.8036 2.60059 13.9444 2.60059Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M11.6123 1V4.19991" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M5.38867 1V4.19991" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M1.5 7.40039H15.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                              Book a Stay
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
              <?php echo $__env->yieldContent('detailheaderdesk'); ?>
            </div>
         </div>
         <!-- header-area-end -->
      </header>
      <div class="mobile-responsive dnone">
         <div class="mobile-header">
            <a href="<?php echo e(url('/')); ?>"><img data-width="155" src="<?php echo e(asset('assets/web/images/logo.svg')); ?>" alt="logo"></a>
            <a href="javascript:void(0)" class="humb">
               <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                  <g>
                     <path d="M24 3c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1s.45-1 1-1h22c.55 0 1 .45 1 1ZM7 20H1c-.55 0-1 .45-1 1s.45 1 1 1h6c.55 0 1-.45 1-1s-.45-1-1-1Zm8-9H1c-.55 0-1 .45-1 1s.45 1 1 1h14c.55 0 1-.45 1-1s-.45-1-1-1Z" fill="#000000" opacity="1" data-original="#000000"></path>
                  </g>
               </svg>
            </a>
         </div>
         <div class="mobile-nav">
            <ul>
               <li class="sb-menu-wrap">
                  <a href="javascript:void(0)" class="sb-menu">
                     Our Hotels  
                     <svg class="dd-arrow" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                           <path d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z" data-name="16" fill="#000000" opacity="1" data-original="#000000"></path>
                        </g>
                     </svg>
					</a>
					<ul class="tp-submenu submenu">
						<?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <?php if($location->status == 'Upcoming'): ?>
                          <li><a href="<?php echo e(route('hotel-listing', ['id' => $location->id])); ?>"><?php echo e($location->name); ?> <span>(Coming soon)</span></a></li>
                         <?php else: ?>
                          <li><a href="<?php echo e(route('hotel-listing', ['id' => $location->id])); ?>"><?php echo e($location->name); ?> </a></li>
                         <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
               </li>
                <li><a href="<?php echo e(route('about-us')); ?>">Why AI Hotels  </a> </li>
                                 <li> <a href="<?php echo e(route('offers')); ?>">Offers  </a> </li>
                                 <li> <a href="<?php echo e(route('hotel-gallery')); ?>">Gallery  </a> </li>
                                 <li> <a href="<?php echo e(route('contact-us')); ?>">Contact  </a> </li>
            </ul>
            <a class="crossMobMenu">
               <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                  <g>
                     <path d="M18 6a1 1 0 0 0-1.414 0L12 10.586 7.414 6A1 1 0 0 0 6 6a1 1 0 0 0 0 1.414L10.586 12 6 16.586A1 1 0 0 0 6 18a1 1 0 0 0 1.414 0L12 13.414 16.586 18A1 1 0 0 0 18 18a1 1 0 0 0 0-1.414L13.414 12 18 7.414A1 1 0 0 0 18 6Z" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                  </g>
               </svg>
            </a>
         </div>
      </div>
       <?php echo $__env->yieldContent('detailheadermob'); ?>
      <main>
       <?php echo $__env->yieldContent('content'); ?>
       
          <footer>
            <div class="tp-footer-area tp-pink-bg pt-120">
               <div class="container-fluid mb-50">
                  <div class="footerGrid">
                     <div class=" ">
                        <div class="tp-footer-widget">
                           <div class="tp-footer-logo mb-25">
                              <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('assets/web/images/logo1.svg')); ?>" alt="logo"></a>
                           </div>
                           <div class="tp-footer-widget-content">
                              <div class="tp-footer-number mb-15">
                                 <span class="tp-footer-call-title">India’s first hotel chain where the check-in process doesn’t begin at the reception desk.</span>
                                 <div class="tp-footer-social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class=" ">
                        <div class="tp-footer-widget">
                           <h3 class="tp-footer-widget-title mb-25">Quick Links</h3>
                           <div class="row">
                              <div class="col-lg-6 col-md-6">
                                 <div class="tp-footer-widget-content">
                                    <ul>
                                       <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                       <li><a href="<?php echo e(route('about-us')); ?>">About Us</a></li>
                                      <li><a href="<?php echo e(route('offers')); ?>">Offers </a></li>
                                       <li><a href="<?php echo e(route('hotel-gallery')); ?>">Gallery</a></li>
                                      <li><a href="<?php echo e(route('contact-us')); ?>">Contact Us</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class=" ">
                        <div class="tp-footer-widget">
                           <h3 class="tp-footer-widget-title mb-25">Our Hotels</h3>
                           <div class="row">
                              <div class="col-lg-6 col-md-6">
                                 <div class="tp-footer-widget-content">
									<div class="footer-loc-grid">
										<ul>
										  <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($location->status == 'Upcoming'): ?>
                                              <li><a href="<?php echo e(route('hotel-listing', ['id' => $location->id])); ?>"><?php echo e($location->name); ?> <span>(Coming soon)</span></a></li>
                                             <?php else: ?>
                                              <li><a href="<?php echo e(route('hotel-listing', ['id' => $location->id])); ?>"><?php echo e($location->name); ?> </a></li>
                                            <?php endif; ?>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>									   
										</ul>
										<ul>
										 									   -->
										</ul>
									</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class=" ">
                        <div class="tp-footer-widget">
                           <h3 class="tp-footer-widget-title mb-25">Supports</h3>
                           <div class="row">
                              <div class="col-lg-6 col-md-6">
                                 <div class="tp-footer-widget-content">
                                    <ul>
                                      <li><a href="<?php echo e(route('privacy-policy')); ?>">Privacy Policy   </a></li>
                                       <li><a href="<?php echo e(route('terms-conditions')); ?>">Terms of Services   </a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class=" ">
                        <div class="tp-footer-widget">
                           <h3 class="tp-footer-widget-title mb-25">Contact Information</h3>
                           <div class="row">
                              <div class="col-lg-6 col-md-6">
                                 <div class="tp-footer-widget-content">
                                    <ul>
                                       <li><a href="#">Address: C block, Plot no, 1530, Sector 17, Gurugram, Haryana 122001</a></li>
                                       <li><a href="#">Phone: +91 12345 67890  </a></li>
                                       <li><a href="#">Email: contact@aihotels.com  </a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tp-footer-botom">
                  <div class="container">
                     <div class="tp-footer-bottom-inner">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="tp-footer-copyright">
                                 <p>Copyright © 2025 aihotels All rights reserved.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
      
	  </main>
      <section class="booknow-sect">
         <div class="book-form-grid">
            <form>
               <h2 class="tp-about-top-title tp-about-top-title-2"><span>Book</span> A Stay</h2>
               <div class="form-group-wrap">
                  <div class="tp-contact-input formgroup">
                     <label class="tp-label mb-5" for="fname">Location</label>
                     <select>
                        <option>Gurugram</option>
                        <option>Greater Noida</option>
                        <option>Haridwar</option>
                        <option>New Delhi</option>
                        <option>Shimla</option>
                     </select>
                  </div>
                  <div class="tp-contact-input formgroup">
                     <label class="tp-label mb-5" for="fname">Hotel</label>
                     <select>
                        <option>Udman Hotel Gurugram</option>
                        <option>Udman Hotel  Greater Noida</option>
                     </select>
                  </div>
                  <div class="checkingrid">
                     <div class="tp-contact-input formgroup">
                        <label class="tp-label mb-5" for="fname">Check In</label>
                        <input type="date">
                     </div>
                     <div class="tp-contact-input formgroup">
                        <label class="tp-label mb-5" for="fname">Check Out</label>
                        <input type="date">
                     </div>
                  </div>
                  <div class="checkingrid">
                     <div class="tp-contact-input formgroup">
                        <label class="tp-label mb-5" for="fname">Adults</label>
                        <select>
                           <option>1</option>
                           <option>2</option>
                        </select>
                     </div>
                     <div class="tp-contact-input formgroup">
                        <label class="tp-label mb-5" for="fname">Children</label>
                        <select>
                           <option>0</option>
                           <option>1</option>
                           <option>2</option>
                        </select>
                     </div>
                  </div>
                  <div class="tp-contact-input formgroup">
                     <label class="tp-label mb-5" for="fname">Promo Code</label>
                     <input type="text" placeholder="">
                  </div>
                  <div class="tp-contact-comment-btn-wrap">
                     <button class="tp-btn-large w-100 text-center comm-hover-eft" type="submit">Submit</button>
                  </div>
               </div>
            </form>
            <a href="#" class="crossbookstay">
               <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 329.269 329" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                  <g>
                     <path d="M194.8 164.77 323.013 36.555c8.343-8.34 8.343-21.825 0-30.164-8.34-8.34-21.825-8.34-30.164 0L164.633 134.605 36.422 6.391c-8.344-8.34-21.824-8.34-30.164 0-8.344 8.34-8.344 21.824 0 30.164l128.21 128.215L6.259 292.984c-8.344 8.34-8.344 21.825 0 30.164a21.266 21.266 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25l128.21-128.214 128.216 128.214a21.273 21.273 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25 8.343-8.34 8.343-21.824 0-30.164zm0 0" fill="#000000" opacity="1" data-original="#000000" class=""></path>
                  </g>
               </svg>
            </a>
         </div>
      </section>
      <!-- JS here -->
     <script src="<?php echo e(asset('assets/web/js/jquery.js')); ?>"></script> 
      <script src="<?php echo e(asset('assets/web/js/jarallax.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/web/js/bootstrap-bundle.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/web/js/swiper-bundle.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/web/js/imagesloaded-pkgd.js')); ?>"></script> 
      <script src="<?php echo e(asset('assets/web/js/magnific-popup.js')); ?>"></script>  
      <script src="<?php echo e(asset('assets/web/js/slider-init.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/web/js/main.js')); ?>"></script>
      <script>
         $(document).ready(function() {
         	$(".bookstay").click(function() {
         		//$('body').addClass("bookstayslide");
         	});
         	
         	$(".crossbookstay").click(function() {
         		$('body').removeClass("bookstayslide");
         	});
         });
      </script>
      <script>
         $(document).ready(function() {
         	$(".readmorewrap").click(function() {
         		$('body').addClass("readMoreSlide");
         	});
         	
         	$(".crossreadmore").click(function() {
         		$('body').removeClass("readMoreSlide");
         	});
         });
      </script>
      <script>
         $(document).ready(function() {
         	$(".humb").click(function() {
         		$('body').addClass("mobileMenu");
         	});
         	$(".crossMobMenu").click(function() {
         		$('body').removeClass("mobileMenu");
         	});
         	$(".sb-menu").click(function() {
         		$('.submenu').toggleClass("mobSubMenuOpen");
         	});
         });		
      </script>
      <!--External page script start-->
    <?php echo $__env->yieldContent('script'); ?>
    <!--External page script end-->
   </body>
</html><?php /**PATH /home/nni24/public_html/hotelai360/resources/views/web/layout/default.blade.php ENDPATH**/ ?>