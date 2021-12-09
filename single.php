<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
<div class="content">
	<div class="container">
		<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-single' );

	if ( is_attachment() ) {
		// Parent post navigation.
		the_post_navigation(
			array(
				/* translators: %s: parent post link. */
				'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone' ), '%title' ),
			)
		);
	}

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

	// Previous/next post navigation.
	$twentytwentyone_next = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' );
	$twentytwentyone_prev = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' );

	$twentytwentyone_next_label     = esc_html__( 'Next post', 'twentytwentyone' );
	$twentytwentyone_previous_label = esc_html__( 'Previous post', 'twentytwentyone' );

	the_post_navigation(
		array(
			'next_text' => '<div class="post-nav post-nav__right">
								<p class="meta-nav">
									<span>' . $twentytwentyone_next_label  . '</span>
									<span class="post-title">"%title"</span>
								</p>' . '<span class="single__post-icon button"> 
									<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1.57028 0C1.90964 0 2.23511 0.131862 2.47507 0.366579L12.9441 10.6091V3.68908C12.9441 3.35756 13.0787 3.03962 13.3184 2.8052C13.5581 2.57078 13.8831 2.43908 14.222 2.43908C14.561 2.43908 14.886 2.57078 15.1257 2.8052C15.3654 3.03962 15.5 3.35756 15.5 3.68908V13.6266C15.5 13.9581 15.3654 14.276 15.1257 14.5105C14.886 14.7449 14.561 14.8766 14.222 14.8766H4.06229C3.72336 14.8766 3.39831 14.7449 3.15864 14.5105C2.91898 14.276 2.78434 13.9581 2.78434 13.6266C2.78434 13.2951 2.91898 12.9771 3.15864 12.7427C3.39831 12.5083 3.72336 12.3766 4.06229 12.3766H11.1371L0.665488 2.13658C0.425522 1.90186 0.29071 1.58352 0.29071 1.25158C0.29071 0.91964 0.425522 0.601296 0.665488 0.366579C0.905454 0.131862 1.23092 0 1.57028 0Z" fill="white"></path>
									</svg>
				  				</span>
						</div>',
			'prev_text' => '<div class="post-nav post-nav__left">
								<p class="meta-nav">
									<span>' . $twentytwentyone_previous_label  . '</span>
									<span class="post-title">"%title"</span>
								</p>' . '<span class="single__post-icon button mirror-x"> 
									<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1.57028 0C1.90964 0 2.23511 0.131862 2.47507 0.366579L12.9441 10.6091V3.68908C12.9441 3.35756 13.0787 3.03962 13.3184 2.8052C13.5581 2.57078 13.8831 2.43908 14.222 2.43908C14.561 2.43908 14.886 2.57078 15.1257 2.8052C15.3654 3.03962 15.5 3.35756 15.5 3.68908V13.6266C15.5 13.9581 15.3654 14.276 15.1257 14.5105C14.886 14.7449 14.561 14.8766 14.222 14.8766H4.06229C3.72336 14.8766 3.39831 14.7449 3.15864 14.5105C2.91898 14.276 2.78434 13.9581 2.78434 13.6266C2.78434 13.2951 2.91898 12.9771 3.15864 12.7427C3.39831 12.5083 3.72336 12.3766 4.06229 12.3766H11.1371L0.665488 2.13658C0.425522 1.90186 0.29071 1.58352 0.29071 1.25158C0.29071 0.91964 0.425522 0.601296 0.665488 0.366579C0.905454 0.131862 1.23092 0 1.57028 0Z" fill="white"></path>
									</svg>
				  				</span>
						</div>'
		)
	);
endwhile; // End of the loop.
?>
	</div>
</div>
<?php
get_footer();
