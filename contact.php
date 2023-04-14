<?php include "navbar.php" ?>
<style>
   #errormessage
        {
            color:red;
        }

        #successmessage
        {
            color:green;
        }

        select{
         padding:1rem;
         border:none;
         background: #F4F5F9;
         border-radius:5px;
         width:100%;
         color:grey;
        }
        select:focus{
         border:1px solid #FB383B;
        }
        
        
</style>

   <!-- ======================================== PAGE HEADER ======================================== -->
   <section id="pageHeader">
      <div class="overlay">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="txt text-center">
                     <div class="sec-header">
                        <h2>CONTACT US<span>.</span></h2>
                        <p><a href="index.php">HOME</a> <span>/</span> CONTACT US</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>





   <!-- ======================================== CONTACT SECTION ======================================== -->
   <section id="contactSection">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
               <div class="part1">
                  <div class="sec-header">
                     <h2>WE ARE ALWAYS HERE TO HELP YOU<span>.</span></h2>
                     <p>There are many variatns of passages the majority have suffered alteration in some foor randomised words believable.</p>
                  </div>
                  <div class="icon-box wow fadeInLeftBig" data-wow-duration="1.5s">
                     <div class="icon">
                        <i class="fal fa-map-marker-alt"></i>
                     </div>
                     <div class="txt">
                        <p>VISIT US</p>
                        <span>The Quarter, Chester, CH1 3NH</span>
                     </div>
                  </div>
                  <div class="icon-box wow fadeInLeftBig" data-wow-duration="1.5s">
                     <div class="icon">
                        <i class="fal fa-envelope"></i>
                     </div>
                     <div class="txt">
                        <p>EMAIL ADDRESS</p>
                        <span>support@superappsolutions.com</span>
                     </div>
                  </div>
                  <div class="icon-box mb-0 wow fadeInLeftBig" data-wow-duration="1.5s">
                     <div class="icon">
                        <i class="fal fa-phone-alt"></i>
                     </div>
                     <div class="txt">
                        <p>CALL NOW</p>
                        <span>14794283</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
            <div id="errormessage"></div>
            <div id="successmessage"></div>
               <form   id="addform" class="wow fadeInUpBig" data-wow-duration="1.5s">
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                     </div>
                     <div class="form-group col-md-6">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email Address">
                     </div>
                     <div class="form-group col-md-6">
                        <input type="number" id="phone" name="phone" class="form-control" placeholder="Phone Number">
                     </div>
                     <div class="form-group col-md-6">
                        <select class="form-select" id="cat" name="cat" aria-label="Default select example" >
                        <option class="text-dark" value="app">App</option>
                        <option value="website">Website</option>
                        <option value="it_security">IT Security</option>
                        <option value="hardware_software">Hardware and Software </option>
                        <option value="remote_security">Remote Security Service</option>
                      
                       
                        </select>
                     </div>
                     <div class="form-group col-12">
                        <textarea class="form-control" id="message" name="message" rows="8" cols="80" placeholder="Write Message"></textarea>
                     </div>
                  </div>
                  <button type="submit" id="savebutton" class="btn layer-btn">SEND MESSAGE</button>
               </form>
            </div>
         </div>
      </div>
   </section>



   <section id="googleMap">
      <div class="container">
         <div class="row">
            <div class="col">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2390.2448273173304!2d-2.887219423942819!3d53.195525285998485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487add4568ee5411%3A0x3aa459cd5113d733!2zQ2hlc3RlciBDSDEgM05ILCDgpq_gp4HgppXgp43gpqTgprDgpr7gppzgp43gpq8!5e0!3m2!1sbn!2sbd!4v1681487539345!5m2!1sbn!2sbd" width="100%" height="370" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </div>
      </div>
   </section>


   


<?php include "footer.php" ?>

<script src="js/jquery-3.6.4.js"></script>
    <script>
        $(document).ready(function(){
         $("#savebutton").on("click", function(e)
            {
                e.preventDefault();
                var name = $("#name").val();
                var email = $("#email").val();
                var phone = $("#phone").val();
                var cat = $("#cat").val();
                var message = $("#message").val();

                if(name == "" || email == "" || message == "" || cat == "" || phone == "")
                {
                    $("#errormessage").html("Please Full Fill The Field").slideDown();
                    $("#successmessage").html("Successfully Saved").slideUp();
                } else{
                    $.ajax({
                    type: "POST",
                    url: "sendmail.php",
                    data: {name:name, email:email, phone:phone, cat:cat, message:message},
                    success: function (data) {
                        if(data == 1)
                        {
                            $("#addform").trigger("reset");
                            $("#successmessage").html("Successfully Send Mail").slideDown();
                            $("#errormessage").html("Not Send Mail").slideUp();
                            
                        } else{
                            $("#errormessage").html("Not Send Mail").slideDown();
                            $("#successmessage").html("Successfully Send Mail").slideUp();
                        }
                        
                    }
                });
                }

            

            });
        });

        </script>