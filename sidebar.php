 <?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
<div id="social-post">

<p><iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;send=false&amp;layout=box_count&amp;width=450&amp;show_faces=true&amp;font=tahoma&amp;colorscheme=light&amp;action=like&amp;height=90&amp;appId=470750729626581" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:45px; height:63px;" allowTransparency="true"></iframe></p>

<p><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-count="vertical" data-via="infinitelegroom">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></p>

<p><!-- Place this tag where you want the share button to render. -->
<div class="g-plus" data-action="share" data-annotation="vertical-bubble" data-height="60" data-href="<?php the_permalink(); ?>"></div>

<!-- Place this tag after the last share tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script></p>

<p><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=google.com&description=<?php the_excerpt(); ?>" class="pin-it-button" count-layout="vertical"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></p>

</div>

<div id="post300">
<p>ADVERTISEMENT</p>
        <img src="http://img-cdn.mediaplex.com/0/16492/158869/en_300x250_acv_bottombarrel_c01.jpg"></div>
      
	<div class="widget">
	<div id="infinitecontent"><h2 class="hide">Latest News</h2></div>
	<?php
								$the_query = new WP_Query('showposts=4&orderby=post_date&order=desc');
								while ($the_query->have_posts()) : $the_query->the_post(); ?>
										<div class="twentyten-latest-post">
											<a href="<?php echo $guid; ?>" title="<?php echo $post_title; ?>"><?php the_post_thumbnail(array(100,80), array ('class' => 'alignleft')); ?></a>
											 <div class="wtf"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
											 <div class="clear"></div>
										</div>				
	
								<?php endwhile; ?>
								<?php wp_reset_query(); ?>
	        <div id="search-bar"> 
	            <form method="get" id="searchform1" action="<?php bloginfo('url'); ?>"> 
	 <input type="text" value="SEARCH" onfocus="if (this.value=='SEARCH') this.value='';" name="s" id="searchinput" /> 
	                <input type="image" src="<?php bloginfo('template_directory'); ?>/images/search-submit.jpg" id="searchsubmit" /> 
	            </form> 
	        </div> <!-- #search-bar --> <!--</div>-->
				
											
					<div class="widget">
	<div id="infinitefacebook"><h2 class="hide">Facebook</h2></div>
					<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FInfinite-Legroom%2F441297992571193&amp;width=300&amp;height=183&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color=ffffff&amp;header=false&amp;appId=162246747192992" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:183px;" allowTransparency="true"></iframe>					</div>	

						<div class="widget-featured">
	<div id="editorspicks"></div>
						<?php
						$args = array(
						       'title'        => '',
						       'numberposts'  => 4,
						       'orderby'      => 'DESC',
						       'widththumb'   => 100,
						       'heightthumb'  => 80,
						       'beforetitle'  => '<h4>',
						       'aftertitle'   => '</h4>'
						   );
						featured_posts_YIW( $args );
						 
						?>	</div>
				

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'mainsidebar' ) ) : ?>
	
			
		<?php endif; // end primary widget area ?>


<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul></div>

<?php endif; ?>


<div class="widget">
	<div id="infinitetwitter"><h2 class="hide">Twitter</h2></div>
<a class="twitter-timeline" href="https://twitter.com/infinitelegroom" data-widget-id="282640903183667200">Tweets by @infinitelegroom</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>