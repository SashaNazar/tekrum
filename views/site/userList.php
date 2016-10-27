<?php
/**
 * Created by PhpStorm.
 * User: Саша
 * Date: 28.10.2016
 * Time: 1:04
 */
use yii\helpers\Html;
use yii\grid\GridView;
?>

<?php
if(Yii::$app->session->hasFlash('success')) {
    echo '<div class="alert alert-success">'.Yii::$app->session->getFlash('success').'</div>';
}
?>

<p>
    <?= Html::a('Create Users', ['test'], ['class' => 'btn btn-success']) ?>
</p>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'first_name',
        'last_name',
        'age',
        'birth_date',
    ],
]); ?>
