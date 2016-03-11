<?php
/* @var $this yii\web\View */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<!--    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->
    <? if(YII_ENV === 'dev'): ?>
    <script src="/watchalive.js"></script>
    <script src="./node_modules/steal/steal.js" main="@empty">
        import HMR from 'node_modules/steal-hmr/hmr'
//        import $ from 'jquery'

        // map styles to use steal-hmr build-in css hot-reload
        System.config({map: {
            $css: 'steal-hmr/css',
            $less: 'steal-hmr/css'
        }});

        new HMR({
                // auto load of main module will happen
                main: 'app/app',
                // outputs some debug messages
                debug: true,
                // explicitly state not dependants reload,
                // actually `false` by default
                dependants: false,
                // tells when to reload whole page
                page: [/index\.html/, /node_modules/],
                // here we plugin in canHot, so it will link it with HMR events
//                plugin: [canHot],
                // event that gives file changes
                handle: watchalive.onFiles,
                // teardown happens when 'main' will be reloaded
                // we just remove root app component
//                teardown: () => $('bmi-app').remove()
        })

    </script>
    </script>
    <? endif; ?>
</head>
<body>
<h1>Hello, world!</h1>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!--<script src="js/bootstrap.min.js"></script>-->
</body>
</html>