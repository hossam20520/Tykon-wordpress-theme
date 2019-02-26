<?php

 /* Template Name: developers */ 


 get_header();
?>


<div class="content">
<div class="par">
  <h1><a href="https://superdevresources.com/full-background-image-css/" target="_blank">Taykoon's Developers</a></h1>
  <p>Aroma wings est doppio black et fair trade seasonal breve. Cortado organic coffee, single shot, roast cappuccino mocha single origin doppio. Half and half, roast, espresso roast decaffeinated aromatic, con panna froth grounds grinder sweet. Wings fair trade extraction lungo, irish cappuccino skinny saucer wings.</p>
<p>Ut bar medium eu, medium, con panna lungo whipped cup frappuccino. Dark crema single origin, con panna cortado eu galão crema. Organic qui and whipped espresso caramelization spoon espresso aroma. To go, whipped, con panna cream galão coffee kopi-luwak.</p>
</div>

          
</div>
        
        </header>
  
  
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


<?php

get_header();

?>