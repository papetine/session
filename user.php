<?php
session_start();
if(!$_SESSION['user']){
    header('location:formulaire.php');
}else{
echo '<a href="heure.php"> heure</a>'.'<br>';
echo '<form method="post" action="user.php"><input type="submit"  name="dec"value="deconnexion"/>
</form>';
extract($_POST);
if(isset($dec)){
    session_destroy();
    header('location: formulaire.php');
}   
}
?>