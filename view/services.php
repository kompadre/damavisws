<?php $currentPage = 'services'; include('./include/header.php'); ?>
<div class="services big-banner">
    <div class="double-title">
        <p>SERVICES</p>
        <h3>We add value by promoting the use of Big Data to create success stories from efficient strategies.</h3>
        <p class="content">Management, Artificial Intelligence,  Visualization and Real Time data comprehension. All by Damavis.</p>
    </div>
</div>
<div class="services technology big-banner">
    <div class="double-title">
        <p>TECHNOLOGY</p>
        <h3>Data management</h3>
        <p class="content">This service stack includes all the necessary processes that intend to organize data in a way that is is prepared to obtain value from it by creating artificial intelligence models and dynamic visualizations that take place in further stages.</p>
    </div>
    <div class="cards">
        <div class="card">
            <img src="../img/services/card-1.png" />
            <h3>Data Lake</h3>
            <p>We are experts at creating data repositories in their natural format in a way that fulfils the specific needs of our clients thus creating a centralized and strong base so that the different parts of the company can use this source of information to develop their own projects.</p>
        </div>
        <div class="card">
            <img src="../img/services/card-2.png" />
            <h3>Data Warehouse</h3>
            <p>We take care of understanding the problems of our customers in order to decide which is the optimal format in which their data should be stored.</p>
        </div>
        <div class="card">
            <img src="../img/services/card-3.png" />
            <h3>Data Warehouse</h3>
            <p>Extract, Transform and Load, also known as ETL, involves the transformation and processing of data so that analytical teams can develop artificial intelligence models as well as visualizations on which the company relies on.</p>
        </div>
    </div>
</div>
<div class="services technology big-banner ai">
    <div class="double-title">
        <p>TECHNOLOGY</p>
        <h3>Artificial Intelligence</h3>
        <p class="content">Understanding and modelling the underlying patterns that are present in data provides a great competitive advantage to companies since, not only more correct strategic decisions are made, but these decisions are executed practically in real time due to the automation of these processes.</p>
    </div>
    <div class="cards">
        <div class="card">
            <img src="../img/services/card-4.png" />
            <h3>Customer Segmentation</h3>
            <p>We are experts at creating data repositories in their natural format in a way that fulfils the specific needs of our clients thus creating a centralized and strong base so that the different parts of the company can use this source of information to develop their own projects.</p>
        </div>
        <div class="card">
            <img src="../img/services/card-5.png" />
            <h3>Search of Optimal Paths</h3>
            <p>We take care of understanding the problems of our customers in order to decide which is the optimal format in which their data should be stored.</p>
        </div>
        <div class="card">
            <img src="../img/services/card-6.png" />
            <h3>Record Linkage</h3>
            <p>Extract, Transform and Load, also known as ETL, involves the transformation and processing of data so that analytical teams can develop artificial intelligence models as well as visualizations on which the company relies on.</p>
        </div>

        <div class="card">
            <img src="../img/services/card-7.png" />
            <h3>Time Series Prediction</h3>
            <p>We are able to model any type of time series that has an implicit pattern, such as predicting product demands, prices or cash flows, using classic statistical techniques.</p>
        </div>
        <div class="card">
            <img src="../img/services/card-8.png" />
            <h3>Conversion Probability Estimation</h3>
            <p>We can estimate the probability of purchasing a product in a particular context using advanced classification algorithms. Something very valuable in terms of eCommerce, where knowing how much to bet on a product determines the profitability of an online marketing policy.</p>
        </div>
        <div class="card">
            <img src="../img/services/card-9.png" />
            <h3>Pricing Optimization</h3>
            <p>We develop intelligent algorithms for our clients that are able to understand the market context and change the price dynamically and automatically, thus increasing the speed of reaction to market changes and therefore their competitiveness.</p>
        </div>


        <div class="card">
            <img src="../img/services/card-10.png" />
            <h3>Text Analysis</h3>
            <p>We are able to model any type of time series that has an implicit pattern, such as predicting product demands, prices or cash flows, using classic statistical techniques.</p>
        </div>
        <div class="card">
            <img src="../img/services/card-11.png" />
            <h3>Recommendation Systems</h3>
            <p>We can estimate the probability of purchasing a product in a particular context using advanced classification algorithms. Something very valuable in terms of eCommerce, where knowing how much to bet on a product determines the profitability of an online marketing policy.</p>
        </div>
        <div class="card">
            <img src="../img/services/card-12.png" />
            <h3>Image Recognition</h3>
            <p>We develop intelligent algorithms for our clients that are able to understand the market context and change the price dynamically and automatically, thus increasing the speed of reaction to market changes and therefore their competitiveness.</p>
        </div>
    </div>
</div>
<div class="services technology big-banner viz">
    <div class="double-title">
        <p>TECHNOLOGY</p>
        <h3>Data management</h3>
        <p class="content">This service stack includes all the necessary processes that intend to organize data in a way that is is prepared to obtain value from it by creating artificial intelligence models and dynamic visualizations that take place in further stages.</p>
    </div>
    <div class="cards">
        <div class="card">
            <img src="../img/services/card-13.png" />
            <h3>Business Intelligence Tools</h3>
            <p>We transform information into knowledge in order to optimize the strategic decisions of a company by integrating any Business Intelligence technology according to the needs and preferences of our customers.</p>
        </div>
        <div class="card">
            <img src="../img/services/card-14.png" />
            <h3>Dashboards</h3>
            <p>We are experts at developing interactive Dashboards that, based on large volumes of data, visually shows direct results and helps to make strategic decisions.</p>
        </div>
        <div class="card">
            <img src="../img/services/card-15.png" />
            <h3>High Dimensions Visualization</h3>
            <p>We provide visualization tools that make easy to quickly understand what is happening in our clients' market and thus be able to apply predictive analysis techniques and future projections.</p>
        </div>
    </div>
</div>

<div class="services technology big-banner rt">
    <div class="double-title">
        <p>TECHNOLOGY</p>
        <h3>Real Time</h3>
        <p class="content">We provide all our services in real time at the request of our clients, as the reaction time is essential to determine, in many contexts, changes in market trends.</p>
    </div>
</div>
<div class="services technology big-banner last">
    <div class="double-title center">
        <p>TECHNOLOGY</p>
        <h3>We have experience with the best technologies from the Big Data field and we are constantly adding new ones.</h3>
    </div>
    <div class="logos">
        <?php for($i=1;$i<16;$i++) : ?>
        <img src="img/services/logo-<?= $i ?>.png" />
        <?php endfor; ?>
    </div>
</div>
<?php include('./include/form.php'); ?>
<?php include('./include/footer.php'); ?>
