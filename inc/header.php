<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <link href='http://fonts.googleapis.com/css?family=Slabo+27px|Roboto' rel='stylesheet' type='text/css'>
  <link href="css/normalize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <title><?php echo $pageTitle; ?></title>

  <!-- CSS  -->
</head>
<body>
<div class="nav-container">
  <header>
    <h1 class="brand-text"><a href="#" id="brand-logo">Jerome Pratt</a></h1>
    <p id="sub-logo">Web Developer</p>
    <nav>
      <ul class="nav-links">
        <li class="nav-link portfolio <?php if ($section == "portfolio"){ echo "active"; }?>"><a href="portfolio.php">Portfolio</a></li>
        <li class="nav-link about <?php if ($section == "about"){ echo "active"; }?>"><a href="about.php">About</a></li>
        <li class="nav-link contact <?php if ($section == "contact"){ echo "active"; }?>"><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
</div>

<div class="container">
<section>
