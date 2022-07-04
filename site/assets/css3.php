<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="utf-8">
  	<title>CSS3 Tricks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="description" content="">

 <!-- styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="css/prettify.css" rel="stylesheet">
    <link href="css/tm_docs.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <link href="css/ie.css" rel="stylesheet">
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">


<!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top" id="advanced">
      <span class="trigger"><strong></strong><em></em></span>
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="scaffolding.html">Bootstrap</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="home">
                <a href="../index.html"><img src="img/tm/tm_home.png" alt=""></a>
              </li>
              <li class="divider-vertical"></li>
              <li >
                <a href="scaffolding.html">Scaffolding</a>
              </li>
              <li class="">
                <a href="base-css.html">Base CSS</a>
              </li>
              <li class="">
                <a href="components.html">Components</a>
              </li>
              <li class="">
                <a href="javascript.html">Javascript</a>
              </li>
              <li class="divider-vertical"></li>
              <li class="dropdown active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">TM add-ons <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="../404.html">Pages</a>
                    <ul>  
                      <li><a href="under_construction.html">Under Construction</a></li>
                      <li><a href="intro.html">Intro Page</a></li>
                      <li class=""><a href="../404.html">404 page</a></li>
                    </ul>
                  </li>
                  <li><a href="portfolio.html">Portfolio</a></li>
                  <li><a href="slider.html">Slider</a></li>
                  <li><a href="social_media.html">Social and Media<br> Sharing</a></li>
                  <li class="active"><a href="css3.html">CSS3 Tricks</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
	<h1>CSS3 Tricks</h1>
	<p class="lead">Please note that this will only work properly in modern browsers that support the CSS3 properties in use.</p>
  </div>
</header>

  <div class="container">

<!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
	      <li><a href="#hovers"><i class="icon-chevron-right"></i> Animated Hovers</a></li>
	      <li><a href="#btn"><i class="icon-chevron-right"></i> Animated Buttons</a></li>
	      <li><a href="#styles"><i class="icon-chevron-right"></i> CSS3 styles</a></li>
        </ul>
      </div>
      <div class="span9">

<!--==============================section=================================-->
	<section id="hovers">
				<div class="page-header">
				    <h1>Animated Hovers</h1>
				</div>
<!--  Hovers Begin -->
		<div class="row-fluid tm_views">
			<div class="span6">
				<div class="tm_view tm_view_first">
					 <img src="img/stock_images/700x430_1.jpg" alt="" />
					 <div class="tm_mask">
						<h2>First Hover</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
						<a href="" class="btn">Button</a>
					 </div>
				</div>
			</div>
			<div class="span6">
				<div class="tm_view tm_view_second">
					 <img src="img/stock_images/700x430_2.jpg" alt="" />
					<div class="tm_mask"></div>
					<div class="tm_content">
						<h2>Second Hover</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
						<a href="" class="btn">Button</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row-fluid tm_views">
			<div class="span6">
				<div class="tm_view tm_view_third">
					 <img src="img/stock_images/700x430_3.jpg" alt="" />
					<div class="tm_mask"></div>
					<div class="tm_content">
						<h2>Third Hover</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
						<a href="" class="btn">Button</a>
					</div>
				</div>
			</div>
			<div class="span6">
				<div class="tm_view tm_view_fourth">
					 <img src="img/stock_images/700x430_4.jpg" alt="" />
					 <div class="tm_mask">
						<h2>Fourth Hover</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
						<a href="" class="btn">Button</a>
					 </div>
				</div>
			</div>
		</div>
		<div class="row-fluid tm_views">
			<div class="span6">
				<div class="tm_view tm_view_fifth">
					 <img src="img/stock_images/700x430_5.jpg" alt="" />
					<div class="tm_mask">
						<div class="tm_content">
						<h2>Fifth Hover</h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
							<a href="" class="btn">Button</a>
						</div>
					</div>
				</div>
			</div>
			<div class="span6">
				<div class="tm_view tm_view_sixth">
					 <img src="img/stock_images/700x430_6.jpg" alt="" />
					<div class="tm_mask"></div>
					<div class="tm_content">
						<h2>Sixth Hover</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
						<a href="" class="btn">Button</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row-fluid tm_views">
			<div class="span6">
				<div class="tm_view tm_view_seventh">
					 <img src="img/stock_images/700x430_7.jpg" alt="" />
					 <div class="tm_mask">
						<h2>Seventh Hover</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
						<a href="" class="btn">Button</a>
					 </div>
				</div>
			</div>
			<div class="span6">
				<div class="tm_view tm_view_eighth">
					 <img src="img/stock_images/700x430_8.jpg" alt="" />
					<div class="tm_mask">
						<div class="tm_content">
						<h2>Eighth Hover</h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
							<a href="" class="btn">Button</a>
						</div>
					</div>
				</div>
			</div>
		</div>
						<p>The structure of markup is very simple and intuitive. Create a container that will have our image and all the other infomation.</p>
