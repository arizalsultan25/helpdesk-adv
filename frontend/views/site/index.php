<?php

/* @var $this yii\web\View */

$this->title = 'Sisma Helpdesk';

use yii\helpers\Html;
use yii\data\SqlDataProvider;
use yii\grid\GridView;
use yii\widgets\ListView;

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
        <?= Html::img('@web/mondy/img/logo.png', ['width' => '150', 'height' => '43']) ?>
    </a>
    <nav class="header-nav">
        <ul class="main-menu">
            <li><?= Html::a('Home', ['/site'], ['class' => 'active']); ?></li>
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
<section class="hero-section set-bg" data-setbg="">
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
                    <form action="index" method="get">
                        <input name="globalSearch" type="text" placeholder="How can we help You?">
                        <button type="submit" class="site-btn">Search</button>
                    </form> 
                    <?php  //echo $this->render('_search', ['model' => $searchModel]); 
                    ?>
                </div>
                <?php echo $this->render('_search', ['model' => $searchModel]); 
                    ?>
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
            //$count = 1;

            //foreach ($models as $data) {
            ?>
            <?php
            echo ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_thread',
            ])
            ?>


            <?php //$count++;
            //} 
            ?>
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
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="flaticon-info"></i> Is WordPress hosting worth it?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
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
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwoo" aria-expanded="false" aria-controls="collapseTwoo">
                                            <i class="flaticon-info"></i> Is WordPress hosting worth it?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwoo" class="collapse" aria-labelledby="headingTwoo" data-parent="#accordion">
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