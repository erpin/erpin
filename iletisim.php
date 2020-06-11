<?php 
include 'header.php';
 ?>


   <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner5.jpg)">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="banner-heading">
                  <h1 class="banner-title">İletişim</h1>
                  <ol class="breadcrumb">
                     <li>Home</li>
                     <li><a href="#">Contact us</a></li>
                  </ol>
               </div>
            </div>
            <!-- Col end -->
         </div>
         <!-- Row end -->
      </div>
      <!-- Container end -->
   </div>
   <!-- Banner area end -->


   <section id="main-container" class="main-container">
      <div class="container">
         <div class="row">
            <div class="col text-center">
               <div class="section-heading">
                  <h2>
                     <small>Contact us</small>
                     Our Contact <span>Details</span>
                  </h2>
                  <span class="animate-border tw-mt-20 tw-mb-40 ml-auto mr-auto"></span>
               </div>
               <!-- End Heading -->
            </div>
            <!-- End Col -->
         </div>
         <!-- End Title Row -->
         <div class="row">
            <div class="col-md-4">
               <div class="tw-contact-box">
                  <div class="contact-heading">
                     <img src="images/icon/place1.png" alt="" class="img-fluid">
                     <h3>New York</h3>
                  </div>
                  <!-- End Content Heading -->
                  <div class="contact-info-box-content">
                     <i class="fa fa-map-marker"></i>
                     <p>Level 14, 388 George Street New York 200</p>
                     <i class="fa fa-phone"></i>
                     <p>009-215-5596</p>
                     <i class="fa fa-envelope"></i>
                     <p>mail@example.com</p>
                  </div>
                  <!-- End content info box -->
               </div>
               <!-- End Contact Box -->
            </div>
            <!-- End Col -->
            <div class="col-md-4">
               <div class="tw-contact-box">
                  <div class="contact-heading">
                     <img src="images/icon/place2.png" alt="" class="img-fluid">
                     <h3>Berlin</h3>
                  </div>
                  <!-- End Content Heading -->
                  <div class="contact-info-box-content">
                     <i class="fa fa-map-marker"></i>
                     <p>Level 14, 388 George Street New York 200</p>
                     <i class="fa fa-phone"></i>
                     <p>009-215-5596</p>
                     <i class="fa fa-envelope"></i>
                     <p>mail@example.com</p>
                  </div>
                  <!-- End content info box -->
               </div>
               <!-- End Contact Box -->
            </div>
            <!-- End Col -->
            <div class="col-md-4">
               <div class="tw-contact-box">
                  <div class="contact-heading">
                     <img src="images/icon/place3.png" alt="" class="img-fluid">
                     <h3>China</h3>
                  </div>
                  <!-- End Content Heading -->
                  <div class="contact-info-box-content">
                     <i class="fa fa-map-marker"></i>
                     <p>Level 14, 388 George Street New York 200</p>
                     <i class="fa fa-phone"></i>
                     <p>009-215-5596</p>
                     <i class="fa fa-envelope"></i>
                     <p>mail@example.com</p>
                  </div>
                  <!-- End content info box -->
               </div>
               <!-- End Contact Box -->
            </div>
            <!-- End Col -->
         </div>
         <!-- End Row -->
         <div class="row">
            <div class="col">
               <div id="map" class="map"></div>
            </div>
         </div>
         <!-- End Row -->
      </div>
      <!-- Container End -->
   </section>
   <!-- Contact End -->

   <section id="tw-contact-us" class="tw-contact-us bg-offwhite">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="section-heading text-center">
                  <h2>
                     <small>leave a message</small>
                     Give a <span>Message</span>
                  </h2>
                  <span class="animate-border border-ash ml-auto mr-auto tw-mt-20 tw-mb-40"></span>
               </div>
            </div>
            <!-- Col End -->
         </div>
         <!-- Row End -->
         <div class="contact-us-form">
            <form id="contact-form" class="contact-form" action="contact-form.php" method="POST">
               <div class="error-container"></div>
               <div class="row">
                  <div class="col-lg-6">
                     <div class="form-group">
                        <input class="form-control form-name" name="name" id="name" placeholder="Name" type="text" required="">
                     </div>
                  </div>
                  <!-- Col end -->
                  <div class="col-lg-6">
                     <div class="form-group">
                        <input class="form-control form-phone" name="phone" id="phone" placeholder="Phone" type="phone">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-group">
                        <input class="form-control form-email" name="email" id="email" placeholder="Email" type="email" required="">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-group">
                        <input class="form-control form-subject" placeholder="Subject" name="subject" id="subject" type="text">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <textarea class="form-control form-message required-field" id="message" placeholder="Comments" rows="5"></textarea>
                     </div>
                  </div>
                  <!-- Col 12 end -->
               </div>
               <!-- Form row end -->
               <div class="text-center">
                  <button class="btn btn-primary tw-mt-30" type="submit">Contact US</button>
               </div>
            </form>
            <!-- Form end -->
         </div>
         <!-- Contact us form end -->
      </div>
      <!-- Container End -->
   </section>
   <!-- Contact End -->


   <section id="tw-contact-us-testimonial" class="tw-contact-us-testimonial">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-8 text-center">
               <div class="testimonial-slider owl-carousel">
                  <div class="testimonial-content">
                     <div class="testimonial-meta">
                        <h4>
                           Jason Stattham
                           <small>CEO Microhost</small>
                        </h4>
                        <i class="icon icon-quote2"></i>
                     </div>
                     <!-- Testimonial Meta end -->
                     <div class="testimonial-text">
                        <p>Start working with an company that can do provide every thing at you need to generate awareness,
                           drive traffic, connect with</p>
                     </div>
                     <!-- TEstimonial text end -->
                  </div>
                  <!-- Testimonial Content End -->
                  <div class="testimonial-content">
                     <div class="testimonial-meta">
                        <h4>
                           Jason Stattham
                           <small>CEO Microhost</small>
                        </h4>
                        <i class="icon icon-quote2"></i>
                     </div>
                     <!-- Testimonial Meta end -->
                     <div class="testimonial-text">
                        <p>Start working with an company that can do provide every thing at you need to generate awareness,
                           drive traffic, connect with</p>
                     </div>
                     <!-- TEstimonial text end -->
                  </div>
                  <!-- Testimonial Content End -->
                  <div class="testimonial-content">
                     <div class="testimonial-meta">
                        <h4>
                           Jason Stattham
                           <small>CEO Microhost</small>
                        </h4>
                        <i class="icon icon-quote2"></i>
                     </div>
                     <!-- Testimonial Meta end -->
                     <div class="testimonial-text">
                        <p>Start working with an company that can do provide every thing at you need to generate awareness,
                           drive traffic, connect with</p>
                     </div>
                     <!-- TEstimonial text end -->
                  </div>
                  <!-- Testimonial Content End -->
               </div>
               <!-- Carousel End -->
            </div>
            <!-- COl End -->
         </div>
         <!-- Row End -->
      </div>
      <!-- Container End -->
   </section>
   <!-- TEstimonial end -->

   <?php 
include 'footer.php';
    ?>