<?php 
if((empty($_POST['username'])||(empty($_POST['password'])))
{
echo("Veuillez remplir tous les champs SVP");

}
else
{
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$con=@mysql_connect('localhost','','','miniprojetfivepoint')or die("La connexion à la base de donnée est plantée");
$query="select * from users where username='".$username."' and password='".$password."' ";
$result=mysql_query($query,$con);
$nbligne=mysql_num_rows($resultat);
if($nblignes==0)
{
	echo("Login ou password incorrects");
}
else
{
	header("acceuil.php");
}
}
?>