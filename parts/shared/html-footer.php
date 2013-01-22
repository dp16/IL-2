	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.masonry.min.js"></script>
		
	<script>
	  $(function(){
	    
	    $('#leftcol').masonry({
	      itemSelector: '.box',
	      columnWidth: 0
	    });
	    
	  });
</script>
	<?php wp_footer(); ?>

	<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
	</body>
</html>