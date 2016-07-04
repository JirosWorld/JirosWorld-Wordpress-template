<?php get_header(); ?>
<!-- dit is de zoekresultaten pagina -->
<div class="row">
		
<?php 
		
		if( have_posts() ):		
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content', 'search'); ?>
			<!-- dit laatste verwijst naar een custom search string die wijst naar content-search.php -->
			<?php endwhile;
		endif;
				
		?>
</div>

<?php get_footer(); ?>