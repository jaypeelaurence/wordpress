<?php if ( have_posts() ) : ?>
	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();?>
		<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
		<?php
		//echo excerpt_baseexcerpt(50);
		//the_excerpt();
	endwhile;

	// Previous/next page navigation.
	the_posts_pagination( array(
		'prev_text'          => __( 'Previous page', 'base' ),
		'next_text'          => __( 'Next page', 'base' ),
	) );
	else :
		echo "Say something";
	endif;
?>