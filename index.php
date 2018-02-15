<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title !important>JVBF</title>
    <link REL="SHORTCUT ICON" HREF="imgs/favicon2.png">
    <link rel="shortcut icon" type="image/png" href="imgs/favicon2.png"/>
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Orbitron:700|Pacifico|Righteous" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/MyPage.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

</head>
<body>
<nav id="navbar">
    <a class="jvbf">JVBF</a>
    <div id="butt"><i class="fas fa-bars fa-3x" id="xtudo"></i></div>

    <ul class="itens" id="itens">
        <li><a class="bar" href="#home"id="hom">Home</a></li>
        <li><a href="#repositorio" class="bar" id="repos">Repositório</a></li>
        <li><a href="#extras" class="bar" id="ext">Extras</a></li>
        <li><a href="#contato" class="bar" id="cont">Contato</a></li>
    </ul>
</nav>
<div class="container" id="home">
    <div class=""><img src="imgs/jv.jpeg" class="jv"></div>
    <div class="jv2"><h4 class="">João Victor</h4>
        <p>18 Anos</p>
        <p>Caruaruense</p>
        <p>3° Período de Engenharia da Computação</p>
        <p>Monitor de Matemática Discreta</p>
        <p>Desenvolvedor no CITI  (Centro Integrado de Tecnologia da Informação)</p>
        <p>Aberto a novos projetos</p>
        <p>Interesses em tudo que venha agregar</p>


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

        <?php
        $path = "repositorio/";
        $diretorio = dir($path);
        $cont=0;
        while($arquivo = $diretorio -> read()){
            if($arquivo == "." || $arquivo == "..")
                continue;

            $cont++;
            if($cont==5){
                echo"<div id=\"restante\" class=\"none\">";
            }

            if(strrchr($arquivo, '.')===".java"){
                echo "<div class=\"repitem\"><i class=\"devicon-java-plain lgicon colored\"></i>";
            }
            elseif(strrchr($arquivo, '.')===".c"){
                echo "<div class=\"repitem\"><i class=\"devicon-c-plain lgicon colored\"></i>";
            }
            elseif(strrchr($arquivo, '.')===".cpp"){
                echo "<div class=\"repitem\"><i class=\"devicon-cplusplus-plain lgicon colored\"></i>";
            }
            elseif(strrchr($arquivo, '.')===".js"){
                echo "<div class=\"repitem\"><i class=\"devicon-javascript-plain lgicon colored\"></i>";
            }
            elseif(strrchr($arquivo, '.')===".css"){
                echo "<div class=\"repitem\"><i class=\"devicon-css3-plain lgicon colored\"></i>";
            }
            elseif(strrchr($arquivo, '.')===".html"){
                echo "<div class=\"repitem\"><i class=\"devicon-html5-plain lgicon colored\"></i>";
            }
            elseif(strrchr($arquivo, '.')===".php"){
                echo "<div class=\"repitem\"><i class=\"devicon-php-plain lgicon colored\"></i>";
            }
            elseif(strrchr($arquivo, '.')===".py"){
                echo "<div class=\"repitem\"><i class=\"devicon-python-plain lgicon colored\"></i>";
            }
            elseif(strrchr($arquivo, '.')===".apk"){
                echo "<div class=\"repitem\"><i class=\"devicon-android-plain lgicon colored\"></i>";
            }
            else{
                echo"<div class=\"repitem\"><i class=\"devicon-google-plain lgicon colored\"></i>";
            }
            echo "<a href='".$path.$arquivo."'>".$arquivo."</a></div>";
        }
        if($cont>=5){
            echo"</div> <button id=\"repButt\">Ver Mais...</button> ";
        }
        $diretorio -> close();
        ?>

    </div>
</div>
<div class="container" id="extras">
    <div class="jv2"><h4 class="">CRÉDITOS</h4>
    </div>
    <div class="row">
        <p class="aviso">E aí jovem gafanhoto, tá querendo fazer um public pra chamar de seu, mas não manja nada de Web? Se liga aí nos contatos que eu posso te ajudar, e se você estiver realmente interessado em trabalhar mais com isso, indico que procure ver quando será o próximo processo seletivo para o <a href="http://citi.org.br/">CITI</a>, lá você poderá  ter a experiência de lidar com projetos reais e impactar cada vez mais a sociedade </p>
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
    Copyright© 2018
</div>
<script
        src="http://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="js/MyJs.js"></script>
</body>
</html>
