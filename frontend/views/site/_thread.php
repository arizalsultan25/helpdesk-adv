<?php

?>

<div class="panel panel-default mb3 pb-4">
    <div class="panel-heading p-3 " role="tab" id="heading<?= $model->thread_id ?>">
        <h4>
            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $model->thread_id ?>" aria-expanded="true" aria-controls="collapse<?= $model->thread_id ?>">
                <?= $model->title ?>
            </a>
        </h4>
    </div>
    <div id="collapse<?= $model->thread_id ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?= $model->thread_id ?>">
        <div class="panel-body px-3 mb-4 ml-2">
            <p><?= $model->description ?></p>
            <sub class="pull-right">Date : <?= $model->date ?></sub>
        </div>
    </div>
</div>
<br>
<br>