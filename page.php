<?php  
  get_header();
while(have_posts()){
  the_post();?>
  <h2><?php the_title(); ?></h2>
  <p><?php the_content(); ?></p>
  <p>Posted on: <?php the_date(); ?></p>
  

<?php }
get_footer();
?>