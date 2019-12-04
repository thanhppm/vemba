<!--Import config-->
<?php require_once "./config/index.php"?>

<!--Handle language-->
<?php require_once "./inc/controller/handle_language.php" ?>


<!doctype html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title;?></title>
  <base href ="<?php echo $base_url;?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="<?php echo $description;?>">
  <meta name="keywords" content="<?php echo $keywords;?>">
  <meta name="author" content="<?php echo $author;?>">

  <link rel="stylesheet" href="<?php echo $base_url;?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo $base_url;?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $base_url;?>/assets/css/animate.css">
	
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link rel="shortcut icon" href="<?php echo $base_url;?>/assets/images/favicon.png" />
	<!-- Open Graph Tags-->
	<meta property="og:title" content="<?php echo $title;?>">
	<meta property="og:description" content="<?php echo $description;?>">
	<meta property="og:image" content="<?php echo $base_url;?>/assets/images/opengaph-img.jpg">
	<meta property="og:url" content="<?php echo $base_url;?>">
	<!-- Google Tags Manager-->
	<!-- Facebook pixel-->

	<script src="<?php echo $base_url;?>/assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo $base_url;?>/assets/js/main.js"></script>
	<script src="<?php echo $base_url;?>/assets/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo $base_url;?>/assets/js/bootstrap.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138595145-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138595145-1');
</script>
</head>
<body>
