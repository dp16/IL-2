<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div id="bg">
<div id="single-posts">
<h1><?php the_title(); ?></h1>
<div class="excerpt"><?php the_excerpt(); ?></div>
<div class="postinfo">
Posted by <?php the_author(); ?> in <?php the_category(', ') ?> on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>. <?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?>.  
</div>

 	
	 
<div id="wrapper">
<div id="leftcol">
<article>
<?php 
// The featured image and module feature images
if( has_post_thumbnail() ){
	the_post_thumbnail( 'dp-full' ); 
} elseif( get_dp_module_media( $post ) ){
	echo dp_module_media( $post );
} ?>
<!--<div id="content-bg">-->
<?php 
    // The slider + navigation
	 	dp_carousel( $post->ID ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>



<!--	<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>-->
	
				<div class="entry">
					<?php 
					// Normal post description
					the_content();
	
					// Module post descriptions
					dp_module_contents(); ?>
				</div>
				
				<?php if( get_post_type( $post->ID ) != 'dp_module' ){ ?>		
			
			<?php } ?>
			
			<div class="post-end-logo"><a href="http://infinitelegroom.com"><img src="<?php bloginfo('template_directory'); ?>/images/IL.png" width="30px" height="30px"/></a></div>
			
			<div class="post-end-twitter"><a href="https://twitter.com/infinitelegroom" class="twitter-follow-button" data-show-count="false">Follow @infinitelegroom</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>
				</article>
			

<!--	<?php if ( get_the_author_meta( 'description' ) ) : ?>-->
<!--	<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>-->
<!--	<h3>About <?php echo get_the_author() ; ?></h3>-->
<!--	<?php the_author_meta( 'description' ); ?>-->
<!--	<?php endif; ?>-->
<h3 class="related">Related Stories</h3>
<div class="relatedposts"><?php related_posts()?></div>
	<div id="comments"><h3>Infinite Comments</h3><?php comments_template( '', true ); ?></div>


<?php endwhile; ?>
</div>
</div></div>
<div id="rightcol"><?php get_sidebar(); ?></div>
</div><!--</div>-->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>