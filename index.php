<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
  
  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          
        	<?php /* The loop */ ?>
        	<?php while ( have_posts() ) : the_post(); ?>
        	
        	    <h4><?php the_title(); ?></h4>
        
        			<p class="left-align light" id="post-<?php the_ID(); ?>" >
        				<?php the_content(); ?>
        			</p>
        			
        	<?php endwhile; ?>
        </div>
      </div>

    </div>
  </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/materialize.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>

  </body>
</html>
