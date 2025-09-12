<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link href="style.css" rel="stylesheet" type="text/css" /> 
<link rel="shortcut icon" href="https://steamcdn-a.akamaihd.net/apps/tf2/blog/images/favicon.ico">
<title>Meet The Scout </title>

<style>
html{overflow-y:auto;overflow-x: hidden;}
body{
    min-height: 100vh;
    display: grid;
    grid-template-columns: 230px 1fr 230px;
    grid-template-rows: 400px 1fr 5%;
    margin: 0;
    grid-template-areas:
    "left header right"
    "left main right"
    "left footer right";
}
.Scout{
  position: absolute;
  right: 20%;
  top: 60px;
  pointer-events: none;
}
.title{
  position: absolute;
  left: 15%;
  top: 250px;
  transform: rotate(-6deg);
  pointer-events: none;
}
.char{
    position: absolute;
    margin: auto;
    left: 0;
    right: 0;
    top: 20px;
    text-align: center;
    z-index: 1;
}
header{
    grid-area: header;
    background-image: url(../Media/Bg_Well.png);
    background-size: cover;
}
.left{
    grid-area: left;
    background-image: url(../Media/bgtest.jpg);
    background-size: 100%;
    background-repeat: repeat-y;
}
main{
    grid-area: main;
    display: grid;
    background-color: #2e2a27;
}
.right{
    grid-area: right;
    background-image: url(../Media/bgtest.jpg);
    background-size: 100%;
    transform: scaleX(-1);
    background-repeat: repeat-y;
}
footer{
    grid-area: footer;
    display: grid;
    grid-template-columns: 1fr 10fr;
    background-image:linear-gradient(#6b645b 0%, #5a5149 5%, #443f39 95%);
    color: #b1aca0;
    font-family: arial,helvetica,sans-serif;
    padding: 10px 10px 10px 10px;
    font-size: small;
}
.selector:hover{filter: brightness(120%);}
.info{
    line-height: 30px;
    font-family: arial,helvetica,sans-serif;
    text-align: justify;
    background-image: linear-gradient(#c4b8b1 0%,#f5e7de 3%,#f5e7de 97%,#c4b8b1 100%);
    padding: 20px 80px 30px 80px;
}
table{background-image: linear-gradient( #dabdab 0%, #c1a18a 100%); border-collapse: collapse; align-content: center;}
tr:first-child, th:first-child{background-image: linear-gradient( #ef9849  0%,  #f08149  100%);}
tr, th{font-weight: normal;text-align: center;}
.shadow{filter: drop-shadow(3px 2px 15px rgba(0, 0, 0, 0.75));}
.buttons{height: 100px; background-color: #5a5149; border-radius:  10px 10px 0px 0px; margin: 10px 10px 0px; transform: translateY(30px);}
.buttons:hover{ transform: translateY(10px); transition: 0.2s;}
</style>

<script>
    function main(){
        document.getElementById('primary').style.display = 'block';
        document.getElementById('secondary').style.display = 'none';
        document.getElementById('melee').style.display = 'none';
    }
        function secondary(){
        document.getElementById('secondary').style.display = 'block';
        document.getElementById('primary').style.display = 'none';
        document.getElementById('melee').style.display = 'none';
    }
        function melee(){
        document.getElementById('melee').style.display = 'block';
        document.getElementById('secondary').style.display = 'none';
        document.getElementById('primary').style.display = 'none';
    }
</script>

<body>
    <a href="../index.html">Volver a la página principal</a>
    <header>
        <img class="Scout" src="../Media/Scout.png" alt="Scout" width="500px">
        <img class="title" src="../Media/ScoutTitle.png" alt="Title" width="500px">
    </header>

    <div class="left"></div><div class="right"></div>
    <main>
        <!--menu zone-->
        <div class="info shadow">
        <div>
            <?php
            // Verifica si el parámetro 'info' existe en la URL
            if (isset($_GET['class'])) {
                $info = $_GET['class'];

                // Usa un 'switch' para mostrar el contenido basado en el valor del parámetro
                switch ($info) {
                    case 'scout': echo <<< SCOUT
                        <div style="font-size: large; text-align: center; padding: 20px; font-style: oblique; color: #6b645b;">"Ya' listenin'? OK. Grass grows, birds fly, sun shines, and brotha', I hurt people."</div>
                        <p>
                        Scout es el mercenario mas joven y rapido del equipo, el oponente principal del Heavy, una fuerza de la naturaleza y el regalo enviado por dios para las mujeres. 
                        </p><br>
                        <img src="https://wiki.teamfortress.com/w/images/7/78/Scout_contract_drawer.png" alt="Scout" height="260px" style="position: absolute; right: -200px; top: 100px;" class="shadow">
                        <p>
                        Nacido en Boston, Massachussets (Estados Unidos), Jeremy Willis es el mas joven de 8 hermanos (y secretamente hijo del Spy y su mandre); desde joven se encontró metido en peleas con los mismos, por lo que se entrenó a si mismo para adquerir la agilidad suficiente con el fin de compensar su falta de fuerza fisica. 
                        Gracias a su saludable dieta conformada por pollo frito y bebidas energizantes, Scout logra recorrer gigantescas distancias e incluso patear el aire(haciendo un "doble salto") sin cansarse, incluso cargando varias armas encima. A pesar de esto, la falta de alimento real lo dejan debil a todo tipo de ataques.
                        </p><br>
                        <img src="https://valvearchive.com/archive/Team%20Fortress/Team%20Fortress%202/Movies/Meet%20The%20Spy/Polaroids/spy_scoutmom_pic002.png" alt="SpyAndScoutsMom" height="230px" style="position: absolute; left: -200px; top: 280px; transform: rotate(-10deg);" class="shadow">
                        <p>En el futuro, Jeremy logra establecer una casa en la ciudad de Teufort donde cría a sus 4 hijos solo(cada uno de distintas madres) y paga sus gastos con el dinero de la ciudad que recibe por la extensa cantidad de lesiones que ha sufrido en la misma.</p><br>
                        <p><span class="Font" style="font-size: larger;">TRIVIA ! : </span> El Scout es el unico de los mercenarios que no es capaz de leer.</p>
                        <img src="https://wiki.teamfortress.com/w/images/b/b5/RedBonk.png" alt="RBonk" style="height: 320px; position: absolute; left: -200px; rotate: 20deg;">
                        <img src="https://wiki.teamfortress.com/w/images/0/09/BluBonk.png" alt="BBonk" style="height: 320px; position: absolute; right: -200px; transform: translateY(-100px) rotate(-20deg);">
                        SCOUT; break;
                    case 'soldier':
                        echo '<h1>Información del soldier</h1>';
                        echo '<p>Que haces acá ??? esta pagina sigue en desarrollo...</p>';
                        break;
                    case 'pyro':break;
                    case 'demoman':break;
                    case 'heavy':break;
                    case 'engineer':break;
                    case 'medic':break;
                    case 'sniper':break;
                    case 'spy':break;
                    default:
                        echo '<h1>UPS ! algo salió mal. </h1>';break;
                }
            } else {echo '<h1> elige uno por favor. </h1>';}
            ?>
        </div>
        <div>
            <!--Arsenal Zone-->
            <h1 class="Font">Arsenal</h1>
                <P>El arsenal del Scout consta de armas ligeras que le permitan correr igual de rapido sin perder su velocidad, siendo estas:</P><br>
            <div style="display: block; text-align : right; margin: 0px;">
            <img class="buttons selector shadow" onclick="main()" src="https://wiki.teamfortress.com/w/images/7/74/Backpack_Scattergun.png" alt="primary">
            <img class="buttons selector shadow" onclick="secondary()" src="https://wiki.teamfortress.com/w/images/f/f0/Backpack_Pistol.png" alt="primary">
            <img class="buttons selector shadow" onclick="melee()" src="https://wiki.teamfortress.com/w/images/d/d1/Backpack_Bat.png" alt="primary">
            </div>
            <div class="shadow" style="color: #b1aca0; background-color: #5a5149; padding: 10px ; border-radius: 10px;">
            <div id="primary">
            <h2 style="color: #b1aca0;" class="Font">La Recortada</h2>
            <p>
                Una escopeta de doble cañon recortada de acción de palanca con una culata de madera, modificada (posiblemente por el mismo Scout)para reducir su peso; ideal para causar graves heridas al equipo enemigo a corta y mediana distancia.
                Esta es un arma con una recarga rápida entre 0.7 y 0.5 segundos, es capaz de disparar 10 pellets con una gran propagación y generar un daño entre 105 y 3 puntos (dependiendo de la distancia).<br><br>
                Existe la posibilidad de que el daño del arma aumente gracias a los <span class="Font" style="color: rgb(0, 170, 0);">CRITICOS</span> y <span class="Font" style="color: rgb(170, 170, 0);">MIN-CRIT</span>s.
            </p>
            </div>
            <div>
            <div id="secondary" style="display: none;">
            <h2 style="color: #b1aca0;" class="Font">La Pistola</h2>
            <p>
                Una pistola de gatillo sensible que utiliza cartucho y es lo suficientemente pequeña para entrar en el bolsillo; útil en los momentos en los que la munición es escasa y la distancia entre el enemigo y tu es grande.
                Esta es un arma con una recarga rápida de 1 segundo y de velocidad de disparo de 0.1 segundos con una poca propagacion. Es capaz de generar un daño entre 22 y 8 puntos (dependiendo de la distancia).
                <p>Existe la posibilidad de que el daño del arma aumente gracias a los <span class="Font" style="color: rgb(0, 170, 0);">CRITICOS</span> y <span class="Font" style="color: rgb(170, 170, 0);">MIN-CRIT</span>s.</p>
            </p>
            </div>
            <div id="melee" style="display: none;">
            <h2 style="color: #b1aca0;" class="Font">El Bate</h2>
            <p>
                Un Bate de béisbol de aluminio, con empuñadura de goma y una gran abolladura en el costado(posiblemente causada por el golpe que el Scout le dió al Heavy en <span style="font-style: italic;">Meet The Scout</span>); Perfecto para terminar con enemigos moribundos a distancias reducidas o destruir construcciones pequeñas.<br><br>
                A pesar de ser una de las armas cuerpo a cuerpo de menor daño, esta tambien es la más rapida; con una velocidad de 0,5 segundos, 35 puntos de daño base y llegando a 105 puntos al realizar un <span class="Font" style="color: rgb(0, 170, 0);">CRITICO</span>.
            </p>
            </div>
            </div>
            </div>
            <img src="https://wiki.teamfortress.com/w/images/thumb/a/a1/Deep_Fried_Desire_Chicken_Bucket.png/320px-Deep_Fried_Desire_Chicken_Bucket.png" alt="Bucket" style=" height: 160px; position: absolute; left: -40px; bottom: -40px;">
        </div>
        </div>
    </main>
    <footer>
        <img src="../Media/Valv.png" alt="Valv Logo">
        <p>© Valv Corporation, all rights reserve. Valv, the Valv logo, Fume, the Fume logo, Team Fortress, the Team Fortress logo are trademarks and/or registered trademarks of Valv Corporation.</p>
    </footer>
</body>

</html>