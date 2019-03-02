<?php get_header(); 
   
   while(have_posts()){
   	  the_post(); ?>   
   	  <div class="the_content">
   	  <h2><?php the_title(); ?></h2> 
   	      <?php the_content(); ?>
   	  </div>    
<?php }

?>

<?php get_footer(); ?>