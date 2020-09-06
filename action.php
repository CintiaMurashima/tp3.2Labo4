<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="actionStyles.css">
</head>
<body>
  <div class="container">
    <table class="table">
      <tr class="cell"><!-- HEADER- CABECERA-->
        <th colspan="2" class="cell  verdita">YOUR BASIC INFO</th> 
      </tr>
      <?php
          $parameters = array();

          if ($_SERVER['REQUEST_METHOD'] == "POST")
              $parameters = $_POST;
          else
              $parameters = $_GET;
          function crearFila($nombre, $valor, $grey, $valorPorDefecto) {
            if(!$valor && $valorPorDefecto){
              $valor=$valorPorDefecto;
            }
            if($grey){
              echo '<tr class="background-grey">';
            }else{
              echo '<tr>';
            }
            echo '  
              <td class="cell negrita">'. $nombre . '</td>
              <td class="cell">' . $valor . '</td>
            </tr>';
          }
          crearFila("Name",$parameters['name'],true,"");
          crearFila("Email",$parameters['email'],false,"");
          crearFila("Password",$parameters['password'],true,"");
          crearFila("Birth-day",$parameters['birthday'],false,"");
          crearFila("Sex",$parameters['answere'],true,"Unspecified");

          echo '
          <tr class="cell">
            <th colspan="2" class="cell verdita">YOUR PROFILE</th> 
          </tr>';
          crearFila("About you",$parameters['comments'],true,"Unspecified");
          crearFila("Role",$parameters['role'],false,"");
          $interests=implode("<br>",$parameters['interest']);
          crearFila("Interests",$interests,true,"");


      ?>
    </table>
    <a href="index.php">Go Back</a>
  </div>
</body>
</html>
