<html>
<head>
    <meta charset="utf-8">
    <title>JVBF</title>
    <link REL="SHORTCUT ICON" HREF="imgs/favicon2.png">
    <link rel="icon" href="imgs/favicon2.png"/>
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Orbitron:700|Pacifico|Righteous" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" type="text/css" href="css/MyPage.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

</head>
<body>
<nav id="navbar">
    <a class="jvbf">JVBF</a>
    <ul class="itens">
        <li><a class="bar" href="#home"id="hom">Home</a></li>
        <li><a href="#repositorio" class="bar" id="repos">Repositório</a></li>
        <li><a href="#extras" class="bar" id="ext">Extras</a></li>
        <li><a href="#contato" class="bar" id="cont">Contato</a></li>
    </ul>
</nav>
<div class="container" id="home">
    <div class=""><img width="200vw" src="imgs/jv.jpeg" class="jv"></div>
    <div class="jv2"><h4 class="">João Victor</h4>
        <p class="jv2">18 Anos</p>
        <p class="jv2">Caruaruense</p>
        <p class="jv2">3° Período de Engenharia da Computação</p>
        <p class="jv2">Monitor de Matemática Discreta</p>
        <p class="jv2">Desenvolvedor no CITI  (Centro Integrado de Tecnologia da Informação)</p>
        <p class="jv2">Aberto a novos projetos</p>
        <p class="jv2">Interesses em tudo que venha agregar</p>
        <!--<div id="more" class="see2">-->
        <!--<div class="col-xs-6">-->
        <!--<p class="jv2">Animações Favoritas:</p>-->
        <!--<p class="jv2">Rick and Morty</p>-->
        <!--<p class="jv2">Futurama</p>-->
        <!--<p class="jv2">Os Simpsons</p>-->
        <!--<p class="jv2">South Park</p>-->
        <!--</div>-->
        <!--<div class="col-xs-6">-->
        <!--<p class="jv2">O Que Gosto de Fazer no Tempo Livre:</p>-->
        <!--<p class="jv2">Jogar (óbvio)</p>-->
        <!--<p class="jv2">Conversar (sejam besteiras ou não)</p>-->
        <!--<p class="jv2">Assistir YouTube</p>-->
        <!--<p class="jv2">Simplesmente não fazer nada</p></div>-->
        <!--<div class="col-xs-12">-->
        <!--<p class="jv2"><br><br>Isto daqui só foi colocado para que pudesse usar o JavaScript, antes tinha um texto bem egocêntrico falando sobre mim, então decidi tirar e deixar este daqui. Caso tenha alguma sugestão, ou ideia, pode entrar em contato comigo, meios para isto podem ser encontrados na aba de "Contato", que está em sua barra de navegação (ou menu de navegação caso esteja na versão mobile).<br><br>Ps.:Posso fazer um site para você também, estou precisando adquirir experiência<br><br></p>-->
        <!--</div>-->
        <!--</div>-->


        <!--<button class="more" id="botao">Ver mais...</button>-->
    </div>
    <div class="row">
        <h4 class="">Conhecimentos em:</h4>
        <div class="social">
                <img src="imgs/C.png" width="150vw" >
        </div>
        <div class="social">
                <img src="imgs/java.png" width="150vw">
        </div>
        <div class="social">
                <img src="imgs/JavaScript.png" width="150vw">
        </div>
        <div class="social">
                <img src="imgs/HTML5.png" width="150vw">
        </div>
        <div class="social">
                <img src="imgs/css3.png" width="150vw">
        </div>
        <div class="social">
                <img src="imgs/android.png" width="150vw">
        </div>
        <div class="social">
                <img src="imgs/gimp.png" width="150vw">
        </div>
    </div>
</div>
<div class="container" id="repositorio">
    <div class="jv2"><h4 class="">REPOSITÓRIO</h4>
    </div>
    <div class="repositorio">
        <!--<div class="container-fluid">-->
        <!--<div class="row">-->
        <!--<p class="aviso">Infelizmente, ainda não tenho os conhecimentos em back-end necessários para se criar um repositório digno. O que posso fazer, por enquanto, é compartilhar minhas produções no Google Drive, ou até mesmo no GitHub. Não deve ter nada de muito importante, mas tentarei fazer algo relevante, disponibilizando não somente códigos, mas também alguns Wallpapers que gosto de fazer quando tenho um certo tempo livre no grad.</p>-->
        <!--<div class="social">-->
        <!--<a href="https://drive.google.com/drive/folders/0B4bc_CCZcn2DczREcGlQVVNxdlU?usp=sharing">-->
        <!--<img src="imgs/drive.png" width="650" class="drive"></a>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->

        <?php
        $path = "repositorio/";
        $diretorio = dir($path);

//        echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";
        while($arquivo = $diretorio -> read()){
            if($arquivo == "." || $arquivo == "..")
                continue;
            echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
        }
        $diretorio -> close();
        ?>

    </div>
</div>
<div class="container" id="extras">
    <div class="jv2"><h4 class="">CRÉDITOS</h4>
    </div>
    <div class="row">
        <p class="aviso">E aí jovem gafanhoto, tá querendo fazer um public pra chamr de seu, mas não manja nada de Web? Se liga aí nos contatos que eu posso te ajudar, e se você estiver realmente interessado em trabalhar mais com isso, indico que procure ver quando será o próximo processo seletivo para o <a href="http://citi.org.br/">Citi</a>, lá você poderá  ter a experiência de lidar com projetos reais e impactar cada vez mais a sociedade </p>
        <h1>Projetos:</h1>
        <h4>N-Back (Alpha 1.0.0):</h4>
        <a href="http://cin.ufpe.br/~jvbf/N-back">
            <img src="imgs/N-back.jpg" width="450" class="drive"></a>
    </div>
</div>
<div class="contatos" id="contato">
    <h1>Contatos</h1>
    <a href="https://github.com/jvbfelix"><i class="fab fa-github fa-3x" id="gh"></i></a>
    <a href="https://www.facebook.com/joaovictor.barrosfelix"><i class="fab fa-facebook fa-3x"id="fb"></i></a>
    <a href="https://telegram.me/jvbfelix"><i class="fab fa-telegram fa-3x"id="tg"></i></a>
    <a href="https://www.linkedin.com/in/joao-victor-barros-felix-6b1444142/"><i class="fab fa-linkedin fa-3x"id="li"></i></a>
    <a href="http://steamcommunity.com/profiles/76561198065218927/"><i class="fab fa-steam fa-3x"id="st"></i></a>
    <a href="mailto:jvbf@cin.ufpe.br"><i class="fas fa-envelope fa-3x"id="env"></i></a>
    <a href="https://www.instagram.com/jvbfelix/"><i class="fab fa-instagram fa-3x"id="in"></i></a>
    <a href="https://www.youtube.com/channel/UCrcEaA2tcye0UArLwn6olmw"><i class="fab fa-youtube fa-3x"id="yt"></i></a>
</div>
<div class="footer">
    <p>Copyright© 2018</p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/MyJs.js"></script>
</body>
</html>
