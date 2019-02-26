<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

  // Instanciation de l'objet avec passage de paramètres
  //$oPresident = President::getInstance('Macron','Emmanuel');


    // Instanciation de l'objet SANS passage de paramètres
  $oPresident = President::getInstance();
  echo $oPresident;

  echo"<br><br>On créer un autre president avec des paramètres différents du premier.<br>";
  $autrePresident=President::getInstance('toto','titi');
  echo"<br> On obtient un president identique au premier.<br>";
  echo $autrePresident;
?>
