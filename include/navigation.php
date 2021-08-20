<?php $isActive = function($wat) use ($currentPage) { echo $wat == $currentPage ? 'active' : ''; }; ?>
<nav class="links">
    <a class="<?= $isActive('datadriven') ?>" href="/<?= $lang ?>/data-driven/"><?= _('Data Driven') ?></a>
    <a class="<?= $isActive('services') ?>" href="/<?= $lang ?>/services/"><?= _('Services') ?></a>
    <a class="<?= $isActive('about') ?>" href="/<?= $lang ?>/about/"><?= _('About Us') ?></a>
    <a class="<?= $isActive('team') ?>" href="/<?= $lang ?>/team/"><?= _('Our Team') ?></a>
    <a class="<?= $isActive('work') ?>" href="/job/"><?= _('Work with us') ?></a>
    <a class="<?= $isActive('blog') ?>" href="https://blog.damavis.com/"><?= _('Blog') ?></a>
    <a class="<?= $isActive('contact') ?>" href="/<?= $lang ?>/contact/"><?= _('Contact') ?></a>
</nav>
