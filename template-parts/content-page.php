<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Zoom_ZUM
 */

?>
<?php if(is_front_page()){
?>
 <header class="videoHeader">

  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?php echo get_theme_mod( 'video_link' ); ?>" type="video/mp4">
  </video>
  <div class="container h-100">

    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">

        <h1 class="display-3 accent"><?php echo get_theme_mod( 'header_text' ); ?></h1>
        <p class="lead mb-0"><?php echo get_theme_mod( 'header_subtitle' ); ?><br><br></p>
        <a href="<?php echo get_theme_mod( 'header_link' ); ?>" class="btn btn-primary"><?php echo get_theme_mod( 'header_button' ); ?></a>
      </div>
    </div>
  </div>
</header>
<?php
}
else{
	
?>


<div class="hero text-center" id="hero-frontpage" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

  </div>
  <?php
}
?>
  <div class="container">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="post entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'zoomzum' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<div class="alert alert-secondary">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'zoomzum' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
</div>