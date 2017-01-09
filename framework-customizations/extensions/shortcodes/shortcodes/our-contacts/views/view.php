<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>
<div class="contact-us-contacts">

    <div class="contact-us-contacts-items">
        <div class="contacts-descr-container">
                <span class="contact-us-icon">
                    <img class="icon-mail" src="<?= get_template_directory_uri();?>/img/icons/contacts_email.png" alt="">
                </span>
            <h4><?= $atts['email_title'];?></h4>
            <div class="contacts-descr">
                <a href="mailto:<?= $atts['email'];?>" class="desr-bold"><?= $atts['email'];?></a>
                <p class="descr"><?= $atts['email_desc'];?></p>
            </div>
        </div>
    </div>
    <div class="contact-us-contacts-items">
        <div class="contacts-descr-container">
                <span class="contact-us-icon">
                    <img class="icon-phone" src="<?= get_template_directory_uri();?>/img/icons/contacts_phone.png" alt="">
                </span>
            <h4><?= $atts['call_us_desc'];?></h4>
            <div class="contacts-descr">
                <?php foreach ($atts['call_us_box'] as $att): ?>
                    <p class="descr"><?= $att['phone_type'];?></p>
                    <p class="desr-bold"><?= $att['phones'];?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="contact-us-contacts-items">
        <div class="contacts-descr-container">
                <span class="contact-us-icon">
                    <img class="icon-marker" src="<?= get_template_directory_uri(); ?>/img/icons/contacts_write_us.png" alt="">
                </span>
            <h4><?= $atts['write_us_title'];?></h4>
            <div class="contacts-descr">
                <p class="descr"><?= $atts['write_us_desc'];?></p>
                <p class="desr-bold"><?= $atts['write_us_location'];?></p>
            </div>
        </div>
    </div>
    <div class="contact-us-contacts-items">
        <div class="contacts-descr-container">
                <span class="contact-us-icon">
                    <img class="icon-follow" src="<?= get_template_directory_uri();?>/img/icons/contacts_followus.png" alt="">
                </span>
            <h4><?= $atts['follow_us_title'];?></h4>
            <div class="contacts-descr contact-us-social">
                <?php foreach ($atts['follow_us_box'] as $att): ?>
                    <a target="_blank" href="<?= $att['link'];?>" class="social-links"><img src="<?= $att['icon']['url'];?>" alt=""><?= $att['title'];?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
