<?php //


get_header(); 

if ( have_posts() ) : while ( have_posts() ) : the_post();

	get_template_part('template-part/content',$post->post_name);

endwhile; endif;

get_footer(); 
?>
