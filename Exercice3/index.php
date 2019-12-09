<?php
  // Déclaration de variables
  $gender = 'Homme'; $age = 21; $message = '';
  // Vérifie le genre de l'utilisateur en premier
  if($gender == 'Homme'){
    // Puis vérifie si l'âge est compris entre 0 et 18
    if($age > 0 && $age < 18){
      $message = 'Vous êtes un homme et vous êtes mineur';
      // Ou si l'âge est entre 18 et 122
    } else if($age >= 18 && $age < 122){
      $message = 'Vous êtes un homme et vous êtes majeur';
      // Ou si l'âge n'est pas reconnut
    } else {
      $message = 'Vous êtes un homme qui a mal entré son âge';
    }
  } else if($gender == 'Femme'){
    if($age > 0 && $age < 18){
      $message = 'Vous êtes une femme et vous êtes mineure';
    } else if($age >= 18 && $age < 122){
      $message = 'Vous êtes une femme et vous êtes majeure';
    } else {
      $message = 'Vous êtes une femme qui a mal entré son âge';
    }
  // Affiche un message d'erreur si le genre n'est pas reconnut
  } else {
    $message = 'Je ne reconnais pas votre genre';
  }
?>
<!DOCTYPE html>
<html lang='fr' dir='ltr'>
<head>
  <title>Exercice 3</title>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
</head>

<body class='container-fluid bg-secondary'>

  <div class='row mt-5'>
    <div class='jumbotron shadow-lg mx-auto text-center'>
      <!-- Affiche le message dans une balise p -->
      <p><?= $message ?></p>
      <div class='text-right mt-1'>Un message de la direction</div>
    </div>
  </div>

  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
</body>
</html>
