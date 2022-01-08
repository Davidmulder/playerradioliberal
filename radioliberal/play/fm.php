<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Liberal FM - Rádio</title>
        <meta property="og:url" content="http://fm.radioliberal.com.br/">

        <meta property="og:title" content="Liberal FM - Ao vivo">
        <meta property="og:site_name" content="Liberal FM">
        <meta property="og:type" content="article">
        <meta property="fb:app_id" content="123456789000"/>

        <meta property="og:description" content="É uma emissora de rádio brasileira sediada em Belém, capital do estado do Pará.">

        <meta property="og:image" content="http://fm.radioliberal.com.br/logo_liberal_fm.png">
        <meta property="og:image:width" content="800"> 
        <meta property="og:image:height" content="597"> 
        <meta name="twitter:title" content="É uma emissora de rádio brasileira sediada em Belém, capital do estado do Pará. Opera no dial FM, na frequência 90.5 MHz.">
        <meta name="twitter:card" content="summary_large_image"/>

        

        <?php include("head.php"); ?>
        
        <style>
            .tocafm{opacity: 1}
        </style>
        
    </head>
    <body>
        <?php include("form.php"); ?>
        <div class="conteudo">
            <?php include("menu.php"); ?>
            <div class="radio">
                <audio id="player2" preload="none" controls style="max-width:100%;">
                    <source src="http://177.105.192.70:9750/liberalfm.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>
        <?php include("rodape.php"); ?>
    </body>
</html>