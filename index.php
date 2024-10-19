<?php  
  get_header();

while(have_posts()){
  the_post();?>

  <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
  <p><?php the_content(); ?></p>
  <p>Posted on: <?php the_date(); ?></p>
  
  

<?php }
get_footer();
?>