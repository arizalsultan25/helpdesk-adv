<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
            <h1 class="text-light"><?= Html::a('SISMA HELPDESK', ['/site']) ?></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><?= Html::a('Home', '/site', $options = []) ?></li>
                <li><?= Html::a('F.A.Q', '/site#faq', $options = []) ?></li>
                <li><?= Html::a('admin', '/site/knowledge', $options = []) ?></li>
                <li><?= Html::a('Contact', '/site#contact', $options = []) ?></li>
                <?php

                if (Yii::$app->user->isGuest) {
                    echo "<li>". Html::a('Login', '/site/login', $options = []) ."</li>
                    <li>". Html::a('Register', '/site/signup', $options = []) ."</li>";
                } else {
                    
                    echo '<li class="get-started">'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-primary']
                        )
                        . Html::endForm()
                        . '</li>';
                }
                ?>


                <li class="get-started"><a data-toggle="modal" data-target="#exampleModal">Ask a question</a></li>
            </ul>
        </nav><!-- .nav-menu -->


    </div>
</header><!-- End Header -->