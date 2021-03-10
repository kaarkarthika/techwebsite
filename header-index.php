


<header id="header" class="header transparent fullWidth">
 

<!--=================================
 mega menu -->

<div class="menu">
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container">
      <div class="row">
       <div class="col-lg-12 col-md-12">
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
              <a href="index.php" class="logo-plain hidden-sm-down"><img id="logo_img" src="images/logo.png" alt="logo"> </a>
              <a href="index.php" class="logo-white hidden-sm-down" ><img id="logo_img"src="images/logo-white.png" alt="logo"> </a> 
			  <a href="index.php" class="logo-plain hidden-md-up"><img id="logo_img" src="images/logo-white.png" alt="logo"> </a>
			  <a href="index.php" class="logo-white hidden-md-up" ><img id="logo_img"src="images/logo-white.png" alt="logo"> </a></li>
        </ul>
        <!-- menu links -->
        <div class="menu-bar">
          <ul class="menu-links">
         <li class="hvr-underline-from-center active" ><a href="index.php" >Home </a>
                <!-- drop down full width -->
                 
            </li>
           <li class="hvr-underline-from-center"><a href="about-us.php"> About Us <!-- <i class="fa fa-angle-down fa-indicator"></i>--></a>
                 <!-- drop down multilevel   
                <ul class="drop-down-multilevel">
                    <li><a href="about-us.php">About Us </a></li>
                    <li><a href="our-promise.php">Our Promise</a></li>
                    <!-- <li><a href="work-for-us.php">Work for Us </a></li> 
                </ul> -->
            </li>
			 <li class="hvr-underline-from-center"><a href="clients.php">Clients </a>              
            </li>
			<li class="hvr-underline-from-center"><a href="services.php">Services</a>
            </li>
			<li class="hvr-underline-from-center"><a href="contact-us.php">Contact Us</a>
            </li> 
        </ul>
        
        </div>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>













<!-- jquery -->
<script src="js/jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(){
	 $('a.logo-plain').hide();
	$(window).scroll(function(){
   var height = $(this).scrollTop();  
   if (height < 100){	  
 	 $('a.logo-plain').hide();
	 $('a.logo-white').show();
   }
   else{
	   $('a.logo-white').hide();
	   $('a.logo-plain').show();
	   
   }
});
});

</script>