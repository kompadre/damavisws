<?php $currentPage = 'services'; include('./include/header.php'); +
    $normalizePath = function($string) {
        if (function_exists('transliterator_transliterate')) { $string = transliterator_transliterate('Any-Latin; Latin-ASCII', $string); } // Needs php extension intl
        return preg_replace('/-{2,}/', '-', preg_replace('/[\s\W]/', '-', strtolower($string)));
    };
?>
<div class="services big-banner">
    <div class="double-title">
        <p><?= _('SERVICES') ?></p>
        <h1><?= _('We add value by promoting the use of Big Data to create success stories from efficient strategies.') ?></h1>
        <p class="content"><?= _('Management, Artificial Intelligence,  Visualization and Real Time data comprehension. All by Damavis.') ?></p>
    </div>
</div>
<div class="services technology big-banner" id="data-management">
    <div class="double-title">
        <p><?= _('TECHNOLOGY') ?></p>
        <h2><?= _('Data management') ?></h2>
        <p class="content"><?= _('This service stack includes all the necessary processes that intend to organize data in a way that is is prepared to obtain value from it by creating artificial intelligence models and dynamic visualizations that take place in further stages.') ?></p>
    </div>
    <div class="cards">
        <div class="card">
            <img src="../img/services/<?= $normalizePath(_('Data Lake')); ?>-card-1.png" alt="<?= _('Data Lake') ?>" />
            <h3><?= _('Data Lake') ?></h3>
            <p><?= _('We are experts at creating data repositories in their natural format in a way that fulfils the specific needs of our clients thus creating a centralized and strong base so that the different parts of the company can use this source of information to develop their own projects.') ?></p>
        </div>
        <div class="card">
            <img src="../img/services/<?= $normalizePath(_('Data Warehouse')); ?>-card-2.png" alt="<?= _('Data Warehouse') ?>" />
            <h3><?= _('Data Warehouse') ?></h3>
            <p><?= _('We take care of understanding the problems of our customers in order to decide which is the optimal format in which their data should be stored.') ?></p>
        </div>
        <div class="card">
            <img src="../img/services/<?= $normalizePath(_('ETL')); ?>-card-3.png" alt="<?= _('ETL') ?>" />
            <h3><?= _('ETL') ?></h3>
            <p><?= _('Extract, Transform and Load, also known as ETL, involves the transformation and processing of data so that analytical teams can develop artificial intelligence models as well as visualizations on which the company relies on.') ?></p>
        </div>
    </div>
</div>
<div class="services technology big-banner ai" id="ai">
    <div class="double-title">
        <p><?= _('TECHNOLOGY') ?></p>
        <h2><?= _('Artificial Intelligence') ?></h2>
        <p class="content"><?= _('Understanding and modelling the underlying patterns that are present in data provides a great competitive advantage to companies since, not only more correct strategic decisions are made, but these decisions are executed practically in real time due to the automation of these processes.') ?></p>
    </div>
    <div class="cards">
        <div class="card">
            <img src="../img/services/<?= $normalizePath(_('Customer Segmentation')); ?>-card-4.png" alt="<?= _('Customer Segmentation') ?>" />
            <h3><?= _('Customer Segmentation') ?></h3>
            <p><?= _('We are experts at creating data repositories in their natural format in a way that fulfils the specific needs of our clients thus creating a centralized and strong base so that the different parts of the company can use this source of information to develop their own projects.') ?></p>
        </div>
        <div class="card">
            <img src="../img/services/<?= $normalizePath(_('Search of Optimal Paths')); ?>-card-5.png" alt="<?= _('Search of Optimal Paths') ?>" />
            <h3><?= _('Search of Optimal Paths') ?></h3>
            <p><?= _('We take care of understanding the problems of our customers in order to decide which is the optimal format in which their data should be stored.') ?></p>
        </div>
        <div class="card">
            <img src="../img/services/<?= $normalizePath(_('Record Linkage')); ?>-card-6.png" alt="<?= _('Record Linkage') ?>" />
            <h3><?= _('Record Linkage') ?></h3>
            <p><?= _('We create relationships of the records that lack unique identifier between the different data sources, using probabilistic methodologies of Record Linkage or Machine Learning.') ?></p>
        </div>
        <div class="card">
            <img src="../img/services/<?= $normalizePath(_('Time Series Prediction')); ?>-card-7.png" alt="<?= _('Time Series Prediction') ?>" />
            <h3><?= _('Time Series Prediction') ?></h3>
            <p><?= _('We are able to model any type of time series that has an implicit pattern, such as predicting product demands, prices or cash flows, using classic statistical techniques.') ?></p>
        </div>
        <div class="card">
            <img src="../img/services/<?= $normalizePath(_('Conversion Probability Estimation')); ?>-card-8.png" alt="<?= _('Conversion Probability Estimation') ?>" />
            <h3><?= _('Conversion Probability Estimation') ?></h3>
            <p><?= _('We can estimate the probability of purchasing a product in a particular context using advanced classification algorithms. Something very valuable in terms of eCommerce, where knowing how much to bet on a product determines the profitability of an online marketing policy.') ?></p>
        </div>
        <div class="card">
            <img src="../img/services/<?= $normalizePath(_('Pricing Optimization')); ?>-card-9.png" alt="<?= _('Pricing Optimization') ?>" />
            <h3><?= _('Pricing Optimization') ?></h3>
            <p><?= _('We develop intelligent algorithms for our clients that are able to understand the market context and change the price dynamically and automatically, thus increasing the speed of reaction to market changes and therefore their competitiveness.') ?></p>
        </div>
        <div class="card">
            <img src="../img/services/<?= $normalizePath(_('Text Analysis')); ?>-card-10.png" alt="<?= _('Text Analysis') ?>" />
            <h3><?= _('Text Analysis') ?></h3>
            <p><?= _('We are able to model any type of time series that has an implicit pattern, such as predicting product demands, prices or cash flows, using classic statistical techniques.') ?></p>
        </div>
        <div class="card">
            <img src="../img/services/<?= $normalizePath(_('Recommendation Systems')); ?>-card-11.png" alt="<?= _('Recommendation Systems') ?>" />
            <h3><?= _('Recommendation Systems') ?></h3>
            <p><?= _('We can estimate the probability of purchasing a product in a particular context using advanced classification algorithms. Something very valuable in terms of eCommerce, where knowing how much to bet on a product determines the profitability of an online marketing policy.') ?></p>
        </div>
        <div class="card">
            <img src="../img/services/<?= $normalizePath(_('Image Recognition')); ?>-card-12.png" alt="<?= _('Image Recognition') ?>" />
            <h3><?= _('Image Recognition') ?></h3>
            <p><?= _('We develop intelligent algorithms for our clients that are able to understand the market context and change the price dynamically and automatically, thus increasing the speed of reaction to market changes and therefore their competitiveness.') ?></p>
        </div>
    </div>
