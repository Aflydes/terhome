<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>	
      <footer class="footer">
        <div class="container">
          <div class="footer__col logos">
            <object class="logos__site-logo" data="/wp-content/uploads/2021/09/logo-white.svg" type="image/svg+xml"></object>
            <a href="https://www.instagram.com/prowebndesgn/" class="logos__link">
              <span class="logos__text">Design by</span>
              <div class="logos__logo"></div>
            </a>            
          </div>
          <div class="footer__col navigation">
            <ul class="footer__links navigation__list">
              <li><a href="/" class="navigation__link footer__link">О компании</a></li>
              <li><a href="<?php if (!is_page('home')) echo '/#possibilities'; else echo '#possibilities';?>" class="navigation__link footer__link">Возможности</a></li>
              <li><a href="/blog/" class="navigation__link footer__link">Новости</a></li>
			  <li><a href="/objects/" class="navigation__link footer__link">Объекты</a></li>
              <li><a href="/projects/" class="navigation__link footer__link">Проекты</a></li>
              <li><a href="/contacts/" class="navigation__link footer__link">Контакты</a></li>
            </ul>
          </div>
          <div class="footer__col usefull-links">
            <ul class="footer__links usefull-links__list">
              <li><a href="/service-design/" class="usefull-link footer__link">Проектирование</a></li>
              <li><a href="/service-building/" class="usefull-link footer__link">Строительство</a></li>
              <li><a href="/service-improvement/" class="usefull-link footer__link">Благоустройство</a></li>
              <li><a href="/service-reconstruction/" class="usefull-link footer__link">Реконструкция и отделка</a></li>
              <li> <a href="/developing/" class="usefull-link footer__link">Инвестиции</a></li>
              <li> <a href="/developing/" class="usefull-link footer__link">Кредитование</a></li>
            </ul>
          </div>
          <div class="footer__col contacts">
            <a href="tel:+79990090929" class="contacts__phone">
              <div class="footer__phone-icon"></div> +7 (999) 0090929
            </a>
            <a href="mailto:info@dom.ru" class="contacts__email">
              <div class="footer__mail-icon"></div>dom0090929@gmail.com
            </a>
            <a href="" class="contacts__button button sg-popup-id-48">
              <span class="button__body">Обратная связь</span>
            </a>
            <div class="contacts__social">
				<a  href="https://www.instagram.com/ter__home/">
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M16.0001 11.8342C13.7064 11.8342 11.8345 13.7061 11.8345 15.9999C11.8345 18.2936 13.7064 20.1655 16.0001 20.1655C18.2939 20.1655 20.1658 18.2936 20.1658 15.9999C20.1658 13.7061 18.2939 11.8342 16.0001 11.8342ZM28.4939 15.9999C28.4939 14.2749 28.5095 12.5655 28.4126 10.8436C28.3158 8.84361 27.8595 7.0686 26.397 5.60611C24.9314 4.14048 23.1595 3.68736 21.1595 3.59048C19.4345 3.49361 17.7251 3.50923 16.0033 3.50923C14.2783 3.50923 12.5689 3.49361 10.847 3.59048C8.84702 3.68736 7.07202 4.14361 5.60952 5.60611C4.1439 7.07173 3.69077 8.84361 3.5939 10.8436C3.49702 12.5686 3.51265 14.278 3.51265 15.9999C3.51265 17.7217 3.49702 19.4342 3.5939 21.1561C3.69077 23.1561 4.14702 24.9311 5.60952 26.3936C7.07515 27.8592 8.84702 28.3124 10.847 28.4092C12.572 28.5061 14.2814 28.4905 16.0033 28.4905C17.7283 28.4905 19.4376 28.5061 21.1595 28.4092C23.1595 28.3124 24.9345 27.8561 26.397 26.3936C27.8626 24.928 28.3158 23.1561 28.4126 21.1561C28.5126 19.4342 28.4939 17.7249 28.4939 15.9999ZM16.0001 22.4092C12.4533 22.4092 9.59077 19.5467 9.59077 15.9999C9.59077 12.453 12.4533 9.59048 16.0001 9.59048C19.547 9.59048 22.4095 12.453 22.4095 15.9999C22.4095 19.5467 19.547 22.4092 16.0001 22.4092ZM22.672 10.8249C21.8439 10.8249 21.1751 10.1561 21.1751 9.32798C21.1751 8.49986 21.8439 7.83111 22.672 7.83111C23.5001 7.83111 24.1689 8.49986 24.1689 9.32798C24.1691 9.52462 24.1306 9.71938 24.0555 9.9011C23.9803 10.0828 23.8701 10.2479 23.731 10.387C23.592 10.526 23.4269 10.6363 23.2451 10.7114C23.0634 10.7866 22.8687 10.8251 22.672 10.8249Z" fill="white"/>
					</svg>
				</a>
            </div>
          </div>
        </div>
      </footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
