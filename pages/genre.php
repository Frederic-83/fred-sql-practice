<?php
 $host="localhost";
 $user="root";
 $pwd="";
 $db="mangaworld";
 $genre = $_GET['genre'];

//$conn=mysqli_connect($host,$user,$pwd,$db) or die("unable to connect");
$conn=new mysqli("localhost", "root", "", $db);
if($conn->connect_error)
{
    die("connection faild:".$conn->connect_error);
}
//echo "Connection Successfully..!";
$req = "select titre, id_manga
			From Manga, genre
			Where genre.id_genre=Manga.id_genre
			And Lib_genre= ". "'". $genre . "'" ;
$result = $conn->query($req);
//$req = "test"

$conn->close();
?>
<html>
	<head>
		<?php
				echo "<h1><b>" .  $genre . "</b></h1>"
		?>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
			<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
	</head>
		<body id="top">
			<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
			<div id="pageintro" class="hoc clear"> 
				<form>
			<p>
				<?php
				//echo "<h1><b>" .  $genre . "</b></h1>"
				echo "<h2> Liste des mangas dans le genre ". $genre . ":</h2>";
				//echo $req;
				if ($result->num_rows > 0) {
					// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<p><a href=./titre_". $row["id_manga"] . ".php>" . $row["titre"]. "<br>";
					}
				} else {
					echo "0 results";
				}
				?>
				<br>
				<footer><a class="btn" href="../index.php">menu</a></footer>
			</p>
		</form>
	</body>
</html>