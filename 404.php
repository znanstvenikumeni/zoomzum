<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Zoom_ZUM
 */

get_header();
?>
<div class="hero text-center" id="hero-frontpage" style="background-image: url('https://znanstvenikumeni.org/wp-content/uploads/2020/03/gray-rock-rough-surface-2931270.jpg');">
    	<h1 class="entry-title">Greška 404</h1>
  	</div>

	<div id="primary" class="container">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title">404: Ne možemo pronaći stranicu koju ste tražili.</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>Stranica koju ste tražili ne postoji na ovoj adresi. <a href="/">Vratite se na naslovnicu</a> ili prijavite problem na <a href="mailto:natjecanje@znanstvenikumeni.org">natjecanje@znanstvenikumeni.org</a>.</p>

					
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php
get_footer();
