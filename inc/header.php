<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <title><?php echo $pageTitle; ?></title>

  <!-- CSS  -->
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" />
  <link href="css/materialize-style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
      <a id="logo-container" href="#" class="brand-logo">Jerome Pratt</a>

        <li class="portfolio <?php if ($section == "portfolio"){ echo "active"; }?>"><a href="portfolio.php">Portfolio</a></li>
        <li class="about <?php if ($section == "about"){ echo "active"; }?>"><a href="about.php">About</a></li>
        <li class="contact <?php if ($section == "contact"){ echo "active"; }?>"><a href="contact.php">Contact</a></li>

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
<div class="container">

