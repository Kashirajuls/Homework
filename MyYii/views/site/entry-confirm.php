<?php

use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
<div class='alert alert-success'>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Lastname</label>: <?= Html::encode($model->lastname) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</div>
</ul>

