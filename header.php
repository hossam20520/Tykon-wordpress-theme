<!DOCTYPE html>
<html <?php language_attributes();    ?> >
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <title><?php bloginfo('name') ?></title>
    
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
     <link rel="icon" href="<?php echo get_template_directory_uri()  ?>/img/logo%20old.png">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head() ?>
  </head>
<body>

<nav class="navbar navbar-default top-fixed">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo  get_home_url(); ?>"><img src="<?php echo get_template_directory_uri()  ?>/img/logo%20old.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
              <?php $contact = ""; if(is_page('contact') ){ $contact = "active"; }  ?>
                   <li class="<?php echo $contact; ?>"><a href="<?php echo  get_home_url(); ?>/contact">Contact Us</a></li>
                   <?php $blog = ""; if(is_page('blog') ){ $blog = "active"; }  ?> 
                <li class="<?php echo $blog?>"><a href="<?php echo  get_home_url(); ?>/blog" >News &amp; Event</a></li>
                <?php $developers = ""; if(is_page('developers') || is_page('developOne') ){ $developers = "active"; }  ?> 
                  <li class="<?php echo $developers ?>"><a href="<?php echo  get_home_url(); ?>/developers">Developers</a></li>
                  <?php $about = ""; if(is_page('about')  ){ $about = "active"; }  ?> 
                <li class="<?php echo $about;  ?>"><a href="<?php echo get_home_url();  ?>/about/">Why Tykoon?</a></li>
                  <li><a href="Resale.html">Resale</a></li>
                <?php $project = ""; if(is_page('projectss') || is_page('commercial') || is_page('commercial-projects') ){ $project = "active"; }  ?>
               
                 <li class="<?php echo $project; ?>"><a href=" <?php echo  get_home_url(); ?>/projectss">Projects</a></li>
                 <?php $home = ""; if(is_page('Home')){ $home = "active"; }  ?> 
               <li class="<?php echo $home;  ?>"><a href="<?php echo  get_home_url(); ?>">Home</a></li>
                  
                 
              </ul>
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>




