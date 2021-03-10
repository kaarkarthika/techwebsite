<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=" " />
    <meta name="description" content=" " />
    <meta name="author" content=" " />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>TalentTECH | Contact Us</title>
    <?php include('css.php');?>
   <!--  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
     <script src='https://www.google.com/recaptcha/api.js'></script>
  <style>
    #jarallax-container-0 div{
	background-position: 50% 40%!important;
}
span.error,.success-msg {
     
 
	color:red;
}
  </style>
  </head>
  <body>
    <div class="wrapper">
    <div id="pre-loader">
            <img src="images/pre-loader/loader-01.svg" alt="">
         </div>
      <!--header-->
      <?php include('header.php');?>
      <!--header -->
      <!--=================================
        banner -->
     <!-- <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/contact.jpg);"> -->
      <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/contact-banner.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-title-name">
                <h1>Contact Us</h1>
              <!--  <p>Let's work together</p> -->
              </div>
              <ul class="page-breadcrumb" style="visibility:hidden;">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Contact Us</span> </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
        banner -->
      <!--=================================
        contact-->
      <section class="page-section-ptb">
        <div class="container">
          <div class="ro w justify-content-center mt-0">
            <div class="col-md-10">
              <div class="section-title text-center">
                <h1>Let's work together</h1>
                <!-- <h3 class="title">Contact Us</h3> -->
                <p class="mb-50">'It would be great to hear from you! If you got any questions, please do not hesitate to send us a message. We are looking forward to hearing from you! We reply within <span class="tooltip-content theme-color" data-original-title="Mon-Fri 10am–6pm (GMT +1)" data-toggle="tooltip" data-placement="top"> 24 hours!'</span></p>
              </div>
            </div>
            <div class="col-lg-12">
              <div id="formmessage">Success/Error Message Goes Here</div>
              <div id="pre-loader-client" class="text-center" style="display:none;">
              <img src="images/pre-loader/loader-08.svg" alt="">
              </div>
              <form action="contact-form1.php" method="POST" class="contact_form row " id="contact_form" enctype="multipart/form-data">
              <!--<form id="contactform" role="form" method="post" action="php/contact-form.php">
             <form action="contact-form.php" method="POST" class="contact_form row" id="contactform" enctype="multipart/form-data">-->
                <div class="contact-form clearfix hidecontactblock">
                  <div class="row">
                    <div class="col-sm-6">
                      <input id="name" type="text" placeholder="First Name*" class="form-control"  name="name" tabindex="1" required/>
                      <span id="nameerror" class="error" style=" display: none;"> Name Cannot be blank .</span>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" placeholder="Last Name*" class="form-control" id="last_name" name="lastname" tabindex="2" required/>
                      <span id="lastnameerror" class="error" style=" display: none;"> Last Name Cannot be blank .</span>
                    </div>
                    <div class="col-sm-6">
                      <input type="email" placeholder="Email*" class="form-control" name="email" id="email" tabindex="3" required/>
                      <span id="emailerror" class="error" style=" display: none;"> Email Cannot be blank .</span>
                       <span id="emailerror1" class="error" style=" display: none;"> Enter Valid Email .</span>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" placeholder="Phone*" class="form-control" name="phone" id="phone" onkeypress="return isNumberKey(event)" maxlength="15" tabindex="4" required/>
                      <span id="phoneerror" class="error" style=" display: none;"> Phone Number Cannot be blank .</span>
                    </div>
                    <div class="col-sm-12">
                      <input type="text" placeholder="Company Name" class="form-control" id="company_name" name="companyname" tabindex="5" required/>
                      <span id="companynameerror" class="error" style=" display: none;"> Company Name Cannot be blank .</span>
                    </div>
                    <div class="col-sm-12 textarea">
                      <textarea class="input-message form-control" placeholder="How can we help?*" rows="7" name="message" id="message" tabindex="6" required/></textarea>
                      <span id="messageerror" class="error" style=" display: none;"> Message Cannot be blank .</span>
                    </div>
                  </div>
                  <!-- Google reCaptch-->
                  <!-- <div class="g-recaptcha section-field clearfix" data-sitekey="[Add your site key]"></div> -->
                    <!-- Google reCaptch-->
                    <div class="col-sm-6">
                   <div class="g-recaptcha"  data-sitekey="6Lf0U74UAAAAAL5WSwBaaqdpPMwj3X3ouYETU7gn"></div>
                 </div>
                     <div class="col-sm-6 success-msg"></div>
                  <div class="submit-button text-center">
                    <input type="hidden" name="action" value="sendEmail">
                    <button id="btnsubmit1" name="submit" type="button" tabindex="8" class="button black mt-20 text-capitalize "><span> Send message </span> <i class="fa fa-paper-plane"></i></button>
                  </div>
                </div>
              </form>
               <div class="text-center" id="showThanku-contact">
                    <h4  class=" ">Thanks for contacting us. Our backend team will process your query and get back to you in 24hrs.</h4>
                   </div>
             <!-- <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="images/pre-loader/loader-08.svg" alt=""></div>-->
            </div>
          </div>
 
        </div>
      </section>
      <!--=================================
        contact -->
      <!--footer -->
      <?php include('footer.php'); ?>
      <!--footer -->
    </div>
    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>
    <!--=================================
      jquery -->
    <?php include('scripts.php'); ?>
  </body>
   <script>
      $(document).ready(function(){
       $('#showThanku-contact').hide();
        $('.showThanku').click(function(){
          $('.hidecontactblock').hide();          
          $('#showThanku-contact').show();
       });         
     });
    </script> 
