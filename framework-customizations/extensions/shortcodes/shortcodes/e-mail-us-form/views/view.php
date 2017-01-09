<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<div class="email-us-container">
    <h4><img src="<?= get_template_directory_uri();?>/img/icons/paper_plane.png" alt=""><?= $atts['section_title'];?></h4>
    <p><?= $atts['section_subtitle'];?> <a href="mailto:<?= $atts['mail'];?>"><?= $atts['mail'];?></a></p>
    <form class="send-message-form" action="#">
        <div class="inp-relative">
            <label>
                <h5><?= $atts['name_title'];?></h5>
                <input class="name" type="text">
            </label>
        </div>
        <div class="inp-relative">
            <label>
                <h5><?= $atts['mail_title'];?></h5>
                <input class="mail" type="email">
            </label>
        </div>
        <div class="textarea-container">
            <label>
                <h5><?= $atts['message_title'];?></h5>
                <textarea name="message" id="#" cols="30" rows="10"></textarea>
            </label>
        </div>
        <div class="clearfix"></div>
        <div class="btm-send">
            <label>
                <input class="subm" type="submit" value="<?= $atts['send_text'];?>">
                <div class="triangle"></div>
            </label>
        </div>
    </form>
</div>
