<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\BackendUser;
use yii\helpers\HtmlPurifier;

/* @var $this yii\web\View */
/* @var $model app\models\Message */

$this->title = 'List';
$this->params['breadcrumbs'][] = ['label' => 'Messages', 'url' => ['list']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message-view">

    <h1><?php Html::encode($this->title) ?></h1>

    <?php
	foreach($messages as $message) {
		//echo HTML::encode(BackendUser::findOne($message->creator_id)->username . " says: <br>" . $message->content . "<br>posted at: " . $message->timestamp . "<br><br>");
		//echo BackendUser::findOne($message->creator_id)->username . " says: <br>" . $message->content . "<br>posted at: " . $message->timestamp . "<br><br>";
		echo HtmlPurifier::process(Parsedown::instance()->text(BackendUser::findOne($message->creator_id)->username . " says: <br>" . $message->content . "<br>posted at: " . $message->timestamp . "<br><br>"));
	}


 ?>

</div>
