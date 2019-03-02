<?php get_header(); ?>

<div class="hm_content">
<?php  
   while(have_posts()){
   	  the_post();  ?>
   	  <div class="the_content">
   	  <h2><?php the_title(); ?></h2> 
   	      <?php the_content(); ?>
   	  </div>    
 <?php  }
?>

</div>

<?php get_footer(); ?>