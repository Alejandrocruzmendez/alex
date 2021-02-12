<html>
<head>
<title>Jugando al gato</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		    <!-- Bootstrap core CSS -->			
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/e530d88f76.js" crossorigin="anonymous"></script>
    
</head>
<body style="background-color: rgb(90, 143, 143);">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <i class="fas fa-cat"></i> Navbar
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" -label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                </div>
            </div>
        </div>
    </nav>





<br>




<center>
<i class="fas fa-cat"></i>

<h1> Bienvenido </h1>
        <h4>Que comience el juego</h4>
    <?php
$jd1=$_GET['jd1'];
$jd2=$_GET['jd2'];
$jd3=$_GET['jd3'];
$jd4=$_GET['jd4'];
$jd5=$_GET['jd5'];
$jd6=$_GET['jd6'];
$jd7=$_GET['jd7'];
$jd8=$_GET['jd8'];
$jd9=$_GET['jd9'];

$contador=$_GET['contador'];

$jugada=$_GET['jugada'];

$ganador=0;

//Checando Verticales


if ( $jd1 == $jugada && $jd2 == $jugada && $jd3 == $jugada )
{

$ganador=1;
}
if ( $jd4 == $jugada && $jd5 == $jugada && $jd6 == $jugada )
{
$ganador=1;
}
if ( $jd7 == $jugada && $jd8 == $jugada && $jd9 == $jugada )
{
$ganador=1;
}

//Checando Horizontales

if ( $jd1 == $jugada && $jd4 == $jugada && $jd7 == $jugada )
{
$ganador=1;
}
if ( $jd2 == $jugada && $jd5 == $jugada && $jd8 == $jugada )
{
$ganador=1;
}
if ( $jd3 == $jugada && $jd6 == $jugada && $jd9 == $jugada )
{
$ganador=1;
}

//Checando Diagonales

if ( $jd1 == $jugada && $jd5 == $jugada && $jd9 == $jugada )
{
$ganador=1;
}
if ( $jd3 == $jugada && $jd5 == $jugada && $jd7 == $jugada )
{
$ganador=1;
}

$jugador=$_GET['jugador'];


if ( $jugada=='1' || $jugada=='1')
{
$jugada='2';
}
else{
$jugada='1';
}

if ( $contador <= 8 && $ganador != 1 )
{
if ( $jugador==1)
{
$jugador=2;
}
else{
$jugador=1;
}
$contador++;

echo "<h5>Turno 2 ingresa el num  ",$jugador ," </h5>";
echo "<form action=\"gato.php\" METHOD=\"GET\">";
echo "<input  type=\"text\" name=\"jd1\" size=1 maxlength=1 value=",$jd1,">";
echo "<input type=\"text\" name=\"jd2\" size=1 maxlength=1 value=",$jd2,">";
echo "<input type=\"text\" name=\"jd3\" size=1 maxlength=1 value=",$jd3,">";
echo "<br>";
echo "<input type=\"text\" name=\"jd4\" size=1 maxlength=1 value=",$jd4,">";
echo "<input type=\"text\" name=\"jd5\" size=1 maxlength=1 value=",$jd5,">";
echo "<input type=\"text\" name=\"jd6\" size=1 maxlength=1 value=",$jd6,">";
echo "<br>";
echo "<input type=\"text\" name=\"jd7\" size=1 maxlength=1 value=",$jd7,">";
echo "<input type=\"text\" name=\"jd8\" size=1 maxlength=1 value=",$jd8,">";
echo "<input type=\"text\" name=\"jd9\" size=1 maxlength=1 value=",$jd9,">";
echo "<br>";
echo "<input type=\"hidden\" name=\"jugador\" value=",$jugador,">";
echo "<input type=\"hidden\" name=\"contador\" value=",$contador,">";
echo "<input type=\"hidden\" name=\"jugada\" value=",$jugada,">";
echo "<input type=\"submit\" value=\"Enviar Jugada\">";
echo "</form>";
}

if ( $contador < 8 && $ganador == 1 )
{
echo "<h2>Gano el Jugador ",$jugador ,"!!!";
echo "<form action=\"gato.php\" METHOD=\"GET\">";
echo "<input type=\"text\" name=\"jd1\" size=1 maxlength=1 value=",$jd1,">";
echo "<input type=\"text\" name=\"jd2\" size=1 maxlength=1 value=",$jd2,">";
echo "<input type=\"text\" name=\"jd3\" size=1 maxlength=1 value=",$jd3,">";
echo "<br>";
echo "<input type=\"text\" name=\"jd4\" size=1 maxlength=1 value=",$jd4,">";
echo "<input type=\"text\" name=\"jd5\" size=1 maxlength=1 value=",$jd5,">";
echo "<input type=\"text\" name=\"jd6\" size=1 maxlength=1 value=",$jd6,">";
echo "<br>";
echo "<input type=\"text\" name=\"jd7\" size=1 maxlength=1 value=",$jd7,">";
echo "<input type=\"text\" name=\"jd8\" size=1 maxlength=1 value=",$jd8,">";
echo "<input type=\"text\" name=\"jd9\" size=1 maxlength=1 value=",$jd9,">";
echo "<br>";
echo "<input type=\"hidden\" name=\"jugador\" value=",$jugador,">";
echo "<input type=\"hidden\" name=\"contador\" value=",$contador,">";
echo "<input type=\"hidden\" name=\"jugada\" value=",$jugada,">";
echo "</form>";

}

if ( $contador == 9 && $ganador != 1 )
{
echo "<h2>go Terminado 
EMPATE!! ";
}
?>
<button ><a href="../vista/index.html">Jugar</a></button>
</center>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js " integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI " crossorigin="anonymous "></script>
</body>
</html>