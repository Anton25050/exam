<?php

use app\models\Requests;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\RequestsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Записи';
?>
<div class="requests-index">
    

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>

    <p>
        <?= Html::a('Записаться', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user',
            'master',
            'date',
            'time',
            [
                'attribute'=>'status',
                'content'=>function($report) {
                    $html = Html::beginForm(['update', 'id' => $report->id]);
                    $html .= Html::activeDropDownList($report, 'status_id', [
                        2 => 'Подтверждено',
                        3 => 'Отколено',
                    ],
                    [
                        'prompt' => [
                            'text' => 'Новая',
                            'options' => [
                                'style' => 'display:none'
                            ]
                        ]
                    ]
                );
                $html .= Html::submitButton('Подтвердить', ['class'=> 'btn btn-link']);
                $html .= Html::endForm();
                return $html;
                }
            ]
        ],
    ]); ?>

<?php Pjax::end(); ?>
</div>