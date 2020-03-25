<html lang="ru">
<head>
    <title>Title</title>
</head>

<body>
<?php
$languages = Language::getActive();
?>
<header>
    <?php if (is_array($languages)): ?>
    <?php foreach ($languages as $language): ?>
    <li><a href=""><?php echo $language['title'] ?></a></li>
    <?php endforeach;?>
    <?php endif;?>
    <h1><?php echo Tr::t('common','btn_default')?></h1>
</header>
