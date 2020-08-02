<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
       


            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
       
    </div>


	 <!-- ======= Footer ======= -->
	 <footer id="footer">

<div class="footer-top">
  <div class="container">
	<div class="row">

	  <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up">
	  <?= Html::img('@web/mondy/img/logo.png',['width'=>'240','height'=>'60', 'style' => 'margin-bottom:25px']) ?>
		<h3>SISMA</h3>
		<p>
		  A108 Adam Street <br>
		  New York, NY 535022<br>
		  United States <br><br>
		  <strong>Phone:</strong> +1 5589 55488 55<br>
		  <strong>Email:</strong> info@example.com<br>
		</p>
	  </div>

	  <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="100">
		<h4>Useful Links</h4>
		<ul>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
		</ul>
	  </div>

	  <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
		<h4>Our Services</h4>
		<ul>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
		</ul>
	  </div>

	  <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
		<h4>Our Social Networks</h4>
		<p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
		<div class="social-links mt-3">
		  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
		  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
		  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
		  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
		  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
		</div>
	  </div>

	</div>
  </div>
</div>
</footer><!-- End Footer -->

  

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>