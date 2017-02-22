<?php get_header(); ?>

<div class="feed">

<?php while (have_posts()): ?>
	<?php the_post();?>

	<div class="single_preview">
		<h2>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>

		<span class="author"><?php the_author();?></span> 
		<span class="time"><?php the_date();?> at <?php the_time();?></span>

		<?php the_content(); ?>
	</div>

<?php endwhile; ?>

</div>

<?php get_footer(); ?>