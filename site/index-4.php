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
            <form id="contact-form" method="POST" action="contact.php">
              <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
              <fieldset>
                <div>
                  <div class="coll-1">
                    <div class="txt-form">Nome*</div>
                    <label class="name">
                      <input type="text" name="nome">
                      <br>
                      <span class="error">*Não é um nome válido.</span> <span class="empty">*Este campo é obrigatório.</span> </label>
                  </div>
                  <div class="coll-2">
                    <div class="txt-form">E-mail*</div>
                    <label class="email">
                      <input type="email" name="email">
                      <br>
                      <span class="error">*Não é um email válido.</span> <span class="empty">*Este campo é obrigatório.</span> </label>
                  </div>
                  <div class="coll-3">
                    <div class="txt-form">Celular</div>
                    <label class="phone notRequired">
                      <input type="tel" name="celular">
                      <br>
                      <span class="error">*Não é um número de celular válido.</span> <span class="empty">*Este campo é obrigatório.</span> </label>
                  </div>
                </div>
                
                <div class="div-message">
                  <div class="txt-form">Message*</div>
                  <label class="message">
                    <input name="mensagem"></input>
                    <br>
                    <span class="error">*Essa mensagem é muito pequena.</span> <span class="empty">*Este campo é obrigatório.</span>
                  </label>
                </div>
                <div class="buttons-wrapper"><button type="submit" class="link">Enviar</button><a class="link" data-type="reset">Limpar campos</a> </div>
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