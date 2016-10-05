<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('app', 'DataVenia');

?>
<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1><?= Yii::t('app', 'A decade of IT experience') ?></h1>
            <hr>
            <p><h3><?= Yii::t('app', 'From webdesign and payment systems to back-end development and team management.') ?></h3></p>
            <p>><a href="#about" class="btn btn-primary btn-xl page-scroll"><?= Yii::t('app', 'Find Out More') ?></a></p
        </div>
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading"><?= Yii::t('app', 'About DataVenia') ?></h2>
                <hr class="light">
                <p class="text-faded">
                    <?= Yii::t('app', 'DataVenia is a small, one-man company that I utilize for personal commercial projects and freelance jobs.') ?>
                </p>
                <a href="#services" class="page-scroll btn btn-default btn-xl sr-button"><?= Yii::t('app', 'Look At Services') ?></a>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?= Yii::t('app', 'Services and Experience') ?></h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-eur text-primary sr-icons"></i>
                    <h3><?= Yii::t('app', 'Payment Services') ?></h3>
                    <p class="text-muted"><?= Yii::t('app', 'Vast experience with a wide array of systems, services and parties in the realm of online banking and mobile payments.') ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-paint-brush text-primary sr-icons"></i>
                    <h3><?= Yii::t('app', 'Front-End Development') ?></h3>
                    <p class="text-muted"><?= Yii::t('app', 'Working mainly with Bootstrap and JQuery for modern, professional websites and user interfaces - but also experienced in Meteor and ReactJS.') ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-mobile text-primary sr-icons"></i>
                    <h3><?= Yii::t('app', 'Android App Development') ?></h3>
                    <p class="text-muted"><?= Yii::t('app', 'Native Android apps for the operating system with the largest market share on smartphones and tablets.') ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-sitemap text-primary sr-icons"></i>
                    <h3><?= Yii::t('app', 'Specification') ?></h3>
                    <p class="text-muted"><?= Yii::t('app', 'Great at writing up system specifications, both functional and technical. Talented at understanding complex system interactions.') ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-users text-primary sr-icons"></i>
                    <h3><?= Yii::t('app', 'Project Management') ?></h3>
                    <p class="text-muted"><?= Yii::t('app', 'Years of experience as a project manager of junior, medior and senior developers with regards to spreading workload, specifications and working in team settings to reach deadlines.') ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-black-tie text-primary sr-icons"></i>
                    <h3><?= Yii::t('app', 'Company Management') ?></h3>
                    <p class="text-muted"><?= Yii::t('app', 'Holding a Chief Technology Officer position - deciding company strategy from multiple viewpoints in addition to technology.') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="no-padding" id="portfolio">
    <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
            <div class="col-lg-4 col-sm-6">
                <a href="http://bitcat.datavenia.nl" target="_blank" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/bitcat.png" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Meteor & ReactJS App
                            </div>
                            <div class="project-name">
                                BitCat
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="https://play.google.com/store/apps/details?id=com.datavenia.pathfinderpanacea" target="_blank" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/android.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Android App
                            </div>
                            <div class="project-name">
                                Pathfinder Panacea
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading"><?= Yii::t('app', 'Want to get in touch?') ?></h2>
                <hr class="primary">
                <p><?= Yii::t('app', 'Don\'t hesitate to send me an email or contact me on LinkedIn!') ?></p>
            </div>
            <div class="col-lg-4 col-lg-offset-2 text-center">
                <i class="fa fa-linkedin fa-3x sr-contact"></i>
                <p><a href="https://www.linkedin.com/in/silvanv" target="_blank">https://www.linkedin.com/in/silvanv</a></p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                <p><a href="mailto:silvan@datavenia.nl">silvan@datavenia.nl</a></p>
            </div>
        </div>
    </div>
</section>