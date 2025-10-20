<?php
try{
     $conn = new PDO('mysql:host=localhost;dbname=MyDatabase', 'MyUsername', 'MyPassword');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
$filmId = $_POST["filmid"];

$query = "SELECT id, title FROM films WHERE films.id = :id";
$stmt = $conn->prepare($query);
$stmt->bindValue(':id', $filmId);
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

//Q4 Add some basic validation and error checking. E.g. making sure the user has submitted the form, making sure they entered a title. 

//Q5 At the moment the user has to enter an exact title to get a match. How can you make the matching more flexible - think about using a LIKE in the SQL. 
//   If you can get this to work you will get multiple results instead of a single film. How can you show all the films that match the query?

?>

</body>
</html>

