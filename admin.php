<?php
session_start();
extract($_POST);
if(!$_SESSION['admin']){
    header('location:formulaire.php');
}else{
echo '<a href="tableau.php">tableau</a>';
echo '<form method="post" action="user.php"><input type="submit"  name="dec"value="deconnexion"/>
</form>';
extract($_POST);
if(isset($dec)){
    session_destroy();
    
    header('location: formulaire.php');
    
}
}
?>