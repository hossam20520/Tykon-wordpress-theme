<?php

/**
 * The main template file
 * @package WordPress
 * @subpackage tykon
 * @since tykon 1.0
 * 
 *
 * 
 * 
 *
 * 
 *

 */

get_header();

?>
<?php





?>
<div id="particles-js"></div>
<header>
    
    <section class="head">
    <div class="intro">
    <form class="example" action="/action_page.php">
  <input type="text" placeholder="Search for Home - Blog - Resale..." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
   </div>
        
        
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo get_template_directory_uri()  ?>/img/21122-636300001309291788_0.jpg" alt="...">
      
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri()  ?>/img/59871bae8ef99547574557.jpg" alt="...">
      
    </div>
      
      <div class="item">
      <img src="<?php echo get_template_directory_uri()  ?>/img/636299938381948052.jpg" alt="...">
      
    </div>
    
      
     
      
  </div>

  

</div>
        
    <div class="book">
    
    <a href="#forme" class="mainBtn">BOOK NOW</a>
    </div>
    <div class="under">
        
    <a href="#projects" class="scroll-link downBtn"><i class="fa fa-chevron-down"></i></a>
   </div>
            
    </section>
</header>

<div class="number">
                <a href="tel:+201128723573">1573<i class="fa fa-whatsapp"></i></a>
                </div>       
            
<section class="dev">
       <h1>Developers</h1> 
<div class="container">
<div class="row">
<?php  

global $wpdb;
$results = $wpdb->get_results( "SELECT * FROM  wp_developers"); 
if(!empty($results)) {
    foreach($results as $row){
        ?>

<div class="col-md-2 col-xs-6 blog">    
    
    <a href="<?php echo  get_home_url(); ?>/developone?id_developer=<?php echo $row->id;  ?>"><img src="<?php echo $row->pic;  ?>"></a>
    <p><?php echo $row->fname." ".$row->lname; ?></p>    
    
</div>
        <?php
       
    }
}


?>

 
</div>    
</div>    
</section>

        
        
     <section class="instructors">
           <h2> Our Exclusive Projects </h2>
             <div class="slider-container">
                    <div class="responsive">

                    <?php 


$results = $wpdb->get_results( "SELECT * FROM  wp_projects"); 
if(!empty($results)) {
    foreach($results as $row){
        ?>

                 <div class="item">
                            <img src="<?php echo $row->pic;  ?>" alt="Instructor img">
                            <h3><?php echo $row->area;   ?></h3>
                            <p><b>.</b> Area From:<?php echo $row->area_from;  ?><br>
                                <b>.</b> Area To: <?php echo $row->area_to;  ?> <br><b>.</b> 
                                Starting Price: <?php echo $row->starting_price;  ?></p>
                            <a href="http://localhost:60/turnon/tykon/wordpress/projects?id_project=<?php echo  $row->id;;  ?>">View More</a>
                        </div>
        <?php
       
    }
}



?>
                      
                        
            
                        
                    </div>
                    <div class="controllers hidden-sm hidden-xs">
                        <span class="prev fa fa-angle-left"></span>
                        <span class="next fa fa-angle-right"></span>
                    </div>
                </div>


        </section>
      
   
        <section class="why" >
           
     <div id="gradient" >
  <div class="container">  
      <div class="row">
    <h1>Our Service</h1>
      <div class="col-md-3 col-s-6">
          <div class="num1">
          
          <div class="feat">
                    
                    <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                    <h3>Fully Integrated Services</h3>
                    <p>With CBE New Homes you can find your dream property from our selective wide range of 200 Real Estate Compounds in Egypt.</p>
                    
                
                </div>    
          </div>
          
          
          </div>
          
          <div class="col-md-3 col-s-6">
          <div class="num1">
              
              <div class="feat">
                    
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    <h3>Multiple Choices</h3>
                    <p>We provide you with the largest re-sale inventory.</p>
                
                </div>    
              </div>
          
          
          </div>
          
          <div class="col-md-3 col-s-6">
          <div class="num1">
              <div class="feat">
                    
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    <h3>Largest Compound</h3>
                    <p>With New Homes you can find your dream property from our selective wide</p>
                
                </div>    
              </div>
          
          
          </div>
       <div class="col-md-3 col-s-6">
          <div class="num1">
           
           <div class="feat">
                    
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    <h3>Outstanding Design</h3>
                    <p>Choose your favorite relaxation zone by the sea.</p>
                
                </div>    
           </div>
          
          
          </div>
          
          
      </div>
      </div>
  
</div>
        </section>
        
        
        
    <!-- Start Section Testimonails --> 
        
    <section class="Testimonails text-center">    
        <div class="container">
        
        <h1>What Client Say?</h1>
        
    <!-- Start Testimonails Carousel -->
        
        
        <div id="Carousel_Testimonails" class="carousel slide" data-ride="carousel">
            
  <!-- Wrapper for slides --> 
  <div class="carousel-inner">
    
      <div class="item active">
         <p class="lead">and while I was sending myself test emails, I noticed they were getting thrown into my junk folder and while I was sending myself test emails, I noticed they were getting thrown into my junk and while I was sending myself test emails, I noticed they were getting thrown into my junk.</p>
          
          <span>Walt Disney</span>
          
      </div>
    

      <?php 
    $results = $wpdb->get_results( "SELECT * FROM  wp_clients"); 
    if(!empty($results)) {
        foreach($results as $row){
            ?>
    
    <div class="item">
         <p class="lead"><?php echo $row->descrip;  ?></p>
          
          <span><?php echo $row->fname." ".$row->lname;  ?></span>
          
      </div>
            <?php
           
        }
    }

    ?>
  
    </div>
            
            
    <!-- Indicators -->
  <ol class="carousel-indicators">
  <?php 
    $results = $wpdb->get_results( "SELECT * FROM  wp_clients"); 
    if(!empty($results)) {
        foreach($results as $row){
            ?>
    
    <!-- <li data-target="#Carousel_Testimonails" data-slide-to="0" class="active"> <img src="<?php //echo get_template_directory_uri()  ?>/img/walt.jpg" alt="Walt Diseny"></li> -->
    <li data-target="#Carousel_Testimonails" data-slide-to="1"> <img src="<?php echo $row->pic; ?>" alt="Zucker berg"></li>
    
     <?php  
      
        }
    }

    ?>
    
  </ol>        

</div>
            
        </div>
        </section>

<?php
get_footer();

?>


























?>