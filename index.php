<!DOCTYPE html>
<?php 
$server="localhost";
$username="root";
$password="";

$conn=mysqli_connect($server,$username,$password, "arendehanteringssystem");

if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $password=md5(string: $_POST["password"]);
    $sql="INSERT INTO tbluser(username, password) VALUES ('$username', '$password')";
    $reslut=mysqli_query($conn,$sql);
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scania</title>
</head>
<body>
    <h1>turk</h1>

<?php
$sql="SELECT * FROM tbluser";
$result=mysqli_query($conn,$sql);
while($rad=mysqli_fetch_assoc($result)){ ?>

    <p>
        <b>Användarnamn:</b>&nbsp;<?=$rad["username"]?><br>
        <b>Lösenord:</b>&nbsp;<?=$rad["password"]?>
    </p>
<?php }
?>
<form action="index.php" method="POST">
    <input type="text" name="username" placeholder="Användarnamn">
    <input type="password" name="password" placeholder="Lösenord">
    <input type="submit" name="submit" value="Skicka">
</form>


</body>
</html>