<pre class="prettyprint linenums">&lt;div class="tm_view tm_view_first"&gt;
	&lt;img src="YourImage.jpg" alt="" /&gt;
	&lt;div class="tm_mask"&gt;
		&lt;h2&gt; Heading &lt;/h2&gt;
		&lt;p&gt; Text &lt;/p&gt;
		&lt;a href="" class="btn"&gt;Button&lt;/a&gt;
	&lt;/div&gt;
&lt;/div&gt;</pre>
<p class="descr_pad">Add the special class tm_view_first to the element with the class tm_view for the first effect.<br>
<p>In the <strong>second hover</strong> we will add the special class tm_view-second, but we will leave the element with the class tm_mask empty and wrap the description in a div with the class content</p>
<pre class="prettyprint linenums">&lt;div class="tm_view tm_view_second"&gt;
	&lt;img src="YourImage.jpg" alt="" /&gt;
	&lt;div class="tm_mask"&gt;&lt;/div&gt;
	&lt;div class="tm_content"&gt;
		&lt;h2&gt; Heading &lt;/h2&gt;
		&lt;p&gt; Text &lt;/p&gt;
		&lt;a href="" class="btn"&gt;Button&lt;/a&gt;
	&lt;/div&gt;
&lt;/div&gt;</pre>
<p class="descr_pad">For other hover effects you can use the same HTML structure. You only need to change class <strong>tm_view_second</strong> to the following ones:<br>
<strong>tm_view_third</strong> - third effect<br>
<strong>tm_view_fourth</strong> - fourth effect<br>
<strong>tm_view_fifth</strong> - fifth effect<br>
<strong>tm_view_sixth</strong> - sixth effect<br>
<strong>tm_view_seventh</strong> - seventh effect<br>
<strong>tm_view_eight</strong> - eight effect<br></p>
<p>In <strong>ninth hover</strong>, we will use two tm_mask elements to slide them in from the bottom right and the top left:</p>
<pre class="prettyprint linenums">&lt;div class="tm_view tm_view_ninth"&gt;
	&lt;img src="YourImage.jpg" alt="" /&gt;
	&lt;div class="tm_mask tm_mask-1"&gt;&lt;/div&gt;
	&lt;div class="tm_mask tm_mask-2"&gt;&lt;/div&gt;
	&lt;div class="tm_content"&gt;
		&lt;h2&gt; Heading &lt;/h2&gt;
		&lt;p&gt; Text &lt;/p&gt;
		&lt;a href="" class="btn"&gt;Button&lt;/a&gt;
	&lt;/div&gt;
