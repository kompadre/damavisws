<?php
    $currentPage = 'team'; include('./include/header.php');
    $team = [
            ['david_martin', 'David Martín', _('Co-founder').' | '._('CEO') , 'sukiweb', 'sukiweb', 'sukiweb'],
            ['tofol_torrens', 'Tòfol Torrens', _('Co-founder').' | '._('Head Data Engineer'), 'piffall', 'piffall', 'piffall'],
            ['joan_martin', 'Joan Martín', _('Co-founder').' | '._('Head Data Engineer'), null, 'JoanMartin', 'juanjosemartinmiralles'],
            ['oscar_garcia', 'Óscar García', _('Co-founder').' | '._('Head Data Engineer'), null, 'OscarGarciaPeinado', 'óscar-garcía-peinado-33b26a5a'],
            ['daniel_bestard', 'Daniel Bestard', _('Co-founder').' | '._('Head Data Scientist'), null, 'danielbestard', 'daniel-bestard-delgado-10984452'],
            ['victor_prats', 'Víctor Prats', _('Co-founder').' | '._('Head Data Scientist'), null, 'fufuffu', 'v%C3%ADctor-antonio-prats-guasch-b4753b1b0'],
            ['antonio_boutaour', 'Antonio Boutaour', _('Data Scientist'), null, 'tboutaour', 'antonio-boutaour-sanchez-29387515b'],
            ['pedro_riera', 'Pedro Riera', _('Data Engineer'), null, null, 'rieramartorell'],
            ['carlos_rodriguez', 'Carlos Isaac Rodríguez', _('Data Scientist'), null, null, 'carlos-isaac-rodriguez-prado-482031155'],
            ['corina_schuster', 'Corina Schuster', _('Quality Assurance'), null, null, 'corina-schuster-g%C3%B3mez-34757a1a4'],
            ['biel_garau', 'Biel Garau', _('Data Scientist'), null, null, 'gabriel-garau-estarellas-70a1a8183'],
            ['pedro_novas', 'Pedro Novas', _('Data Engineer'), null, null, 'pedro-novas-otero']]; ?>
    <div class="team big-banner">
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
                        <?php if (isset($member[3])) : ?><a href="https://twitter.com/<?= $member[3] ?>" target="_blank" rel="nofollow"><img src="../img/icons/Twitter.svg"></a><?php endif; ?>
                        <?php if (isset($member[4])) : ?><a href="https://github.com/<?= $member[4] ?>" target="_blank" rel="nofollow"><img src="../img/icons/Github.svg"></a><?php endif; ?>
                        <?php if (isset($member[5])) : ?><a href="https://www.linkedin.com/in/<?= $member[5] ?>/" target="_blank" rel="nofollow"><img src="../img/icons/Linkedin.svg"></a><?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="team great-place big-banner center">
        <div class="double-title">
            <p><?= _('OUR TEAM') ?></p>
            <h3><?= _('A great place to work') ?></h3>
            <p class="content center"><?= _('Trust in the team is our first secret of success, that\'s why we are concerned with offering quality jobs in which to grow professionally and personally.') ?></p>
        </div>
        <div class="quotes">
            <p class="quote" style="grid-area: quote1"><?= _('Damavis offers the possibility to connect with something bigger than oneself.') ?></p>
            <p class="quote" style="grid-area: quote2"><?= _('Damavis is a team of honest and demanding people who enjoy what they do.') ?></p>
            <p class="quote" style="grid-area: quote3"><?= _('Damavis consists of a group of people who collaborate to solve amazing problems and where helping each other is essential.') ?></p>
            <p class="author" style="grid-area: author1">Corina Schuster<br><?= _('Quality Assurance') ?></p>
            <p class="author" style="grid-area: author2">Antonio Boutaour<br><?= _('Data Engineer') ?></p>
            <p class="author" style="grid-area: author3">Carlos Isaac Rodríguez<br><?= _('Data Scientist') ?></p>
        </div>
    </div>
    <div class="team life">
        <div class="photo">
            <?php for($i=1;$i<=8;$i++) : ?>
            <img src="img/team/action/damavis-about-<?= $i ?>.jpg" />
            <?php endfor; ?>
        </div>
        <div class="double-title">
            <p><?= _('OUR TEAM') ?></p>
            <h3><?= _('Life at Damavis') ?></h3>
            <p class="content"><?= _('We build the team through meaningful experiences in one of the most beautiful places in the World: Mallorca.') ?></p>
        </div>
    </div>
    <?php include('./include/form.php'); ?>
<?php include('./include/footer.php'); ?>