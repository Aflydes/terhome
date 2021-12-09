<?php
/*
 * Template name: Objects archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<div class="object-archive__page content ">
	<div class="container">
		<div class="object-archive___description">
			<h3 class="object-archive__heading">ГОТОВЫЕ ОБЪЕКТЫ</h3>
			<p class="object-archive__text">
				За 21 год работы мы реализовали 175 проектов. Это частные дома из кирпича, монолита и газобетона с современными архитектурными и дизайнерскими решениями. Мы несём ответственность за каждый выполненный проект и консультируем всех клиентов по вопросам эксплуатации жилья, независимо от срока давности работ.
				
				На этой странице можно познакомиться с домами, строительство которых вела наша компания в разное время, узнать всё об их архитектурных и конструктивных особенностях и рассмотреть в деталях.
			</p>
		</div>
		<div class="object-archive__section">
			<?php
				$args = array(
					'cat'		 => 3,
					'post_type'  => 'object',
				);
				$objectsQuery = new WP_Query;
				$objects = $objectsQuery->query($args);
				foreach( $objects as $object ){
			?>
							<div class="object-card object-archive__card" style=" background-image:url('<?php echo get_the_post_thumbnail_url( $object->ID, 'full' );?>')" ontouchstart="">
							  <div class="object__overlay">
								<h2 class="object-card__headnig"> <?php echo get_the_title( $object->ID);?> </h2>
								<h2 class="object-card__number"> <?php echo get_post_meta( $object->ID, 'номер_проекта' )[0]; ?> </h2>
								<div class="object-card__stats">
								  <span class="object-card__feature object-type"> <?php echo get_post_meta( $object->ID, 'тип' )[0]; ?> </span>
								  <span class="object-card__feature object-square"> <?php echo get_post_meta( $object->ID, 'характеристики' )[0]; ?> </span>
									<span class="object-card__feature object-year"> <?php echo get_post_meta( $object->ID, 'год' )[0]; ?>г</span>
								  <span class="object-card__feature object-material"> <?php echo get_post_meta( $object->ID, 'материал' )[0]; ?> </span>
								</div>
											<a href=" <?php echo get_post_permalink($object->ID); ?> " class="object-card__button button">
												<span class="button__body">Смотреть</span>
											</a> 
							  </div>
						  </div>
			<?php } wp_reset_query();?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
