<?php

/*foreach($users as $user)
{
	echo "<div class='alert alert-success'>";
	echo $user->name."<br>";
	echo $user->email."<br>";
	echo $user->date_registration."<br><br>";
	echo "</div>";
}
*/
?>
 <?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\usersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registration', ['site/entry'], ['class' => 'btn btn-primary']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'lastname',
            'email:email',
            // 'date_registration',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
