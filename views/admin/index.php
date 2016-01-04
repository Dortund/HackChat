<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Admin Panel';
?>
<div class="admin-index">

    <p><?= Html::a('User list', ['/backend-user/index']) ?></p>
    <p><?= Html::a('Message list', ['/message/index']) ?></p>

</div>
