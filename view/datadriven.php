<?php $currentPage = 'datadriven'; include('./include/header.php'); ?>
<div class="datadriven big-banner">
    <div class="double-title">
        <p><?= _('DATA DRIVEN') ?></p>
        <h1><?= _('The path to success depends on your decisions.') ?></h1>
        <p class="content"><?= _('Below, you will be able to define the stage your business is on the road to digital transformation.') ?></p>
    </div>
    <div></div>
</div>
<div class="datadriven data-driven">
    <div class="steps video-container">
        <video autoplay muted loop alt="Damavis Data Resistant Stage">
            <source src="/img/video/datadriven/dd_01.webm" type="video/webm" />
            <source src="/img/video/datadriven/dd_01.s.mp4" type="video/mp4" />
        </video>
        <div class="double-title">
            <p><?= __('Stage %d', 1) ?></p>
            <h2><?= _('Data-Resistant') ?></h2>
            <p class="content"><?= _('In this stage, the company makes no use of the data, relying on the saying "things have always been done this way", something that is a clear brake for progress. The reason why companies could be stuck in this phase is because of the fear that data reveals facts that go against internal interests, such as wrong strategic decisions or inefficient departments.') ?></p>
        </div>
        <video autoplay muted loop alt="Damavis Data Aware Stage">
            <source src="/img/video/datadriven/dd_02.webm" type="video/webm">
            <source src="/img/video/datadriven/dd_02.s.mp4" type="video/mp4" />
        </video>
        <div class="double-title">
            <p><?= __('Stage %d', 2) ?></p>
            <h2><?= _('Data-Aware') ?></h2>
            <p class="content"><?= _('Once passed the Data-Resistant stage, the company begins to be aware of the value of the data, so it begins to collect a subset of data and perform a basic descriptive analysis which does not lead to taking any action.') ?></p>
        </div>
        <video autoplay muted loop alt="Damavis Data Guided Stage">
            <source src="/img/video/datadriven/dd_03.webm" type="video/webm">
            <source src="/img/video/datadriven/dd_03.s.mp4" type="video/mp4" />
        </video>
        <div class="double-title">
            <p><?= __('Stage %d', 3) ?></p>
            <h2><?= _('Data-Guided') ?></h2>
            <p class="content"><?= _('Now the company performs extensive analysis of its data, obtaining solid conclusions of the impact of taken past decisions. In this stage, the company is only able to obtain a tactical value from the data, which implies knowing if they should continue doing what they have done until now or changing their strategy.') ?></p>
        </div>
        <video autoplay muted loop alt="Damavis Data Savy Stage">
            <source src="/img/video/datadriven/dd_04.webm" type="video/webm">
            <source src="/img/video/datadriven/dd_04.s.mp4" type="video/mp4" />
        </video>
        <div class="double-title">
            <p><?= __('Stage %d', 4) ?></p>
            <h2><?= _('Data-Savy') ?></h2>
            <p class="content"><?= _('Here, besides the obtained tactical value from the Data-Guided stage, a strategic value is also exploited, which means that the company not only focuses on the what (what has gone wrong?), but also in the (why has it gone wrong?).') ?></p>
        </div>
        <video autoplay muted loop alt="Damavis Data Driven Stage">
            <source src="/img/video/datadriven/dd_05.webm" type="video/webm">
            <source src="/img/video/datadriven/dd_05.s.mp4" type="video/mp4" />
        </video>
        <div class="double-title">
            <p><?= __('Stage %d', 5) ?></p>
            <h2><?= _('Data-Driven') ?></h2>
            <p class="content"><?= _('In this last phase, once businesses have found out what has gone wrong and why, the immediate challenge to tackle is "given that data confirms this fact, what do we do about it?". Decision making is entirely based on what the data says given that it reveals the absolute truth of what happens in the company and in the market.') ?></p>
        </div>
    </div>
</div>
<?php include('./include/form.php'); ?>
<?php include('./include/footer.php'); ?>
