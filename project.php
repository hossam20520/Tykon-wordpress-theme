<?php

 /* Template Name: projects */ 


 get_header();
?>
<?php






?>
<div class="slider-container">
  <div class="slider-control left inactive"></div>
  <div class="slider-control right"></div>
  <ul class="slider-pagi"></ul>
  <div class="slider">
  <?php  

global $wpdb;
if(isset($_GET['id_project'])){
  $id_project = $_GET['id_project'];
  $results = $wpdb->get_results( "SELECT * FROM  wp_info_projects where id_project ='$id_project'"); 
}else if(isset($_GET['id_projectss'])){
  $id_project = $_GET['id_projectss'];
  $results = $wpdb->get_results( "SELECT * FROM  wp_info_projects where id_cate ='$id_project'"); 
}


$count = 0;
if(!empty($results)) {
  
    foreach($results as $row){
      
        ?>
    <div class="slide slide-<?php echo $count; ?> <?php if($count == 0){ echo "active"; }   ?>">
      <div class="slide__bg"><img src="<?php echo $row->pic_project;  ?>"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading"><?php echo $row->title;  ?></h2>
          <p class="slide__text-desc"><?php echo $row->descrip;  ?></p>
          
        </div>
      </div>
    </div>

   <?php
   $count = $count +1;
    }
  }

?>
  </div>
        </div>
        
        <h1 style="text-align: center; padding-top: 40px;
                   font-weight: bold">Location</h1>
       <div id="map" style="width:100%;height:350px;"></div> 


<?php
get_footer();



?>