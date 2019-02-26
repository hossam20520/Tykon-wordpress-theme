<?php

 /* Template Name: resale_residential */ 


 get_header();

?>



<section class="pro1 text-center">
        <div class="container">
        <div class="row">
        <h1>Residential</h1>
           
            
           <?php  
            
            

            global $wpdb;
          
           
               
                $results = $wpdb->get_results( "SELECT * FROM  wp_main_area_project_resale where id_category ='1'");  

                if(!empty($results)) {
              
                    foreach($results as $row){
              ?>


           <div class="col-md-3 text-center data">
            <a href="<?php echo  get_home_url(); ?>/residential-projects?id_area=<?php echo $row->id;   ?>&&title=<?php echo $row->name; ?>"><img src="<?php echo $row->image; ?>"></a>
            <p><?php  echo $row->name;  ?></p>
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






