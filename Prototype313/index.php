<?php session_start() ?>
<!--
	Prototype 311
	CSS Document 
	
	SENIOR DESIGN I
	
	Chusen Liang
	Philip Moise
	Micheal Ye
	Jacky Guo
	
	HomePage
-->

<!DOCTYPE html>
<html>
<head>
	<title>Prototype 313</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="images/logo.png" rel="shortcut icon">
	
</head>

<body>
	<?php include 'header.php'; ?>
	
	<div id="whole_body">
	
	<div id="main_body">
		<div id="body">
		  <h2>How can we help?</h2>
		  <p>NYU Poly is a prestigious college! Engineering students blossom in the work field shortly after graduating from this university. After the merger with NYU, more well know firms are keeping an eye on Poly students. Even though prior to the merger, huge companies are already aiming to reach out to Poly graduates and undergraduates, now with connections from NYU, Poly is growing and expanding out more rapidly. </p>
		</div>

		<br><br>	
	</div>
	
	
	
	 <!--  Carousel -->
      <div id="this-carousel-id" class="carousel slide" style="background:url(images/bgs.png) repeat;">
        <div class="carousel-inner">
          <div class="item active">
            <a href="https://www.kisi.de/">  <img src="img/kisi.png" alt="KISI" />
            </a>
            <div class="carousel-caption">
              <p>Kisi</p>
              <p><a href="http://hubblesite.org/gallery/album/entire/pr2006046a/xlarge_web/npp/128/">Kisi&raquo;</a></p>
            </div>
          </div>
          <div class="item">
            <a href="http://pixel506.com/">
              <img src="img/pixel506.jpg" alt="Pixel 506" />
            </a>
            <div class="carousel-caption">
              <p>Pixel 506</p>
              <p><a href="http://pixel506.com/">Pixel 506 &raquo;</a></p>
            </div>
          </div>
          <div class="item">
            <a href="http://www.streamspec.com/">
              <img src="img/streamspec.jpg" alt="Streamspec" />
            </a>
            <div class="carousel-caption">
              <p>Streamspec</p>
              <p><a href="http://www.streamspec.com/">Streamspec &raquo;</a></p>
            </div>
          </div>
          <div class="item">
            <a href="http://www.violethealth.com/">
              <img src="img/violethealth.jpg" alt="VioletHealth" />
            </a>
            <div class="carousel-caption">
              <p>VioletHealth</p>
              <p><a href="http://www.violethealth.com/">VioletHealth &raquo;</a></p>
            </div>
          </div>
        </div><!-- .carousel-inner -->
        <!--  next and previous controls here
              href values must reference the id for this carousel -->
          <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
      </div><!-- .carousel -->
      <!-- end carousel -->
      
      
      
      
      <!--updates-->
	  <div id="update">
	    <br>
	  	<div id="left">
	  		<ul style="list-style:none;">
	  			<br><p style="text-decoration:none;font-size:large;color:#5fa857;"> <i class="icon-chevron-down"></i> Take Me To</p>
	  			<li><a href="http://engineering.nyu.edu/"> <i class="icon-hand-right"></i>  Polytechnic School of Engineering</a></li>
	  			<li><a href="http://nyu.edu/"> <i class="icon-hand-right"></i>  New York University</a></li>
	  			<li><a href="http://engineering.nyu.edu/business/incubators/dumbo/companies"> <i class="icon-hand-right"></i>  The Dumbo Incubator</a></li>
	  			<li><a href="https://nyu-csm.symplicity.com/students/"> <i class="icon-hand-right"></i>  The Wasserman Center</a></li>
	  			<li><a href="http://www.linkedin.com/"> <i class="icon-hand-right"></i>  You need to get on Linkedin</a></li>
	  		</ul>
	  	</div>
	  	<div id="right">
	  		<ul style="list-style:none;">
	  			<br><p style="text-decoration:none;font-size:large;color:#5fa857;"> <i class="icon-chevron-down"></i>  Updates</p>
	  			<li><a href="http://www.slate.com/blogs/browbeat/2013/12/31/wolf_of_wall_street_true_story_jordan_belfort_and_other_real_people_in_dicaprio.html"> <i class="icon-hand-right"></i>  The Wolf of Wall Street</a></li>
	  			<li><a href="http://online.wsj.com/news/articles/SB10001424052702304549504579319373775553890#!"> <i class="icon-hand-right"></i>  Life and Money</a></li>
	  			<li><a href="http://techland.time.com/2014/01/13/the-next-big-thing-for-tech-the-interent-of-everything/"> <i class="icon-hand-right"></i>  Internet is Everything</a></li>
	  			<li><a href="http://www.forbes.com/fdc/welcome_mjx.shtml"> <i class="icon-hand-right"></i>  As a Leader...</a></li>
	  			<li><a href="http://engineering.nyu.edu/engineeringis/#!"> <i class="icon-hand-right"></i>  What is Engineering?</a></li>
	  		</ul>
	  	</div>
	  	<br><br><br><br><br><br><br><br><br><br><br>
	  </div>
	  
	</div>
	
	<?php include 'footer.php' ?>
    
    
    <!--Javascript================================================== -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <!-- Bootstrap jQuery plugins compiled and minified -->
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.carousel').carousel({
          interval: 2000
        });
      });
    </script>
    
</body>
</html>
