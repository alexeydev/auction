<!DOCTYPE html>
<html>
<head>
    <title>Сайтсофт</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo URL::base(); ?>media/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo URL::base(); ?>media/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="navbar">
    <div class="navbar-inner">
        <a class="brand" href="#">Сайтсофт</a>
        <ul class="nav">
            <li <?php echo ($_SERVER['REQUEST_URI'] == URL::base()) ?  'class="active"' : NULL;?>><a href="<?php echo URL::base(); ?>">Главная</a></li>
             <?php if(!Auth::instance()->logged_in()): ?>
            <li <?php echo ($_SERVER['REQUEST_URI'] == URL::site('index/login')) ?  'class="active"' : NULL;?>><a href="<?php echo URL::site('index/login') ?>">Авторизация</a></li>
            <li <?php echo ($_SERVER['REQUEST_URI'] == URL::site('index/registration')) ?  'class="active"' : NULL;?>><a href="<?php echo URL::site('index/registration') ?>">Регистрация</a></li>
            <?php endif; ?>
        </ul>
        <?php if(Auth::instance()->logged_in()): ?>
        <ul class="nav pull-right">
            <li><a><?php echo Auth::instance()->get_user()->username; ?></a></li>
            <li><a href="<?php echo URL::site('index/logout') ?>">Выход</a></li>
        </ul>
        <?php endif; ?>
    </div>
</div>
<?php echo $content; ?>
</body>
</html>