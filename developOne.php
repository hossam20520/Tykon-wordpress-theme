<?php

 /* Template Name: developOne */ 


 get_header();
?>


<?php 

if(isset($_GET['id_developer'])){
$id_developer = $_GET['id_developer'];
$results = $wpdb->get_results( "SELECT * FROM  wp_developers where id ='$id_developer'"); 
}
  
  
?>





<div id="map" style="width:100%;height:350px;"></div> 
        <h1 style="text-align: center; color:#00aec1; font-weight: bold; padding-top: 20px">ARCO</h1>
        <section class="info">
        <div class="container">
        <div class="row">
        <?php
        foreach($results as $row){ 
            ?>
        <p><br> <b>-</b> <?php echo $row->descrp;  ?><br> <br><br><br></p>
        <?php
        }
        ?>   
<?php
  global $wpdb;
$results = $wpdb->get_results( "SELECT * FROM  wp_developer_projects where id_developer ='$id_developer'"); 
if(!empty($results)) {
  
    foreach($results as $row){
   ?>
            <div class="col-md-12 text-center">
                 <h2>DEVELOPER PROJECTS</h2>
            <img src="<?php echo $row->id_img;  ?>">
                </div>
                <?php
            }}
            ?>


            <div class="col-md-12 text-center par">
                 <h2>DEVELOPER AREA OF INTEREST</h2>
           <p>ARCO</p>
                </div>
            
        </div>
        </div>
          
           
        </section>


<?php 

get_footer();
?>