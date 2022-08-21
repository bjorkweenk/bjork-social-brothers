<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bjork-social-brothers
 */

?>

<!--<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				bjork_social_brothers_posted_on();
				bjork_social_brothers_posted_by();
				?>
			</div>.entry-meta 
		<?php endif; ?>
	</header> .entry-header -->

	<!--<?php bjork_social_brothers_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bjork-social-brothers' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bjork-social-brothers' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>.entry-content -->

<!--	<footer class="entry-footer">
		<?php bjork_social_brothers_entry_footer(); ?>
	</footer> .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

<section class="main-section">
<form class="form">
	<div class="form-text">
	<h2> Plaats een blog bericht </h2>

	<p> Berichtnaam </p>
	<label><input type="text" placeholder="Geen titel"></label>
	<p> Categorie </p>
	<label><input type="text" placeholder="Geen categorie"></label>
	<p> Header afbeelding </p>
	<label> <input type="file"> </label>
	<p> Bericht </p>
	<textarea name="message" id="message" style="height: 200px; width: 200px;"     onclick="this.value=''">Enter text here...</textarea>
	</div>

	<button class="form-btn"> Bericht aanmaken  </button>
</form> 

<div class="blog">
	<div class="item"> <p> 12-16-2019 </p><p> Tech </p>
		<div class="img-item1">
			<h2> Heading </h2>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis repellat excepturi, accusantium maiores temporibus aliquam dolorem nam expedita sunt? </p>
		</div>
	</div>

	<div class="item">  <p> 12-16-2019 </p><p> Tech </p>
	<div class="img-item2">
	<h2> Heading </h2>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis repellat excepturi, accusantium maiores temporibus aliquam dolorem nam expedita sunt? </p> </div>
	</div>

	<div class="item">  <p> 12-16-2019 </p><p> Tech </p>
	<div class="img-item3">
	<h2> Heading </h2>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis repellat excepturi, accusantium maiores temporibus aliquam dolorem nam expedita sunt? </p>
	</div>
	</div>

	<div class="item">  <p> 12-16-2019 </p><p> Tech </p>
	<div class="img-item4">
	<h2> Heading </h2>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis repellat excepturi, accusantium maiores temporibus aliquam dolorem nam expedita sunt? </p>
	</div>
	</div>
	<button class="form-btn"> Meer laden  </button>
</div>
<section>