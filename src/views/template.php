<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Waterfall&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/navbar.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/home.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/personalizedServices.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/feedPage.css">
    </head>
    <body>
        <?= $navbar ?>
        <?= $page_content ?>
        <?= $footer ?>
    </body>
</html>
