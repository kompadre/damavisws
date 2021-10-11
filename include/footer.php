    <footer>
        <div class="footer-content">
            <img src="img/damavis-logo-light.svg" class="footer-logo" alt="Damavis">
            <div class="social">
                <a target="_blank" href="https://www.facebook.com/damavisStudio/" rel="nofollow"><img alt="Social Media Facebook" src="img/icons/Facebook.svg"></a>
                <a target="_blank" href="https://twitter.com/DamavisStudio" rel="nofollow"><img alt="Social Media Twitter" src="img/icons/Twitter.svg" ></a>
                <a target="_blank" href="https://www.instagram.com/damavisstudio/" rel="nofollow"><img alt="Social Media Instagram" src="img/icons/Instagram.svg"></a>
                <a target="_blank" href="https://github.com/damavis/" rel="nofollow"><img alt="Social Media Github" src="img/icons/Github.svg"></a>
            </div>
            <?php $showLegal = true; include(__DIR__ . '/navigation.php'); ?>
        </div>
        <p class="footer-copyright small-font">
            © Aneior Studio S.L. - <?= _('All rights reserved') ?> - <span id="btn_attributions" class="link"><?= _('Attributions') ?></span>
        </p>
    </footer>
    </div>
    <div class="modal-backdrop hide"></div>
    <div class="modal-dialog hide">
        <a class="button close"></a>
        <div id="modal-content-cookie" class="modal-body cookie hide">
            <img alt="Damavis Cookies" src="../img/icons/Cookie.png" />
            <div>
                <h3><?= _('Cookies advise') ?></h3>
                <p><?= __('This website uses cookies to ensure the best experience on our website. If you want to check more details, please read our <a href="%s">Terms and Conditions</a>.', '/' . $lang . '/terms/') ?></p>
            </div>
            <div class="bottom-buttons">
                <button class="cta accept"><?= _('Okay') ?></button>
                <button class="cta close"><?= _('Close') ?></button>
            </div>
        </div>
        <div id="modal-content-attrib" class="modal-body hide">
            <img alt="Damavis Cookies" src="../img/icons/Attribution.svg" />
            <div>
                <h3><?= _('Attributions') ?></h3>
                <p></p>
            </div>
            <div class="bottom-buttons">
                <button class="cta close"><?= _('Close') ?></button>
            </div>

        </div>
    </div>
    <?php if (isset($prod) && $prod) : ?>
        <script><?= file_get_contents('js/damavis.min.js') ?></script>
    <?php else: ?>
        <script src="js/damavis.js?cache=<?= time() ?>"></script>
    <?php endif; ?>
        <script defer async src="https://www.google.com/recaptcha/api.js"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126214848-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-126214848-1');
        </script>
    </body>
</html>