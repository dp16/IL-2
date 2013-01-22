<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div id="content-bg">
<div id="wrapper">
<div id="fullhome">
<?php if ( have_posts() ): ?>
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<article>								
			<div class="featured-home"><a href="<?php esc_url( the_permalink() ); ?>"><?php
			
			the_post_thumbnail( 'custom-post-image' ); // insert "custom size" image
			
			?></a></div>
								<div class="cat"><?php the_category(', ') ?></div>
			
					<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					
										<div class="post-info">By <?php the_author(); ?> on <?php the_time('M. j'); ?><b> |</b> <?php comments_popup_link('0 Shares', '1 Share', '% Comments'); ?><b> |</b> Paris</div> 
			
		
				<?php the_content( __( '...', 'twentyten' ) ); ?>
		</article>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>
<div id="pagination"><?php next_posts_link('Load More Articles') ?></div><div id="pagination-right"><?php previous_posts_link('More News') ?></div>
<div id="infinite-footer"></div>
</div>
</div>

</div>


</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?> 
