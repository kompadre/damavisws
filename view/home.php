<?php $currentPage = 'home'; $darkBg = true; include('./include/header.php'); unset($darkBg); ?>
    <div class="home banner banner_video">
        <div class="video">
            <video autoplay muted loop id="header_video" class="hidden">
                <source src="../img/video/1_damavis_cube.mp4" type="video/mp4">
            </video>
        </div>
        <div class="banner-content">
            <p><?= _('BIG DATA STUDIO') ?></p>
            <h1><?= _('Get insights from your data') ?></h1>
            <p><?= _('Damavis is an innovative startup specialized in the management of the most important resource of 21st century companies: their data. Our main objective is to get the highest possible performance of the data so that our clients can make better strategic decisions, ensuring scalability, maximum flexibility and integration of artificial intelligence algorithms.') ?></p>
            <button class="cta">Reach us</button>
        </div>
    </div>
    <div class="home services">
        <div class="double-title">
            <p class="center"><?= _('SERVICES') ?></p>
            <h3 class="center"><?= _('We provide the state-of-the-art data solutions your firm needs to grow.') ?></h3>
        </div>
        <div class="cards">
            <div class="card">
                <img src="../img/home/ill-services-1.png" />
                <a href="">&gt;&nbsp;&nbsp;&nbsp;<?= _('Data Management') ?></a>
            </div>
            <div class="card">
                <img src="../img/home/ill-services-2.png" />
                <a href="">&gt;&nbsp;&nbsp;&nbsp;<?= _('Artificial Intelligence') ?></a>
            </div>
            <div class="card">
                <img src="../img/home/ill-services-3.png" />
                <a href="">&gt;&nbsp;&nbsp;&nbsp;<?= _('Data Visualization') ?></a>
            </div>
            <div class="card">
                <img src="../img/home/ill-services-4.png" />
                <a href="">&gt;&nbsp;&nbsp;&nbsp;<?= _('Real Time') ?></a>
            </div>
        </div>
    </div>
    <div class="home data-driven">
        <div class="steps">
            <img src="../img/home/ill-datadriven-pointer.png" class="pointer" />
            <div>
                <div class="stage"><?= __('Stage %d', 1) ?></div>
                <?= _('Data-Resistant') ?>
            </div>
            <img src="../img/home/ill-datadriven-circle.png">
            <video autoplay muted loop preload="auto">
                <source src="../img/video/dd_01.webm?cache=<?= time() ?>">
                <source src="../img/video/dd_01.mov?cache=<?= time() ?>">
            </video>
            <div>
                <div class="stage"><?= __('Stage %d', 2) ?></div>
                <?= _('Data-Aware') ?>
            </div>
            <img src="../img/home/ill-datadriven-circle.png">
            <video autoplay muted loop preload="auto">
                <source src="../img/video/dd_02.webm?cache=<?= time() ?>">
                <source src="../img/video/dd_02.mov?cache=<?= time() ?>">
            </video>
            <div>
                <div class="stage"><?= __('Stage %d', 3) ?></div>
                <?= _('Data-Guided') ?>
            </div>
            <img src="../img/home/ill-datadriven-circle.png">
            <video autoplay muted loop preload="auto">
                <source src="../img/video/dd_03.webm?cache=<?= time() ?>">
                <source src="../img/video/dd_03.mov?cache=<?= time() ?>">
            </video>
            <div>
                <div class="stage"><?= __('Stage %d', 4) ?></div>
                <?= _('Data-Savy') ?>
            </div>
            <img src="../img/home/ill-datadriven-circle.png">
            <video autoplay muted loop preload="auto">
                <source src="../img/video/dd_04.webm?cache=<?= time() ?>">
                <source src="../img/video/dd_04.mov?cache=<?= time() ?>">
            </video>
            <div>
                <div class="stage"><?= __('Stage %d', 5) ?></div>
                <?= _('Data-Driven') ?>
            </div>
            <img src="../img/home/ill-datadriven-circle-last.png">
            <video autoplay muted loop preload="auto">
                <source src="../img/video/dd_05.webm?cache=<?= time() ?>">
                <source src="../img/video/dd_05.mov?cache=<?= time() ?>">
            </video>
        </div>
        <div>
            <div class="double-title">
                <p class="left"><?= _('DATA DRIVEN') ?></p>
                <h3 class="left"><?= _('The solution is hidden in your data. Let us reveal it for you.') ?></h3>
            </div>
            <p><?= _('The objective of Damavis is to work hand in hand with our clients to take them to the Data Driven Stage, in which it is possible to be highly competitive through an intelligent use of the data. The following five stages describe the path to achieving complete Digital Transformation.') ?></p>
        </div>
    </div>
    <div class="home team">
        <div>
            <div class="double-title">
                <p class="left"><?= _('MEET OUR TEAM') ?></p>
                <h3 class="left"><?= _('We are strongly committed to teamwork, quality, assertiveness, effectiveness and efficiency.') ?></h3>
            </div>
            <p><?= _('Aware of the power that data can offer the world, we have created a team of experts with the ability to create and deliver Big Data tools that lead to success.') ?></p>
            <a class="cta" href="/<?= $lang ?>/team/"><?= _('Meet us') ?></a>
        </div>
        <div>
            <img src="../img/home/ill-team.png">
        </div>
    </div>
    <div class="home clients">
        <div class="double-title">
            <p class="center"><?= _('CLIENTS') ?></p>
            <h3 class="center"><?= _('We have performed outstanding projects with:') ?></h3>
        </div>
        <div class="logos">
            <img src="../img/clients/camper.png">
            <img src="../img/clients/avoris.png">
            <img src="../img/clients/barcelo.png">
            <img src="../img/clients/fastpay.png">
            <img src="../img/clients/jtg.png">
            <img src="../img/clients/hotelbeds.png">
            <img src="../img/clients/melia.png">
            <img src="../img/clients/globalia.png">
            <img src="../img/clients/inno.png">
            <img src="../img/clients/tcgfactory.png">
            <img src="../img/clients/w2m.png">
        </div>
    </div>
    <?php include('./include/form.php'); ?>
<?php include('./include/footer.php'); ?>