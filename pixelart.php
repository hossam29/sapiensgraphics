<?php
    include "config.php";
?>

<!DOCTYPE html>
<html lang="en-gb">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Hello! Welcome to my graohics portfolio for my online alias <i>Sapien</i>. Please, feel free to vist my site and browse my work!">

    <!-- Links -->
    <link rel="stylesheet" href="css/pages.css">

    

    <!-- Title -->
    <title> <?php echo $lang['titlePixelArt'] ?> </title>
    
</head>

<body>

    <main>
        

        <!-- Landing Area -->

        <div id="landing">

            <div id="landing-text">

                <div id="landing-text-inner">

                    <h1><?php echo $lang['titleLandingPixelArt'] ?></h1>
                    <br>
                    <h2><?php echo $lang['feelFree'] ?></h2>
                    <a href="#images" class="btn" id="view-work"><?php echo $lang['btnView'] ?></a>
                    <a href="index.php" class="btn" id=""><?php echo $lang['btnHome'] ?></a>

                </div>

            </div>

        </div>
        
        <!-- Images Area -->

        <div id="images">

            <div id="header">

                <h2<?php echo $lang['myWork'] ?></h2></h2> <!-- Translate -->

            </div>

            <div id="grid">
                
                <a href="#" target="_blank"><img src="https://source.unsplash.com/1600x900/?nature,humans"; alt=""></a>
                <a href="#" target="_blank"><img src="https://source.unsplash.com/1600x900/?nature,pets"; alt=""></a>
                <a href="#" target="_blank"><img src="https://source.unsplash.com/1600x900/?nature,animals"; alt=""></a>
                <a href="#" target="_blank"><img src="https://source.unsplash.com/1600x900/?nature,birds"; alt=""></a>
                <a href="#" target="_blank"><img src="https://source.unsplash.com/1600x900/?nature,moon"; alt=""></a>
                <a href="#" target="_blank"><img src="https://source.unsplash.com/1600x900/?nature,stars"; alt=""></a>
                <a href="#" target="_blank"><img src="https://source.unsplash.com/1600x900/?nature,mountains"; alt=""></a>
                <a href="#" target="_blank"><img src="https://source.unsplash.com/1600x900/?nature,trees"; alt=""></a>
                <a href="#" target="_blank"><img src="https://source.unsplash.com/1600x900/?nature,flowers"; alt=""></a>
                <a href="#" target="_blank"><img src="https://source.unsplash.com/1600x900/?nature,plants"; alt=""></a>
                <a href="#" target="_blank"><img src="https://source.unsplash.com/1600x900/?nature,forest"; alt=""></a>
                <a href="#" target="_blank"><img src="https://source.unsplash.com/1600x900/?nature,ocean"; alt=""></a>
                
            </div>
            
            <p><?php echo $lang['thanks'] ?></p>

        </div>

    </main>
    
    <!-- Footer -->

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
        | <a href="index.php?lang=bg"><?php echo $lang['lang_bg'] ?></a>
        | <a href="index.php?lang=bs"><?php echo $lang['lang_bs'] ?></a>
        | <a href="index.php?lang=ko"><?php echo $lang['lang_ko'] ?></a>
        | <a href="index.php?lang=jp"><?php echo $lang['lang_jp'] ?></a>
        | <a href="index.php?lang=cmd"><?php echo $lang['lang_cmd'] ?></a>
        
        <p><b>Kyle Colbourne &copy; 2018</b></p>
    
    </footer>
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>

</body>

</html>