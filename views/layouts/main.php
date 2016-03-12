<?php

/* @var $this \yii\web\View */
/* @var $content string */

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script type="text/javascript">
        steal = {
            instantiated: {}
        };
    </script>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    
    <div class="container">
       
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
       
    </div>
</footer>

<?php $this->endBody() ?>
<?php if(YII_ENV === 'dev'): ?>
    <script src="/watchalive.js"></script>
    <script src="./node_modules/steal/steal.js" main="@empty">
        import HMR from 'steal-hmr';
        import canHot from 'can-hot';

        // map styles to use steal-hmr build-in css hot-reload
        System.config({map: {
            $css: 'steal-hmr/css',
            $less: 'steal-hmr/css'
        }});

        // tells to preserve state for reloaded component instances
        // component state is not very good thing
        // and side effects are possible, so it is `false` by default
        canHot.config({preserveState: false});

        new HMR({
            // load the module, provided by the package name
            main: 'steal-yii/login',
            // outputs some debug messages
            debug: true,
            // explicitly state not dependants reload,
            // actually `false` by default
            dependants: false,
            // tells when to reload whole page
            page: [/index\.html/, /node_modules/],
            // here we plugin in canHot, so it will link it with HMR events
            plugin: [canHot],
            // event that gives file changes
            handle: watchalive.onFiles,
            // teardown happens when 'main' will be reloaded
            // we just remove root app component
//                teardown: () => $('bmi-app').remove()
        })

    </script>
<?php else: ?>
    <!-- <script src="./node_modules/steal/steal.js" env="window-production" main="steal-yii/login"></script> -->
<?php $this->registerJsFile(\Yii::getAlias('@web') . '/node_modules/steal/steal.production.js',['env'=>'window-production','main'=>'login']); ?>

<?php endif; ?>
</body>
</html>
<?php $this->endPage() ?>
