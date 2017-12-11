<?phpif(isset($dec)){
    header('location: formulaire.php');
    
}?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form method="post" action="">
            <table>
                <tr>
                    <td>nombre 1</td>
                    <td><input type="number" name="nbr1"</td>
                </tr>
                <tr>
                    <td>nombre 2</td>
                    <td><input type="number" name="nbr2"</td>
                </tr>
                <tr>
                    <td> operateur</td>
                    <td>
                        <select name="choix">
                            <option value="">selectionner un operateur</option><br/>>
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                            <option value="%">%</option>
                        </select>
                    </td>
                </tr>
                <tr> 
                    <td colspan="2" align="center">
                        <input type="submit" name="calculer" value="calculer"/>
                    </td>
                </tr>
            </table>
        </form>
        <?php
      if(isset($_POST['calculer'])){
          extract($_POST);
          if($choix=='+'){
              echo "$nbr1 + $nbr2 =".($nbr1 +$nbr2);
          }
          else if($choix=='-'){
              echo "$nbr1 - $nbr2 =".($nbr1 -$nbr2);
      
          }
          else if($choix=='*'){
            echo "$nbr1 * $nbr2 =".($nbr1 * $nbr2);}
    
          else if($choix=='/'){
              if($nbr2 != 0){
                  echo "$nbr1 / $nbr2 =".($nbr1 /$nbr2);
                  
              }
              else { echo "impossible de diviser par zero";
              }
          }
      }
        ?>
    
    </body>
</html>
