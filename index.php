<!doctype html>
<html class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="opoloo GbR" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta http-equiv="Content-Type"	content="text/html; charset=UTF-8" />
<link href='http://fonts.googleapis.com/css?family=Gentium+Basic:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed|Ubuntu:400,300,500,700|Ubuntu+Mono' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">

<title>Lines | Simple Publishing on Rails</title>

<!-- Embedding Favicon -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="favicon.png" type="image/png" />

<!-- General Stylesheet -->
<link href="stylesheets/stylesheet.css" rel="stylesheet" type="text/css" />

<!-- Responsive -->
<link href="stylesheets/media-queries.css" rel="stylesheet" type="text/css" />

<!-- Scripts -->
<script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="scripts/jquery.parallax-1.1.3.js"></script>



<script type="text/javascript">
$(document).ready(function(){
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	$('header').parallax("50%", 0.4);


})

</script>

</head>


<body>
<div id="start"></div>
<div id="meta">
	<div class="wrapper">
		<nav>
			<ul>
				<li id="logo"><a href="#start"><img src="images/logo.png" alt="Logo LINES" /></a></li>
				<li><a href="#features">Features</a></li>
				<li><a href="#installation">Installation</a></li>
				<li><a href="#docu">Documentation</a></li>
				<li><a href="#contribute">Contribute</a></li>
				<li><a href="https://github.com/you"><img style="position: fixed; top: 0; right: 0; border: 0;z-index:999;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a></li>
			</ul>
		<div class="clearfix"></div>
	</div>
</div>
<header id="header">
	<div class="wrapper">
		<div id="head">
			<div id="teaser">
				Simple Publishing on Rails 3.2
			</div>
			<div class="intro">
				<h1>The open source blog platform you* <br/>have been waiting for.</h1>
				<p>*You are a Ruby on Rails developer. <br/>
				You care about your writing and a beautiful, mobile-optimized presentation.<br/>	
				You appreciate a solid editing system without unnecessary buzz. 		<br/>
				You want full control.</p>
			</div>
		</div>
	</div>
</header>

