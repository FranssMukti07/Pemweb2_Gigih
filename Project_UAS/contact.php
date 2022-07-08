<?php include './layout/head.php'; ?>
<?php include './layout/navbar.php'; ?>
<div class="back_re">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="title">
               <h2>Contact Us</h2>
            </div>
         </div>
      </div>
   </div>
</div>
<!--  contact -->
<div class="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <form id="request" class="main_form">
               <div class="row">
                  <div class="col-md-12 ">
                     <input class="contactus" placeholder="Name" type="type" name="Name">
                  </div>
                  <div class="col-md-12">
                     <input class="contactus" placeholder="Email" type="type" name="Email">
                  </div>
                  <div class="col-md-12">
                     <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
                  </div>
                  <div class="col-md-12">
                     <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                  </div>
                  <div class="col-md-12">
                     <button class="send_btn">Send</button>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-md-6">
            <div class="map_main">
               <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2395.346162677992!2d106.83306531394307!3d-6.353358673166683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sen!2sid!4v1656597931085!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end contact -->

<!--  footer -->
<?php include './layout/foot.php'; ?>