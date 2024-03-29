<?php

 /* Template Name: blog */ 


 get_header();

?>

<?php
$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'category_name' => 'news',
'cat'   => 2
);
$q = new WP_Query( $args );
if($q->have_posts()){
while($q->have_posts()){
$q->the_post();
?>

<section class="news">
           
           <div class="container">
           <div class="row">
             <h1>News</h1> 
               
           <div class="col-lg-4">
               
        <!-- BASED ON A DRIBBBLE SHOT: https://dribbble.com/shots/2456287-Day-064-BMW-Blog-Post -->
   <div class="bg">
     <i class="bg-image"></i>
   </div>
   <div class="main-wrapper">
     <div class="blog-post-wrapper">
       <div class="blog-post">
            <a href="Single.blog.html"><figure class="blog-post--image">
            <?php the_post_thumbnail('' , ['class'=>'thumbnail' , 'title'=> 'post']) ?>
         </figure></a>
         <div class="blog-post--description">
           <h3><?php  the_title();   ?></h3>
           <p><?php  the_content();   ?></p>
         </div>
         <div class="blog-post--tools">
           <i class="icon icon-edit">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
       <path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;-inkscape-font-specification:Bitstream Vera Sans" d="M 23.90625 3.96875 C 22.859286 3.96875 21.813178 4.3743215 21 5.1875 L 5.40625 20.78125 L 5.1875 21 L 5.125 21.3125 L 4.03125 26.8125 L 3.71875 28.28125 L 5.1875 27.96875 L 10.6875 26.875 L 11 26.8125 L 11.21875 26.59375 L 26.8125 11 C 28.438857 9.373643 28.438857 6.813857 26.8125 5.1875 C 25.999322 4.3743215 24.953214 3.96875 23.90625 3.96875 z M 23.90625 5.875 C 24.409286 5.875 24.919428 6.1069285 25.40625 6.59375 C 26.379893 7.567393 26.379893 8.620107 25.40625 9.59375 L 24.6875 10.28125 L 21.71875 7.3125 L 22.40625 6.59375 C 22.893072 6.1069285 23.403214 5.875 23.90625 5.875 z M 20.3125 8.71875 L 23.28125 11.6875 L 11.1875 23.78125 C 10.533142 22.500659 9.4993415 21.466858 8.21875 20.8125 L 20.3125 8.71875 z M 6.9375 22.4375 C 8.1365842 22.923393 9.0766067 23.863416 9.5625 25.0625 L 6.28125 25.71875 L 6.9375 22.4375 z" color="#000" overflow="visible" font-family="Bitstream Vera Sans"></path>
   </svg>
             <span>Edit</span>
           </i>
           
           <i class="icon icon-view">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
       <path d="M 18 5 L 18 7 L 23.5625 7 L 11.28125 19.28125 L 12.71875 20.71875 L 25 8.4375 L 25 14 L 27 14 L 27 6 L 27 5 L 26 5 L 18 5 z M 5 9 L 5 27 L 23 27 L 23 14 L 21 16 L 21 25 L 7 25 L 7 11 L 16 11 L 18 9 L 5 9 z"></path>
   </svg>
             <span>View</span>
           </i>
           
           <i class="icon icon-view">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
       <path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;-inkscape-font-specification:Bitstream Vera Sans" d="M 16 4 C 13.856034 4 12.115821 5.7192819 12.03125 7.84375 C 8.4256342 9.3745502 6 12.943109 6 17 C 6 17.171429 5.9918718 17.361182 6 17.5625 C 4.8148148 18.259398 4 19.535137 4 21 C 4 23.197294 5.8027056 25 8 25 C 8.5746769 25 9.1294956 24.877678 9.625 24.65625 C 11.357552 26.112488 13.617671 27 16 27 C 18.382329 27 20.642448 26.112488 22.375 24.65625 C 22.870504 24.877678 23.425323 25 24 25 C 26.197294 25 28 23.197294 28 21 C 28 19.519644 27.174632 18.222803 25.96875 17.53125 C 25.984839 17.369789 26 17.208912 26 17 C 26 12.943109 23.574366 9.3745502 19.96875 7.84375 C 19.884179 5.7192819 18.143966 4 16 4 z M 16 6 C 17.116414 6 18 6.883586 18 8 C 18 9.116414 17.116414 10 16 10 C 14.883586 10 14 9.116414 14 8 C 14 6.883586 14.883586 6 16 6 z M 12.46875 9.84375 C 13.14027 11.11788 14.468937 12 16 12 C 17.531063 12 18.85973 11.11788 19.53125 9.84375 C 22.211252 11.143769 24 13.879438 24 17 C 21.802706 17 20 18.802706 20 21 C 20 21.894765 20.309727 22.70618 20.8125 23.375 C 19.474816 24.386517 17.755994 25 16 25 C 14.244006 25 12.525184 24.386517 11.1875 23.375 C 11.690273 22.70618 12 21.894765 12 21 C 12 18.802706 10.197294 17 8 17 C 8 13.879438 9.7887479 11.143769 12.46875 9.84375 z M 8 19 C 9.116414 19 10 19.883586 10 21 C 10 22.116414 9.116414 23 8 23 C 6.883586 23 6 22.116414 6 21 C 6 19.883586 6.883586 19 8 19 z M 24 19 C 25.116414 19 26 19.883586 26 21 C 26 22.116414 25.116414 23 24 23 C 22.883586 23 22 22.116414 22 21 C 22 19.883586 22.883586 19 24 19 z" color="#000" overflow="visible" font-family="Bitstream Vera Sans"></path>
   </svg>
             <span>Share</span>
           </i>
         </div>
           
       </div>
     </div>
     <!-- -->
     
   </div>
               </div>
               
               <?php }}  ?>
         
               </div>
               </div>
           </section>


         


   <!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->





   <?php
