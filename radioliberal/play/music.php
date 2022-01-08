<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LibMusic - Ao vivo</title>
        <meta property="og:url" content="http://libmusic.radioliberal.com.br/">

        <meta property="og:title" content="LibMusic - Ao vivo">
        <meta property="og:site_name" content="LibMusic">
        <meta property="og:type" content="article">
        <meta property="fb:app_id" content="123456789000"/>

        <meta property="og:description" content="É uma emissora de rádio brasileira sediada em Belém, capital do estado do Pará. Opera no dial FM, na frequência 90.5 MHz.">

        <meta property="og:image" content="http://libmusic.radioliberal.com.br/logo_libmusic.png">
        <meta property="og:image:width" content="800"> 
        <meta property="og:image:height" content="597"> 
        <meta name="twitter:title" content="É uma emissora de rádio brasileira sediada em Belém, capital do estado do Pará. Opera no dial FM, na frequência 90.5 MHz.">
        <meta name="twitter:card" content="summary_large_image"/>

        

        <?php include("head.php"); ?>

        <style>
            .tocamusic{opacity: 1}
        </style>

    </head>
    <body>
        <?php include("form.php"); ?>
        <div class="conteudo">
            <?php include("menu.php"); ?>    
            <div class="radio">
                <audio id="player2" preload="none" controls style="max-width:100%;">
                    <source src="https://s09.maxcast.com.br:8122/live" type="audio/mp3">
                </audio>
            </div>
        </div>
        <?php include("rodape.php"); ?>
    </body>
</html>