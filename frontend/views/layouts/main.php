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
	<style>
		.content {
			margin-top: 90px;
		}
	</style>
</head>

<body>
	<?php $this->beginBody() ?>
	<!-- Header -->
	<?php
	if (Yii::$app->user->isGuest) {
		echo $this->render('header');
	} else {
	?>
		<?= $this->render('header_login') ?>
	<?php } ?>
	<!-- Content -->
	<div class="content">
		<?= $content ?>
	</div>


	<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>