</div>
<div class="services technology big-banner viz" id="visualization">
    <div class="double-title">
        <p><?= _('TECHNOLOGY') ?></p>
        <h2><?= _('Visualization') ?></h2>
        <p class="content"><?= _('Our visualization services allow our clients to understand the dynamics of their market at a glance through dynamic dashboards, adapted to their specific needs.') ?></p>
    </div>
    <div class="cards">
        <div class="card">
            <img src="../img/services/<?= $normalizePath(_('Business Intelligence Tools')); ?>-card-13.png" alt="<?= _('Business Intelligence Tools') ?>" />
            <h3><?= _('Business Intelligence Tools') ?></h3>
            <p><?= _('We transform information into knowledge in order to optimize the strategic decisions of a company by integrating any Business Intelligence technology according to the needs and preferences of our customers.') ?></p>
        </div>
        <div class="card">
            <img src="../img/services/<?= $normalizePath(_('Dashboards')); ?>-card-14.png" alt="<?= _('Dashboards') ?>" />
            <h3><?= _('Dashboards') ?></h3>
            <p><?= _('We are experts at developing interactive Dashboards that, based on large volumes of data, visually shows direct results and helps to make strategic decisions.') ?></p>
        </div>
        <div class="card">
            <img src="../img/services/<?= $normalizePath(_('High Dimensions Visualization')); ?>-card-15.png" alt="<?= _('High Dimensions Visualization') ?>" />
            <h3><?= _('High Dimensions Visualization') ?></h3>
            <p><?= _('We provide visualization tools that make easy to quickly understand what is happening in our clients\' market and thus be able to apply predictive analysis techniques and future projections.') ?></p>
        </div>
    </div>
</div>

<div class="services technology big-banner rt" id="rt">
    <div class="double-title">
        <p><?= _('TECHNOLOGY') ?></p>
        <h2><?= _('Real Time') ?></h2>
        <p class="content"><?= _('We provide all our services in real time at the request of our clients, as the reaction time is essential to determine, in many contexts, changes in market trends.') ?></p>
    </div>
</div>
<div class="services technology big-banner last">
    <div class="double-title center">
        <p><?= _('TECHNOLOGY') ?></p>
        <h2><?= _('We have experience with the best technologies from the Big Data field and we are constantly adding new ones.') ?></h2>
    </div>
    <div class="logos"><?php $techs = [ null, 'Apache Spark', 'Hadoop', 'Kafka', 'Storm', 'MongoDB', 'Elastic', 'Docker', 'H2O.AI', 'Python', 'Scala', 'Snowflake',
            'Scikit Learn', 'Jupyter', 'Neo4J', 'Databricks', 'Hortonworks', 'Cloudera', 'Google Cloud Platform', 'Amazon Web Services', 'Azure' ];
            for($i=1;$i<=15;$i++) : ?><img src="img/services/logo-<?= $i ?>.png" alt="<?= $techs[$i] ?> <?= _('Damavis Services Technologies') ?>" />
        <?php endfor; ?>
    </div>
</div>
<?php include('./include/form.php'); ?>
<?php include('./include/footer.php'); ?>
