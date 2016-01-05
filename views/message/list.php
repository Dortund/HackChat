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
	<ul>

<?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?php
	echo '<i>p.s. Refresh the page to see new messages.</i><br><br>';
	foreach($messages as $message) {
		$c = "\"message\"";
		if (Yii::$app->user->identity->id == $message->creator_id)
			$c = "\"message my_message\"";

		$name = HtmlPurifier::process(BackendUser::findOne($message->creator_id)->username);
		$stuffs = HtmlPurifier::process(Parsedown::instance()->text($message->content));

		echo "<li class=" . $c . "><h5 class=\"username\">" . $name . " says: </h5><div class=\"content\">" . $stuffs . "</div><h6 class=\"timestamp\">posted at: " . $message->timestamp . "</h6></li>";

	}


 ?>
</ul>
</div>