<div id="content">
	<div class="wrapper">
		<div id="desc">
			<h2>Enjoy simple, responsive, customizable publishing</h2>
			<div class="three-cols">
				<img src="images/screenshot_manage.jpg" alt="Manage" />
				<h3>1. Manage</h3>
				<p>Manage your posts in clear, consistent frontend.</p>	
			</div>
			<div class="three-cols">
				<img src="images/screenshot_create.jpg" alt="Create & Edit" />
				<h3>2. Create & Edit</h3>
				<p>Splash around in your ideas in a slim, beautifully designed editor.</p>
			</div>
			<div class="three-cols nomargin">
				<img src="images/screenshot_publish.jpg" alt="Publish" />
				<h3>3. Publish</h3>
				<p>See your text, code examples, images, and links shine.</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<hr/>
		<div id="features" class="white_box">
			<div class="two-cols">
				<h2>What it is</h2>
				<ul>
					<li>a blog framework for developers</li>
					<li>a simple consistent publishing tool</li>
					<li>a customizable platform, putting your content first</li>
					<li>an open source project, giving you all the freedom in the world</li>
				</ul>
			</div>
			<div class="two-cols nomargin">
				<h2>What it's not</h2>
				<ul>
					<li>Wordpress, Blogger, or Squarespace</li>
					<li>a gem or a plugin</li>
					<li>an overblown framework with theme craziness</li>
					<li>an incoherent pile of options</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<hr/>
		<div class="one-col">
			<h2>Optimized for reading</h2>
			<p>The best writing in the world amounts to nothing if you can't read it how you want it, where you want it. Lines is optimized for a clean reading experience that scales perfectly to big and small screens.</p>
			<ul>
				<li>| clear & comprehensive overview of your posts</li>
				<li>| header graphics for visual identification</li>
				<li>| headlines optimized for scanning</li>
				<li>| focus on links, images & code</li>
			</ul>
			
		</div>
		<div id="devices">
			<img src="images/devices.png" alt="Devices" />
		</div>
		<hr/>
		<div id="installation" class="white_box">
			<h2>Installation</h2>			
			<div class="two-cols">
				<p>1. Clone Repo</p>
			</div>
			<div class="two-cols">
				<tt>git clone git@github.com:opoloo/lines.git</tt>
			</div>
			<div class="clearfix"></div>
			<div class="two-cols">
				<p>2. Switch into the lines directory</p>
			</div>
			<div class="two-cols">
				<tt>cd lines</tt>
			</div>
			<div class="clearfix"></div>
			<div class="two-cols nomargin">
				<p>3. Run installation script</p>
			</div>
			<div class="two-cols nomargin">
				<tt>bundle exec rake lines:setup</tt>
			</div>
			<div class="clearfix"></div>
		</div>
		<hr/>
		<div id="docu">
			<div class="two-cols">
				<h2>Documentation</h2>
				<p>We stuck closely to the code conventions, so you'll have no trouble modifying it to your needs. The complete documentation is on GitHub. Have a look at the <a href="#">readme</a>.</p>
			</div>
			<div class="two-cols">
				<h2>Customizable</h2>
				<p>LINES is based on Rails 3.2 (4.0 to come soon) and can be customized to your personal needs and preferences. We'll constantly maintain the blog platform and keep it up-to-date it on <a href="#">GitHub</a>.</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<hr/>
		<div id="contribute">
				<h2>Contribute</h2>
				<p>LINES is an open source project for a reason. It needs people, work, and time to mature. You can help make this project even greater by giving us feedback, telling us about your concerns, and voicing questions. Contact our developers:</p><br/>
			<div class="two-cols table">
				<img src="images/jochen.png" alt="Jochen Greif" class="float-left" />
				<h3>Jochen Greif</h3>
				<script type="text/javascript">eval(decodeURIComponent('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%27%3c%61%20%68%72%65%66%3d%5c%22%6d%61%69%6c%74%6f%3a%6a%6f%63%68%65%6e%40%6f%70%6f%6c%6f%6f%2e%64%65%5c%22%3e%6a%6f%63%68%65%6e%40%6f%70%6f%6c%6f%6f%2e%64%65%3c%5c%2f%61%3e%27%29%3b'))</script>
			</div>
			<div class="two-cols table">
				<img src="images/jochen.png" alt="Max Boll" class="float-left" />
				<h3>Max Boll</h3>
				<script type="text/javascript">eval(decodeURIComponent('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%27%3c%61%20%68%72%65%66%3d%5c%22%6d%61%69%6c%74%6f%3a%6d%61%78%40%6f%70%6f%6c%6f%6f%2e%64%65%5c%22%3e%6d%61%78%40%6f%70%6f%6c%6f%6f%2e%64%65%3c%5c%2f%61%3e%27%29%3b'))</script>

			</div>
			<div class="clearfix"></div>
		</div>
		<hr/>
	</div>
</div>
<div id="footer">
  <div id="copyright">
	<span class="about">LINES is a project by opoloo. Find us on <a href="https://plus.google.com/u/0/+Opoloo/posts">Google Plus</a> & <a href="https://twitter.com/Opoloo">Twitter</a> or write us an email to <script type="text/javascript">eval(decodeURIComponent('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%27%3c%61%20%68%72%65%66%3d%5c%22%6d%61%69%6c%74%6f%3a%69%6e%66%6f%40%6f%70%6f%6c%6f%6f%2e%64%65%5c%22%3e%69%6e%66%6f%40%6f%70%6f%6c%6f%6f%2e%64%65%3c%5c%2f%61%3e%27%29%3b'))</script>
.
</span>
	<span>All rights reserved &copy; 2013 <a href="http://www.opoloo.com">Opoloo GbR</a> | <a href="http://www.opoloo.de/impressum">Imprint</a></span>
	<span class="signet"><a href="http://www.opoloo.com/"></a></span>
  </div>
</div>


</body>
</html>
