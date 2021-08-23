<?php
    $currentPage = 'team'; include('./include/header.php');
    $team = [['david_martin', 'David Martín', _('Co-founder').' | '._('CEO') ],
            ['tofol_torrens', 'Tòfol Torrens', _('Co-founder').' | '._('Head Data Engineer')],
            ['joan_martin', 'Joan Martín', _('Co-founder').' | '._('Head Data Engineer')],
            ['oscar_garcia', 'Óscar García', _('Co-founder').' | '._('Head Data Engineer')],
            ['daniel_bestard', 'Daniel Bestard', _('Co-founder').' | '._('Head Data Scientist')],
            ['victor_prats', 'Víctor Prats', _('Co-founder').' | '._('Head Data Scientist')],
            ['antonio_boutaour', 'Antonio Boutaour', _('Data Scientist')],
            ['pedro_riera', 'Pedro Riera', _('Data Engineer')],
            ['carlos_rodriguez', 'Carlos Isaac Rodríguez', _('Data Scientist')],
            ['corina_schuster', 'Corina Schuster', _('Quality Assurance')],
            ['biel_garau', 'Biel Garau', _('Data Scientist')],
            ['pedro_novas', 'Pedro Novas', _('Data Engineer')]];
?><div class="team big-banner">
        <div class="double-title">
            <p><?= _('OUR TEAM') ?></p>
            <h3><?= _('Meet Damavis') ?></h3>
            <p class="content"><?= _('The high versatility of our profiles makes it possible for us to provide our services in any area related to data.') ?></p>
        </div>
        <div class="cards">
            <?php foreach($team as $member) : ?>
            <div class="card">
                <img src="img/team/<?= $member[0] ?>.jpg" alt="Damavis Team <?= $member[2] ?> <?= $member[1]?>" />
                <div class="footer">
                    <p class="name"><?= $member[1] ?></p>
                    <p class="position"><?= $member[2] ?></p>
                    <div class="social">
                        <img src="../img/icons/Twitter.svg">
                        <img src="../img/icons/Github.svg">
                        <img src="../img/icons/Linkedin.svg">
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php include('./include/form.php'); ?>
<?php include('./include/footer.php'); ?>