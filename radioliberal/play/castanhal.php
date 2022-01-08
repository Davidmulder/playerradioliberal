<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Liberal FM - Castanhal</title>
        <meta property="og:url" content="http://castanhal.radioliberal.com.br/">

        <meta property="og:title" content="Liberal FM - Castanhal">
        <meta property="og:site_name" content="Liberal Castanhal FM">
        <meta property="og:type" content="article">
        <meta property="fb:app_id" content="123456789000"/>

        <meta property="og:description" content="A uma emissora de radio brasileira sediada em Castanhal.">

        <meta property="og:image" content="http://castanhal.radioliberal.com.br/logo_liberal_fm.png">
        <meta property="og:image:width" content="800"> 
        <meta property="og:image:height" content="597"> 
        <meta name="twitter:title" content="É uma emissora de rádio brasileira do grupo Liberal sediada em Castanhal, do estado do Pará. Opera no dial FM, na frequência 94.1 MHz.">
        <meta name="twitter:card" content="summary_large_image"/>



       <?php include("head.php"); ?>
       
        <style>
            .tocacastanhal{opacity: 1}
        </style>
    </head>
    <body>
        <?php include("form.php"); ?>
        <div class="conteudo">
            <?php include("menu.php"); ?>
            <div class="radio">
                <audio id="player2" preload="none" controls style="max-width:100%;">
                    <source src="http://177.105.192.70:9401/stream/3/" type="audio/mp3">
                </audio>
            </div>
        </div>
        <?php include("rodape.php"); ?>
    </body>
</html>