$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'category_name' => 'events',
'cat'   => 3
);
$q = new WP_Query( $args );
if($q->have_posts()){
while($q->have_posts()){
$q->the_post();
?>


           <section class="news">
           
           <div class="container">
           <div class="row">
             <h2>Events</h2> 
               
           <div class="col-lg-4">
               
        <!-- BASED ON A DRIBBBLE SHOT: https://dribbble.com/shots/2456287-Day-064-BMW-Blog-Post -->
   <div class="bg">
     <i class="bg-image"></i>
   </div>
   <div class="main-wrapper">
     <div class="blog-post-wrapper">
       <div class="blog-post">
         <figure class="blog-post--image">
         <?php the_post_thumbnail('' , ['class'=>'thumbnail' , 'title'=> 'post']) ?>
         </figure>
         <div class="blog-post--description">
         <h3><?php  the_title();   ?></h3>
           <p><?php  the_content();   ?></p>
            </div>
         <div class="blog-post--tools">
           <i class="icon icon-edit">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
       <path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;-inkscape-font-specification:Bitstream Vera Sans" d="M 23.90625 3.96875 C 22.859286 3.96875 21.813178 4.3743215 21 5.1875 L 5.40625 20.78125 L 5.1875 21 L 5.125 21.3125 L 4.03125 26.8125 L 3.71875 28.28125 L 5.1875 27.96875 L 10.6875 26.875 L 11 26.8125 L 11.21875 26.59375 L 26.8125 11 C 28.438857 9.373643 28.438857 6.813857 26.8125 5.1875 C 25.999322 4.3743215 24.953214 3.96875 23.90625 3.96875 z M 23.90625 5.875 C 24.409286 5.875 24.919428 6.1069285 25.40625 6.59375 C 26.379893 7.567393 26.379893 8.620107 25.40625 9.59375 L 24.6875 10.28125 L 21.71875 7.3125 L 22.40625 6.59375 C 22.893072 6.1069285 23.403214 5.875 23.90625 5.875 z M 20.3125 8.71875 L 23.28125 11.6875 L 11.1875 23.78125 C 10.533142 22.500659 9.4993415 21.466858 8.21875 20.8125 L 20.3125 8.71875 z M 6.9375 22.4375 C 8.1365842 22.923393 9.0766067 23.863416 9.5625 25.0625 L 6.28125 25.71875 L 6.9375 22.4375 z" color="#000" overflow="visible" font-family="Bitstream Vera Sans"></path>
   </svg>
             <span>Edit</span>
           </i>
           
           <i class="icon icon-view">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
       <path d="M 18 5 L 18 7 L 23.5625 7 L 11.28125 19.28125 L 12.71875 20.71875 L 25 8.4375 L 25 14 L 27 14 L 27 6 L 27 5 L 26 5 L 18 5 z M 5 9 L 5 27 L 23 27 L 23 14 L 21 16 L 21 25 L 7 25 L 7 11 L 16 11 L 18 9 L 5 9 z"></path>
   </svg>
             <span>View</span>
           </i>
           
           <i class="icon icon-view">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
       <path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;-inkscape-font-specification:Bitstream Vera Sans" d="M 16 4 C 13.856034 4 12.115821 5.7192819 12.03125 7.84375 C 8.4256342 9.3745502 6 12.943109 6 17 C 6 17.171429 5.9918718 17.361182 6 17.5625 C 4.8148148 18.259398 4 19.535137 4 21 C 4 23.197294 5.8027056 25 8 25 C 8.5746769 25 9.1294956 24.877678 9.625 24.65625 C 11.357552 26.112488 13.617671 27 16 27 C 18.382329 27 20.642448 26.112488 22.375 24.65625 C 22.870504 24.877678 23.425323 25 24 25 C 26.197294 25 28 23.197294 28 21 C 28 19.519644 27.174632 18.222803 25.96875 17.53125 C 25.984839 17.369789 26 17.208912 26 17 C 26 12.943109 23.574366 9.3745502 19.96875 7.84375 C 19.884179 5.7192819 18.143966 4 16 4 z M 16 6 C 17.116414 6 18 6.883586 18 8 C 18 9.116414 17.116414 10 16 10 C 14.883586 10 14 9.116414 14 8 C 14 6.883586 14.883586 6 16 6 z M 12.46875 9.84375 C 13.14027 11.11788 14.468937 12 16 12 C 17.531063 12 18.85973 11.11788 19.53125 9.84375 C 22.211252 11.143769 24 13.879438 24 17 C 21.802706 17 20 18.802706 20 21 C 20 21.894765 20.309727 22.70618 20.8125 23.375 C 19.474816 24.386517 17.755994 25 16 25 C 14.244006 25 12.525184 24.386517 11.1875 23.375 C 11.690273 22.70618 12 21.894765 12 21 C 12 18.802706 10.197294 17 8 17 C 8 13.879438 9.7887479 11.143769 12.46875 9.84375 z M 8 19 C 9.116414 19 10 19.883586 10 21 C 10 22.116414 9.116414 23 8 23 C 6.883586 23 6 22.116414 6 21 C 6 19.883586 6.883586 19 8 19 z M 24 19 C 25.116414 19 26 19.883586 26 21 C 26 22.116414 25.116414 23 24 23 C 22.883586 23 22 22.116414 22 21 C 22 19.883586 22.883586 19 24 19 z" color="#000" overflow="visible" font-family="Bitstream Vera Sans"></path>
   </svg>
             <span>Share</span>
           </i>
         </div>
           
       </div>
     </div>
     <!-- -->
     
   </div>
               </div>
            
            <?php


}}
            ?>
             <!-- bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb -->


               
               
               </div>
               </div>
           </section>












<?php

get_footer();

?>
