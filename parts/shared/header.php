<!--<div id="complextop"><center><img src="<?php bloginfo('template_directory'); ?>/images/ad.png"></center>-->

</div>

<header>
	<div id="logo"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"></a></div>
	<h1><a class="hide" href="/"><?php bloginfo( 'name' ); ?></a></h1>
<!--	<?php get_search_form(); ?>-->


<div id="nav-contain">
<div id="nav">

<li><a href="#">Fly</a>
  <ul>
  <div id="leftcolnav">
<a href="#">Sub Menu Categories</a>
<a href="#">Another One</a>
<a href="#">One More</a>
<a href="#">Look at That</a>
</div>

  <div class="category-nav-item">
  <?php
  							$the_query = new WP_Query('showposts=4&orderby=post_date&order=desc');
  							while ($the_query->have_posts()) : $the_query->the_post(); ?>
  									<div class="twentyten-latest-post">
  										<a href="<?php echo $guid; ?>" title="<?php echo $post_title; ?>"><?php the_post_thumbnail(array(180,110), array ('class' => 'alignleft')); ?></a>
  										 <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
  										 <div class="postdatenav"><?php the_time('M. j, Y'); ?></div>
  										 <div class="clear"></div>
  									</div>

  							<?php endwhile; ?>
  							<?php wp_reset_query(); ?></div>

  </ul>
</li>

<li><a href="#">Stay</a></li>

<li><a href="#">Eat</a>

</li>
<li><a href="#">Drink</a></li>
<li><a href="#">Pack</a></li>
<li><a href="#">Buy</a></li>
<li><a href="#">Go</a></li>
<li><a href="#">People</a></li>





</div>

<div id="social-top">
<a class="tooltip" href="http://www.twitter.com/infinitelegroom"><img src="<?php bloginfo('template_directory'); ?>/images/twitter-b.png"><span class="classic">Twitter</span></a>
<a class="tooltip" href="http://www.facebook.com/infinitelegroom"><img class="tooltip" src="<?php bloginfo('template_directory'); ?>/images/facebook-b.png"><span class="classic">Facebook</span></a>
<a class="tooltip" href="http://www.pinterest.com/infinitelegroom"><img class="tooltip" src="<?php bloginfo('template_directory'); ?>/images/pinterest-b.png"><span class="classic">Pinterest</span></a>
<a class="tooltip" href="http://www.instagram.com/infinitelegroom"><img class="tooltip" src="<?php bloginfo('template_directory'); ?>/images/instagram-b.png"><span class="classic">Instagram</span></a>
</div>


<div id="search-bar-nav">
           <form method="get" id="searchform1" action="<?php bloginfo('url'); ?>">
<input type="text" value=" " onfocus="if (this.value==' ') this.value='';" name="s" id="searchinput" />
               <input type="image" src="<?php bloginfo('template_directory'); ?>/images/search-nav.png" id="searchsubmit" />
           </form>
       </div>


</div>
</header>

<?php if( is_front_page() ) : ?>
<div id="home-deck">
<div id="slider">
<?php echo slider_pro(1); ?>
</div>

<div id="slider-right">
<div class="widget-featured">
<div id="flightsoffancy"></div>
					<?php
					$args = array(
					       'title'        => '',
					       'numberposts'  => 4,
					       'orderby'      => 'DESC',
					       'widththumb'   => 40,
					       'heightthumb'  => 27,
					       'beforetitle'  => '<h4>',
					       'aftertitle'   => '</h4>'
					   );
					featured_posts_YIW( $args );
					 
					?>	</div>
<!--<div id="home300-c">     --><div id="home300"> <p>ADVERTISEMENT</p>  <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/ad300.jpg"></a></li>
<!--</div>--></div></div>

</div>

<div id="infinite-articles"></div>

<?php endif;?>
