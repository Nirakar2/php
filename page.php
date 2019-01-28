<?php
get_header();
 echo" this is single page Template ";

 While(have_posts()){
 	the_post(); ?>
 
<h1> <?php the_title(); ?> </h1>
<p> <?php the_content(); ?> </p>
<hr>	


<?php
 }

?>
<?php get_footer(); ?>