&lt;/div&gt;</pre>
<p>Define .tm_view and .tm_mask width and height which match image`s width and height in style.css file.</p>
<p>CSS3 has a really great potential for creating nice effects. Soon, we’ll hopefully be able to avoid the use of JavaScript for simple effects and rely 100% on CSS, in all browsers.</p>
</section>
<!--  Hovers End -->
<section id="btn">
<!--  Buttons Begin -->
		<div class="page-header">
		    <h1>Animated Buttons</h1>
			<p>Add necessary class to the <strong>&lt;a&gt; </strong>tag (&lt;a href="" class=""&gt; Button Text &lt;/a&gt;)</p>
		</div>
		<div class="row-fluid">
			<div class="span3">
				<div class="tm_buttons_pad"><a href="" class="btn tm_style_1 notClicked">Click me!</a><pre>class="btn tm_style_1"</pre></div>
				<div class="tm_buttons_pad"><a href="" class="btn btn-warning tm_style_1 notClicked">Click me!</a><pre>class="btn btn-warning tm_style_1"</pre></div>
				<div class="tm_buttons_pad"><a href="" class="btn btn-success tm_style_1 notClicked">Click me!</a><pre>class="btn btn-success tm_style_1"</pre></div>
				<div class="tm_buttons_pad"><a href="" class="btn btn-danger tm_style_1 notClicked">Click me!</a><pre>class="btn btn-danger tm_style_1"</pre></div>
				<div class="tm_buttons_pad"><a href="" class="btn btn-info tm_style_1 notClicked">Any button may be longer</a><pre>class="btn btn-info tm_style_1"</pre></div>
			</div>
			<div class="span3">
				<div class="tm_buttons_pad"><a href="" class="btn tm_style_2 notClicked">Click me!</a><pre>class="btn tm_style_2"</pre></div>
				<div class="tm_buttons_pad"><a href="" class="btn btn-warning tm_style_2 notClicked">Click me!</a><pre>class="btn btn-warning tm_style_2"</pre></div>
				<div class="tm_buttons_pad"><a href="" class="btn btn-success tm_style_2 notClicked">Any button may be longer</a><pre>class="btn btn-success tm_style_2"</pre></div>
				<div class="tm_buttons_pad"><a href="" class="btn btn-danger tm_style_2 notClicked">Click me!</a><pre>class="btn btn-danger tm_style_2"</pre></div>
				<div class="tm_buttons_pad"><a href="" class="btn btn-info tm_style_2 notClicked">Click me!</a><pre>class="btn btn-info tm_style_2"</pre></div>
			</div>
			<div class="span3">
				<div class="tm_buttons_pad2"><a href="" class="btn tm_style_3 notClicked">Click me!</a><pre>class="btn tm_style_3"</pre></div>
				<div class="tm_buttons_pad2"><a href="" class="btn btn-warning tm_style_3 notClicked">Click!</a><pre>class="btn btn-warning tm_style_3"</pre></div>
				<div class="tm_buttons_pad2"><a href="" class="btn btn-success tm_style_3 notClicked">Click!</a><pre>class="btn btn-success tm_style_3"</pre></div>
				<div class="tm_buttons_pad2"><a href="" class="btn btn-danger tm_style_3 notClicked">Click!</a><pre>class="btn btn-danger tm_style_3"</pre></div>
				<div class="tm_buttons_pad2"><a href="" class="btn btn-info tm_style_3 notClicked">Click!</a><pre>class="btn btn-info tm_style_3"</pre></div>
			</div>
			<div class="span3">
				<div class="tm_buttons_pad"><a href="" class="btn tm_style_4 notClicked">Click me!</a><pre>class="btn tm_style_4"</pre></div>
				<div class="tm_buttons_pad"><a href="" class="btn btn-warning tm_style_4 notClicked">Click me!</a><pre>class="btn btn-warning tm_style_4"</pre></div>
				<div class="tm_buttons_pad"><a href="" class="btn btn-success tm_style_4 notClicked">Click me!</a><pre>class="btn btn-success tm_style_4"</pre></div>
				<div class="tm_buttons_pad"><a href="" class="btn btn-danger tm_style_4 notClicked">Click me!</a><pre>class="btn btn-danger tm_style_4"</pre></div>
				<div class="tm_buttons_pad"><a href="" class="btn btn-info tm_style_4 notClicked">Click me!</a><pre>class="btn btn-info tm_style_4"</pre></div>
			</div>
			<div class="clear"></div>
		</div>
<!--  Buttons End -->
</section>
<section id="styles">
<!--  Images Styles Begin -->
		<div class="row-fluid">
			<div class="span7">
				<div class="page-header">
				    <h1>CSS3 Images Style</h1>
				</div>
						<p>When applying CSS3 inset box-shadow or border-radius directly to the image element, the browser doesn't render the CSS style perfectly. However, if the image is applied as background-image, you can add any style to it and have it rendered properly.</p>
						<p>To add such images to the page you need to copy the code and in the style.css file define background image and image dimensions.</p>	

				<div class="tm_pad-image"><span class="tm_image_round" title="Circle Image"></span></div>
				<div class="tm_pad-image"><span class="tm_image_card" title="Card Style"></span></div>
				<div class="tm_pad-image"><span class="tm_image_embossed" title="Embossed Style"></span></div>
				<div class="tm_pad-image"><span class="tm_image_soft-embossed" title="Soft Embossed Style"></span></div>
				<div class="tm_pad-image"><span class="tm_image_cut_out" title="Cutout Style"></span></div>
				<div class="tm_pad-image"><span class="tm_image_morphing_glowing" title="Morphing &amp; Glowing"></span></div>
				<div class="tm_pad-image"><span class="tm_image_glossy" title="Glossy Overlay"><span></span></span></div>
				<div class="tm_pad-image"><span class="tm_image_reflection" title="Reflection"><span></span></span></div>
				<div style="clear:both;"></div>
						<h6>Circle Image</h6>
<pre class="prettyprint linenums">&lt;span class="tm_image_round"&gt;&lt;/span&gt;</pre>
						<h6>Card Style</h6>
<pre class="prettyprint linenums">&lt;span class="tm_image_card"&gt;&lt;/span&gt;</pre>
						<h6>Embossed Style</h6>
<pre class="prettyprint linenums">&lt;span class="tm_image_embossed"&gt;&lt;/span&gt;</pre>
						<h6>Soft Embossed Style</h6>
<pre class="prettyprint linenums">&lt;span class="tm_image_soft-embossed"&gt;&lt;/span&gt;</pre>
						<h6>Cutout Style</h6>
<pre class="prettyprint linenums">&lt;span class="tm_image_cut_out"&gt;&lt;/span&gt;</pre>
						<h6>Morphing &amp; Glowing</h6>
<pre class="prettyprint linenums">&lt;span class="tm_image_morphing_glowing"&gt;&lt;/span&gt;</pre>
						<h6>Glossy Overlay</h6>
<pre class="prettyprint linenums">&lt;span class="tm_image_glossy"&gt;&lt;/span&gt;</pre>
						<h6>Reflection</h6>
<pre class="prettyprint linenums">&lt;span class="tm_image_reflection"&gt;&lt;/span&gt;</pre>
					<h6>CSS</h6>
<pre class="prettyprint linenums">.YourStyle{
background:url(YourImage.jpg) 0 0 no-repeat;
width:YourImageWidth px;
height:YourImageHeight px;
}</pre>		
				</div>	
<!--  Images Styles End -->
<!--  Shadows Begin -->
			<div class="span5">
				<div class="page-header">
				    <h1>Shadows on CSS3</h1>
				</div>
				<div class="tm_pad-shadow"><div class="tm_lifted"><div class="tm_text-shadow">Lifted Shadow</div></div></div>
<pre class="prettyprint linenums">&lt;div class="tm_lifted"&gt;
 &lt;div class="tm_text-shadow"&gt; Text &lt;/div&gt;
&lt;/div&gt;</pre>
				<div class="tm_pad-shadow"><div class="tm_perspective"><div class="tm_text-shadow">Perspective Shadow</div></div></div>
<pre class="prettyprint linenums">&lt;div class="tm_perspective"&gt;
 &lt;div class="tm_text-shadow"&gt; Text &lt;/div&gt;
&lt;/div&gt;</pre>
				<div class="tm_pad-shadow"><div class="tm_raised"><div class="tm_text-shadow">Raised Block</div></div></div>
<pre class="prettyprint linenums">&lt;div class="tm_raised"&gt;
 &lt;div class="tm_text-shadow"&gt; Text &lt;/div&gt;
&lt;/div&gt;</pre>
				<div class="tm_pad-shadow"><div class="tm_curved-vt-2"><div class="tm_text-shadow">Shadow with two vertical curves</div></div></div>
<pre class="prettyprint linenums">&lt;div class="tm_curved-vt-2"&gt;
 &lt;div class="tm_text-shadow"&gt; Text &lt;/div&gt;
&lt;/div&gt;</pre>				
				<div class="tm_pad-shadow"><div class="tm_curved-hz-2"><div class="tm_text-shadow">Shadow with two horizontal curves</div></div></div>
<pre class="prettyprint linenums">&lt;div class="tm_curved-hz-2"&gt;
 &lt;div class="tm_text-shadow"&gt; Text &lt;/div&gt;
&lt;/div&gt;</pre>
		</div>
<!--  Shadows End -->
	</div>
</section>

</div>

</div>

  </div>
   <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Designed and built with all the love in the world by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
        <p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <p><a href="http://glyphicons.com">Glyphicons Free</a> licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <ul class="footer-links">
          <li><a href="http://blog.getbootstrap.com">Blog</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/twitter/bootstrap/issues?state=open">Issues</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/twitter/bootstrap/wiki">Roadmap and changelog</a></li>
        </ul>
      </div>
    </footer>



    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/prettify.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/bootstrap-affix.js"></script>
    <script src="js/application.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script>
    	$(function(){
    		$(".notClicked").click(function(event) {event.preventDefault();});
        	$('.tm_pad-image>span').tooltip();
    	});
    </script>
</body>
</html>