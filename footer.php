<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package radiance
 */

?>
<footer class="foot-right-side">
    <div class="left-footer">
        <h4>WE ARE IN SOCIAL NETWORKS:</h4>
        <ul class="social">
            <li><a href="#" class="social_link"><span class="social_vk"></span></a></li>
            <li><a href="#" class="social_link"><span class="social_fb"></span></a></li>
            <li><a href="#" class="social_link"><span class="social_ok"></span></a></li>
            <li><a href="#" class="social_link"><span class="social_twitter"></span></a></li>
            <li><a href="#" class="social_link"><span class="social_googleplus"></span></a></li>
        </ul>
    </div>
    <div class="right-footer">
        <div class="footer-mnu">
            <ul>
                <li><a href="#">new arrivals</a></li>
                <li><a href="#">sales & specials</a></li>
                <li class="modreg"><a href="#">create account</a></li>
                <li class="modlogin"><a href="#">customer login</a></li>
                <li><a href="#"> contact us</a></li>
            </ul>
        </div>
        <span class="line-brown"></span>
        <div class="bot-footer">
            <div class="bot-footer__left-side">
                <a href="#">RADIANCE.GLOBAL</a>
                <a href="#">TERMS OF USE</a>
            </div>
            <div class="bot-footer__right-side">
                <ul>
                    <li>RADIANCE &trade;</li>
                    <li>&copy; 2016</li>
                    <li><a href="#"><span class="logo_small"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="modal_div" id="modallogin">
    <span class="pink-top-line"></span>
    <!-- Modal content -->
    <form action="" class="modal_form" novalidate  method="post">
        <h5>LOG IN</h5>
        <input class="sign_mail" type="text" name="name" placeholder="Enter your e-mail">
        <input class="sign_password" type="password" name="tel" placeholder="Enter your password">
        <button class="sign_in">SIGN IN</button>
        <a href="" class="regist">Registration new user</a>
        <a href="" class="forgot_your_pass">Forgot your password?</a>
        <a href="" class="modal_close"><img src="<?= get_template_directory_uri();?>/img/icons/close.svg" alt=""></a>
    </form>
</div>
<div class="modal_div" id="modalregist">
    <span class="pink-top-line"></span>
    <!-- Modal content -->
    <form action="<?= admin_url('admin-ajax.php');?>" class="modal_form" novalidate  method="post">
        <input class="vItem" type="hidden" name="action" value="sign_up">
        <h5>REGISTRATION</h5>
        <input class="vItem" type="text" name="name" placeholder="Name">
        <input class="vItem" type="email" name="mail" placeholder="E-mail">
        <div class="radio">
            <input id="male" type="radio" name="gender" value="male">
            <label for="male">Male</label>
            <input id="female" type="radio" name="gender" value="female">
            <label for="female">Female</label>
        </div>
        <input class="vItem very-small" type="text" name="age" placeholder="Age">
        <div class="small-block">
            <select class="small" name="country">
                <option value="">Country</option>
                <option value="Russia">Russia</option>
                <option value="England">England</option>
                <option value="France">France</option>
            </select>
            <input class="small" type="text" name="city" placeholder="City">
        </div>
        <input class="vItem" type="password" name="password" placeholder="Password">
        <input  class="vItem" type="password" name="password_repeat" placeholder="Repeat password">
        <button id="subm" class="sign_in">CREATE ACCOUNT</button>
        <a href="" class="modal_close"><img src="<?= get_template_directory_uri();?>/img/icons/close.svg" alt=""></a>
    </form>
</div>
<div class="overlay"></div>
<?php wp_footer(); ?>

</body>
</html>
