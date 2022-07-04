<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Campo da lei</title>
    <?php 
      include("menu.php")
    ?>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="@vinimvdz">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" media="screen" href="css/carousel.css">
    <link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
		<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.1.0.js"></script>
    
    <script type="text/javascript" src="js/touchTouch.jquery.js"></script>
<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
     <script type="text/javascript" language="javascript">
        $(window).load(function(){
        //  Responsive layout, resizing the items
        $('.list-rooms').carouFredSel({
        auto: false,
        responsive: true,
        width: '100%',    
        scroll: 1,
        prev: '#prev2',
        next: '#next2',
        pagination: false,
        mousewheel: true,
        items: {
        height: 'auto',
        width: '270',
        visible: {
        min: 1,
        max: 4
        }
        },
        swipe: {
          onMouse: true,
          onTouch: true
          }
        });
        $('.magnifier').touchTouch();
        });
      </script>

  	<!--[if lt IE 8]>
    		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
   	<![endif]-->
    <!--[if lt IE 9]>
      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<!--==============================header=================================-->
<!-- <header>
    <div class="container">
         <div class="navbar navbar_ clearfix">
            <div class="navbar-inner">      
                  <div class="clearfix">
                  	<h1 class="brand"><a href="index.html"><img src="img/logo.png" alt=""></a><span>Bixin associados</span></h1> 
                  	<div class="nav-collapse nav-collapse_ collapse">
                    <a href="#"></a>
                  	    <ul class="nav sf-menu clearfix">
                  	      <li><a href="index.html">Página inicial<span>...bem vindo</span></a></li>
                  	      <li><a href="index-2.html">Agendar consulta <span>...prices &amp;  offers</span></a></li>
                  	      <li><a href="index-3.html">Sobre <span>...who we are</span></a></li>
                  	      <li><a href="index-4.html">Suporte ao site <span>...stay in touch</span></a></li>
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
          <article class="span12">
            <h2>our amazing rooms</h2>
            <div class="block-room">
              <figure class="img-polaroid fright"><a href="img/image-blank.png" class="magnifier"><img src="img/page-1-img.jpg" alt=""></a></figure>
              <div class="extra-wrap">
                <img src="img/key.png" alt="">
                <div>
                  <h3><a href="#">penthouse 1</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequatvel illum dolore eu feugiat nulla facilisis.</p>
                </div>
              </div>
            </div>

            <div class="block-room">
              <figure class="img-polaroid fleft"><a href="img/image-blank.png" class="magnifier"><img src="img/page-1-img-1.jpg" alt=""></a></figure>
              <div class="extra-wrap">
                <img src="img/key.png" alt="">
                <div>
                  <h3><a href="#">penthouse 2</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequatvel illum dolore eu feugiat nulla facilisis.</p>
                </div>
              </div>
            </div>
          </article> 
        </div>
        <div class="row row-tabs">
          <article class="span12">
            <h2>other rooms</h2>
            <a href="#" class="link">The deluxe queen size rooms</a>
                <div class="list_carousel responsive"> 
                  <ul class="list-rooms" id="foo1">
                    <li>
                      <div class="other-room">
                        <figure class="img-polaroid"><img src="img/page-1-img-2.jpg" alt=""><span>207</span></figure>
                        <a href="#">Lorem ipsum dolor sit amet</a>
                      </div>
                    </li>
                    <li>
                      <div class="other-room">
                        <figure class="img-polaroid"><img src="img/page-1-img-3.jpg" alt=""><span>208</span></figure>
                        <a href="#">Lorem ipsum dolor sit amet</a>
                      </div>
                    </li>
                    <li>
                      <div class="other-room">
                        <figure class="img-polaroid"><img src="img/page-1-img-4.jpg" alt=""><span>209</span></figure>
                        <a href="#">Lorem ipsum dolor sit amet</a>
                      </div>
                    </li>
                    <li>
                      <div class="other-room">
                        <figure class="img-polaroid"><img src="img/page-1-img-5.jpg" alt=""><span>210</span></figure>
                        <a href="#">Lorem ipsum dolor sit amet</a>
                      </div>
                    </li>
                    <li>
                      <div class="other-room">
                        <figure class="img-polaroid"><img src="img/page-1-img-2.jpg" alt=""><span>211</span></figure>
                        <a href="#">Lorem ipsum dolor sit amet</a>
                      </div>
                    </li>
                    <li>
                      <div class="other-room">
                        <figure class="img-polaroid"><img src="img/page-1-img-3.jpg" alt=""><span>212</span></figure>
                        <a href="#">Lorem ipsum dolor sit amet</a>
                      </div>
                    </li>
                    <li>
                      <div class="other-room">
                        <figure class="img-polaroid"><img src="img/page-1-img-4.jpg" alt=""><span>213</span></figure>
                        <a href="#">Lorem ipsum dolor sit amet</a>
                      </div>
                    </li>
                    <li>
                      <div class="other-room">
                        <figure class="img-polaroid"><img src="img/page-1-img-5.jpg" alt=""><span>214</span></figure>
                        <a href="#">Lorem ipsum dolor sit amet</a>
                      </div>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                  <div class="div-control">
                    <a href="#" id="prev2"></a>
                    <a href="#" id="next2"></a>
                  </div>
                </div>

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