<?php include "navbar.php" ?>

<!-- <?php

include 'config.php';

$ip_address = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];


$_duplicate_ip = mysqli_query($conn, "SELECT * FROM `visitors` WHERE user_agent= '$user_agent'");



if (mysqli_num_rows($_duplicate_ip) > 0) {
  echo "<script>location.href = 'index.php'</script>";
} else {
  $insert_query = "INSERT INTO `visitors`(`ip_address`, `user_agent`) VALUES ('$ip_address','$user_agent')";
  mysqli_query($conn,  $insert_query);
  echo "<script>location.href = 'index.php'</script>";
}


?> -->


   <!-- ======================================== HOME SECTION ======================================== -->
   <section id="homeSection">
      <div class="owl-carousel">
         <div class="slider-box slider-box1">
            <div class="overlay">
               <div class="container">
                  <div class="row">
                     <div class="col">
                        <div class="txt-box">
                           <div class="txt-area">
                              <p>WELCOME TO OUR AGENCY</p>
                              <h1>Top Rated Mobile App Development Company</h1>
                              <a href="#" class="btn layer-btn">DISCOVER MORE</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider-box slider-box2">
            <div class="overlay">
               <div class="container">
                  <div class="row">
                     <div class="col">
                        <div class="txt-box" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                           <div class="txt-area">
                              <p>WE CREATE IDEAS</p>
                              <h1>BUILD STUNNING WEBSITE WITH US</h1>
                              <a href="#" class="btn layer-btn">DISCOVER MORE</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>



   <!-- ======================================== FEATURE SECTION ======================================== -->
   <section id="featureSection" >
      <div class="container" >
         <div class="row" >
            <div class="col-lg-7">
               <div class="img-box">
                  <img src="img/featured-image-1.jpg" class="img01 wow slideInLeft" data-wow-duration="1.5s" alt="">
                  <img src="img/featured-image-2.jpg" class="img02 wow slideInLeft" data-wow-duration="2s" alt="">
               </div>
            </div>
            <div class="col-lg-5">
               <div class="txt-box">
                  <div class="sec-header">
                     <h2>Mobile App Development Company<span>.</span></h2>
                     <p>We are a UK/US based, Mobile Apps and Web development team. In the past ten years, we worked with clients from countries like the United Kingdom, United Arab Emirates, Saudi Arabia, China, Japan, Canada, and the USA and had developed apps and games for the education, engineering, healthcare and the entertainment industry. Experience with the variety of platforms and industries enables us to suggest fresh design decisions that help products stand out.</p>
                  </div>
                  <div class="part2">
                     <ul>
                        <li><i class="fal fa-check"></i> 10+
                           Years Experience.</li>
                        <li><i class="fal fa-check"></i> 10+
                           Talented Squad.</li>
                        <li><i class="fal fa-check"></i> 100+
                           Apps Developed</li>
                           <li><i class="fal fa-check"></i> 100%
                              Projects Delivered</li>
                              <li><i class="fal fa-check"></i> 10+
                                 Countries Served</li>
                                 <li><i class="fal fa-check"></i> 100%
                                    Client Satisfaction</li>
                     </ul>
                    

                     <div class="since">
                        <span>SINCE <br>2020</span>
                     </div>
                     
                  </div>
                  <h3 class="mb-4">Let's Start a New Project Together</h3>
                  <a href="#" class="btn layer-btn">DISCOVER MORE</a>
               </div>
            </div>
         </div>
      </div>
   </section>



   <!-- ======================================== SERVICE SECTION ======================================== -->
   <section id="serviceSection" >
      <div class="container">
         <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
               <div class="sec-header">
                  <h2>WE SHAPE THE PERFECT SOLUTIONS<span>.</span></h2>
                  <p>We are committed to providing our customers with exceptional service while offering our employees the best training.</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="service-box wow slideInRight" data-wow-duration="1.5s">
                  <div class="txt-area">
                     <h3>01</h3>
                     <h4>IT  <br>Security</h4>
                  </div>
                  <div class="img-box">
                     <img src="img/icon/uiux.png" alt="" class="img01">
                     <img src="img/icon/uiux02.png" alt="" class="img02">
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="service-box wow slideInRight" data-wow-duration="1.5s">
                  <div class="txt-area">
                     <h3>02</h3>
                     <h4>APP <br>DEVELOPMENT</h4>
                  </div>
                  <div class="img-box">
                     <img src="img/icon/app-development.png" alt="" class="img01">
                     <img src="img/icon/app-development02.png" alt="" class="img02">
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="service-box wow slideInRight" data-wow-duration="1.5s">
                  <div class="txt-area">
                     <h3>03</h3>
                     <h4>Hardware and   <br>Software</h4>
                  </div>
                  <div class="img-box">
                     <img src="img/icon/content-writing.png" alt="" class="img01">
                     <img src="img/icon/content-writing02.png" alt="" class="img02">
                  </div>
               </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
               <div class="service-box wow slideInRight" data-wow-duration="1.5s">
                  <div class="txt-area">
                     <h3>04</h3>
                     <h4>Remote Security  <br>Service</h4>
                  </div>
                  <div class="img-box">
                     <img src="img/icon/graphic-design.png" alt="" class="img01">
                     <img src="img/icon/graphic-design02.png" alt="" class="img02">
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="service-box wow slideInRight" data-wow-duration="1.5s">
                  <div class="txt-area">
                     <h3>05</h3>
                     <h4>WEBSITE <br>DEVELOPMENT</h4>
                  </div>
                  <div class="img-box">
                     <img src="img/icon/web-development.png" alt="" class="img01">
                     <img src="img/icon/web-development02.png" alt="" class="img02">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>




   <!-- ======================================== PORTFOLIO SECTION ======================================== -->
   <section id="portfolioSection">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="sec-header">
                  <h2>WORK SHOWCASE<span>.</span></h2>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="indicator float-lg-right">
                  <span class="mixer active" data-filter="all">ALL</span>
                  <span class="mixer" data-filter=".web">ANDRIOD</span>
                  <span class="mixer" data-filter=".branding">IOS</span>
                  <span class="mixer" data-filter=".graphic">WEB</span>
                  <span class="mixer" data-filter=".photography">SOFTWARE</span>
               </div>
            </div>
         </div>
         <div id="portfolio">
            <div class="row">
               <div class="col-md-6 col-lg-4 mix web">
                  <div class="portfolio-box">
                     <div class="img-box">
                        <a href="#portfolioPreview01" class="popup-with-zoom-anim">
                           <img src="img/app-img1.jpg" class="img-fluid" alt="">
                        </a>
                        <div id="portfolioPreview01" class="zoom-anim-dialog mfp-hide portfolio-preview">
                           <div class="row">
                              <div class="col-md-6 mb-5 mb-lg-0">
                                 <div class="img-box">
                                    <img src="img/app-img1.jpg" class="img-fluid" alt="">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="description">
                                    <h4>Supa Q  IPTV</h4>
                                    <p>TV platforms have gained immense popularity in recent years, allowing users to stream content directly over the internet without requiring traditional cable or satellite TV services. If you have created an app that provides an OTT TV platform, it can be a game-changer in the entertainment industry.</p>
                                    <ul>
                                       <li><i class="fal fa-file-alt"></i> Project : <span>App</span></li>
                                       <li><i class="fad fa-user-tie"></i> Client : <span>KhadiGhar</span></li>
                                       <li><i class="fal fa-code"></i> Langages : <span>Java,Andriod</span></li>
                                       <li class="mb-0"><i class="fal fa-external-link"></i> Preview : <a href="#" target="_blank">www.khadighar.com</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="hover-txt">
                        <span class="category">APP</span>
                        <p>Supa Q  IPTV</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 mix branding photography">
                  <div class="portfolio-box">
                     <div class="img-box">
                        <a href="#portfolioPreview02" class="popup-with-zoom-anim">
                           <img src="img/app-img2.jpg" class="img-fluid" alt="">
                        </a>
                        <div id="portfolioPreview02" class="zoom-anim-dialog mfp-hide portfolio-preview">
                           <div class="row">
                              <div class="col-md-6 mb-5 mb-lg-0">
                                 <div class="img-box">
                                    <img src="img/app-img2.jpg" class="img-fluid" alt="">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="description">
                                    <h4>Supa Legacy IPTV</h4>
                                    <p>TV platforms have gained immense popularity in recent years, allowing users to stream content directly over the internet without requiring traditional cable or satellite TV services. If you have created an app that provides an OTT TV platform, it can be a game-changer in the entertainment industry.</p>
                                    <ul>
                                       <li><i class="fal fa-file-alt"></i> Project : <span>Website</span></li>
                                       <li><i class="fad fa-user-tie"></i> Client : <span>KhadiGhar</span></li>
                                       <li><i class="fal fa-code"></i> Langages : <span>HTML, CSS, Javascript</span></li>
                                       <li class="mb-0"><i class="fal fa-external-link"></i> Preview : <a href="#" target="_blank">www.khadighar.com</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="hover-txt">
                        <span class="category">APP</span>
                        <p>Supa Legacy IPTV</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 mix web graphic">
                  <div class="portfolio-box">
                     <div class="img-box">
                        <a href="#portfolioPreview03" class="popup-with-zoom-anim">
                           <img src="img/app-img3.jpg" class="img-fluid" alt="">
                        </a>
                        <div id="portfolioPreview03" class="zoom-anim-dialog mfp-hide portfolio-preview">
                           <div class="row">
                              <div class="col-md-6 mb-5 mb-lg-0">
                                 <div class="img-box">
                                    <img src="img/app-img3.jpg" class="img-fluid" alt="">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="description">
                                    <h4>Supa Legacy IPTV</h4>
                                    <p>TV platforms have gained immense popularity in recent years, allowing users to stream content directly over the internet without requiring traditional cable or satellite TV services. If you have created an app that provides an OTT TV platform, it can be a game-changer in the entertainment industry.</p>
                                    <ul>
                                       <li><i class="fal fa-file-alt"></i> Project : <span>Website</span></li>
                                       <li><i class="fad fa-user-tie"></i> Client : <span>KhadiGhar</span></li>
                                       <li><i class="fal fa-code"></i> Langages : <span>HTML, CSS, Javascript</span></li>
                                       <li class="mb-0"><i class="fal fa-external-link"></i> Preview : <a href="#" target="_blank">www.khadighar.com</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="hover-txt">
                        <span class="category">APP</span>
                        <p>Supa Legacy IPTV</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 mix photography graphic">
                  <div class="portfolio-box">
                     <div class="img-box">
                        <a href="#portfolioPreview04" class="popup-with-zoom-anim">
                           <img src="img/app-img4.jpg" class="img-fluid" alt="">
                        </a>
                        <div id="portfolioPreview04" class="zoom-anim-dialog mfp-hide portfolio-preview">
                           <div class="row">
                              <div class="col-md-6 mb-5 mb-lg-0">
                                 <div class="img-box">
                                    <img src="img/app-img4.jpg" class="img-fluid" alt="">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="description">
                                    <h4>Supa Lingo</h4>
                                    <p>A chat app is a software application that enables users to communicate with each other in real-time through text, voice, and/or video messages. Chat apps have become increasingly popular over the years due to their convenience and ease of use.</p>
                                    <ul>
                                       <li><i class="fal fa-file-alt"></i> Project : <span>Website</span></li>
                                       <li><i class="fad fa-user-tie"></i> Client : <span>KhadiGhar</span></li>
                                       <li><i class="fal fa-code"></i> Langages : <span>HTML, CSS, Javascript</span></li>
                                       <li class="mb-0"><i class="fal fa-external-link"></i> Preview : <a href="#" target="_blank">www.khadighar.com</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="hover-txt">
                        <span class="category">APP</span>
                        <p>SUPA LINGO</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 mix branding graphic web">
                  <div class="portfolio-box">
                     <div class="img-box">
                        <a href="#portfolioPreview05" class="popup-with-zoom-anim">
                           <img src="img/app-img5.jpg" class="img-fluid" alt="">
                        </a>
                        <div id="portfolioPreview05" class="zoom-anim-dialog mfp-hide portfolio-preview">
                           <div class="row">
                              <div class="col-md-6 mb-5 mb-lg-0">
                                 <div class="img-box">
                                    <img src="img/app-img5.jpg" class="img-fluid" alt="">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="description">
                                    <h4>Nazs Rasoi</h4>
                                    <p>A restaurant app is a software application that enables customers to search for, view information about, and order food and drinks from restaurants. Restaurant apps have become increasingly popular over the years due to their convenience and ease of use.</p>
                                    <ul>
                                       <li><i class="fal fa-file-alt"></i> Project : <span>Website</span></li>
                                       <li><i class="fad fa-user-tie"></i> Client : <span>KhadiGhar</span></li>
                                       <li><i class="fal fa-code"></i> Langages : <span>HTML, CSS, Javascript</span></li>
                                       <li class="mb-0"><i class="fal fa-external-link"></i> Preview : <a href="#" target="_blank">www.khadighar.com</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="hover-txt">
                        <span class="category">APP</span>
                        <p>Nazs Rasoi</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 mix web photography">
                  <div class="portfolio-box">
                     <div class="img-box">
                        <a href="#portfolioPreview06" class="popup-with-zoom-anim">
                           <img src="img/app-img6.jpg" class="img-fluid" alt="">
                        </a>
                        <div id="portfolioPreview06" class="zoom-anim-dialog mfp-hide portfolio-preview">
                           <div class="row">
                              <div class="col-md-6 mb-5 mb-lg-0">
                                 <div class="img-box">
                                    <img src="img/app-img6.jpg" class="img-fluid" alt="">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="description">
                                    <h4>Shop Runner</h4>
                                    <p>An e-commerce app is a software application that enables customers to purchase products and services online through their mobile devices. E-commerce apps have become increasingly popular over the years due to their convenience and ease of use.</p>
                                    <ul>
                                       <li><i class="fal fa-file-alt"></i> Project : <span>Website</span></li>
                                       <li><i class="fad fa-user-tie"></i> Client : <span>KhadiGhar</span></li>
                                       <li><i class="fal fa-code"></i> Langages : <span>HTML, CSS, Javascript</span></li>
                                       <li class="mb-0"><i class="fal fa-external-link"></i> Preview : <a href="#" target="_blank">www.khadighar.com</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="hover-txt">
                        <span class="category">APP</span>
                        <p>Shop Runner</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>


   <!-- ======================================== PRICING SECTION ======================================== -->
   <!-- <section id="pricingSection">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="sec-header text-center">
                  <h2>CHOOSE YOUR PLAN<span>.</span></h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4">
               <div class="pricing-box wow bounceInLeft" data-wow-duration="2s">
                  <h4>Basic Plan</h4>
                  <h3>$49</h3>
                  <ul>
                     <li>Graphic Design</li>
                     <li>Web Design</li>
                     <li>UI/UX</li>
                     <li>HTML/CSS</li>
                     <li>Seo Marketing</li>
                     <li>Business Analysis</li>
                  </ul>
                  <a href="#" class="btn font-btn"><i class="fal fa-chevron-right" aria-hidden="true"></i> <span>Discover More</span></a>
               </div>
            </div>
            <div class="col-md-4">
               <div class="pricing-box wow bounceInLeft" data-wow-duration="2s">
                  <h4>Premium Plan</h4>
                  <h3>$149</h3>
                  <ul>
                     <li>Graphic Design</li>
                     <li>Web Design</li>
                     <li>UI/UX</li>
                     <li>HTML/CSS</li>
                     <li>Seo Marketing</li>
                     <li>Business Analysis</li>
                  </ul>
                  <a href="#" class="btn font-btn"><i class="fal fa-chevron-right" aria-hidden="true"></i> <span>Discover More</span></a>
               </div>
            </div>
            <div class="col-md-4">
               <div class="pricing-box wow bounceInLeft" data-wow-duration="2s">
                  <h4>Standard Plan</h4>
                  <h3>$99</h3>
                  <ul>
                     <li>Graphic Design</li>
                     <li>Web Design</li>
                     <li>UI/UX</li>
                     <li>HTML/CSS</li>
                     <li>Seo Marketing</li>
                     <li>Business Analysis</li>
                  </ul>
                  <a href="#" class="btn font-btn"><i class="fal fa-chevron-right" aria-hidden="true"></i> <span>Discover More</span></a>
               </div>
            </div>
         </div>
      </div>
   </section> -->










   <!-- ======================================== WORK SECTION ======================================== -->
   <section id="workSection" class="text-center">
      <div class="overlay">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <div class="work-box">
                     <div class="txt-box">
                        <h2><span class="counter">9875</span></h2>
                        <p>Satisfied Clients</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="work-box box-2">
                     <div class="txt-box">
                        <h2><span class="counter">9875</span></h2>
                        <p>Project Completed</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 mt-4 pt-1 mt-md-0 pt-md-0">
                  <div class="work-box box-3">
                     <div class="txt-box">
                        <h2><span class="counter">9875</span></h2>
                        <p>Project Launched</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="work-box box-4">
                     <div class="txt-box">
                        <h2><span class="counter">9875</span></h2>
                        <p>Years Completed</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>




   <!-- ======================================== TESTIMONIAL SECTION ======================================== -->
   <section id="testimonialSection">
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="sec-header">
                  <h2>CUSTOMER FEEDBACKS<span>.</span></h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col">
               <div class="owl-carousel">
                  <div class="testimonial-box">
                     <div class="top-part">
                        <div class="client">
                           <img src="img/girls1.jpeg" alt="">
                        </div>
                        <div class="txt">
                           <p>Kyan Jenny</p>
                           <span>MANAGING DIRECTOR</span>
                        </div>
                        <div class="quote">
                           <img src="img/icon/quote.png" class="img01" alt="">
                           <img src="img/icon/quote02.png" class="img02" alt="">
                        </div>
                     </div>
                     <p class="feedback">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. </p>
                  </div>
                  <div class="testimonial-box">
                     <div class="top-part">
                        <div class="client">
                           <img src="img/samantha.jpg" alt="">
                        </div>
                        <div class="txt">
                           <p>Jenny Lopez</p>
                           <span>MANAGING DIRECTOR</span>
                        </div>
                        <div class="quote">
                           <img src="img/icon/quote.png" class="img01" alt="">
                           <img src="img/icon/quote02.png" class="img02" alt="">
                        </div>
                     </div>
                     <p class="feedback">I Have a great exprience work with these team. they are amzaing</p>
                  </div>
                  <div class="testimonial-box">
                     <div class="top-part">
                        <div class="client">
                           <img src="img/download.jpeg" alt="">
                        </div>
                        <div class="txt">
                           <p>SAMANTHA AKKINENI</p>
                           <span>MANAGING DIRECTOR</span>
                        </div>
                        <div class="quote">
                           <img src="img/icon/quote.png" class="img01" alt="">
                           <img src="img/icon/quote02.png" class="img02" alt="">
                        </div>
                     </div>
                     <p class="feedback">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, doloribus, voluptas. Facere, hic quae cupiditate velit a, autem sunt dolor.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>



   <!-- ======================================== CONTACT AREA 2 ======================================== -->
   <section id="contactArea">
      <div class="container">
         <div class="contact-box wow fadeInRightBi" data-wow-duration="1.5s">
            <div class="row">
               <div class="col-lg-9 mb-3 mb-lg-0">
                  <div class="sec-header">
                     <h2>LET'S GET YOUR PROJECT <br>STARTED<span>.</span></h2>
                  </div>
               </div>
               <div class="col-lg-3">
                  <a href="contact.php" class="btn layer-btn">CONTACT WITH US</a>
               </div>
            </div>
         </div>
      </div>
   </section>




   <?php include "footer.php" ?>