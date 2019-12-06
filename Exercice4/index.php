<?php $magnitude = 4; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <title>Exercice 4</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class='container-fluid bg-secondary'>

  <div class="row mt-5">
    <div class="jumbotron shadow-lg mx-auto text-center">
      <p>
        <?php
        switch($magnitude){
          case 1:
          echo 'magnitude '. $magnitude. ' : Micro-séisme impossible à ressentir.';
          break;
          case 2:
          echo 'magnitude '. $magnitude. ' : Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
          break;
          case 3:
          echo 'magnitude '. $magnitude. ' : Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
          break;
          case 4:
          echo 'magnitude '. $magnitude. ' : Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
          break;
          case 5:
          echo 'magnitude '. $magnitude. ' : Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
          break;
          case 6:
          echo 'magnitude '. $magnitude. ' : Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
          break;
          case 7:
          echo 'magnitude '. $magnitude. ' : Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
          break;
          case 8:
          echo 'magnitude '. $magnitude. ' : Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
          break;
          case 9:
          echo 'magnitude '. $magnitude. ' : Séisme capable de tout détruire sur une très vaste zone.';
          break;
          default:
          echo 'Aucun séisme n\'a été detecté.';
        }
        ?>
      </p>
      <div class="text-right mt-1">Un message de la direction</div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
