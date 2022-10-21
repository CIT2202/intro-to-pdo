<?php
try{
    $conn = new PDO('mysql:host=localhost;dbname=cit2202', 'root', 'letmein');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
$usersChosenId = $_POST["filmid"];

$query = "SELECT * FROM films WHERE films.id = :id";
$stmt = $conn->prepare($query);
$stmt->bindValue(':id', $usersChosenId);
$stmt->execute();
$chosenFilm = $stmt->fetch();
$conn=NULL;
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Prepared statement example</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php

//check to see if there are any results
if($chosenFilm){
	echo "<p>{$chosenFilm['title']}</p>";
}else{
	echo "<p>No records found.</p>";
}

//Q1 On line 3 change the connection settings to match the database name, username and password you created last week in the MySQL practical.
//   Make sure form.html and prepared-stmt are on a web server.
//   test this works by entering an id into form.html, and clicking submit.
//   prepared-stmt.php should show the relevant film.

//Q2 Modify the above code so that, instead of an id number, the user can enter a title into form.html.
//   prepared-stmt.php should display the title of the matching film

//Q3 Modify the above code so that it shows further details for the film, the certificate, year and duration
//   e.g. Spirited Away (PG) was released in 2001 and is 124 minutes in length. 

?>

</body>
</html>
