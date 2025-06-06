<?php date_default_timezone_set('america/argentina/buenos_aires'); error_reporting(0); ?>
<?php $_SESSION['currentLanguage'] = 'es'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo @$description; ?>">
<meta name="keywords" content="<?php echo @$keywords; ?>">
<meta name="robots" content="index, follow" />
<meta name="copyright" content="Smart Hotel Montevideo | Uruguay" />
<meta name="author" content="boom-box.com.ar">
<link rel="icon" href="../assets/img/icon.png">
<title><?php echo @$title; ?></title>

<!-- Bootstrap core CSS -->
<link href="../dist/css/bootstrap.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="../dist/css/site.css?v1.1" rel="stylesheet">
<!--<link href="../dist/css/roomcloud.css" rel="stylesheet">-->
<link href="../dist/css/overwrite.css" rel="stylesheet">
<link href="../dist/css/justified-nav.css" rel="stylesheet">
<link href="../dist/css/reservas.css" rel="stylesheet">
<link href="../dist/css/cms.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../dist/js/bootstrap.js"></script>
<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="assets/js/ie-emulation-modes-warning.js"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9035780560703580" crossorigin="anonymous"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>
</head>
<body>
<div class="container-fluid">
<div class="row">
