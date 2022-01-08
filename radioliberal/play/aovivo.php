<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Liberal FM - Ao vivo</title>
        <meta property="og:url" content="http://aovivo.radioliberal.com.br/">

        <meta property="og:title" content="Liberal FM - Ao vivo">
        <meta property="og:site_name" content="Liberal FM">
        <meta property="og:type" content="article">
        <meta property="fb:app_id" content="123456789000"/>

        <meta property="og:description" content="É uma emissora de rádio brasileira sediada em Belém, capital do estado do Pará.">

        <meta property="og:image" content="http://aovivo.radioliberal.com.br/logo_liberal_fm.png">
        <meta property="og:image:width" content="800"> 
        <meta property="og:image:height" content="597"> 
        <meta name="twitter:title" content="É uma emissora de rádio brasileira sediada em Belém, capital do estado do Pará. Opera no dial FM, na frequência 90.5 MHz.">
        <meta name="twitter:card" content="summary_large_image"/>

       

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script>
            $( document ).ready(function() {
                $( "#playerElement" ).each(function( index ) {          
                    var largura = $(this).width();
                    var altura = (largura*9)/16;
                    $(this).height(altura);
                });
            });  
        </script>

        <script type="text/javascript" src="http://player.wowza.com/player/latest/wowzaplayer.min.js"></script>

        <?php include("head.php"); ?>
        
        <style>
            .tocavivo{opacity: 1}
        </style>
        
    </head>
    <body>
        <?php include("form.php"); ?>
        <div class="conteudo">
            <?php include("menu.php"); ?>
            <div class="tit01">Em breve</div>
        </div>
        <?php include("rodape.php"); ?>
    </body>
</html>