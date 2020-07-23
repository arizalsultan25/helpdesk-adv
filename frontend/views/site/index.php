<?php

/* @var $this yii\web\View */

$this->title = 'Sisma Helpdesk';

use yii\helpers\Html;
use yii\data\SqlDataProvider;


$count = Yii::$app->db->createCommand('
    SELECT COUNT(*) FROM thread')->queryScalar();

$provider = new SqlDataProvider([
    'sql' => 'SELECT * FROM thread',
    'totalCount' => $count,
    'pagination' => [
        'pageSize' => 10,
    ],
    'sort' => [
        'attributes' => [
            'title',
            'view_count',
            'created_at',
        ],
    ],
]);

// returns an array of data rows
$models = $provider->getModels();
?>

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section -->
<header class="header-section">
    <a href="index.php" class="site-logo">
        <?= Html::img('@web/mondy/img/logo.png',['width'=>'150','height'=>'43']) ?>
    </a>
    <nav class="header-nav">
        <ul class="main-menu">
            <li><?= Html::a('Home', ['/site'], ['class'=>'active']); ?></li>
            <li><?= Html::a('About', ['/site/about']); ?></li>
            <li><a href="#">Pages</a>
                <ul class="sub-menu">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="search-result.html">Search Result</a></li>
                    <li><a href="single-property.html">Property</a></li>
                </ul>
            </li>
            <li><?= Html::a('Contact', ['/site/contact']); ?></li>
        </ul>
        <div class="header-right">
            <div class="user-panel">
                <?= Html::a('Login', ['/site/login'], ['class' => 'register']); ?>
            </div>
        </div>
    </nav>
    
</header>
<!-- Header Section end -->

<!-- Hero Section end -->
<section class="hero-section set-bg back-img" data-setbg="">
    <div class="container">
        <div class="hero-warp">
            <form class="main-search-form">
                <div class="search-type">
                    <div class="st-item">
                        <input type="radio" name="st" id="search" checked>
                        <label for="search">Find Help</label>
                    </div>
                </div>
                <div class="search-input">
                    <input type="text" placeholder="How can we help You?">
                    <button class="site-btn">Search</button>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
            </form>
        </div>
    </div>
</section>
<!-- Hero Section end -->


<section class="accordion-section clearfix mt-3" style="margin-bottom: 140px; margin-top:  140px" aria-label="Question Accordions">
    <div class="container">
        <div class="section-title mt-4">
            <h2>Featured Question</h2>
        </div>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

            <?php
            $count = 1;

            foreach ($models as $data) {
            ?>

                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading<?= $count ?>">
                        <h4>
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $count ?>" aria-expanded="true" aria-controls="collapse<?= $count ?>">
                                <?= $data['title'] ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse<?= $count ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?= $count ?>">
                        <div class="panel-body px-3 mb-4 ml-2">
                        <p><?= $data['description'] ?></p>
                        <sub class="pull-right">Date : <?= $data['date'] ?></sub> 
                        </div>
                    </div>
                </div>

            <?php $count++;
            } ?>
        </div>
</section>


<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay2">
        <h3>Support Centre</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- core_features_start -->
    <div class="core_features2 faq_area">
            <div class="container">
                <div class="border-bottm">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="featurest_tabs ">
                                <nav>
                                    <div class="nav" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false">General Ask</a>
                                        <a class="nav-item nav-link active show" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true">Technical Support</a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div id="accordion">
                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            <i class="flaticon-info"></i> Is WordPress hosting worth it?
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                    data-parent="#accordion">
                                                    <div class="card-body">
                                                        Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                                        let god moving. Moving in fourth air night bring upon
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                            </div>
                            <div class="tab-pane fade active show" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div id="accordion">
                                            <div class="card">
                                                <div class="card-header" id="headingTwoo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                            data-target="#collapseTwoo" aria-expanded="false" aria-controls="collapseTwoo">
                                                            <i class="flaticon-info"></i> Is WordPress hosting worth it?
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwoo" class="collapse" aria-labelledby="headingTwoo"
                                                    data-parent="#accordion">
                                                    <div class="card-body">
                                                        Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                                        let god moving. Moving in fourth air night bring upon
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingOne1">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                            data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                                            <i class="flaticon-info"></i> What are the advantages <span>of WordPress hosting
                                                                over shared?</span>
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne1" class="collapse" aria-labelledby="headingOne1" data-parent="#accordion1"
                                                    style="">
                                                    <div class="card-body">
                                                        Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                                        let god moving. Moving in fourth air night bring upon
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingThreee">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                            data-target="#collapseThreee" aria-expanded="false"
                                                            aria-controls="collapseThree">
                                                            <i class="flaticon-info"></i> Will you transfer my site?
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseThreee" class="collapse" aria-labelledby="headingThreee"
                                                    data-parent="#accordion">
                                                    <div class="card-body">
                                                        Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                                        let god moving. Moving in fourth air night bring upon
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading_44">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                            data-target="#collapse_44" aria-expanded="false" aria-controls="collapse_44">
                                                            <i class="flaticon-info"></i> Why should I host with Hostza?
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapse_44" class="collapse" aria-labelledby="heading_44" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                                        let god moving. Moving in fourth air night bring upon
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading_55">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                            data-target="#collapse_55" aria-expanded="false" aria-controls="collapse_55">
                                                            <i class="flaticon-info"></i> How do I get started <span>with Shared
                                                                Hosting?</span>
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapse_55" class="collapse" aria-labelledby="heading_55" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                                        let god moving. Moving in fourth air night bring upon
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- core_features_end -->