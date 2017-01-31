<!DOCTYPE html>
<?php get_header();
	the_post(); ?>
	booooooo
<div class = "container-fluid">
	<div class = "row">
		<div class = "col-sm-4">
			<?php get_sidebar(); ?>
		</div>
		<div class = "col-sm-8">
			<div class = "content">
				<?php echo the_content() ?>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>
</div>
