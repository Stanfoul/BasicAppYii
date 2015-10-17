<?php
/**
 * Created by PhpStorm.
 * User: stany_000
 * Date: 17.10.2015
 * Time: 12:00
 */
/* @var $content string */
?>
<!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Yii::$app->name ?></title>
</head>
<body>
<p>Верхняя часть сайта</p>

<?= $content ?>
<p>Нижняя часть сайта</p>
</body>
</html>
