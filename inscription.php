<?php
if((empty($_POST['username'])) or(empty($_POST['password'])) or (empty($_POST['email'])))
{
echo("Veuillez remplir tous les champs SVP");

}
else
{
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$con=@mysql_connect('localhost','','','miniprojetfivepoint')or die("La connexion à la base de donnée est plantée");
$query="insert into users values('$username','$password','$email') ";
$result=mysql_query($query,$con);
echo("Utilisateur inscrit");
?>