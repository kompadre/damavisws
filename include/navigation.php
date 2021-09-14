<?php $isActive = function($wat) use ($currentPage) { echo $wat == $currentPage ? 'active' : ''; }; ?>
<nav class="links">
    <a title="<?= _('Data Driven') ?>" class="<?= $isActive('datadriven') ?>" href="/<?= $lang ?>/data-driven/"><?= _('Data Driven') ?></a>
    <a title="<?= _('Services') ?>" class="<?= $isActive('services') ?>" href="/<?= $lang ?>/services/"><?= _('Services') ?></a>
    <a title="<?= _('About Us') ?>" class="<?= $isActive('about') ?>" href="/<?= $lang ?>/about/"><?= _('About Us') ?></a>
    <a title="<?= _('Our Team') ?>" class="<?= $isActive('team') ?>" href="/<?= $lang ?>/team/"><?= _('Our Team') ?></a>
    <a title="<?= _('Work with us') ?>" class="<?= $isActive('work') ?>" href="/<?= $lang ?>/job/"><?= _('Work with us') ?></a>
    <a title="<?= _('Blog') ?>" href="https://blog.damavis.com/<?= '' . ($lang != 'es' ? $lang . '/' : '') ?>"><?= _('Blog') ?></a>
    <a title="<?= _('Contact') ?>" class="<?= $isActive('contact') ?>" href="/<?= $lang ?>/contact/"><?= _('Contact') ?></a>
    <?php if (isset($showLegal)) : ?>
    <a title="<?= _('Legal') ?>" class="<?= $isActive('legal') ?>" href="/<?= $lang ?>/legal/"><?= _('Legal') ?></a>
    <?php endif; ?>
</nav>
