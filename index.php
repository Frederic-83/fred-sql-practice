<!DOCTYPE html>
<!--
Template Name: Doggax
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->

<?php
 $host="localhost";
 $user="root";
 $pwd="";
 $db="mangaworld";

//$conn=mysqli_connect($host,$user,$pwd,$db) or die("unable to connect");
$conn=new mysqli("localhost", "root", "", $db);
if($conn->connect_error)
{
    die("connection faild:".$conn->connect_error);
}
//echo "Connection Successfully..!";
$sql = "SELECT id_manga,titre from manga";
$result = $conn->query($sql);

$conn->close();
?>
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Manga world</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
          <article>
            <!-- <p>manga's world</p>  -->
            <h3 class="heading">Manga's world</h3>
			<img src= "./images/mes-mangas.png">
            <p>Liste des genres:</p>
				<a href="./pages/genre.php?genre=Aventure" target="_self">Aventure</a><br>
				<a href="./pages/genre.php?genre=Tanche_de_vie" target="_self">Tanche-de-vie</a><br>
				<a href="./pages/genre.php?genre=Action" target="_self"> Action</a><br>
				<a href="./pages/genre.php?genre=science_fiction" target="_self">Science-Fiction</a><br>
				<a href="./pages/genre.php?genre=suspense" target="_self">Suspense</a><br>
				<a href="./pages/genre.php?genre=policier" target="_self">Policier</a><br>
				<a href="./pages/genre.php?genre=sport" target="_self">Sport</a>
          </article>
        </li>
        <li>
          <article>
            <!-- <p>manga's world</p>  -->
            <h3 class="heading">Manga's world</h3>
			<img src= "./images/mes-mangas.png">
            <p>Liste des Mangas:</p>
            <!-- <footer><a class="btn" href="#">liste des Mangas</a></footer> -->
			<?php
				if ($result->num_rows > 0) {
					// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<p><a href=./pages/titre_". $row["id_manga"] . ".php>" . $row["titre"]. "<br>";
					}
				} else {
					echo "0 results";
				}
			?>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>