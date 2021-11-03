<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bolg2tech
 */

?>
      
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	
		?>
	
			<div class="entry-meta">
				<?php
				blog2tech_posted_on();
				blog2tech_posted_by();
				?>
			</div><!-- .entry-meta -->
		
	</header><!-- .entry-header -->

	

	<div class="entry-content">


			<figure class="post-thumbnail" >
             <!-- <img src="./images/s3.png" class="post-img"> -->
			 <?php blog2tech_post_thumbnail(); ?>
             <figcaption>
                  consectetur adipisicing elit, sed do eiusmod
             </figcaption>
            </figure>


		<?php
		the_excerpt(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'blog2tech' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

	
		?>
		
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->


