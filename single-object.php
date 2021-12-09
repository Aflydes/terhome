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

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	$post_id = get_the_ID();
	$gallery_meta = get_post_meta( $post_id, '_pods_galery');
?>
<div class="single-object__page content">
    <div class="single-object__body">
		<div class="container">
			<div class="single-object__info">
				<div class="single-object__image">
					<a href="#" class="image__link show-lightbox">
						<div class="image-overlay">
							<?php echo the_post_thumbnail(array(427, 400));?>
						</div>
						
					</a>
					<ul class="image-slider__nav" role="tablist" style="">
						<li class="slick-active show-lightbox" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 6" tabindex="-1">1</button></li>
						<li role="presentation" class="show-lightbox"><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 6" tabindex="-1">2</button></li>
						<li role="presentation" class="show-lightbox"><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 6" tabindex="-1">3</button></li>
						<li role="presentation" class="show-lightbox"><button type="button" role="tab" id="slick-slide-control03" aria-controls="slick-slide03" aria-label="4 of 6" tabindex="0" aria-selected="true">4</button></li>
						<li role="presentation" class="show-lightbox"><button type="button" role="tab" id="slick-slide-control04" aria-controls="slick-slide04" aria-label="5 of 6" tabindex="-1">5</button></li>
						<li role="presentation" class="show-lightbox"><button type="button" role="tab" id="slick-slide-control05" aria-controls="slick-slide05" aria-label="6 of 6" tabindex="-1">6</button></li>
					</ul>
				</div>
				<div class="single-object__stats">
					<h2 class="single-card__headnig"> <?php echo the_title();?> </h2>
					<h2 class="single-card__number"> <?php echo get_post_meta( $post_id, 'номер_проекта' )[0]; ?> </h2>
					<h3 class="object-card__subheading">Характеристики</h3>
					<div class="object-card__feature__block">
						<span class="object-card__feature object-type"> <?php echo get_post_meta( $post_id, 'тип' )[0]; ?> </span>
						<span class="object-card__feature object-square"> <?php echo get_post_meta( $post_id, 'характеристики' )[0]; ?> </span>
						<?php if (has_category( 3, $post_id )){
								$i=1;?>
								<span class="object-card__feature object-year"> <?php echo get_post_meta( $post_id, 'год' )[0]; ?>г</span>
						<?php } ?>
						<span class="object-card__feature object-material"> <?php echo get_post_meta( $post_id, 'материал' )[0]; ?> </span>
						<a href="#" class="object-card__video video-link">
							<svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M31.4068 25.233C31.3281 25.0972 31.2149 24.9846 31.0787 24.9066L24.0089 20.8045C23.4311 20.469 22.6389 20.8523 22.6389 21.5778V29.782C22.6389 30.5075 23.4311 30.8909 24.0089 30.5553L31.0787 26.4532C31.2149 26.3752 31.3281 26.2626 31.4068 26.1268C31.4856 25.9911 31.527 25.8369 31.527 25.6799C31.527 25.5229 31.4856 25.3688 31.4068 25.233ZM23.75 21.9389L30.1987 25.6799L23.75 29.4209V21.9389Z" fill="white"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M50.9714 25.6799C50.9714 39.4866 39.7789 50.6792 25.9722 50.6792C12.1654 50.6792 0.9729 39.4866 0.9729 25.6799C0.9729 11.8732 12.1654 0.680664 25.9722 0.680664C39.7789 0.680664 50.9714 11.8732 50.9714 25.6799ZM49.8603 25.6799C49.8603 38.873 39.1652 49.5681 25.9722 49.5681C12.7791 49.5681 2.08398 38.873 2.08398 25.6799C2.08398 12.4868 12.7791 1.79174 25.9722 1.79174C39.1652 1.79174 49.8603 12.4868 49.8603 25.6799Z" fill="white"/>
							</svg>
						</a>
					</div>
				</div>
			</div>
			<div class="single-object__description">
				<h3 class="single-object__divheading">Описание</h3>
				<div class="single-object__content">
					<?php the_content(); ?>
				</div>
			</div>
<?php
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
						</div>',
    'excluded_terms'  => 4, 
		)
	);
endwhile; // End of the loop.
 ?>  		</div>
			<div class="single-object__video">
				<video lazy autoplay muted controls="controls" class="object-video">
  					<source src="<?php echo get_post_meta( $post_id, 'видео' )[0]; ?>" type="video/mp4">
				</video>
				<a href="#" class="close-button"></a>
			</div>
			<div class="single-object__gallery">
				<div class="image-slider">
					<div class="image-slider__slide">
						<?php echo get_the_post_thumbnail($post_id,'full');?>
					</div>
					<?php 
					
						foreach ($gallery_meta[0] as $meta_value){
							if(!empty($meta_value)){
								echo '<div class="image-slider__slide">';
									echo wp_get_attachment_image($meta_value, 'full'); 
								echo '</div>';
							}
						}
					
					?>
				</div>
				<a href="#" class="close-button"></a>
			</div>
    </div>
</div>
<?php
get_footer();
