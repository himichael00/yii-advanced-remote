<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Html;

AppAsset::register($this);
$this->beginContent('@backend/views/layouts/base.php');
?>
    <main role="main" class="d-flex">

        <div class="content-wrapper p-3">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>
<?php $this->endContent() ?>
