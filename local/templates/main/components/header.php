<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? $isMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR; ?>
<!DOCTYPE html>
<html>

<head>
    <?

    use Bitrix\Main\Application;
    use Bitrix\Main\Page\Asset;
    use Bitrix\Main\Localization\Loc;

    Loc::loadMessages(__FILE__);
    ?>



    <?
    $statsFilePath = $_SERVER['DOCUMENT_ROOT'] . '/local/templates/main/dist/stats.json';
    $statsJson = file_get_contents($statsFilePath);

    // Декодируем JSON в массив
    $statsData = json_decode($statsJson, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        $errorMessage = 'Ошибка декодирования JSON: ' . json_last_error_msg();
        error_log($errorMessage);
        exit;
    }
    $assetsPath = SITE_TEMPLATE_PATH . '/dist/';

    $assetsByChunkName = $statsData['assetsByChunkName'];

    foreach ($assetsByChunkName as $chunkName => $files) {
        foreach ($files as $file) {
            $filePath = $assetsPath . $file;

            if (pathinfo($file, PATHINFO_EXTENSION) === 'css') {
                Asset::getInstance()->addCss($filePath);
            } elseif (pathinfo($file, PATHINFO_EXTENSION) === 'js') {
                Asset::getInstance()->addJs($filePath);
            }
        }
    }
    ?>


    <meta charset="utf-8" />
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->ShowHead(); ?>
    <!-- partial:parts/_head.html -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

</head>



<body class="<?= $APPLICATION->ShowProperty('CLASS') ?>">

    <? $APPLICATION->ShowPanel(); ?>



      



    