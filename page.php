<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>

<div class="meta"><em>Posted on:</em> <?php the_time('F jS, Y') ?>
<em>by</em> <?php the_author() ?>
<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></div>

			<div class="entry">

				<?php the_content(); ?>

				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		
		<?php comments_template(); ?>

		<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
