<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?php bloginfo('name'); ?></title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="/" class="brand-logo"><?php bloginfo('name'); ?></a>
      <ul class="right hide-on-med-and-down">
        
      </ul>

      <ul id="nav-mobile" class="side-nav">
        
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Pear, LLC</h1>
        <div class="row center">
          <h5 class="header col s12 light">A Texh Services Company Located in Phoenix Arizona</h5>
        </div>
        <div class="row center">
          <a href="mailto:hello@pear.services" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Contact</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">school</i></h2>
            <h5 class="center">Technology for Schools</h5>

            <p class="light">Leverage our expirience providing technological services to revamp or build from scratch your schools IT department.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">code</i></h2>
            <h5 class="center">Programming Sevices</h5>

            <p class="light">Have an idea but don't know how to implement it? Use our programming services to make it happen. C/C++ IoT-based to Node/JS web-based we got you covered.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">favorite</i></h2>
            <h5 class="center">Made with Love</h5>

            <p class="light">We promise to treat your project with dedication and passion on the highest level.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A Family Owned Technology Services Company</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          
        	<?php /* The loop */ ?>
        	<?php while ( have_posts() ) : the_post(); ?>
        
        			<p class="left-align light" id="post-<?php the_ID(); ?>" >
        				<?php the_content(); ?>
        			</p>
        			
        	<?php endwhile; ?>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light"></h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Pear, LLC</h5>
          <p class="grey-text text-lighten-4"></p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text"></h5>
          <ul>
            
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text"></h5>
          <ul>
            
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Copyright Pear, LLC 2017 | Made with <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a> and <a class="brown-text text-lighten-3" href="http://wordpress.org">Wordpress</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/materialize.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>

  </body>
</html>
