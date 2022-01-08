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

        <script>

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-129160083-1', 'auto', {'allowLinker': true});
            ga('require', 'linker');
            ga('linker:autoLink', ['aovivo.radioliberal.com.br'] );
            ga('send', 'pageview');

        </script>

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
            
          <div class=""> 
            <p>Política de privacidade para Rádio Liberal<br clear="all">
              
              Todas as suas informações pessoais recolhidas, serão usadas para ajudar a tornar a sua visita no nosso site a mais produtiva e agradável possível.
              
              <br>
              A garantia da confidencialidade dos dados pessoais dos utilizadores do nosso site é importante para a Rádio Liberal.
              
              <br>
              Todas as informações pessoais relativas a membros, assinantes, clientes ou visitantes que usem a Rádio Liberal serão tratadas em concordância com a Lei da Proteção de Dados Pessoais de 26 de outubro de 1998 (Lei n.º 67/98).<br>
              A informação pessoal recolhida pode incluir o seu nome, e-mail, número de telefone e/ou telefone móvel, endereço, data de nascimento e/ou outros.
              
  <br>
              O uso da Rádio Liberal pressupõe a aceitação deste Acordo de privacidade. A equipe da Rádio Liberal reserva-se ao direito de alterar este acordo sem aviso prévio. Deste modo, recomendamos que consulte a nossa política de privacidade com regularidade de forma a estar sempre atualizado. </p>
            <div >Os anúncios</div>
            <br>
            Tal como outros websites, coletamos e utilizamos informação contida nos anúncios. A informação contida nos anúncios inclui o seu endereço IP (Internet Protocol), o seu ISP (Internet Service Provider), o browser que utilizou ao visitar o nosso website (como o  Google Chrome ou Internet Explorer  e outros), o tempo da sua visita e que páginas visitou dentro do nosso website.</p>
            <p>Os Cookies e Web Beacons<br>
              Utilizamos cookies para armazenar informação, tais como as suas preferências pessoais quando visita o nosso website. Isto poderá incluir um simples Pop-up, ou uma ligação em vários serviços que providenciamos, tais como fóruns.</p>
            <p>Em adição também utilizamos publicidade de terceiros no nosso website para suportar os custos de manutenção. Algumas destas publicidades poderão utilizar tecnologias como os cookies e/ou web beacons quando publicam no nosso website, o que fará com que esses publicidades (como o Google através do Google AdSense) também recebem a sua informação pessoal, como o endereço IP, o seu ISP, o seu browser, etc. Esta função é geralmente utilizada para Geo Targeting (mostrar publicidade do Brasil apenas aos leitores oriundos do Brasil, por exemplo) ou apresentar publicidade direcionada a um tipo de utilizador (como mostrar publicidade de restaurante a um utilizador que visita sites de culinária regularmente, por exemplo).</p>
            <p>Você detém o poder de desligar os seus cookies, nas opções do seu browser, ou efetuando alterações nas ferramentas de programas Antivírus, como o Norton Internet Security. No entanto, isso poderá alterar a forma como interage com o nosso website, ou outros websites. Isso poderá afetar ou não permitir que faça logins em programas, sites ou fóruns da nossa e de outras redes.</p>
            <p>Ligações a Sites de terceiros<br>
              A Rádio Liberal possui ligações para outros sites, os quais, a nosso ver, podem conter informações / ferramentas úteis para os nossos visitantes. A nossa política de privacidade não é aplicada a sites de terceiros, pelo que, caso visite outro site a partir do nosso deverá ler a politica de privacidade do mesmo.</p>
            <p>Não nos responsabilizamos pela política de privacidade ou conteúdo presente nesses mesmos sites.<br>
            </p>
          </div>
            
    </div>
        <?php include("rodape.php"); ?>
    </body>
</html>