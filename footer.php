<?php
/**
 * The template for displaying the footer
 *
 */
?>

<!-- floating banner -->
<a href="#" class="floating-banner" target="_blank" rel="noreferrer">
    <span>媒体資料<br>ダウンロード</span>
    <span>CLICK</span>
</a>

<!-- FOOTER -->
<footer class="footer bg-gradient--left" id="footer">
    <div class="container">
        <div class="footer__wrapper">
            <ul class="footer__part">
            <li class="footer__item"><a href="<?php echo home_url(); ?>/company/" class="footer__item-link">会社概要　</a></li>
                <li class="footer__item"><a href="<?php echo home_url(); ?>/service/" class="footer__item-link">利用規約　</a></li>
                <li class="footer__item"><a href="<?php echo home_url(); ?>/privacy-policy/" class="footer__item-link">個人情報保護方針　</a></li>
                <li class="footer__item"><a href="<?php echo home_url(); ?>/law/" class="footer__item-link">特定商取引法に基づく表示</a></li>
                <li class="footer__item"><a href="#" class="footer__item-link -social"> <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/x-icon.png" alt="twitter" width="16" height="16.35" class="img-fluid" loading="lazy"></a></li>
            </ul>
            <p class="footer__text">&copy;Dunx inc. All rights reserved.</p>
            <div class="footer__logo">
                <a href="<?php echo get_home_url(); ?>" class="footer__pic">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/logo-icon.svg" alt="DUNX" width="117" height="30" class="img-fluid" loading="lazy">
                </a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script>
    // Function to check if the user's device is a MacBook, iPhone, or iPad
    function checkDevice() {
        var userAgent = navigator.userAgent.toLowerCase();
        var isMacBook = userAgent.includes('macintosh');
        var isiPhone = userAgent.includes('iphone');
        var isiPad = userAgent.includes('ipad');
        
        if (isMacBook || isiPhone || isiPad) {
            runMyScript();
        }
    }
    // Function that you want to run on specific devices
    function runMyScript() {
        document.body.classList.add('iphone-fix');
    }
    // Call the checkDevice function when the page loads
    window.onload = checkDevice;
</script>

</body>

</html>