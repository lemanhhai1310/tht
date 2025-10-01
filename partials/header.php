<?php $projectName = "Nền tảng Xuất bản Tạp chí điện tử, Tạp chí in, Quản lý tạo lập Sách điện tử & Phát hành"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="assets/uikit/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="assets/style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="assets/uikit/dist/js/uikit.min.js"></script>
    <script src="assets/uikit/dist/js/uikit-icons.min.js"></script>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">