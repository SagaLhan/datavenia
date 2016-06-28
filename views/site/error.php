<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<header class="error-page">
    <div class="header-content">
        <div class="header-content-inner">
            <h1><?= Html::encode($this->title) ?></h1>
            <br />
            <div class="alert alert-warning">
                <?= nl2br(Html::encode($message)) ?>
            </div>
        </div>
    </div>
</header>