<?php

 /* Template Name: commercial-projects */ 


 get_header();
 

?>




<section class="pro1 text-center">
        <div class="container">
        <div class="row">
        <h1><?php  echo @$_GET['title']; ?></h1>
           

        <?php  
            
            $are_id = $_GET['id_area'];

            global $wpdb;
          
           
               
                $results = $wpdb->get_results( "SELECT * FROM  wp_area_projects where area_id ='$are_id'");  
 
                if(!empty($results)) {
              
                    foreach($results as $row){
              ?>
            
            <div class="col-md-3 text-center data">
            <a href="<?php echo  get_home_url() ?>/projects?id_projectss=<?php echo $row->id ?>"><img src="<?php echo $row->img; ?>"></a>
            <p><?php  echo $row->sub_area;  ?></p>
            </div>
            
            <?php


}
}
           
?>
   
        
        </div>
        </div>
        </section>





<?php

get_footer();


?>