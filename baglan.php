<?php 
$servername="localhost";
$username="root";
$password="";
$db="ekblog";

try{
$baglan=new PDO("mysql:host=$servername;dbname=$db",$username,$password);
$baglan ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   echo"";
}
catch(PDOException $e){
echo"Hata Olustu:".$e->getMessage();
}

?>