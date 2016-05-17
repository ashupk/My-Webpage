 <?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

$name = $_POST[“contactName"];
$email = $_POST[“email"];

$txt = “test.txt"; 

$fh = fopen($txt, 'a'); 
fwrite($fh,$name); // Write information to the file
fclose($fh);


?>
