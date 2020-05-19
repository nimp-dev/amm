<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class='wrap'>
    <?php
    NavBar::begin([
        'brandLabel' => '<a href="#" class="navbar-left" style="color:#ffffff" ><img src="ammlogo.jpg" width="50"> Ателье Мягкой Мебели</a>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top nap',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'Акции', 'url' => ['/site/about']],
            ['label' => 'Рассрочка', 'url' => ['/site/about']],
            ['label' => 'Доставка и оплата', 'url' => ['/site/about']],
            ['label' => 'О магазине', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Войти', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container b_color">
        <div class="row">
                <div class="col-sm-6">
                    <div class="nap_h font-italic">Изготовление мягкой мебели по вашим предпочтениям, 
                    с использованием материалов на выбор и любых размеров</div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="row">
                                <div class="col-sm-12">
                                    096-000-00-00
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    096-000-00-00
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="row">
                                  <div class="col-sm-12">
                                    inst
                                  </div>
                            </div>  
                           <div class="row">
                                  <div class="col-sm-12">
                                    face book
                                  </div>       
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

        <?= Alert::widget() ?>
        <div class="btn-group">
  <button type="button" class="btn btn-danger">Action</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
