<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<div class="page__404 content">
    <div class="container">
		<p class="page__404-text">Упссс...что-то пошло не так,
			данной страницы <span class="_green">не существует</span></p>
		<div class="page__404-svg">
			<object  data="/wp-content/uploads/2021/09/404.svg" type="image/svg+xml"></object>
		</div>
		<!--<object class="page__line-svg" data="/wp-content/uploads/2021/09/Vector.svg" type="image/svg+xml"></object>-->
		<a href="/" class="page__404-button button">
			<span class="button_body">Вернуться на главную</span>
		</a>
	</div>
</div>
<?php
get_footer();