<script type="text/javascript">
  function isEmail(email) {
 var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
 return regex.test(email);
}
$("#btnsubmit1").click(function(){
 var name=$("#name").val();
 var lastname=$("#last_name").val();
 var email=$("#email").val();
 var phone=$("#phone").val();
 var company=$("#company_name").val();
 var message=$("#message").val();
 if(email!=""){
   if (!isEmail(email)) {
       $("#emailerror1").show();
       $("#emailerror").hide();
       $("#nameerror").hide();
       $("#lastnameerror").hide();
       $("#emailerror").hide();
       $("#phoneerror").hide();
       $("#companynameerror").hide();
       $("#messageerror").hide();
       return false;
       }
     }
 if(name!="" && lastname!="" && email!="" && phone!="" && company!="" && message !=""){
  //alert("Stset");
   $("#nameerror").hide();
   $("#lastnameerror").hide();
   $("#emailerror").hide();
   $("#phoneerror").hide();
   $("#companynameerror").hide();
   $("#messageerror").hide();
   $("#emailerror1").hide();
    $("#pre-loader-client").show();
   $('.hidecontactblock').css('opacity','0.3');
    //var form = $( "#client_form" ).valid();
    //alert(form);
    //form.validate();
       var formData = new FormData($("#contact_form")[0]);
           $.ajax({
                type: 'POST',
                url: 'contact-form1.php',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
               success: function(data) {
                  //alert(data);

                   $("#pre-loader-client").hide();
				           $('.hidecontactblock').css('opacity','');
                   $("#pre-loader").hide();
                   if(data =='success') {
                    $('#showThanku-contact').show();
                    $('.hidecontactblock').hide();
                     grecaptcha.reset();
                     return false;
                  }else {
                     $('.success-msg').html(data);
                  return false;
                  }
               }
           });
    }else if(name ==""){
     $("#nameerror").show();
     $("#lastnameerror").hide();
     $("#emailerror").hide();
     $("#phoneerror").hide();
     $("#companynameerror").hide();
     $("#messageerror").hide();
     $("#emailerror1").hide();
     $("#name").focus();
     return false;
    }else if(lastname==""){
     $("#lastnameerror").show();
     $("#nameerror").hide();
     $("#emailerror").hide();
     $("#phoneerror").hide();
     $("#companynameerror").hide();
     $("#messageerror").hide();
     $("#emailerror1").hide();
      $("#last_name").focus();
       return false;
    }
    else if(email==""){
     $("#emailerror").show();
     $("#nameerror").hide();
     $("#lastnameerror").hide();
     $("#phoneerror").hide();
     $("#companynameerror").hide();
     $("#messageerror").hide();
     $("#emailerror1").hide();
     $("#email").focus();
      return false;
    }else if(phone==""){
      $("#phoneerror").show();
      $("#lastnameerror").hide();
      $("#nameerror").hide();
      $("#emailerror").hide();
      $("#companynameerror").hide();
      $("#messageerror").hide();
      $("#emailerror1").hide();
      $("#phone").focus();
       return false;
    }else if(company==""){
      $("#companynameerror").show();
      $("#lastnameerror").hide();
      $("#nameerror").hide();
      $("#emailerror").hide();
      $("#phoneerror").hide();
      $("#messageerror").hide();
      $("#emailerror1").hide();
      $("#company_name").focus();
       return false;
    }else if(message==""){
      $("#messageerror").show();
      $("#lastnameerror").hide();
      $("#nameerror").hide();
      $("#emailerror").hide();
      $("#phoneerror").hide();
      $("#companynameerror").hide();
      $("#emailerror1").hide();
      $("#message").focus();
       return false;
    }
  });
$('#name').click(function(){
     $("#lastnameerror").hide();
     $("#emailerror").hide();
     $("#phoneerror").hide();
     $("#companynameerror").hide();
     $("#messageerror").hide();
     $("#emailerror1").hide();
      });
$('#last_name').click(function(){
    $("#nameerror").hide();
     $("#emailerror").hide();
     $("#phoneerror").hide();
     $("#companynameerror").hide();
     $("#messageerror").hide();
     $("#emailerror1").hide();
      });
$('#email').click(function(){
     $("#nameerror").hide();
     $("#lastnameerror").hide();
     $("#phoneerror").hide();
     $("#companynameerror").hide();
     $("#messageerror").hide();
     $("#emailerror1").hide();
      });
$('#phone').click(function(){
      $("#lastnameerror").hide();
      $("#nameerror").hide();
      $("#emailerror").hide();
      $("#companynameerror").hide();
      $("#messageerror").hide();
      $("#emailerror1").hide();
      });
$('#company_name').click(function(){
      $("#lastnameerror").hide();
      $("#nameerror").hide();
      $("#emailerror").hide();
      $("#phoneerror").hide();
      $("#messageerror").hide();
      $("#emailerror1").hide();
      });
$('#message').click(function(){
      $("#lastnameerror").hide();
      $("#nameerror").hide();
      $("#emailerror").hide();
      $("#phoneerror").hide();
      $("#companynameerror").hide();
      $("#emailerror1").hide();
      });
function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
$("#name").keypress(function (e)
{
  
   /*if (!/[a-z]/i.test(String.fromCharCode(e.which))) {
        return false;
    }*/
  if(e.which === 8){
     return true;
  }else if ((!/^[a-zA-Z\. ]*$/.test(String.fromCharCode(e.which )))) {
        return false;
    }
});
</script>
</html>
