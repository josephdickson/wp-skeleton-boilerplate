<?php
/* *
 * Excerpt Loop
 */

if ( have_posts() ) :
  while ( have_posts() ) : the_post();
  	echo '<article>';
		echo '<a href="' .esc_url( get_permalink() ) . '">';
		the_title( '<h1 class="entry-title">','</h1>' );
      
		if (has_post_thumbnail() ) {
			// get thumbnail id for use later
			$thumbnail_id = get_post_thumbnail_id();

			echo '<figure>';
			      the_post_thumbnail('large');

				if ( has_excerpt( $thumbnail_id ) ) {

					     // display figcaption only if there's a caption
					      echo '<figcaption>' . get_post( $thumbnail_id )->post_excerpt . '</figcaption>';
				}

			echo '</figure>';
		} 
      
		echo '</a>';

		the_excerpt();

	echo '<article>';

	endwhile;
else :
	echo wpautop( 'No posts available' );
endif;
