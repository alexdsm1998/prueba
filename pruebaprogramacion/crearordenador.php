<?php

//incluimos la clase

include 'ordenador.php';
//generamos

$ordenador1 = new mac();
$ordenador2 = new aus();


$ordenador1->setmarca('mac');
echo " la marca del ordenador es marca" .$ordenador1->getcolor();
echo "<br>";

$ordenador1->setram('6');
echo "la capacidad de la ram es" .$ordenador1->getram();
echo "<br>";

$ordenador2->setmarca('Asus');
echo " la marca del ordenador es " .$ordenador2->getmarca();
echo "<br>";

$ordenador2->setram('18');
echo " la capacidad de la ram es" .$ordenador2->getram();
echo "<br>";

?>
