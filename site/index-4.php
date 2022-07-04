<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Suporte</title>
    <?php 
      include("menu.php")
    ?>
    
</head>

<body>
<!--==============================header=================================-->
<!-- <header>
    <div class="container">
         <div class="navbar navbar_ clearfix">
            <div class="navbar-inner">      
                  <div class="clearfix">
                  	<h1 class="brand"><a href="index.html"><img src="img/logo.png" alt=""></a><span>hotel luxury</span></h1> 
                  	<div class="nav-collapse nav-collapse_ collapse">
                    <a href="#"></a>
                  	    <ul class="nav sf-menu clearfix">
                  	      <li><a href="index.html">Home <span>...welcome page</span></a></li>
                  	      <li class="sub-menu"><a href="index-1.html">Rooms <span>...packages &amp; deals</span></a>
                  	         <ul>
                  	          <li><a href="#">Corporate</a></li>
                  	          <li class="sub-menu-1"><a href="#">Family</a>
                                <ul>
                                  <li><a href="#">Gallery</a></li>
                                  <li><a href="#">Activities</a></li>
                                  <li><a href="#">Offers</a></li>
                                  <li><a href="#">Bonus</a></li>
                                </ul>
                              </li>
                  	          <li><a href="#">Honeymoon</a></li>
                  	          <li><a href="#">Faqs</a></li>
                  	         </ul>
                  	      </li>
                  	      <li><a href="index-2.html">Booking <span>...prices &amp;  offers</span></a></li>
                  	      <li><a href="index-3.html">About <span>...who we are</span></a></li>
                  	      <li class="active"><a href="index-4.html">Mail <span>...stay in touch</span></a></li>
                  	    </ul>
                  	</div>
                  </div>
             </div>  
         </div>
    </div>
</header> -->
<div id="content">
  <div class="container">     
        <div class="row">
          <h2>Encontrou algum erro? nos reporte</h2>
          <article class="span8">
            <h2>feedback</h2>
            <form id="contact-form">
              <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
              <fieldset>
                <div>
                  <div class="coll-1">
                    <div class="txt-form">Name*</div>
                    <label class="name">
                      <input type="text">
                      <br>
                      <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
                  </div>
                  <div class="coll-2">
                    <div class="txt-form">E-mail*</div>
                    <label class="email">
                      <input type="email">
                      <br>
                      <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
                  </div>
                  <div class="coll-3">
                    <div class="txt-form">Phone</div>
                    <label class="phone notRequired">
                      <input type="tel">
                      <br>
                      <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
                  </div>
                </div>
                
                <div class="div-message">
                  <div class="txt-form">Message*</div>
                  <label class="message">
                    <textarea></textarea>
                    <br>
                    <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span>
                  </label>
                </div>
                <div class="buttons-wrapper"><a class="link" data-type="submit">Submit</a><a class="link" data-type="reset">Clear</a> </div>
              </fieldset>
            </form>

          </article>
        </div>
  </div>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>
<?php
  include("footer.php")
?>
</body>
</html>