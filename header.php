<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Author" content="Aflydes">
        

	<?php wp_head(); ?>
</head>

<body id="body">
	<div class="wrapper">
      <header class="header">
        <div class="container">
          <div class="header__logos">
			<a href="/">
			  	<svg width="29" height="50" viewBox="0 0 29 50" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M28.0093 0H27.0145V50H28.0093V0Z" fill="white"/>
					<path d="M21.0696 25.6165H10.0558V45.9129H21.0696V25.6165Z" fill="white"/>
					<path d="M22.4362 4.01021L18.7722 3.61084L0 22.3831L2.03349 24.4147L22.4362 4.01021Z" fill="white"/>
				</svg>
			</a>
          </div>
          <nav class="header__nav">
            <ul class="header__nav-list" id="header__nav-list">
              <li><a href="/" class="header__nav-link">О компании</a></li>
              <li class="has-submenu"><a href="<?php if (!is_page('home')) echo '/#possibilities'; else echo '#possibilities';?>" class="header__nav-link ">Возможности</a>
				  <ul class="header__subnav">
					  <li><a href="/service-design/" class="header__subnav-link">Проектирование</a></li>
					  <li><a href="/service-building/" class="header__subnav-link">Строительство</a></li>
					  <li><a href="/service-improvement/" class="header__subnav-link">Благоустройство</a></li>
					  <li><a href="/service-reconstruction/" class="header__subnav-link">Реконструкция и отделка</a></li>
					  <li><a href="/developing/" class="header__subnav-link">Инвестиции</a></li>
					  <li><a href="/developing/" class="header__subnav-link">Кредитование</a></li>
				  </ul>
			  </li>
              <li><a href="/projects/" class="header__nav-link">Проекты</a></li>
			  <li><a href="/objects/" class="header__nav-link">Объекты</a></li>
              <li><a href="/contacts/" class="header__nav-link">Контакты</a></li>
			  <li class="instagram-icon"><a  href="https://www.instagram.com/ter__home/">
<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.0001 11.8342C13.7064 11.8342 11.8345 13.7061 11.8345 15.9999C11.8345 18.2936 13.7064 20.1655 16.0001 20.1655C18.2939 20.1655 20.1658 18.2936 20.1658 15.9999C20.1658 13.7061 18.2939 11.8342 16.0001 11.8342ZM28.4939 15.9999C28.4939 14.2749 28.5095 12.5655 28.4126 10.8436C28.3158 8.84361 27.8595 7.0686 26.397 5.60611C24.9314 4.14048 23.1595 3.68736 21.1595 3.59048C19.4345 3.49361 17.7251 3.50923 16.0033 3.50923C14.2783 3.50923 12.5689 3.49361 10.847 3.59048C8.84702 3.68736 7.07202 4.14361 5.60952 5.60611C4.1439 7.07173 3.69077 8.84361 3.5939 10.8436C3.49702 12.5686 3.51265 14.278 3.51265 15.9999C3.51265 17.7217 3.49702 19.4342 3.5939 21.1561C3.69077 23.1561 4.14702 24.9311 5.60952 26.3936C7.07515 27.8592 8.84702 28.3124 10.847 28.4092C12.572 28.5061 14.2814 28.4905 16.0033 28.4905C17.7283 28.4905 19.4376 28.5061 21.1595 28.4092C23.1595 28.3124 24.9345 27.8561 26.397 26.3936C27.8626 24.928 28.3158 23.1561 28.4126 21.1561C28.5126 19.4342 28.4939 17.7249 28.4939 15.9999ZM16.0001 22.4092C12.4533 22.4092 9.59077 19.5467 9.59077 15.9999C9.59077 12.453 12.4533 9.59048 16.0001 9.59048C19.547 9.59048 22.4095 12.453 22.4095 15.9999C22.4095 19.5467 19.547 22.4092 16.0001 22.4092ZM22.672 10.8249C21.8439 10.8249 21.1751 10.1561 21.1751 9.32798C21.1751 8.49986 21.8439 7.83111 22.672 7.83111C23.5001 7.83111 24.1689 8.49986 24.1689 9.32798C24.1691 9.52462 24.1306 9.71938 24.0555 9.9011C23.9803 10.0828 23.8701 10.2479 23.731 10.387C23.592 10.526 23.4269 10.6363 23.2451 10.7114C23.0634 10.7866 22.8687 10.8251 22.672 10.8249Z" fill="white"/>
</svg></a></li>
            </ul>
			<div class="mobile-header__burger" id="mobile-header__burger">
				<span class="hamburger"></span>
            </div>
          </nav>
          <div class="header__buttons">
            <div class="header__callback">
              <div class="header__phone-icon"></div>
				<div class="header__callback-drodown">
                	<a href="tel:+79990090929" class="header__callback-phone">+7 (999) 0090929</a>
                	<a href="mailto:mail@maildom.ru" class="header__callback-email">dom0090929@gmail.com</a>
                	<a href="#" class="header__callback-button button sg-popup-id-48">
						<span class="button__body">Обратная связь</span>
					</a>
                </div>
            </div>
			  <a href="/developing/"><div class="header__avatar-icon"></div></a>
          </div>
        </div>
      </header>

	