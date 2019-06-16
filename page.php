<?php get_header(); ?>
<div class="container content">
	<div class="row">
		<div class="eight columns">
			<?php get_template_part( 'template-parts/content' ); ?>
		</div>
		<div class="four columns">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
