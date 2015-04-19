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
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Jerome Pratt</a>
      <ul class="right hide-on-med-and-down">
        <li class="portfolio <?php if ($section == "portfolio"){ echo "active"; }?>"><a href="portfolio.php">Portfolio</a></li>
        <li class="about <?php if ($section == "about"){ echo "active"; }?>"><a href="about.php">About</a></li>
        <li class="contact <?php if ($section == "contact"){ echo "active"; }?>"><a href="contact.php">Contact</a></li>
      </ul>
      <ul id="nav-mobile" class="side-nav">
        <li class="portfolio <?php if ($section == "portfolio"){ echo "active"; }?>"><a href="portfolio.php">Portfolio</a></li>
        <li class="about <?php if ($section == "about"){ echo "active"; }?>"><a href="about.php">About</a></li>
        <li class="contact <?php if ($section == "contact"){ echo "active"; }?>"><a href="contact.php">Contact</a></li>

      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
  </nav>
<div class="container">

