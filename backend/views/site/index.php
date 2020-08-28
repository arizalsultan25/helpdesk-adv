<?php

/* @var $this yii\web\View */

$this->title = 'Dashboard Admin';
?>

<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box" style="background-color:#5bc0de">
            <div class="inner">
                <h3><?= $count ?></h3>

                <p>Threads</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>

            <a href="<?= \yii\helpers\Url::to(['/thread']) ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box" style="background-color:#5cb85c">
            <div class="inner">
                <h3><?= $solved ?></h3>

                <p>Answered Threads</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>

            <a href="<?= \yii\helpers\Url::to(['/thread']) ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>


    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box" style="background-color:#f0ad4e">
            <div class="inner">
                <h3><?= $faq ?></sup></h3>

                <p>Frequently Asked Questions</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to(['/thread/faq']) ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box" style="background-color:#d9534f">
            <div class="inner">
                <h3><?= $question ?></h3>

                <p>On Progress Questions</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to(['/thread/questions']) ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-7 col-8">
        <div class="large-box" style="padding: 20px">
            <h2>Lorem ipsum dolor sit amet consectetur.</h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi quisquam dolor molestiae doloribus, neque voluptatum nihil! Nisi facere voluptas ipsa rerum reprehenderit at! Nulla quidem reprehenderit voluptate, placeat necessitatibus quod sunt a debitis dolor illum dignissimos? Iste obcaecati quasi quo at. Similique reiciendis nemo consequuntur accusamus voluptate quaerat ducimus aspernatur tempore inventore excepturi alias quam autem qui, modi deserunt sint laboriosam optio ab voluptas fugit fuga unde quas cum? Omnis molestiae modi ipsam corrupti numquam, voluptatibus amet quam delectus assumenda.
            </p>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="large-box" style="padding: 20px;">
            <h1>Lorem ipsum dolor sit amet.</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi assumenda accusamus neque facere ratione accusantium eos. Ab impedit dolore inventore mollitia beatae ipsum distinctio blanditiis facere sit consequuntur, aliquam nemo expedita velit quisquam quas ducimus. A facere quaerat provident labore quidem nisi facilis rerum ipsa eveniet! Animi aut quidem delectus neque culpa ullam eius consequatur, asperiores aliquid, possimus cupiditate ab praesentium commodi corporis unde rem, ducimus dolores! Omnis temporibus eum impedit enim nisi saepe reprehenderit perferendis deleniti, non eveniet sed. Nulla neque numquam fugiat quaerat magnam laudantium, ea nostrum cumque ipsa veritatis iste facere tempora ipsam. Doloremque voluptatem accusantium perferendis autem natus eos perspiciatis voluptate rem aut doloribus amet vero voluptas asperiores temporibus accusamus delectus, dolore adipisci nostrum repudiandae fugit.</p>
        </div>
    </div>
</div>