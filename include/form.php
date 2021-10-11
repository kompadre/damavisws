<?php $isWork = $currentPage == 'work'; $isContact = $currentPage == 'contact'; ?>
<div class="home contact" id="contact-form-mark">
    <div class="contact-form">
        <div class="double-title">
            <p class="center"><?= _( $isWork ? 'JOIN US' : 'CONTACT' ) ?></p>
            <h<?= $isContact ? '1' : '3' ?> class="normal-header center">
                <?= _($isWork ? 'Do you want to be part of the Damavis team?' : 'Set up your data-driven growth') ?>
            </h<?= $isContact ? '1' : '3' ?>>
        </div>
        <form id="contact-form">
            <input type="hidden" name="csrf" value="" />
            <input type="hidden" name="purpose" value="workWithUs" />
            <?php if ($currentPage != 'work') : ?>
                <label for="input-contact-name"><?= _('What is your name?') ?>*</label>
                <input type="text" id="input-contact-name" name="name" placeholder="<?= _('Type here') ?>" required>
                <label for="input-contact-email"><?= _('What is your email?') ?>*</label>
                <input type="email" id="input-contact-email" name="email" placeholder="<?= _('Type here') ?>" required>
                <label for="textarea-contact-message"><?= _('What is your message?') ?></label>
                <textarea id="textarea-contact-message" name="message" placeholder="<?= _('Type here') ?>"></textarea>
            <?php else: ?>
                <label for="input-contact-name"><?= _('What is your name?') ?>*</label>
                <input type="text" id="input-contact-name" name="name" placeholder="<?= _('Type here') ?>" required>
                <label for="input-contact-email"><?= _('What is your email?') ?>*</label>
                <input type="email" id="input-contact-email" name="email" placeholder="<?= _('Type here') ?>" required>
            <?php endif; ?>
            <button class="cta" class="g-recaptcha" data-sitekey="<?= getenv('RECAPTCHA_SITE') ?>" data-callback="recaptchaCallback" data-action="submit">
                <?= _('Send Message') ?>
            </button>
            <p class="small-font">
                <?= __('By clicking the “%s” button, you agree on our %s.',
                    _('Send Message'),
                    '<a href="/' . $lang . '/legal/" target="_blank" title="'._('terms and conditions').'">'. _('terms and conditions') .'</a>') ?></p>
            <p class="small-font"><?= _('The fields marked with a star (*) are mandatory') ?></p>
        </form>
        <div class="form-sent hide">
            <img src="img/icons/Check.png" />
            <h3><?= _('Message received.') ?></h3>
            <p><?= _('We usually take one day to respond.') ?></p>
        </div>
        <a class="contact-jobs-link" href="/<?= $lang . '/' . ($isWork ? 'services' : 'job') ?>/">
            > <?= _($isWork ? 'Do you need our services?' : 'Do you want to work with us?') ?>
        </a>
    </div>
</div>