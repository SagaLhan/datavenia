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
            <p><?= Yii::t('app', 'From webdesign and payment systems to back-end development and team management.') ?></p>
            <a href="#about" class="btn btn-primary btn-xl page-scroll"><?= Yii::t('app', 'Find Out More') ?></a>
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
                    <p class="text-muted"><?= Yii::t('app', 'Working with Bootstrap and JQuery for modern, professional websites and user interfaces.') ?></p>
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
                <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<aside class="bg-dark">
    <div class="container text-center">
        <div class="call-to-action">
            <h2>Free Download at Start Bootstrap!</h2>
            <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Download Now!</a>
        </div>
    </div>
</aside>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="primary">
                <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
            </div>
            <div class="col-lg-4 col-lg-offset-2 text-center">
                <i class="fa fa-phone fa-3x sr-contact"></i>
                <p>123-456-6789</p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
            </div>
        </div>
    </div>
</section>