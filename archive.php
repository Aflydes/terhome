<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>
<div class="news content">
  <div class="container">
    <h2 class="news__heading">НОВОСТИ КОМПАНИИ</h2>
	  <div class="news__category-navigation">
		<ul class="news__category-list">
			<li class="cat-item"><a href="/blog/">Все</a></li>
			<?php  $catArgs = ( [
								'title_li'     => '',
								'taxonomy'     => 'category',
								'orderby'      => 'name',
								'order'        => 'ASC',
								'hide_empty'   => 0,
								'exclude'      => '1,3,4',
								'pad_counts'   => false,
							] );
			wp_list_categories( $catArgs );
	?>
		 </ul>
	  </div>
	  <div class="news__post-block">
			<?php 
			foreach( $posts as $post ){
					echo '<div class="news__post post">';
						echo '<div class="post__thumb">' . get_the_post_thumbnail($post->ID, array( 420, 320)) . '</div>';
						echo '<div class="post__body">';?>
							<p class="post__category">РУБРИКА <?php echo the_category(' '); ?> </p>
		  					<a href=" <?php echo the_permalink(); ?>">
								<h3 class="post__heading"><?php echo the_title(); ?>
								</h3><?php
							echo '<p class="post__excerpt">' . the_excerpt() . '</p></a>';
						echo '</div>';
					echo '</div>';
			} 
			wp_reset_query();?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
