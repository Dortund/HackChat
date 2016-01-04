<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BackendUser */

$this->title = 'Sign up succes';
?>
<div class="backend-user-signupsucces">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php echo 'Congratulations! Your account with username: \'' . Html::encode($username) . '\' has been succesfully created.' ?>

</div>
