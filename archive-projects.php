<?php
/*
 * Template name: Projects archive
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
			<h3 class="object-archive__heading">ПРОЕКТЫ ДОМОВ</h3>
			<p class="object-archive__text">
				Проектирование частных домов – одно из главных направлений деятельности нашей компании. Мы выполняем геологические и геодезические изыскания, создаём концепт, разрабатываем проект от архитектурной до дизайнерской составляющей, рассчитываем стоимость и выдаём заказчику готовую проектно-сметную документацию.
Проекты, которые вы видите на этой странице, полностью готовы к реализации и могут быть забронированы.
			</p>
		</div>
		<div class="object-archive__section">
			<?php
				$args = array(
					'cat'		 => 4,
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
								  <span class="object-card__feature object-material"> <?php echo get_post_meta( $object->ID, 'материал' )[0]; ?> </span>
								</div>
							  <?php if (has_category( 4, $object->ID )){
					  					$i=1;
					  					?> <a href="# " class="object-card__button button-book button sg-popup-id-48" data-project="<?php echo get_post_meta( $object->ID, 'номер_проекта' )[0]; ?>">
												<span class="button__body">Забронировать</span>
							  					<?php if( get_post_meta( $object->ID, 'скидка' )[0]){
															echo '<object class="button-book__append" data="/wp-content/uploads/2021/09/sale.svg" type="image/svg+xml"></object>';
														}?>
										   </a> 
							  <?php } ?>
							  </div>
						  </div>
			<?php } wp_reset_query();?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
