<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<h2>Search Results</h2>

<div class="navigation">
	<div class="next-posts"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="prev-posts"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><?php the_title(); ?></h2>

<div class="meta">
	<em>Posted on:</em> <?php the_time('F jS, Y') ?>
	<em>by</em> <?php the_author() ?>
	<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?>
</div>

				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</div>

		<?php endwhile; ?>

<div class="navigation">
	<div class="next-posts"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="prev-posts"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
