

<?php     
    $page_title = "Detail Page";  
    $meta_title = "Detail Page";
    $meta_description = "Detail Page";
    $meta_keyword = "Detail Page";
?>
<?php $__env->startSection('pageclass', ''); ?>
<?php $__env->startSection('',''); ?>
<?php $__env->startSection('pageTitle', $page_title); ?>
<?php $__env->startSection('metaTitle', $meta_title); ?>
<?php $__env->startSection('metaDescription', $meta_description); ?>
<?php $__env->startSection('metaKeywords', $meta_keyword); ?>

<?php $__env->startSection('detailheaderdesk'); ?>
  <div class="secondavigation">
                  <ul>
                     <li><a href="#ai-detail">Ai 360</a></li>
                     <li><a href="#ai-rooms">Rooms</a></li>
                     <li><a href="#ai-dining">Dining</a></li>
                     <li><a href="#ai-amenities">Amenities</a></li>
                     <li><a href="#ai-gallery">Gallery</a></li>
                     <li><a href="#ai-loc-cont">Locations </a></li>
                     <li><a href="#ai-loc-cont">Contact Us </a></li>
                  </ul>
               </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('detailheadermob'); ?>
 <!-- only for detail page in mobile device subheader -->
	  
		<div class="secondavigation dnone">
		  <ul>
			 <li><a href="#ai-detail">Ai 360</a></li>
			 <li><a href="#ai-rooms">Rooms</a></li>
			 <li><a href="#ai-dining">Dining</a></li>
			 <li><a href="#ai-amenities">Amenities</a></li>
			 <li><a href="#ai-gallery">Gallery</a></li>
			 <li><a href="#ai-loc-cont">Locations </a></li>
			 <li><a href="#ai-loc-cont">Contact Us </a></li>
		  </ul>
		</div>	  
	  
	  <!-- only for detail page in mobile device subheader -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <div class="aboutHotelInside">
            <figure>
               <img src="<?php echo e(isset($hotel['image']) ? asset('uploads/hotel/'.$hotel['image']) : asset('assets/web/images/c.jpg')); ?>">
            </figure>
            <div class="container bannerAbso">
               <div class="posFlex">
                  <h2>  <?php echo e($hotel->name ?? ""); ?> </h2>
                  <div class="bannerAme">
                     <ul>
                        <li>
                           <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none" class="svg replaced-svg">
                              <path d="M57.3781 26.0043V5.81492C57.3738 4.63063 56.9364 3.49615 56.1612 2.65872C55.3859 1.82129 54.3356 1.34881 53.2393 1.34424H10.8549C9.75636 1.34474 8.70281 1.81555 7.92503 2.65353C7.14726 3.4915 6.70867 4.62831 6.70537 5.81492V26.012M62.756 47.2468V62.7842H53.6499V55.2932H10.4514V62.7746H1.34527V47.2468H62.756ZM51.843 25.0593V21.2096C51.8388 19.9021 51.356 18.6494 50.5001 17.7248C49.6441 16.8002 48.4844 16.2787 47.2739 16.2741H36.9179C35.7089 16.2822 34.5517 16.805 33.6973 17.729C32.8429 18.653 32.3603 19.9037 32.3542 21.2096V23.8616L51.843 25.0593ZM31.7364 23.8616V21.2096C31.7317 19.9022 31.2488 18.6498 30.3929 17.7253C29.5371 16.8008 28.3776 16.2792 27.1673 16.2741H16.8113C15.6008 16.2792 14.4412 16.8008 13.585 17.7252C12.7289 18.6496 12.2456 19.902 12.2404 21.2096V25.2599L31.7364 23.8616ZM6.65002 26.1644C22.6874 23.3196 47.3757 23.6359 57.5602 26.1644L62.8471 46.9729H1.24707L6.65002 26.1644Z" stroke="#009DC4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                           Double Bed 
                        </li>
                        <li>
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="svg replaced-svg">
                              <path d="M22.0046 23.5C22.1353 22.3339 22.3685 19.8845 20.6526 18.356C19.0802 16.9522 16.964 17.0025 15.5797 15.785C14.1735 14.548 13.9441 13.0287 15.0475 11.2945C15.926 9.91351 16.6073 7.91063 16.6073 6.19927C16.6073 3.3287 14.5979 1 11.9151 1C9.23241 1 7.22295 3.3287 7.22295 6.19927C7.22295 7.91406 7.90424 9.91237 8.7828 11.2945C9.88617 13.0287 9.65678 14.548 8.25061 15.785C6.86509 17.0025 4.75012 16.9522 3.17764 18.356C1.45721 19.8868 1.87498 22.3328 2.00458 23.5M0.50375 19.5C0.50375 17.5736 0.197024 16.6332 1.51029 15.4443C2.71459 14.3548 3.72964 14.6361 4.79057 13.6918C5.8515 12.7475 6.0442 11.9073 5.19889 10.5606C4.52563 9.48824 3.5 7.93121 3.5 6.60395C3.5 4.37472 5.44581 3 7.5 3M23.5 19.5C23.4985 17.5736 23.5695 16.6332 22.2562 15.4443C21.0519 14.3548 20.0369 14.6361 18.9759 13.6918C17.915 12.7475 17.7223 11.9073 18.5676 10.5606C19.2409 9.48824 20 7.93121 20 6.60395C20 4.37472 18.0542 3 16 3" stroke="#667A7F" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                           2 Adult 
                        </li>
                        <li>
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="21" viewBox="0 0 24 21" fill="none" class="svg replaced-svg">
                              <path d="M0.911273 19.8452L8.29969 7.26284L13 15.9999M11.8725 13.5967L14.1313 10.7731L17.8364 16.5066L19.3826 14.8495L22.9511 20.253M0.574219 0.592041H23.4289V20.4078H0.574219V0.592041ZM18.3063 3.3996C18.7755 3.3996 19.2342 3.54347 19.6244 3.81302C20.0145 4.08258 20.3186 4.4657 20.4982 4.91395C20.6777 5.3622 20.7247 5.85544 20.6332 6.3313C20.5416 6.80716 20.3157 7.24426 19.9839 7.58734C19.6521 7.93042 19.2294 8.16405 18.7691 8.25871C18.3089 8.35336 17.8319 8.30478 17.3984 8.11911C16.9649 7.93344 16.5944 7.61902 16.3337 7.2156C16.073 6.81219 15.9338 6.3379 15.9338 5.85272C15.9338 5.20211 16.1838 4.57815 16.6287 4.1181C17.0736 3.65805 17.6771 3.3996 18.3063 3.3996Z" stroke="#667A7F" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                           Garden View 
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="mad-col">
                  <div class="mad-pricing-value content-element-3"> 
                     
                  </div>
                  <a href="https://live.ipms247.com/booking/book-rooms-a1360degree" class="btn bookstay"><span>Book This Room</span></a>
               </div>
            </div>
         </div>
         <div id="ai-detail" class="container">
            <div class="why360">
               <h1 class="commonHeading">
               Why Ai 360</h2>
               <p><?php echo e($hotel->description ?? ""); ?></p>
            </div>
         </div>
         <div id="ai-rooms" class="container">
           
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="tp-section-title-wrapper mb-40">
                           <h2 class="commonHeading">   Rooms </h2>
                        </div>
                     </div>
                     <?php $__currentLoopData = $hotel->rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-lg-4 col-md-6">
                        <div class="tp-suites-item round-6 mb-30 p-relative">
                           <a href="#">
                              <div class="tp-suites-thumb">
                                 <img class="w-100" src="<?php echo e(isset($room->image) ? asset('uploads/room/'.$room->image) : asset('assets/web/images/02.jpg')); ?>" alt="service">
                              </div>
                           </a>
                           <div class="tp-suites-price price-radius p-absolute">
                              <span><b>₹<?php echo e($room->price ?? ""); ?></b> Per Night</span>
                           </div>
                           <div class="tp-suites-content p-absolute">
                              <h3 class="tp-suites-title"><a href="#"><?php echo e($room->name ?? ""); ?></a></h3>
                              <div class="tp-suites-room mb-15">
                                 <span><?php echo e($room->capacity ?? ""); ?> Guests</span>
                                 <span class="space">|</span>
                                 <span>Size: <?php echo e($room->size_sqm ?? ""); ?>sqm, <?php echo e($room->size_sqft ?? ""); ?> sqft</span>
                              </div>
                              <div class="tp-suites-hidden">
                                 <p>Booking the perfect hotel sets the stage for an incredible travel experience.</p>
                                 <div class="tp-suites-btn">
                                    <a class="tp-btn-2" href="https://live.ipms247.com/booking/book-rooms-a1360degree">
                                       <span>
                                          <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M11 13.8571L6 10.2857L1 13.8571V2.42857C1 2.04969 1.15051 1.68633 1.41842 1.41842C1.68633 1.15051 2.04969 1 2.42857 1H9.57143C9.95031 1 10.3137 1.15051 10.5816 1.41842C10.8495 1.68633 11 2.04969 11 2.42857V13.8571Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </span>
                                       Book Now
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
         <div id="ai-dining" class="restaurant mt-100">
            <div class="shape2">
               <figure>
                  <img src="<?php echo e(asset('assets/web/images/shape1.png')); ?>">
               </figure>
            </div>
            <div class="restaurantGrid">
               <div class="resLeft">
                  <h2 class="commonHeading">Ai 360 Restaurant</h2>
                  <p>At ai 360 we blend warm hospitality with modern luxury to create unforgettable stays. Whether you're here for business or leisure</p>
                  <p>At ai 360 we blend warm hospitality with modern luxury to create unforgettable stays. Whether you're here for business or leisure, our personalized service and premium amenities ensure a perfect experience.</p>
                  <a href="https://live.ipms247.com/booking/book-rooms-a1360degree">Book Now</a>
               </div>
               <div class="resRight">
                  <figure>
                     <img src="<?php echo e(asset('assets/web/images/res.png')); ?>">
                  </figure>
               </div>
            </div>
         </div>
         <div id="ai-amenities" class="mt-100 amenitinsMainContaine">
         
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="tp-section-title-wrapper mb-40">
                           <h2 class="commonHeading">Ai 360 Amenities </h2>
                        </div>
                     </div>
                     <div class="ameGrid">
                        <?php if($hotel->aminities): ?>
                        <?php $__currentLoopData = $hotel->aminities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $amenity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <div class="ameContainer">
                           <div class="tp-suites-item round-6 mb-30 p-relative">
                              <a href="#">
                                 <div class="tp-suites-thumb">
                                    <img class="w-100" src="<?php echo e(asset('uploads/hotel/amenity/'.$amenity->amenitiy_image)); ?>" alt="service">
                                 </div>
                              </a>
                              <div class="tp-suites-content p-absolute">
                                 <h3 class="tp-suites-title"><a href="#"><?php echo e($amenity->amenitiy_name ?? ""); ?></a></h3>
                              </div>
                           </div>
                        </div>   
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        
                        
                     </div>
                  </div>
        
         </div>
         <!-- tp-room-details-gellary-start -->
         <div class="container">
            <div class="attraction">
               <div class="attLeft">
                  <?php if($hotel->attraction): ?>
                  <figure>
                     <img src="<?php echo e(asset('uploads/hotel/attraction/'.$hotel->attraction[0]->attraction_image)); ?>">
                  </figure>
                  <?php endif; ?>
               </div>
               <div class="attRight">
                  <h2 class="commonHeading">Around the Hotels</h2>
                  <ul>
                     <?php if($hotel->attraction): ?>
                         <?php $__currentLoopData = $hotel->attraction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attraction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li><strong><?php echo e($attraction->attraction_name); ?> </strong>   <?php echo e($attraction->attraction_distance); ?> km</li>
                           
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php endif; ?>
                    
                    
                  </ul>
               </div>
            </div>
         </div>
         <div id="ai-gallery" class="tp-room-details-gellary mt-100 pb-85">
            <div class="container container-1700">
               <div class="col-lg-12">
                  <div class="tp-section-title-wrapper mb-40">
                     <h2 class="commonHeading">Ai 360 Gallery </h2>
                  </div>
               </div>
               <div class="row tp-gx-15">
                   <?php if($hotel->gallery): ?>

                  <div class="col-lg-6">
                     <div class="tp-room-gellary-thumb mb-15 p-relative">
                        <img class="w-100" src="<?php echo e(asset('uploads/hotel/'.$hotel->gallery[0]->image_path)); ?>" alt="thumb">
                        <div class="tp-room-gellary-btn">
                           <a class="tp-btn-white popup-image" href="<?php echo e(asset('uploads/hotel/'.$hotel->gallery[0]->image_path)); ?>">View Photos</a>
                        </div>
                        <a class="degreewrap" href="https://virtualle.io/Hospitality/AI-360-Lansdowne/" target="_blank">
                           <svg width="512" height="380" viewBox="0 0 512 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M322.284 335.645C314.843 335.645 308.386 330.113 307.421 322.539C306.378 314.32 312.191 306.812 320.405 305.766C367.804 299.726 410.249 286.883 439.921 269.594C467.058 253.785 481.999 235.199 481.999 217.262C481.999 197.492 464.515 181.316 449.843 171.222C443.019 166.527 441.292 157.192 445.987 150.363C450.683 143.539 460.022 141.813 466.847 146.508C496.386 166.828 511.999 191.293 511.999 217.266C511.999 246.742 492.299 273.801 455.026 295.516C421.476 315.062 376.237 328.898 324.198 335.527C323.554 335.605 322.913 335.645 322.284 335.645ZM252.343 314.156L212.344 274.156C206.484 268.296 196.988 268.296 191.129 274.156C185.273 280.012 185.273 289.512 191.129 295.367L202.816 307.055C158.004 302.425 117.293 291.992 85.7698 276.832C50.3279 259.789 29.9999 238.074 29.9999 217.262C29.9999 199.609 44.5549 181.262 70.9799 165.598C78.1098 161.375 80.4598 152.172 76.2378 145.047C72.0119 137.918 62.8079 135.567 55.6839 139.789C9.65998 167.07 0 196.977 0 217.262C0 250.543 25.8439 281.301 72.7699 303.872C109.191 321.382 156.305 333.113 207.633 337.652L191.129 354.156C185.273 360.012 185.273 369.512 191.129 375.371C192.521 376.765 194.175 377.87 195.996 378.623C197.817 379.377 199.768 379.763 201.739 379.761C205.574 379.761 209.414 378.297 212.344 375.371L252.343 335.371C258.198 329.511 258.198 320.011 252.343 314.156Z" fill="black"/>
                              <path d="M157.098 187.223V183.613C157.098 170.883 149.305 168.414 138.855 168.414C132.395 168.414 130.305 162.714 130.305 157.016C130.305 151.313 132.395 145.613 138.855 145.613C146.075 145.613 153.675 144.664 153.675 129.273C153.675 118.253 147.406 115.593 139.613 115.593C130.305 115.593 125.555 117.875 125.555 125.285C125.555 131.742 122.703 136.113 111.684 136.113C98.0043 136.113 96.2973 133.262 96.2973 124.141C96.2973 109.324 106.934 90.133 139.613 90.133C163.746 90.133 181.984 98.871 181.984 124.523C181.984 138.391 176.855 151.313 167.355 155.683C178.566 159.863 186.735 168.223 186.735 183.613V187.223C186.735 218.383 165.265 230.164 138.665 230.164C105.985 230.164 93.4453 210.214 93.4453 194.254C93.4453 185.704 97.0553 183.422 107.504 183.422C119.664 183.422 122.704 186.082 122.704 193.305C122.704 202.235 131.066 204.325 139.614 204.325C152.535 204.325 157.098 199.575 157.098 187.223ZM302.066 183.613V185.324C302.066 218.004 281.734 230.164 255.516 230.164C229.298 230.164 208.773 218.004 208.773 185.324V134.973C208.773 102.293 229.863 90.133 257.227 90.133C289.336 90.133 302.067 110.082 302.067 125.852C302.067 134.972 297.695 137.82 288.195 137.82C280.027 137.82 272.805 135.73 272.805 126.992C272.805 119.773 265.207 115.972 256.277 115.972C245.067 115.972 238.414 121.863 238.414 134.972V152.07C244.496 145.422 253.047 143.71 262.168 143.71C283.824 143.71 302.066 153.21 302.066 183.613ZM238.414 187.414C238.414 200.524 244.875 206.223 255.516 206.223C266.157 206.223 272.426 200.523 272.426 187.414V185.704C272.426 171.832 266.156 166.512 255.324 166.512C245.066 166.512 238.414 171.453 238.414 183.992V187.414ZM325.055 185.324V134.973C325.055 102.293 345.383 90.133 371.605 90.133C397.825 90.133 418.344 102.293 418.344 134.973V185.324C418.344 218.004 397.824 230.164 371.605 230.164C345.383 230.164 325.055 218.004 325.055 185.324ZM388.703 134.973C388.703 121.863 382.246 115.973 371.605 115.973C360.964 115.973 354.695 121.863 354.695 134.973V185.324C354.695 198.434 360.965 204.324 371.605 204.324C382.245 204.324 388.703 198.434 388.703 185.324V134.973ZM454.352 90C429.535 90 409.352 69.812 409.352 45C409.352 20.188 429.535 0 454.352 0C479.164 0 499.352 20.188 499.352 45C499.352 69.812 479.164 90 454.352 90ZM454.352 30C446.078 30 439.352 36.73 439.352 45C439.352 53.273 446.078 60 454.352 60C462.622 60 469.352 53.273 469.352 45C469.352 36.73 462.622 30 454.352 30Z" fill="black"/>
                           </svg>
                        </a>
                     </div>
                  </div>
                  <?php endif; ?>
                  <div class="col-lg-6">
                     <div class="row tp-gx-15">
                        <?php if($hotel->gallery): ?>
                        
                           <?php $__currentLoopData = $hotel->gallery->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="col-lg-6 col-md-6">
                                 <div class="tp-room-gellary-thumb pos-rel mb-15">
                                    <a class="popup-image" href="<?php echo e(asset('uploads/hotel/'.$gallery->image_path)); ?>">
                                    <img class="w-100" src="<?php echo e(asset('uploads/hotel/'.$gallery->image_path)); ?>" alt="thumb">
                                    </a>
                                    
                                 </div>
                              </div>
                              
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- tp-room-details-gellary-end -->
         <div id="ai-loc-cont" class=" ">
            <div class="col-lg-12">
               <div class="tp-section-title-wrapper mb-40">
                  <h2 class="commonHeading">Contact Details </h2>
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
                                          <h3 class="tp-offcanvas-title sm">Contact Details</h3>
                                          <ul>
                                             <li><a href="">+91 1234567890</a></li>
                                             <li><a href="">hello@ai360.com</a></li>
                                             <li><a href="#">Lansdowne Street Lansdowne, Pennsylvania - 19050</a></li>
                                          </ul>
                                       </div>
                                       <div class="tp-offcanvas-social">
                                          <h3 class="tp-offcanvas-title sm">Follow Us</h3>
                                          <ul>
                                             <li>
                                                <a href="#">
                                                   <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M11.25 1.5H4.75C2.95507 1.5 1.5 2.95507 1.5 4.75V11.25C1.5 13.0449 2.95507 14.5 4.75 14.5H11.25C13.0449 14.5 14.5 13.0449 14.5 11.25V4.75C14.5 2.95507 13.0449 1.5 11.25 1.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      <path d="M10.6016 7.5907C10.6818 8.13166 10.5894 8.68414 10.3375 9.16955C10.0856 9.65497 9.68711 10.0486 9.19862 10.2945C8.71014 10.5404 8.15656 10.6259 7.61663 10.5391C7.0767 10.4522 6.57791 10.1972 6.19121 9.81055C5.80451 9.42385 5.54959 8.92506 5.46271 8.38513C5.37583 7.8452 5.46141 7.29163 5.70728 6.80314C5.95315 6.31465 6.34679 5.91613 6.83221 5.66425C7.31763 5.41238 7.87011 5.31998 8.41107 5.4002C8.96287 5.48202 9.47372 5.73915 9.86817 6.1336C10.2626 6.52804 10.5197 7.0389 10.6016 7.5907Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      <path d="M11.5742 4.42578H11.5842" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                   </svg>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#">
                                                   <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M2.50589 12.7494C4.57662 16.336 9.16278 17.5648 12.7494 15.4941C14.2113 14.65 15.2816 13.388 15.8962 11.9461C16.7895 9.85066 16.7208 7.37526 15.4941 5.25063C14.2674 3.12599 12.1581 1.82872 9.89669 1.55462C8.34063 1.366 6.71259 1.66183 5.25063 2.50589C1.66403 4.57662 0.435172 9.16278 2.50589 12.7494Z" stroke="currentColor" stroke-width="1.5"></path>
                                                      <path d="M12.7127 15.4292C12.7127 15.4292 12.0086 10.4867 10.5011 7.87559C8.99362 5.26451 5.28935 2.57155 5.28935 2.57155M5.68449 15.6124C6.79553 12.2606 12.34 8.54524 16.3975 9.43537M12.311 2.4082C11.1953 5.72344 5.75732 9.38453 1.71875 8.58915" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                   </svg>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#">
                                                   <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M1 5.5715H6.33342C7.62867 5.5715 8.61917 6.56199 8.61917 7.85725C8.61917 9.15251 7.62867 10.143 6.33342 10.143H1.76192C1.30477 10.143 1 9.83823 1 9.38108V1.76192C1 1.30477 1.30477 1 1.76192 1H5.5715C6.86676 1 7.85725 1.99049 7.85725 3.28575C7.85725 4.58101 6.86676 5.5715 5.5715 5.5715H1Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></path>
                                                      <path d="M10.9062 7.09454H17.0016C17.0016 5.41832 15.6301 4.04688 13.9539 4.04688C12.2777 4.04688 10.9062 5.41832 10.9062 7.09454ZM10.9062 7.09454C10.9062 8.77076 12.2777 10.1422 13.9539 10.1422H15.2492" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      <path d="M16.1125 1.44434H11.668" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                   </svg>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#">
                                                   <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M12.75 13H5.25C3 13 1.5 11.5 1.5 9.25V4.75C1.5 2.5 3 1 5.25 1H12.75C15 1 16.5 2.5 16.5 4.75V9.25C16.5 11.5 15 13 12.75 13Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      <path d="M8.70676 5.14837L10.8006 6.40465C11.5543 6.90716 11.5543 7.66093 10.8006 8.16344L8.70676 9.41972C7.86923 9.92224 7.19922 9.50348 7.19922 8.5822V6.06964C7.19922 4.98086 7.86923 4.64585 8.70676 5.14837Z" fill="currentColor"></path>
                                                   </svg>
                                                </a>
                                             </li>
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
         <section class="faq-sect">
            <div class="container">
               <div class="col-lg-12">
                  <div class="tp-section-title-wrapper mb-40">
                     <h2 class="commonHeading">Faq's</h2>
                  </div>
               </div>
               <div class="accordion" id="general_faqaccordion">
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="order_one">
                        <button class="accordion-button tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_one" aria-expanded="true" aria-controls="order__collapse_one">
                        <span class="tp-faq-number">01</span>
                        <span class="tp-faq-title">Where can I get some room in Hotel?</span>
                        <span class="accordion-btn"></span>
                        </button>
                     </h2>
                     <div id="order__collapse_one" class="accordion-collapse collapse show" aria-labelledby="order_one" data-bs-parent="#general_faqaccordion">
                        <div class="accordion-body tp-faq-details-para">
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="order_two">
                        <button class="accordion-button collapsed tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_two" aria-expanded="false" aria-controls="order__collapse_two">
                        <span class="tp-faq-number">02</span>
                        <span class="tp-faq-title">Why do we use it in Hotel?</span>
                        <span class="accordion-btn"></span>
                        </button>
                     </h2>
                     <div id="order__collapse_two" class="accordion-collapse collapse" aria-labelledby="order_two" data-bs-parent="#general_faqaccordion">
                        <div class="accordion-body tp-faq-details-para">
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="order_three">
                        <button class="accordion-button collapsed tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_three" aria-expanded="false" aria-controls="order__collapse_three">
                        <span class="tp-faq-number">03</span>
                        <span class="tp-faq-title">Where does it come from Hotel?</span>
                        <span class="accordion-btn"></span>
                        </button>
                     </h2>
                     <div id="order__collapse_three" class="accordion-collapse collapse" aria-labelledby="order_three" data-bs-parent="#general_faqaccordion">
                        <div class="accordion-body tp-faq-details-para">
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="order_four">
                        <button class="accordion-button collapsed tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_four" aria-expanded="false" aria-controls="order__collapse_four">
                        <span class="tp-faq-number">04</span>
                        <span class="tp-faq-title">Where can I get some?</span>
                        <span class="accordion-btn"></span>
                        </button>
                     </h2>
                     <div id="order__collapse_four" class="accordion-collapse collapse" aria-labelledby="order_four" data-bs-parent="#general_faqaccordion">
                        <div class="accordion-body tp-faq-details-para">
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- tp-room-area-start -->
         <div class="lRoom ">
            <div class="tp-room-area fix   ">
               <div class=" ">
                  <div class="row mb-20">
                     <div class="col-lg-9 col-md-9 mb-15">
                        <div class="tp-room-title-wrap">
                           <h2 class="commonHeading text-left">Our Hotels</h2>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 mb-40">
                        <div class="tp-room-btn d-flex justify-content-end align-items-end h-100">
                           <a class="tp-btn-4" href="#">All Hotels</a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="tp-room-slider-wrap">
                        <div class="tp-room-slider-active swiper-container">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="tp-room-wrap">
                                    <div class="tp-room-thumb mb-35">
                                       <img class="w-100" src="<?php echo e(asset('assets/web/images/a.jpg')); ?>" alt="room">
                                    </div>
                                    <div class="tp-room-content">
                                       <span class="tp-room-tag mb-15">Double room</span>
                                       <h4 class="tp-room-title mb-20"><a href="https://live.ipms247.com/booking/book-rooms-a1360degree">Deluxe Suite Room</a></h4>
                                       <div class="tp-room-meta mb-30">
                                          <ul>
                                             <li>
                                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M1.88431 15.1578C2.28431 15.1578 2.60894 15.5115 2.60894 15.9473V17.2104C2.60894 17.4198 2.5326 17.6206 2.3967 17.7686C2.26081 17.9167 2.07649 17.9999 1.88431 17.9999C1.69212 17.9999 1.50781 17.9167 1.37191 17.7686C1.23601 17.6206 1.15967 17.4198 1.15967 17.2104V15.9473C1.15967 15.5115 1.48431 15.1578 1.88431 15.1578ZM18.1162 15.1578C18.5162 15.1578 18.8408 15.5115 18.8408 15.9473V17.2104C18.8408 17.4198 18.7645 17.6206 18.6286 17.7686C18.4927 17.9167 18.3084 17.9999 18.1162 17.9999C17.924 17.9999 17.7397 17.9167 17.6038 17.7686C17.4679 17.6206 17.3916 17.4198 17.3916 17.2104V15.9473C17.3916 15.5115 17.7162 15.1578 18.1162 15.1578ZM7.68141 4.73689C7.5661 4.73689 7.45551 4.78679 7.37397 4.87562C7.29243 4.96445 7.24662 5.08494 7.24662 5.21056V8.36842C7.24662 8.5778 7.17028 8.7786 7.03438 8.92665C6.89849 9.07471 6.71417 9.15788 6.52199 9.15788C6.3298 9.15788 6.14549 9.07471 6.00959 8.92665C5.87369 8.7786 5.79735 8.5778 5.79735 8.36842V5.21056C5.79735 4.07753 6.64141 3.15796 7.68141 3.15796H12.3191C13.3591 3.15796 14.2031 4.07753 14.2031 5.21056V8.36842C14.2031 8.5778 14.1268 8.7786 13.9909 8.92665C13.855 9.07471 13.6707 9.15788 13.4785 9.15788C13.2863 9.15788 13.102 9.07471 12.9661 8.92665C12.8302 8.7786 12.7539 8.5778 12.7539 8.36842V5.21056C12.7539 5.08494 12.7081 4.96445 12.6265 4.87562C12.545 4.78679 12.4344 4.73689 12.3191 4.73689H7.68141Z" fill="#A05916" fill-opacity="0.5" />
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M3.04348 9.55767C2.16232 9.55767 1.44928 10.1738 1.44928 10.9352V14.3162H18.5507V10.9352C18.5507 10.1738 17.8377 9.55767 16.9565 9.55767H3.04348ZM2.21031e-07 10.9352C-0.00015214 10.5898 0.0784657 10.2478 0.231361 9.92864C0.384256 9.60953 0.608431 9.31958 0.891075 9.07536C1.17372 8.83114 1.50929 8.63744 1.87861 8.50533C2.24793 8.37322 2.64376 8.30529 3.04348 8.30542H16.9565C17.3562 8.30529 17.7521 8.37322 18.1214 8.50533C18.4907 8.63744 18.8263 8.83114 19.1089 9.07536C19.3916 9.31958 19.6157 9.60953 19.7686 9.92864C19.9215 10.2478 20.0002 10.5898 20 10.9352V14.4415C20 15.0636 19.4157 15.5685 18.6957 15.5685H1.30435C0.958414 15.5685 0.626648 15.4497 0.382035 15.2384C0.137422 15.027 2.21031e-07 14.7404 2.21031e-07 14.4415V10.9352Z" fill="#A05916" />
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M4.7541 1.57893C3.95672 1.57893 3.31148 2.35576 3.31148 3.31575V8.36831C3.31148 8.57769 3.24239 8.7785 3.11941 8.92655C2.99644 9.0746 2.82965 9.15778 2.65574 9.15778C2.48183 9.15778 2.31504 9.0746 2.19206 8.92655C2.06909 8.7785 2 8.57769 2 8.36831V3.31575C1.99986 2.88027 2.07101 2.44903 2.20936 2.04667C2.34772 1.64431 2.55058 1.27872 2.80635 0.97079C3.06212 0.662861 3.36578 0.418632 3.69999 0.252059C4.03419 0.0854855 4.39239 -0.00016575 4.7541 2.40803e-07H15.2459C15.6076 -0.00016575 15.9658 0.0854855 16.3 0.252059C16.6342 0.418632 16.9379 0.662861 17.1937 0.97079C17.4494 1.27872 17.6523 1.64431 17.7906 2.04667C17.929 2.44903 18.0001 2.88027 18 3.31575V8.36831C18 8.57769 17.9309 8.7785 17.8079 8.92655C17.685 9.0746 17.5182 9.15778 17.3443 9.15778C17.1703 9.15778 17.0036 9.0746 16.8806 8.92655C16.7576 8.7785 16.6885 8.57769 16.6885 8.36831V3.31575C16.6885 2.35576 16.0433 1.57893 15.2459 1.57893H4.7541Z" fill="#A05916" />
                                                </svg>
                                                <span>Adults: 2</span>
                                             </li>
                                             <li>
                                                <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5902 4.65087C17.0424 4.83482 18.2681 4.97808 19.4951 4.67298C19.687 4.62525 19.8974 4.63454 20.0798 4.6988C20.2622 4.76307 20.4019 4.87705 20.468 5.01567C20.5341 5.15429 20.5212 5.30619 20.4322 5.43796C20.3432 5.56972 20.1854 5.67056 19.9935 5.71829C18.3637 6.12422 16.773 5.92258 15.3967 5.74925L15.3269 5.7404C13.8746 5.55646 12.6489 5.41319 11.4219 5.71829C11.23 5.76603 11.0197 5.75674 10.8372 5.69247C10.6548 5.6282 10.5152 5.51422 10.4491 5.3756C10.383 5.23699 10.3959 5.08508 10.4848 4.95332C10.5738 4.82155 10.7316 4.72071 10.9236 4.67298C12.5534 4.26705 14.144 4.46869 15.5204 4.64202L15.5902 4.65087ZM3.82513 0C4.2488 0 4.59166 0.247622 4.59166 0.552727C4.59166 1.44063 4.98106 2.06941 5.43902 2.78132L5.46596 2.82554C5.91658 3.52684 6.42842 4.32365 6.42842 5.41673C6.42842 5.56332 6.34779 5.70391 6.20426 5.80756C6.06074 5.91122 5.86608 5.96945 5.6631 5.96945C5.46013 5.96945 5.26547 5.91122 5.12195 5.80756C4.97842 5.70391 4.89779 5.56332 4.89779 5.41673C4.89779 4.57216 4.51207 3.96637 4.04921 3.2465C3.5888 2.52751 3.06104 1.70417 3.06104 0.552727C3.06104 0.247622 3.40267 0 3.82513 0ZM6.88638 0.884364C7.31006 0.884364 7.65292 1.13199 7.65292 1.43709C7.65292 2.13309 8.01048 2.60003 8.46844 3.17221L8.49905 3.21024C8.94845 3.77181 9.48968 4.44658 9.48968 5.41673C9.48968 5.56332 9.40905 5.70391 9.26552 5.80756C9.122 5.91122 8.92734 5.96945 8.72436 5.96945C8.52139 5.96945 8.32673 5.91122 8.1832 5.80756C8.03968 5.70391 7.95905 5.56332 7.95905 5.41673C7.95905 4.75345 7.60639 4.3042 7.1423 3.72494L7.13496 3.7161C6.67577 3.14126 6.12229 2.44969 6.12229 1.43709C6.12229 1.13199 6.46393 0.884364 6.88638 0.884364Z" fill="#A05916" fill-opacity="0.5" />
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M9.92944 3.57668C9.90114 3.33992 9.92319 3.09987 9.99415 2.87223C10.0651 2.6446 10.1834 2.43453 10.3412 2.25579C10.499 2.07705 10.6928 1.93368 10.9099 1.83507C11.127 1.73646 11.3625 1.68484 11.6009 1.68359H19.3177C20.3206 1.68359 21.1128 2.57993 20.9867 3.5779L19.3569 16.1744C19.2947 16.6539 19.0601 17.0943 18.6968 17.4134C18.3335 17.7325 17.8665 17.9084 17.383 17.9083H13.445C12.9514 17.9083 12.4754 17.7248 12.1095 17.3935C11.7436 17.0622 11.5139 16.6068 11.465 16.1156L11.3352 14.8005C11.3212 14.6986 11.328 14.5949 11.355 14.4957C11.382 14.3964 11.4288 14.3037 11.4925 14.2229C11.5562 14.1421 11.6355 14.0751 11.7257 14.0256C11.8159 13.9762 11.9151 13.9455 12.0175 13.9353C12.1198 13.9251 12.2232 13.9356 12.3213 13.9662C12.4195 13.9968 12.5105 14.0469 12.5889 14.1135C12.6673 14.1801 12.7315 14.2618 12.7776 14.3538C12.8237 14.4457 12.8508 14.546 12.8572 14.6486L12.9883 15.9638C13.0127 16.1989 13.2087 16.3776 13.445 16.3776H17.383C17.6144 16.3776 17.8091 16.2062 17.8385 15.9772L19.4671 3.38443C19.4688 3.36348 19.4661 3.3424 19.4592 3.32256C19.4522 3.30273 19.4411 3.28459 19.4267 3.26933C19.4133 3.25277 19.3966 3.23928 19.3776 3.22978C19.3586 3.22027 19.3377 3.21496 19.3165 3.21422H11.6021C11.5807 3.21495 11.5597 3.22024 11.5404 3.22974C11.5212 3.23924 11.5043 3.25274 11.4907 3.26933C11.4759 3.28439 11.4645 3.30247 11.4573 3.32234C11.4501 3.3422 11.4473 3.36338 11.4491 3.38443V3.38565L11.934 7.25141C11.9486 7.35208 11.943 7.45466 11.9175 7.55314C11.892 7.65162 11.8471 7.74403 11.7855 7.82496C11.7239 7.9059 11.6467 7.97374 11.5586 8.02451C11.4704 8.07529 11.373 8.10798 11.2721 8.12068C11.1712 8.13338 11.0687 8.12582 10.9707 8.09846C10.8728 8.07111 10.7812 8.02449 10.7015 7.96134C10.6217 7.89819 10.5554 7.81977 10.5063 7.73067C10.4572 7.64158 10.4263 7.54359 10.4156 7.44243L9.93067 3.57668H9.92944Z" fill="#A05916" fill-opacity="0.5" />
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M4.25698e-07 8.26548C4.25698e-07 7.33486 0.75307 6.58179 1.68369 6.58179H14.541C15.4704 6.58179 16.2247 7.33608 16.2247 8.26548V8.57161C16.2249 10.0352 15.8289 11.4716 15.0786 12.7282C14.3284 13.9849 13.2519 15.015 11.9634 15.7092C11.8701 15.7599 11.7882 15.8293 11.7231 15.9132C11.658 15.9971 11.611 16.0936 11.585 16.1966L11.4185 16.8639C11.2642 17.4762 10.7144 17.9084 10.0826 17.9084H6.13966C5.50782 17.9084 4.95801 17.4774 4.80495 16.8652L4.63719 16.1966C4.61147 16.0935 4.56454 15.9969 4.49939 15.913C4.43424 15.8291 4.35231 15.7597 4.25882 15.7092C2.9708 15.0147 1.8948 13.9845 1.14499 12.7278C0.395183 11.4711 -0.000473745 10.035 4.25698e-07 8.57161V8.26548ZM1.68369 8.11242C1.6431 8.11242 1.60417 8.12854 1.57546 8.15725C1.54676 8.18595 1.53063 8.22488 1.53063 8.26548V8.57161C1.53009 9.7592 1.85118 10.9248 2.45981 11.9445C3.06844 12.9643 3.94189 13.8002 4.9874 14.3635C5.26794 14.5151 5.51377 14.7235 5.70922 14.9755C5.90467 15.2274 6.04543 15.5174 6.12252 15.8268L6.25966 16.3778H9.96256L10.0997 15.8268C10.2564 15.1998 10.6691 14.6696 11.2348 14.3635C12.2807 13.8005 13.1546 12.9647 13.7636 11.9449C14.3727 10.9251 14.6942 9.75942 14.694 8.57161V8.26548C14.694 8.22488 14.6779 8.18595 14.6492 8.15725C14.6205 8.12854 14.5816 8.11242 14.541 8.11242H1.68369Z" fill="#A05916" />
                                                </svg>
                                                <span>Breakfast</span>
                                             </li>
                                             <li>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M11.7 17.25H6.3C4.12397 17.25 2.79586 16.8102 1.99283 16.0072C1.1898 15.2041 0.75 13.876 0.75 11.7V6.3C0.75 4.12397 1.1898 2.79586 1.99283 1.99283C2.79586 1.1898 4.12397 0.75 6.3 0.75H11.7C13.876 0.75 15.2041 1.1898 16.0072 1.99283C16.8102 2.79586 17.25 4.12397 17.25 6.3V11.7C17.25 13.876 16.8102 15.2041 16.0072 16.0072C15.2041 16.8102 13.876 17.25 11.7 17.25Z" stroke="#A05916" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                   <path d="M10.2 12.25H7.8C6.87397 12.25 6.42086 12.0602 6.18033 11.8197C5.9398 11.5791 5.75 11.126 5.75 10.2V7.8C5.75 6.87397 5.9398 6.42086 6.18033 6.18033C6.42086 5.9398 6.87397 5.75 7.8 5.75H10.2C11.126 5.75 11.5791 5.9398 11.8197 6.18033C12.0602 6.42086 12.25 6.87397 12.25 7.8V10.2C12.25 11.126 12.0602 11.5791 11.8197 11.8197C11.5791 12.0602 11.126 12.25 10.2 12.25Z" stroke="#A05916" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <span>Size: 20ft²</span>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="tp-room-btn-3">
                                          <a class="tp-btn-square" href="https://live.ipms247.com/booking/book-rooms-a1360degree">Book Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tp-room-wrap">
                                    <div class="tp-room-thumb mb-35">
                                       <img class="w-100" src="<?php echo e(asset('assets/web/images/room1.png')); ?>" alt="room">
                                    </div>
                                    <div class="tp-room-content">
                                       <span class="tp-room-tag mb-15">Junior Suite</span>
                                       <h4 class="tp-room-title mb-20"><a href="https://live.ipms247.com/booking/book-rooms-a1360degree">Standard Suite Room</a></h4>
                                       <div class="tp-room-meta mb-30">
                                          <ul>
                                             <li>
                                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M1.88431 15.1578C2.28431 15.1578 2.60894 15.5115 2.60894 15.9473V17.2104C2.60894 17.4198 2.5326 17.6206 2.3967 17.7686C2.26081 17.9167 2.07649 17.9999 1.88431 17.9999C1.69212 17.9999 1.50781 17.9167 1.37191 17.7686C1.23601 17.6206 1.15967 17.4198 1.15967 17.2104V15.9473C1.15967 15.5115 1.48431 15.1578 1.88431 15.1578ZM18.1162 15.1578C18.5162 15.1578 18.8408 15.5115 18.8408 15.9473V17.2104C18.8408 17.4198 18.7645 17.6206 18.6286 17.7686C18.4927 17.9167 18.3084 17.9999 18.1162 17.9999C17.924 17.9999 17.7397 17.9167 17.6038 17.7686C17.4679 17.6206 17.3916 17.4198 17.3916 17.2104V15.9473C17.3916 15.5115 17.7162 15.1578 18.1162 15.1578ZM7.68141 4.73689C7.5661 4.73689 7.45551 4.78679 7.37397 4.87562C7.29243 4.96445 7.24662 5.08494 7.24662 5.21056V8.36842C7.24662 8.5778 7.17028 8.7786 7.03438 8.92665C6.89849 9.07471 6.71417 9.15788 6.52199 9.15788C6.3298 9.15788 6.14549 9.07471 6.00959 8.92665C5.87369 8.7786 5.79735 8.5778 5.79735 8.36842V5.21056C5.79735 4.07753 6.64141 3.15796 7.68141 3.15796H12.3191C13.3591 3.15796 14.2031 4.07753 14.2031 5.21056V8.36842C14.2031 8.5778 14.1268 8.7786 13.9909 8.92665C13.855 9.07471 13.6707 9.15788 13.4785 9.15788C13.2863 9.15788 13.102 9.07471 12.9661 8.92665C12.8302 8.7786 12.7539 8.5778 12.7539 8.36842V5.21056C12.7539 5.08494 12.7081 4.96445 12.6265 4.87562C12.545 4.78679 12.4344 4.73689 12.3191 4.73689H7.68141Z" fill="#A05916" fill-opacity="0.5" />
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M3.04348 9.55767C2.16232 9.55767 1.44928 10.1738 1.44928 10.9352V14.3162H18.5507V10.9352C18.5507 10.1738 17.8377 9.55767 16.9565 9.55767H3.04348ZM2.21031e-07 10.9352C-0.00015214 10.5898 0.0784657 10.2478 0.231361 9.92864C0.384256 9.60953 0.608431 9.31958 0.891075 9.07536C1.17372 8.83114 1.50929 8.63744 1.87861 8.50533C2.24793 8.37322 2.64376 8.30529 3.04348 8.30542H16.9565C17.3562 8.30529 17.7521 8.37322 18.1214 8.50533C18.4907 8.63744 18.8263 8.83114 19.1089 9.07536C19.3916 9.31958 19.6157 9.60953 19.7686 9.92864C19.9215 10.2478 20.0002 10.5898 20 10.9352V14.4415C20 15.0636 19.4157 15.5685 18.6957 15.5685H1.30435C0.958414 15.5685 0.626648 15.4497 0.382035 15.2384C0.137422 15.027 2.21031e-07 14.7404 2.21031e-07 14.4415V10.9352Z" fill="#A05916" />
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M4.7541 1.57893C3.95672 1.57893 3.31148 2.35576 3.31148 3.31575V8.36831C3.31148 8.57769 3.24239 8.7785 3.11941 8.92655C2.99644 9.0746 2.82965 9.15778 2.65574 9.15778C2.48183 9.15778 2.31504 9.0746 2.19206 8.92655C2.06909 8.7785 2 8.57769 2 8.36831V3.31575C1.99986 2.88027 2.07101 2.44903 2.20936 2.04667C2.34772 1.64431 2.55058 1.27872 2.80635 0.97079C3.06212 0.662861 3.36578 0.418632 3.69999 0.252059C4.03419 0.0854855 4.39239 -0.00016575 4.7541 2.40803e-07H15.2459C15.6076 -0.00016575 15.9658 0.0854855 16.3 0.252059C16.6342 0.418632 16.9379 0.662861 17.1937 0.97079C17.4494 1.27872 17.6523 1.64431 17.7906 2.04667C17.929 2.44903 18.0001 2.88027 18 3.31575V8.36831C18 8.57769 17.9309 8.7785 17.8079 8.92655C17.685 9.0746 17.5182 9.15778 17.3443 9.15778C17.1703 9.15778 17.0036 9.0746 16.8806 8.92655C16.7576 8.7785 16.6885 8.57769 16.6885 8.36831V3.31575C16.6885 2.35576 16.0433 1.57893 15.2459 1.57893H4.7541Z" fill="#A05916" />
                                                </svg>
                                                <span>Adults: 2</span>
                                             </li>
                                             <li>
                                                <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5902 4.65087C17.0424 4.83482 18.2681 4.97808 19.4951 4.67298C19.687 4.62525 19.8974 4.63454 20.0798 4.6988C20.2622 4.76307 20.4019 4.87705 20.468 5.01567C20.5341 5.15429 20.5212 5.30619 20.4322 5.43796C20.3432 5.56972 20.1854 5.67056 19.9935 5.71829C18.3637 6.12422 16.773 5.92258 15.3967 5.74925L15.3269 5.7404C13.8746 5.55646 12.6489 5.41319 11.4219 5.71829C11.23 5.76603 11.0197 5.75674 10.8372 5.69247C10.6548 5.6282 10.5152 5.51422 10.4491 5.3756C10.383 5.23699 10.3959 5.08508 10.4848 4.95332C10.5738 4.82155 10.7316 4.72071 10.9236 4.67298C12.5534 4.26705 14.144 4.46869 15.5204 4.64202L15.5902 4.65087ZM3.82513 0C4.2488 0 4.59166 0.247622 4.59166 0.552727C4.59166 1.44063 4.98106 2.06941 5.43902 2.78132L5.46596 2.82554C5.91658 3.52684 6.42842 4.32365 6.42842 5.41673C6.42842 5.56332 6.34779 5.70391 6.20426 5.80756C6.06074 5.91122 5.86608 5.96945 5.6631 5.96945C5.46013 5.96945 5.26547 5.91122 5.12195 5.80756C4.97842 5.70391 4.89779 5.56332 4.89779 5.41673C4.89779 4.57216 4.51207 3.96637 4.04921 3.2465C3.5888 2.52751 3.06104 1.70417 3.06104 0.552727C3.06104 0.247622 3.40267 0 3.82513 0ZM6.88638 0.884364C7.31006 0.884364 7.65292 1.13199 7.65292 1.43709C7.65292 2.13309 8.01048 2.60003 8.46844 3.17221L8.49905 3.21024C8.94845 3.77181 9.48968 4.44658 9.48968 5.41673C9.48968 5.56332 9.40905 5.70391 9.26552 5.80756C9.122 5.91122 8.92734 5.96945 8.72436 5.96945C8.52139 5.96945 8.32673 5.91122 8.1832 5.80756C8.03968 5.70391 7.95905 5.56332 7.95905 5.41673C7.95905 4.75345 7.60639 4.3042 7.1423 3.72494L7.13496 3.7161C6.67577 3.14126 6.12229 2.44969 6.12229 1.43709C6.12229 1.13199 6.46393 0.884364 6.88638 0.884364Z" fill="#A05916" fill-opacity="0.5" />
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M9.92944 3.57668C9.90114 3.33992 9.92319 3.09987 9.99415 2.87223C10.0651 2.6446 10.1834 2.43453 10.3412 2.25579C10.499 2.07705 10.6928 1.93368 10.9099 1.83507C11.127 1.73646 11.3625 1.68484 11.6009 1.68359H19.3177C20.3206 1.68359 21.1128 2.57993 20.9867 3.5779L19.3569 16.1744C19.2947 16.6539 19.0601 17.0943 18.6968 17.4134C18.3335 17.7325 17.8665 17.9084 17.383 17.9083H13.445C12.9514 17.9083 12.4754 17.7248 12.1095 17.3935C11.7436 17.0622 11.5139 16.6068 11.465 16.1156L11.3352 14.8005C11.3212 14.6986 11.328 14.5949 11.355 14.4957C11.382 14.3964 11.4288 14.3037 11.4925 14.2229C11.5562 14.1421 11.6355 14.0751 11.7257 14.0256C11.8159 13.9762 11.9151 13.9455 12.0175 13.9353C12.1198 13.9251 12.2232 13.9356 12.3213 13.9662C12.4195 13.9968 12.5105 14.0469 12.5889 14.1135C12.6673 14.1801 12.7315 14.2618 12.7776 14.3538C12.8237 14.4457 12.8508 14.546 12.8572 14.6486L12.9883 15.9638C13.0127 16.1989 13.2087 16.3776 13.445 16.3776H17.383C17.6144 16.3776 17.8091 16.2062 17.8385 15.9772L19.4671 3.38443C19.4688 3.36348 19.4661 3.3424 19.4592 3.32256C19.4522 3.30273 19.4411 3.28459 19.4267 3.26933C19.4133 3.25277 19.3966 3.23928 19.3776 3.22978C19.3586 3.22027 19.3377 3.21496 19.3165 3.21422H11.6021C11.5807 3.21495 11.5597 3.22024 11.5404 3.22974C11.5212 3.23924 11.5043 3.25274 11.4907 3.26933C11.4759 3.28439 11.4645 3.30247 11.4573 3.32234C11.4501 3.3422 11.4473 3.36338 11.4491 3.38443V3.38565L11.934 7.25141C11.9486 7.35208 11.943 7.45466 11.9175 7.55314C11.892 7.65162 11.8471 7.74403 11.7855 7.82496C11.7239 7.9059 11.6467 7.97374 11.5586 8.02451C11.4704 8.07529 11.373 8.10798 11.2721 8.12068C11.1712 8.13338 11.0687 8.12582 10.9707 8.09846C10.8728 8.07111 10.7812 8.02449 10.7015 7.96134C10.6217 7.89819 10.5554 7.81977 10.5063 7.73067C10.4572 7.64158 10.4263 7.54359 10.4156 7.44243L9.93067 3.57668H9.92944Z" fill="#A05916" fill-opacity="0.5" />
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M4.25698e-07 8.26548C4.25698e-07 7.33486 0.75307 6.58179 1.68369 6.58179H14.541C15.4704 6.58179 16.2247 7.33608 16.2247 8.26548V8.57161C16.2249 10.0352 15.8289 11.4716 15.0786 12.7282C14.3284 13.9849 13.2519 15.015 11.9634 15.7092C11.8701 15.7599 11.7882 15.8293 11.7231 15.9132C11.658 15.9971 11.611 16.0936 11.585 16.1966L11.4185 16.8639C11.2642 17.4762 10.7144 17.9084 10.0826 17.9084H6.13966C5.50782 17.9084 4.95801 17.4774 4.80495 16.8652L4.63719 16.1966C4.61147 16.0935 4.56454 15.9969 4.49939 15.913C4.43424 15.8291 4.35231 15.7597 4.25882 15.7092C2.9708 15.0147 1.8948 13.9845 1.14499 12.7278C0.395183 11.4711 -0.000473745 10.035 4.25698e-07 8.57161V8.26548ZM1.68369 8.11242C1.6431 8.11242 1.60417 8.12854 1.57546 8.15725C1.54676 8.18595 1.53063 8.22488 1.53063 8.26548V8.57161C1.53009 9.7592 1.85118 10.9248 2.45981 11.9445C3.06844 12.9643 3.94189 13.8002 4.9874 14.3635C5.26794 14.5151 5.51377 14.7235 5.70922 14.9755C5.90467 15.2274 6.04543 15.5174 6.12252 15.8268L6.25966 16.3778H9.96256L10.0997 15.8268C10.2564 15.1998 10.6691 14.6696 11.2348 14.3635C12.2807 13.8005 13.1546 12.9647 13.7636 11.9449C14.3727 10.9251 14.6942 9.75942 14.694 8.57161V8.26548C14.694 8.22488 14.6779 8.18595 14.6492 8.15725C14.6205 8.12854 14.5816 8.11242 14.541 8.11242H1.68369Z" fill="#A05916" />
                                                </svg>
                                                <span>Breakfast</span>
                                             </li>
                                             <li>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M11.7 17.25H6.3C4.12397 17.25 2.79586 16.8102 1.99283 16.0072C1.1898 15.2041 0.75 13.876 0.75 11.7V6.3C0.75 4.12397 1.1898 2.79586 1.99283 1.99283C2.79586 1.1898 4.12397 0.75 6.3 0.75H11.7C13.876 0.75 15.2041 1.1898 16.0072 1.99283C16.8102 2.79586 17.25 4.12397 17.25 6.3V11.7C17.25 13.876 16.8102 15.2041 16.0072 16.0072C15.2041 16.8102 13.876 17.25 11.7 17.25Z" stroke="#A05916" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                   <path d="M10.2 12.25H7.8C6.87397 12.25 6.42086 12.0602 6.18033 11.8197C5.9398 11.5791 5.75 11.126 5.75 10.2V7.8C5.75 6.87397 5.9398 6.42086 6.18033 6.18033C6.42086 5.9398 6.87397 5.75 7.8 5.75H10.2C11.126 5.75 11.5791 5.9398 11.8197 6.18033C12.0602 6.42086 12.25 6.87397 12.25 7.8V10.2C12.25 11.126 12.0602 11.5791 11.8197 11.8197C11.5791 12.0602 11.126 12.25 10.2 12.25Z" stroke="#A05916" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <span>Size: 20ft²</span>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="tp-room-btn-3">
                                          <a class="tp-btn-square" href="https://live.ipms247.com/booking/book-rooms-a1360degree">Book Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tp-room-wrap">
                                    <div class="tp-room-thumb mb-35">
                                       <img class="w-100" src="<?php echo e(asset('assets/web/images/b.jpg')); ?>" alt="room">
                                    </div>
                                    <div class="tp-room-content">
                                       <span class="tp-room-tag mb-15">Deluxe suite</span>
                                       <h4 class="tp-room-title mb-20"><a href="https://live.ipms247.com/booking/book-rooms-a1360degree">Deluxe suite</a></h4>
                                       <div class="tp-room-meta mb-30">
                                          <ul>
                                             <li>
                                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M1.88431 15.1578C2.28431 15.1578 2.60894 15.5115 2.60894 15.9473V17.2104C2.60894 17.4198 2.5326 17.6206 2.3967 17.7686C2.26081 17.9167 2.07649 17.9999 1.88431 17.9999C1.69212 17.9999 1.50781 17.9167 1.37191 17.7686C1.23601 17.6206 1.15967 17.4198 1.15967 17.2104V15.9473C1.15967 15.5115 1.48431 15.1578 1.88431 15.1578ZM18.1162 15.1578C18.5162 15.1578 18.8408 15.5115 18.8408 15.9473V17.2104C18.8408 17.4198 18.7645 17.6206 18.6286 17.7686C18.4927 17.9167 18.3084 17.9999 18.1162 17.9999C17.924 17.9999 17.7397 17.9167 17.6038 17.7686C17.4679 17.6206 17.3916 17.4198 17.3916 17.2104V15.9473C17.3916 15.5115 17.7162 15.1578 18.1162 15.1578ZM7.68141 4.73689C7.5661 4.73689 7.45551 4.78679 7.37397 4.87562C7.29243 4.96445 7.24662 5.08494 7.24662 5.21056V8.36842C7.24662 8.5778 7.17028 8.7786 7.03438 8.92665C6.89849 9.07471 6.71417 9.15788 6.52199 9.15788C6.3298 9.15788 6.14549 9.07471 6.00959 8.92665C5.87369 8.7786 5.79735 8.5778 5.79735 8.36842V5.21056C5.79735 4.07753 6.64141 3.15796 7.68141 3.15796H12.3191C13.3591 3.15796 14.2031 4.07753 14.2031 5.21056V8.36842C14.2031 8.5778 14.1268 8.7786 13.9909 8.92665C13.855 9.07471 13.6707 9.15788 13.4785 9.15788C13.2863 9.15788 13.102 9.07471 12.9661 8.92665C12.8302 8.7786 12.7539 8.5778 12.7539 8.36842V5.21056C12.7539 5.08494 12.7081 4.96445 12.6265 4.87562C12.545 4.78679 12.4344 4.73689 12.3191 4.73689H7.68141Z" fill="#A05916" fill-opacity="0.5" />
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M3.04348 9.55767C2.16232 9.55767 1.44928 10.1738 1.44928 10.9352V14.3162H18.5507V10.9352C18.5507 10.1738 17.8377 9.55767 16.9565 9.55767H3.04348ZM2.21031e-07 10.9352C-0.00015214 10.5898 0.0784657 10.2478 0.231361 9.92864C0.384256 9.60953 0.608431 9.31958 0.891075 9.07536C1.17372 8.83114 1.50929 8.63744 1.87861 8.50533C2.24793 8.37322 2.64376 8.30529 3.04348 8.30542H16.9565C17.3562 8.30529 17.7521 8.37322 18.1214 8.50533C18.4907 8.63744 18.8263 8.83114 19.1089 9.07536C19.3916 9.31958 19.6157 9.60953 19.7686 9.92864C19.9215 10.2478 20.0002 10.5898 20 10.9352V14.4415C20 15.0636 19.4157 15.5685 18.6957 15.5685H1.30435C0.958414 15.5685 0.626648 15.4497 0.382035 15.2384C0.137422 15.027 2.21031e-07 14.7404 2.21031e-07 14.4415V10.9352Z" fill="#A05916" />
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M4.7541 1.57893C3.95672 1.57893 3.31148 2.35576 3.31148 3.31575V8.36831C3.31148 8.57769 3.24239 8.7785 3.11941 8.92655C2.99644 9.0746 2.82965 9.15778 2.65574 9.15778C2.48183 9.15778 2.31504 9.0746 2.19206 8.92655C2.06909 8.7785 2 8.57769 2 8.36831V3.31575C1.99986 2.88027 2.07101 2.44903 2.20936 2.04667C2.34772 1.64431 2.55058 1.27872 2.80635 0.97079C3.06212 0.662861 3.36578 0.418632 3.69999 0.252059C4.03419 0.0854855 4.39239 -0.00016575 4.7541 2.40803e-07H15.2459C15.6076 -0.00016575 15.9658 0.0854855 16.3 0.252059C16.6342 0.418632 16.9379 0.662861 17.1937 0.97079C17.4494 1.27872 17.6523 1.64431 17.7906 2.04667C17.929 2.44903 18.0001 2.88027 18 3.31575V8.36831C18 8.57769 17.9309 8.7785 17.8079 8.92655C17.685 9.0746 17.5182 9.15778 17.3443 9.15778C17.1703 9.15778 17.0036 9.0746 16.8806 8.92655C16.7576 8.7785 16.6885 8.57769 16.6885 8.36831V3.31575C16.6885 2.35576 16.0433 1.57893 15.2459 1.57893H4.7541Z" fill="#A05916" />
                                                </svg>
                                                <span>Adults: 2</span>
                                             </li>
                                             <li>
                                                <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5902 4.65087C17.0424 4.83482 18.2681 4.97808 19.4951 4.67298C19.687 4.62525 19.8974 4.63454 20.0798 4.6988C20.2622 4.76307 20.4019 4.87705 20.468 5.01567C20.5341 5.15429 20.5212 5.30619 20.4322 5.43796C20.3432 5.56972 20.1854 5.67056 19.9935 5.71829C18.3637 6.12422 16.773 5.92258 15.3967 5.74925L15.3269 5.7404C13.8746 5.55646 12.6489 5.41319 11.4219 5.71829C11.23 5.76603 11.0197 5.75674 10.8372 5.69247C10.6548 5.6282 10.5152 5.51422 10.4491 5.3756C10.383 5.23699 10.3959 5.08508 10.4848 4.95332C10.5738 4.82155 10.7316 4.72071 10.9236 4.67298C12.5534 4.26705 14.144 4.46869 15.5204 4.64202L15.5902 4.65087ZM3.82513 0C4.2488 0 4.59166 0.247622 4.59166 0.552727C4.59166 1.44063 4.98106 2.06941 5.43902 2.78132L5.46596 2.82554C5.91658 3.52684 6.42842 4.32365 6.42842 5.41673C6.42842 5.56332 6.34779 5.70391 6.20426 5.80756C6.06074 5.91122 5.86608 5.96945 5.6631 5.96945C5.46013 5.96945 5.26547 5.91122 5.12195 5.80756C4.97842 5.70391 4.89779 5.56332 4.89779 5.41673C4.89779 4.57216 4.51207 3.96637 4.04921 3.2465C3.5888 2.52751 3.06104 1.70417 3.06104 0.552727C3.06104 0.247622 3.40267 0 3.82513 0ZM6.88638 0.884364C7.31006 0.884364 7.65292 1.13199 7.65292 1.43709C7.65292 2.13309 8.01048 2.60003 8.46844 3.17221L8.49905 3.21024C8.94845 3.77181 9.48968 4.44658 9.48968 5.41673C9.48968 5.56332 9.40905 5.70391 9.26552 5.80756C9.122 5.91122 8.92734 5.96945 8.72436 5.96945C8.52139 5.96945 8.32673 5.91122 8.1832 5.80756C8.03968 5.70391 7.95905 5.56332 7.95905 5.41673C7.95905 4.75345 7.60639 4.3042 7.1423 3.72494L7.13496 3.7161C6.67577 3.14126 6.12229 2.44969 6.12229 1.43709C6.12229 1.13199 6.46393 0.884364 6.88638 0.884364Z" fill="#A05916" fill-opacity="0.5" />
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M9.92944 3.57668C9.90114 3.33992 9.92319 3.09987 9.99415 2.87223C10.0651 2.6446 10.1834 2.43453 10.3412 2.25579C10.499 2.07705 10.6928 1.93368 10.9099 1.83507C11.127 1.73646 11.3625 1.68484 11.6009 1.68359H19.3177C20.3206 1.68359 21.1128 2.57993 20.9867 3.5779L19.3569 16.1744C19.2947 16.6539 19.0601 17.0943 18.6968 17.4134C18.3335 17.7325 17.8665 17.9084 17.383 17.9083H13.445C12.9514 17.9083 12.4754 17.7248 12.1095 17.3935C11.7436 17.0622 11.5139 16.6068 11.465 16.1156L11.3352 14.8005C11.3212 14.6986 11.328 14.5949 11.355 14.4957C11.382 14.3964 11.4288 14.3037 11.4925 14.2229C11.5562 14.1421 11.6355 14.0751 11.7257 14.0256C11.8159 13.9762 11.9151 13.9455 12.0175 13.9353C12.1198 13.9251 12.2232 13.9356 12.3213 13.9662C12.4195 13.9968 12.5105 14.0469 12.5889 14.1135C12.6673 14.1801 12.7315 14.2618 12.7776 14.3538C12.8237 14.4457 12.8508 14.546 12.8572 14.6486L12.9883 15.9638C13.0127 16.1989 13.2087 16.3776 13.445 16.3776H17.383C17.6144 16.3776 17.8091 16.2062 17.8385 15.9772L19.4671 3.38443C19.4688 3.36348 19.4661 3.3424 19.4592 3.32256C19.4522 3.30273 19.4411 3.28459 19.4267 3.26933C19.4133 3.25277 19.3966 3.23928 19.3776 3.22978C19.3586 3.22027 19.3377 3.21496 19.3165 3.21422H11.6021C11.5807 3.21495 11.5597 3.22024 11.5404 3.22974C11.5212 3.23924 11.5043 3.25274 11.4907 3.26933C11.4759 3.28439 11.4645 3.30247 11.4573 3.32234C11.4501 3.3422 11.4473 3.36338 11.4491 3.38443V3.38565L11.934 7.25141C11.9486 7.35208 11.943 7.45466 11.9175 7.55314C11.892 7.65162 11.8471 7.74403 11.7855 7.82496C11.7239 7.9059 11.6467 7.97374 11.5586 8.02451C11.4704 8.07529 11.373 8.10798 11.2721 8.12068C11.1712 8.13338 11.0687 8.12582 10.9707 8.09846C10.8728 8.07111 10.7812 8.02449 10.7015 7.96134C10.6217 7.89819 10.5554 7.81977 10.5063 7.73067C10.4572 7.64158 10.4263 7.54359 10.4156 7.44243L9.93067 3.57668H9.92944Z" fill="#A05916" fill-opacity="0.5" />
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M4.25698e-07 8.26548C4.25698e-07 7.33486 0.75307 6.58179 1.68369 6.58179H14.541C15.4704 6.58179 16.2247 7.33608 16.2247 8.26548V8.57161C16.2249 10.0352 15.8289 11.4716 15.0786 12.7282C14.3284 13.9849 13.2519 15.015 11.9634 15.7092C11.8701 15.7599 11.7882 15.8293 11.7231 15.9132C11.658 15.9971 11.611 16.0936 11.585 16.1966L11.4185 16.8639C11.2642 17.4762 10.7144 17.9084 10.0826 17.9084H6.13966C5.50782 17.9084 4.95801 17.4774 4.80495 16.8652L4.63719 16.1966C4.61147 16.0935 4.56454 15.9969 4.49939 15.913C4.43424 15.8291 4.35231 15.7597 4.25882 15.7092C2.9708 15.0147 1.8948 13.9845 1.14499 12.7278C0.395183 11.4711 -0.000473745 10.035 4.25698e-07 8.57161V8.26548ZM1.68369 8.11242C1.6431 8.11242 1.60417 8.12854 1.57546 8.15725C1.54676 8.18595 1.53063 8.22488 1.53063 8.26548V8.57161C1.53009 9.7592 1.85118 10.9248 2.45981 11.9445C3.06844 12.9643 3.94189 13.8002 4.9874 14.3635C5.26794 14.5151 5.51377 14.7235 5.70922 14.9755C5.90467 15.2274 6.04543 15.5174 6.12252 15.8268L6.25966 16.3778H9.96256L10.0997 15.8268C10.2564 15.1998 10.6691 14.6696 11.2348 14.3635C12.2807 13.8005 13.1546 12.9647 13.7636 11.9449C14.3727 10.9251 14.6942 9.75942 14.694 8.57161V8.26548C14.694 8.22488 14.6779 8.18595 14.6492 8.15725C14.6205 8.12854 14.5816 8.11242 14.541 8.11242H1.68369Z" fill="#A05916" />
                                                </svg>
                                                <span>Breakfast</span>
                                             </li>
                                             <li>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M11.7 17.25H6.3C4.12397 17.25 2.79586 16.8102 1.99283 16.0072C1.1898 15.2041 0.75 13.876 0.75 11.7V6.3C0.75 4.12397 1.1898 2.79586 1.99283 1.99283C2.79586 1.1898 4.12397 0.75 6.3 0.75H11.7C13.876 0.75 15.2041 1.1898 16.0072 1.99283C16.8102 2.79586 17.25 4.12397 17.25 6.3V11.7C17.25 13.876 16.8102 15.2041 16.0072 16.0072C15.2041 16.8102 13.876 17.25 11.7 17.25Z" stroke="#A05916" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                   <path d="M10.2 12.25H7.8C6.87397 12.25 6.42086 12.0602 6.18033 11.8197C5.9398 11.5791 5.75 11.126 5.75 10.2V7.8C5.75 6.87397 5.9398 6.42086 6.18033 6.18033C6.42086 5.9398 6.87397 5.75 7.8 5.75H10.2C11.126 5.75 11.5791 5.9398 11.8197 6.18033C12.0602 6.42086 12.25 6.87397 12.25 7.8V10.2C12.25 11.126 12.0602 11.5791 11.8197 11.8197C11.5791 12.0602 11.126 12.25 10.2 12.25Z" stroke="#A05916" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <span>Size: 20ft²</span>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="tp-room-btn-3">
                                          <a class="tp-btn-square" href="https://live.ipms247.com/booking/book-rooms-a1360degree">Book Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tp-room-wrap">
                                    <div class="tp-room-thumb mb-35">
                                       <img class="w-100" src="<?php echo e(asset('assets/web/images/c.jpg')); ?>" alt="room">
                                    </div>
                                    <div class="tp-room-content">
                                       <span class="tp-room-tag mb-15">Double room</span>
                                       <h4 class="tp-room-title mb-20"><a href="https://live.ipms247.com/booking/book-rooms-a1360degree">Deluxe Suite Room</a></h4>
                                       <div class="tp-room-meta mb-30">
                                          <ul>
                                             <li>
                                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M1.88431 15.1578C2.28431 15.1578 2.60894 15.5115 2.60894 15.9473V17.2104C2.60894 17.4198 2.5326 17.6206 2.3967 17.7686C2.26081 17.9167 2.07649 17.9999 1.88431 17.9999C1.69212 17.9999 1.50781 17.9167 1.37191 17.7686C1.23601 17.6206 1.15967 17.4198 1.15967 17.2104V15.9473C1.15967 15.5115 1.48431 15.1578 1.88431 15.1578ZM18.1162 15.1578C18.5162 15.1578 18.8408 15.5115 18.8408 15.9473V17.2104C18.8408 17.4198 18.7645 17.6206 18.6286 17.7686C18.4927 17.9167 18.3084 17.9999 18.1162 17.9999C17.924 17.9999 17.7397 17.9167 17.6038 17.7686C17.4679 17.6206 17.3916 17.4198 17.3916 17.2104V15.9473C17.3916 15.5115 17.7162 15.1578 18.1162 15.1578ZM7.68141 4.73689C7.5661 4.73689 7.45551 4.78679 7.37397 4.87562C7.29243 4.96445 7.24662 5.08494 7.24662 5.21056V8.36842C7.24662 8.5778 7.17028 8.7786 7.03438 8.92665C6.89849 9.07471 6.71417 9.15788 6.52199 9.15788C6.3298 9.15788 6.14549 9.07471 6.00959 8.92665C5.87369 8.7786 5.79735 8.5778 5.79735 8.36842V5.21056C5.79735 4.07753 6.64141 3.15796 7.68141 3.15796H12.3191C13.3591 3.15796 14.2031 4.07753 14.2031 5.21056V8.36842C14.2031 8.5778 14.1268 8.7786 13.9909 8.92665C13.855 9.07471 13.6707 9.15788 13.4785 9.15788C13.2863 9.15788 13.102 9.07471 12.9661 8.92665C12.8302 8.7786 12.7539 8.5778 12.7539 8.36842V5.21056C12.7539 5.08494 12.7081 4.96445 12.6265 4.87562C12.545 4.78679 12.4344 4.73689 12.3191 4.73689H7.68141Z" fill="#A05916" fill-opacity="0.5" />
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M3.04348 9.55767C2.16232 9.55767 1.44928 10.1738 1.44928 10.9352V14.3162H18.5507V10.9352C18.5507 10.1738 17.8377 9.55767 16.9565 9.55767H3.04348ZM2.21031e-07 10.9352C-0.00015214 10.5898 0.0784657 10.2478 0.231361 9.92864C0.384256 9.60953 0.608431 9.31958 0.891075 9.07536C1.17372 8.83114 1.50929 8.63744 1.87861 8.50533C2.24793 8.37322 2.64376 8.30529 3.04348 8.30542H16.9565C17.3562 8.30529 17.7521 8.37322 18.1214 8.50533C18.4907 8.63744 18.8263 8.83114 19.1089 9.07536C19.3916 9.31958 19.6157 9.60953 19.7686 9.92864C19.9215 10.2478 20.0002 10.5898 20 10.9352V14.4415C20 15.0636 19.4157 15.5685 18.6957 15.5685H1.30435C0.958414 15.5685 0.626648 15.4497 0.382035 15.2384C0.137422 15.027 2.21031e-07 14.7404 2.21031e-07 14.4415V10.9352Z" fill="#A05916" />
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M4.7541 1.57893C3.95672 1.57893 3.31148 2.35576 3.31148 3.31575V8.36831C3.31148 8.57769 3.24239 8.7785 3.11941 8.92655C2.99644 9.0746 2.82965 9.15778 2.65574 9.15778C2.48183 9.15778 2.31504 9.0746 2.19206 8.92655C2.06909 8.7785 2 8.57769 2 8.36831V3.31575C1.99986 2.88027 2.07101 2.44903 2.20936 2.04667C2.34772 1.64431 2.55058 1.27872 2.80635 0.97079C3.06212 0.662861 3.36578 0.418632 3.69999 0.252059C4.03419 0.0854855 4.39239 -0.00016575 4.7541 2.40803e-07H15.2459C15.6076 -0.00016575 15.9658 0.0854855 16.3 0.252059C16.6342 0.418632 16.9379 0.662861 17.1937 0.97079C17.4494 1.27872 17.6523 1.64431 17.7906 2.04667C17.929 2.44903 18.0001 2.88027 18 3.31575V8.36831C18 8.57769 17.9309 8.7785 17.8079 8.92655C17.685 9.0746 17.5182 9.15778 17.3443 9.15778C17.1703 9.15778 17.0036 9.0746 16.8806 8.92655C16.7576 8.7785 16.6885 8.57769 16.6885 8.36831V3.31575C16.6885 2.35576 16.0433 1.57893 15.2459 1.57893H4.7541Z" fill="#A05916" />
                                                </svg>
                                                <span>Adults: 2</span>
                                             </li>
                                             <li>
                                                <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5902 4.65087C17.0424 4.83482 18.2681 4.97808 19.4951 4.67298C19.687 4.62525 19.8974 4.63454 20.0798 4.6988C20.2622 4.76307 20.4019 4.87705 20.468 5.01567C20.5341 5.15429 20.5212 5.30619 20.4322 5.43796C20.3432 5.56972 20.1854 5.67056 19.9935 5.71829C18.3637 6.12422 16.773 5.92258 15.3967 5.74925L15.3269 5.7404C13.8746 5.55646 12.6489 5.41319 11.4219 5.71829C11.23 5.76603 11.0197 5.75674 10.8372 5.69247C10.6548 5.6282 10.5152 5.51422 10.4491 5.3756C10.383 5.23699 10.3959 5.08508 10.4848 4.95332C10.5738 4.82155 10.7316 4.72071 10.9236 4.67298C12.5534 4.26705 14.144 4.46869 15.5204 4.64202L15.5902 4.65087ZM3.82513 0C4.2488 0 4.59166 0.247622 4.59166 0.552727C4.59166 1.44063 4.98106 2.06941 5.43902 2.78132L5.46596 2.82554C5.91658 3.52684 6.42842 4.32365 6.42842 5.41673C6.42842 5.56332 6.34779 5.70391 6.20426 5.80756C6.06074 5.91122 5.86608 5.96945 5.6631 5.96945C5.46013 5.96945 5.26547 5.91122 5.12195 5.80756C4.97842 5.70391 4.89779 5.56332 4.89779 5.41673C4.89779 4.57216 4.51207 3.96637 4.04921 3.2465C3.5888 2.52751 3.06104 1.70417 3.06104 0.552727C3.06104 0.247622 3.40267 0 3.82513 0ZM6.88638 0.884364C7.31006 0.884364 7.65292 1.13199 7.65292 1.43709C7.65292 2.13309 8.01048 2.60003 8.46844 3.17221L8.49905 3.21024C8.94845 3.77181 9.48968 4.44658 9.48968 5.41673C9.48968 5.56332 9.40905 5.70391 9.26552 5.80756C9.122 5.91122 8.92734 5.96945 8.72436 5.96945C8.52139 5.96945 8.32673 5.91122 8.1832 5.80756C8.03968 5.70391 7.95905 5.56332 7.95905 5.41673C7.95905 4.75345 7.60639 4.3042 7.1423 3.72494L7.13496 3.7161C6.67577 3.14126 6.12229 2.44969 6.12229 1.43709C6.12229 1.13199 6.46393 0.884364 6.88638 0.884364Z" fill="#A05916" fill-opacity="0.5" />
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M9.92944 3.57668C9.90114 3.33992 9.92319 3.09987 9.99415 2.87223C10.0651 2.6446 10.1834 2.43453 10.3412 2.25579C10.499 2.07705 10.6928 1.93368 10.9099 1.83507C11.127 1.73646 11.3625 1.68484 11.6009 1.68359H19.3177C20.3206 1.68359 21.1128 2.57993 20.9867 3.5779L19.3569 16.1744C19.2947 16.6539 19.0601 17.0943 18.6968 17.4134C18.3335 17.7325 17.8665 17.9084 17.383 17.9083H13.445C12.9514 17.9083 12.4754 17.7248 12.1095 17.3935C11.7436 17.0622 11.5139 16.6068 11.465 16.1156L11.3352 14.8005C11.3212 14.6986 11.328 14.5949 11.355 14.4957C11.382 14.3964 11.4288 14.3037 11.4925 14.2229C11.5562 14.1421 11.6355 14.0751 11.7257 14.0256C11.8159 13.9762 11.9151 13.9455 12.0175 13.9353C12.1198 13.9251 12.2232 13.9356 12.3213 13.9662C12.4195 13.9968 12.5105 14.0469 12.5889 14.1135C12.6673 14.1801 12.7315 14.2618 12.7776 14.3538C12.8237 14.4457 12.8508 14.546 12.8572 14.6486L12.9883 15.9638C13.0127 16.1989 13.2087 16.3776 13.445 16.3776H17.383C17.6144 16.3776 17.8091 16.2062 17.8385 15.9772L19.4671 3.38443C19.4688 3.36348 19.4661 3.3424 19.4592 3.32256C19.4522 3.30273 19.4411 3.28459 19.4267 3.26933C19.4133 3.25277 19.3966 3.23928 19.3776 3.22978C19.3586 3.22027 19.3377 3.21496 19.3165 3.21422H11.6021C11.5807 3.21495 11.5597 3.22024 11.5404 3.22974C11.5212 3.23924 11.5043 3.25274 11.4907 3.26933C11.4759 3.28439 11.4645 3.30247 11.4573 3.32234C11.4501 3.3422 11.4473 3.36338 11.4491 3.38443V3.38565L11.934 7.25141C11.9486 7.35208 11.943 7.45466 11.9175 7.55314C11.892 7.65162 11.8471 7.74403 11.7855 7.82496C11.7239 7.9059 11.6467 7.97374 11.5586 8.02451C11.4704 8.07529 11.373 8.10798 11.2721 8.12068C11.1712 8.13338 11.0687 8.12582 10.9707 8.09846C10.8728 8.07111 10.7812 8.02449 10.7015 7.96134C10.6217 7.89819 10.5554 7.81977 10.5063 7.73067C10.4572 7.64158 10.4263 7.54359 10.4156 7.44243L9.93067 3.57668H9.92944Z" fill="#A05916" fill-opacity="0.5" />
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M4.25698e-07 8.26548C4.25698e-07 7.33486 0.75307 6.58179 1.68369 6.58179H14.541C15.4704 6.58179 16.2247 7.33608 16.2247 8.26548V8.57161C16.2249 10.0352 15.8289 11.4716 15.0786 12.7282C14.3284 13.9849 13.2519 15.015 11.9634 15.7092C11.8701 15.7599 11.7882 15.8293 11.7231 15.9132C11.658 15.9971 11.611 16.0936 11.585 16.1966L11.4185 16.8639C11.2642 17.4762 10.7144 17.9084 10.0826 17.9084H6.13966C5.50782 17.9084 4.95801 17.4774 4.80495 16.8652L4.63719 16.1966C4.61147 16.0935 4.56454 15.9969 4.49939 15.913C4.43424 15.8291 4.35231 15.7597 4.25882 15.7092C2.9708 15.0147 1.8948 13.9845 1.14499 12.7278C0.395183 11.4711 -0.000473745 10.035 4.25698e-07 8.57161V8.26548ZM1.68369 8.11242C1.6431 8.11242 1.60417 8.12854 1.57546 8.15725C1.54676 8.18595 1.53063 8.22488 1.53063 8.26548V8.57161C1.53009 9.7592 1.85118 10.9248 2.45981 11.9445C3.06844 12.9643 3.94189 13.8002 4.9874 14.3635C5.26794 14.5151 5.51377 14.7235 5.70922 14.9755C5.90467 15.2274 6.04543 15.5174 6.12252 15.8268L6.25966 16.3778H9.96256L10.0997 15.8268C10.2564 15.1998 10.6691 14.6696 11.2348 14.3635C12.2807 13.8005 13.1546 12.9647 13.7636 11.9449C14.3727 10.9251 14.6942 9.75942 14.694 8.57161V8.26548C14.694 8.22488 14.6779 8.18595 14.6492 8.15725C14.6205 8.12854 14.5816 8.11242 14.541 8.11242H1.68369Z" fill="#A05916" />
                                                </svg>
                                                <span>Breakfast</span>
                                             </li>
                                             <li>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M11.7 17.25H6.3C4.12397 17.25 2.79586 16.8102 1.99283 16.0072C1.1898 15.2041 0.75 13.876 0.75 11.7V6.3C0.75 4.12397 1.1898 2.79586 1.99283 1.99283C2.79586 1.1898 4.12397 0.75 6.3 0.75H11.7C13.876 0.75 15.2041 1.1898 16.0072 1.99283C16.8102 2.79586 17.25 4.12397 17.25 6.3V11.7C17.25 13.876 16.8102 15.2041 16.0072 16.0072C15.2041 16.8102 13.876 17.25 11.7 17.25Z" stroke="#A05916" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                   <path d="M10.2 12.25H7.8C6.87397 12.25 6.42086 12.0602 6.18033 11.8197C5.9398 11.5791 5.75 11.126 5.75 10.2V7.8C5.75 6.87397 5.9398 6.42086 6.18033 6.18033C6.42086 5.9398 6.87397 5.75 7.8 5.75H10.2C11.126 5.75 11.5791 5.9398 11.8197 6.18033C12.0602 6.42086 12.25 6.87397 12.25 7.8V10.2C12.25 11.126 12.0602 11.5791 11.8197 11.8197C11.5791 12.0602 11.126 12.25 10.2 12.25Z" stroke="#A05916" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <span>Size: 20ft²</span>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="tp-room-btn-3">
                                          <a class="tp-btn-square" href="https://live.ipms247.com/booking/book-rooms-a1360degree">Book Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- tp-room-area-end -->
		 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layout.default', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/nni24/public_html/hotelai360/resources/views/web/hotel-details.blade.php ENDPATH**/ ?>