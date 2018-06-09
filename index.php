<?php

    include "config.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/main.css">
	<title> <?php echo $lang['titleIndex'] ?> </title>
</head>

<body>

    <main>
    <!-- Landing Area -->
    <div id="landing">
      <div id="landing-text">
        <div id="landing-text-inner">
          <h1><?php echo $lang['titleIndexLanding'] ?></h1>
          <br>
          <h2><?php echo $lang['captionLanding'] ?></h2>
          <a href="#images" class="btn" id="view-work">
            <?php echo $lang['btnView'] ?>
          </a>
        </div>
      </div>
      <div id="landing-image"></div>
    </div>

    <div id="images">
      <div id="header">
        <h2><?php echo $lang['myWork'] ?></h2>
      </div>

      <img src="https://source.unsplash.com/1600x900/?nature,water" alt="General Artwork Header Image">
      <div class="caption">
        <h3><?php echo $lang['titleIndexGeneralArtwork'] ?></h3>
        <p><?php echo $lang['captionGeneralArtwork'] ?></p>
      </div>
      <img src="https://source.unsplash.com/1600x900/?nature,trees" alt="Logo Design Header Image">
      <div class="caption">
        <h3><?php echo $lang['titleIndexLogoDesign'] ?></h3>
        <p><?php echo $lang['captionLogoDesign'] ?></p>
      </div>
      <img src="https://source.unsplash.com/1600x900/?nature,flowers" alt="Paleo Art Header Image">
      <div class="caption">
        <h3><?php echo $lang['titleIndexPaleoArt'] ?></h3>
        <p><?php echo $lang['captionPaleoArt'] ?></p>
      </div>
      <img src="https://source.unsplash.com/1600x900/?nature,animals" alt="Pixel Art Header Image">
      <div class="caption">
        <h3><?php echo $lang['titleIndexPixelArt'] ?></h3>
        <p><?php echo $lang['captionPixelArt'] ?></p>
      </div>
      <img src="https://source.unsplash.com/1600x900/?nature,clouds" alt="FAQ Header Image">
      <div class="caption">
        <h3><?php echo $lang['titleIndexFaq'] ?></h3>
        <p><?php echo $lang['captionFaq'] ?></p>
      </div>
    </div>
  </main>

  <footer>
    <h3><?php echo $lang['titleIndexGit'] ?></h3>
    <p><?php echo $lang['captionEmailEnquiries'] ?> <b>sapienmediacollective@gmail.com</b></p>
    
        <a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
        | <a href="index.php?lang=de"><?php echo $lang['lang_de'] ?></a>
        | <a href="index.php?lang=sv"><?php echo $lang['lang_sv'] ?></a>
        | <a href="index.php?lang=es"><?php echo $lang['lang_es'] ?></a>
        | <a href="index.php?lang=pt"><?php echo $lang['lang_pt'] ?></a>
        | <a href="index.php?lang=fr"><?php echo $lang['lang_fr'] ?></a>
        | <a href="index.php?lang=it"><?php echo $lang['lang_it'] ?></a>
        | <a href="index.php?lang=ro"><?php echo $lang['lang_ro'] ?></a>
        | <a href="index.php?lang=ru"><?php echo $lang['lang_ru'] ?></a>
        | <a href="index.php?lang=bs"><?php echo $lang['lang_bs'] ?></a>
        | <a href="index.php?lang=ko"><?php echo $lang['lang_ko'] ?></a>
        | <a href="index.php?lang=jp"><?php echo $lang['lang_jp'] ?></a>
        | <a href="index.php?lang=cmd"><?php echo $lang['lang_cmd'] ?></a>
        
        <p><b>Kyle Colbourne &copy; 2018</b></p>
    
    </footer>
  
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="js/main.js"></script>

</body>
</html>
