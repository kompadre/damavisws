    <footer>
        <div class="footer-content">
            <img src="img/logo-light.svg" class="footer-logo">
            <div class="social">
                <img src="img/icons/Facebook.svg">
                <img src="img/icons/Twitter.svg">
                <img src="img/icons/Instagram.svg">
                <img src="img/icons/Github.svg">
            </div>
            <?php include(__DIR__ . '/navigation.php'); ?>
        </div>
        <p class="footer-copyright small-font">
            © Aneior Studio S.L. - <?= _('All rights reserved') ?> - <a href="#"><?= _('Attributions') ?></a>
        </p>
    </footer>
    </div>
    <div class="modal-backdrop hide"></div>
    <div class="modal-dialog hide">
        <a class="button close"></a>
        <div class="modal-body cookie">
            <img src="../img/icons/Cookie.png" />
            <div>
                <h3><?= _('Cookies advise') ?></h3>
                <p><?= __('This website uses cookies to ensure the best experience on our website. If you want to check more details, please read our <a href="%s">Terms and Conditions</a>.', '/' . $lang . '/terms/') ?></p>
            </div>
            <div class="bottom-buttons">
                <button class="cta accept"><?= _('Okay') ?></button>
                <button class="cta close"><?= _('Close') ?></button>
            </div>

        </div>
    </div>
    <?php if (isset($prod) && $prod) : ?>
        <script><?= file_get_contents('js/damavis.min.js') ?></script>
    <?php else: ?>
        <script src="js/damavis.js"></script>
    <?php endif; ?>
    </body>
</html>