<?php
/** @var string $PAGE_TITLE */
/** @var string $CURRENT_PAGE */
$pageTitle = $PAGE_TITLE ?? 'BRIDGE — Innovate. Transform. Elevate.';
$bodyClass = $BODY_CLASS ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="icon" type="image/png" href="assets/images/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        body.page-intro-active .hero__title>span,
        body.page-intro-active .hero__sub,
        body.page-intro-active .btn--hero,
        body.page-intro-active .hero__logo {
            opacity: 0;
            visibility: hidden;
        }
    </style>
    <link rel="stylesheet" href="assets/css/vendor/odometer-theme-default.css">
</head>

<body class="<?= htmlspecialchars($bodyClass) ?>">

    <div class="page-intro" data-page-intro aria-hidden="true">
        <div class="page-intro__logo-wrap">
            <img class="page-intro__logo" src="assets/images/banner-bridge__loader.svg" alt="BRIDGE">
        </div>
    </div>

    <?php include __DIR__ . '/nav.php'; ?>
    <main<?= isset($MAIN_CLASS) ? ' class="' . htmlspecialchars($MAIN_CLASS) . '"' : '' ?>>
