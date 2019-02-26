<?php

add_theme_support('post-thumbnails');
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) );
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

function hossam_add_script(){ 

        wp_enqueue_script('jquery-js' , get_template_directory_uri() . '/script/jquery-1.12.4.min.js' , array() , false , true);
        wp_enqueue_script('wow-js' , get_template_directory_uri() . '/script/wow.min.js' , array() , false , true);
        wp_enqueue_script('bootstrap-js' , get_template_directory_uri() . '/script/bootstrap.min.js' , array() , false , true); 
       
        wp_enqueue_script('particles-js' , 'http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js' , array() , false , true);
        wp_enqueue_script('slick-js' , get_template_directory_uri() . '/script/slick.min.js' , array() , false , true);
        if(is_page('projects')){
                wp_enqueue_script('single-js' , get_template_directory_uri() . '/script/Single.pro.js' , array() , false , true); 

        }else if(is_page('projectss') || is_page('resale') || is_page('developers')){
                wp_enqueue_script('script-js' , get_template_directory_uri() . '/script/projects.js' , array() , false , true); 
        }else if(is_page('residential') || is_page( 'residential-projects' )){
                wp_enqueue_script('Blog-js' , get_template_directory_uri() . '/script/Blog.js' , array() , false , true);     
         }else if(is_page('commercial') || is_page('commercial-projects')){ 

               wp_enqueue_script('Blog-js' , get_template_directory_uri() . '/script/Blog.js' , array() , false , true);  
         }else if(is_page('resort') || is_page('resort-projects')){
                wp_enqueue_script('Blog-js' , get_template_directory_uri() . '/script/Blog.js' , array() , false , true);    
         }else if(is_page( 'developOne' )){
                wp_enqueue_script('develop-js' , get_template_directory_uri() . '/script/Single.developers.js' , array() , false , true); 
         }else if(is_page( 'blog' )){
              
                wp_enqueue_script('Blog-js' , get_template_directory_uri() . '/script/Blog.js' , array() , false , true);  
         }else{
                wp_enqueue_script('script-js' , get_template_directory_uri() . '/script/script.js' , array() , false , true); 

        }
        
 }


function hossam_add_style(){

   
        wp_enqueue_style('font-awesome' , get_template_directory_uri() . '/css/font-awesome.min.css');
        wp_enqueue_style('font-google' , 'https://fonts.googleapis.com/css?family=PT+Sans');
     
        wp_enqueue_style('animate' , get_template_directory_uri() . '/css/animate.css');
        wp_enqueue_style('bootstrap-css' , get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style('slick-css' , get_template_directory_uri() . '/css/slick.css'); 
        if(is_page('projects')){
               
                wp_enqueue_style('single-css' , get_template_directory_uri() . '/css/Single.pro.css?v=1');
        }else if(is_page('projectss') || is_page('resale')){
                wp_enqueue_style('style-css' , get_template_directory_uri() . '/css/style.css');
                wp_enqueue_style('projectss-css' , get_template_directory_uri() . '/css/projects.css');
        }else if(is_page('residential') || is_page( 'residential-projects' )){
                wp_enqueue_style('style-css' , get_template_directory_uri() . '/css/style.css');
                wp_enqueue_style('residential-css' , get_template_directory_uri() . '/css/pro1.css');
        }else if(is_page('commercial') || is_page('commercial-projects') ){
                wp_enqueue_style('style-css' , get_template_directory_uri() . '/css/style.css');
                wp_enqueue_style('commercial-css' , get_template_directory_uri() . '/css/pro2.css');
        }else if(is_page('resort') || is_page('resort-projects') ){
                wp_enqueue_style('style-css' , get_template_directory_uri() . '/css/style.css');
                wp_enqueue_style('resort-css' , get_template_directory_uri() . '/css/pro3.css');
        }else if(is_page('developers')){ 
                
                wp_enqueue_style('developers-css' , get_template_directory_uri() . '/css/Developers.css');
        }else if(is_page( 'developOne' )){
              
                wp_enqueue_style('developerOne-css' , get_template_directory_uri() . '/css/Single.developers.css');

        }else if(is_page( 'blog' )){

                wp_enqueue_style('blog-css' , get_template_directory_uri() . '/css/Blog.css'); 
        }else if(is_page('contact')){
               
                wp_enqueue_style('contact-css' , get_template_directory_uri() . '/css/Contact.css'); 
        }else if(is_page('about')){
                wp_enqueue_style('about-css' , get_template_directory_uri() . '/css/About.css'); 
        }else{ 
                wp_enqueue_style('style-css' , get_template_directory_uri() . '/css/style.css');
        }
       
       


}
add_action('wp_enqueue_scripts'  ,'hossam_add_script');
add_action('wp_enqueue_scripts'  ,'hossam_add_style');





















?>