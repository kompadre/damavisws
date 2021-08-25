<div class="home contact">
    <div class="contact-form">
        <div class="double-title">
            <p class="center"><?= _('CONTACT') ?></p>
            <h3 class="center"><?= _('Set up your data-driven growth') ?></h3>
        </div>
        <form id="contact-form">
            <label for="input-contact-name"><?= _('What is your name?') ?></label>
            <input type="text" id="input-contact-name" name="name" placeholder="<?= _('Type here') ?>" required>
            <label for="input-contact-email"><?= _('What is your email?') ?>*</label>
            <input type="email" id="input-contact-email" name="email" placeholder="<?= _('Type here') ?>" pattern="[a-zA-Z0-9.-_]+@([a-zA-Z0-9]+\.)+[a-zA-Z]{2,}" required>
            <label for="input-contact-org"><?= _('What is your organization?') ?></label>
            <input type="text" id="input-contact-org" name="org" placeholder="<?= _('Type here') ?>" required>
            <label for="textarea-contact-message"><?= _('What is your message?') ?></label>
            <textarea id="textarea-contact-message" name="message" placeholder="<?= _('Type here') ?>" required minlength="32"></textarea>
            <button class="cta"><?= _('Send Message') ?></button>
            <p class="small-font"><?= __('By clicking the “%s” button, you agree on our <a href="%s">terms of pricacy</a>.', _('Send Message'), '/' . $lang . '/legal/') ?></p>
            <p class="small-font"><?= _('The fields marked with a star (*) are mandatory') ?></p>
        </form>
        <div class="form-sent hide">
            <img src="../img/icons/Check.png" />
            <h3><?= _('Message received.') ?></h3>
            <p><?= _('We usually take one day to respond.') ?></p>
        </div>
        <a class="contact-jobs-link" href="/<?= $lang ?>/services/">
            > <?= _('Do you need our services?') ?>
        </a>
    </div>
</div>