<?php

use yii\helpers\Html;

$this->title = $model->title;
?>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- bootstrap modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>


<body>

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
                <li class="active"><?= Html::a('Home', '/site', $options = []) ?></li>
           <li><?= Html::a('F.A.Q', '/site#faq', $options = []) ?></li>
                    <li><?= Html::a('Contact', '/site#contact', $options = []) ?></li>

           <li class="get-started"><a data-toggle="modal" data-target="#exampleModal">Ask a question</a></li>           </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

       <!-- Modal -->
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             ...
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary">Save changes</button>
           </div>
         </div>
       </div>
     </div>


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
                    <div>
                        <h1>How can we help you?</h1>
                    </div>

                </div>
                <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
                    <?= Html::img('@web/Appland/assets/img/hero-img.png', ['class' => 'img-fluid']) ?>
                </div>

            </div>
        </div>

    </section><!-- End Hero -->


    <main id="main">
        <!-- ======= App Features Section ======= -->
        <section id="features" class="features">
            <div class="container">
                <nav aria-label="breadcrumb" style="margin-bottom: 4%;">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><?= Html::a('Home', 'site', $options = []) ?></li>
                        <li class="breadcrumb-item"><?= Html::a('Thread', 'site', $options = []) ?></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $model->title ?></li>
                    </ol>
                </nav>

                <h1 style="color:cadetblue; margin-bottom: 4%"><?= $model->title ?></h1>
                Created at <?= $model->date ?>. <br>
                Status <?= $model->status ?> <br>
                <p>
                    <?= $model->description; ?>
                </p>
            </div>
        </section><!-- End App Features Section -->
    </main><!-- End #main -->
</body>