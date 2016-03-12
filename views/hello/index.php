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
    <script type="text/javascript">
        steal = {
            instantiated: {}
        };
    </script>
</head>
<body>

<script type='text/stache' can-autorender id='main'>
    <login></login>
</script>



<footer class="footer">
    <div class="container">
        <p class="text-muted">sticky footer</p>
    </div>
</footer>


<?php if(YII_ENV === 'dev'): ?>
    <script src="/watchalive.js"></script>
    <script src="./node_modules/steal/steal.js" main="@empty">
        import HMR from 'steal-hmr';
        import canHot from 'can-hot';
        import $ from 'jquery';

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
    <script src="./node_modules/steal/steal.js" env="window-production" main="steal-yii/login"></script>
<?php endif; ?>
</body>
</html>