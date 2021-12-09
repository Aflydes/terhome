<?php 
/* Template name: Contacts page */ 
get_header();
?>
 <div class="contacts__page content">
    <div class="container">
        <div class="contacts__map">
            <h3 class="contacts__map-heading">ВСЕГДА НА СВЯЗИ</h3>
            <div class="contacts__map-frame">
				<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A9dbfb706530274b35f9025981fc5ef89bcd18206b12affbeec137a486be3eda9&amp;source=constructor" width="100%" height="332" frameborder="0"></iframe>
                <div class="contacts__map-info">
                    <h3 class="contacts__map-info-heading">Контакты</h3>
                    <p class="contacts__map-info-p">
						<object class="contacts__map-icon-phone" data="/wp-content/uploads/2021/09/phone-icon.svg" type="image/svg+xml"></object>
                        <span class="contacts__map-info-label">Звоните</span>
                        <a href="tel:+79990090929" class="contacts__map-info-phone">+7 (999) 0090929</a>
                    </p>
                    <p class="contacts__map-info-p">
						<object class="contacts__map-icon-phone" data="/wp-content/uploads/2021/09/mail-icon.svg" type="image/svg+xml"></object>
                        <span class="contacts__map-info-label email-label">E-Mail</span>
                        <a href="mailto:mail@maildom.ru" class="contacts__map-info-email">dom0090929@gmail.com</a>
                    </p>
                    <p class="contacts__map-info-p">
						<object class="contacts__map-icon-phone" data="/wp-content/uploads/2021/09/markup.svg" type="image/svg+xml"></object>
                        <span class="contacts__map-info-label">Адрес</span>
                        <span class="contacts__ma-info-adress">ул. Большая Разночинная дом 32</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="contacts__form">
            <h3 class="contacts__form-heading">ОСТАВЬТЕ ЗАЯВКУ</h3>
            <h3 class="contacts__form-subheading">Бесплатно составим смету за 24 часа и назначим встречу, чтобы обсудить проект.</h3>
            <div class="form">
                <?php echo do_shortcode('[contact-form-7 id="35" title="Contact page form"]'); ?>
            </div>
        </div>
    </div>
 </div>
<?php get_footer();