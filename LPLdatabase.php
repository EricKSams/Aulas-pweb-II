<?php

$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'lpl';


$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("Conection Failed: " . $conn -> connect_error);
}


$sql = "INSERT INTO leaguespring 
(TeamName,
 LeagueID, 
 NumberOfMembers, 
 Foundation, 
 YearOfEntrance, 
 RakingInTheLeague, 
 Wins, 
 Loss, 
 Titles, 
 WorldsTitles) 
 VALUES ('EDG', '334', '6', '2013', '2014', '2', '13', '3', '32', '1' )";

if ($conn -> query($sql) === TRUE){
    echo "New record created successfully";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn -> close();
?>