<li data-aos="fade-up">
    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#accordion-list-<?= $model->thread_id ?>"> <?= $model->title ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
    <div id="accordion-list-<?= $model->thread_id ?>" class="collapse" data-parent=".accordion-list">
        <p><?= $model->description ?></p>
        <sub class="pull-right">Date : <?= $model->date ?></sub>
    </div>
</li>
<br>