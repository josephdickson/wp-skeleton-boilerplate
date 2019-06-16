<?php
/* *
 * footer.php
 * This is the default footer template
 */
?>
	<div class="container">
		<div class="row footer">
			<div class="twelve columns">
				<?php
					get_template_part( 'template-parts/footer-menu' );
					wp_footer();
				?>
			</div>
		</div>
	</div>
</body>
</html>
