<?php
require 'eleves.php';

//création de plusieurs objets Eleves
$eleve1 = new Eleves('Emmanuel', 42);
$eleve2 = new Eleves('Thierry', 51);
$eleve3 = new Eleves('Pascal', 45);
$eleve4 = new Eleves('Eric', 48);
$eleve5 = new Eleves('Nicolas', 19);

//appelle fonction affichage infos, elève par élève
/*echo $eleve1->afficherInfos();
echo $eleve2->afficherInfos();
echo $eleve3->afficherInfos();
echo $eleve4->afficherInfos();
echo $eleve5->afficherInfos();*/

//Affiche les infos in array
$eleves =array($eleve1, $eleve2, $eleve3, $eleve4, $eleve5); //le tableau $eleves contient les infos des différents objets de la classe Eleves
foreach ($eleves as $Eleves){
    echo $Eleves->prenom.'  =>  '.$Eleves->age.' ans <br>';
}
//calcul de la moyenne d'age de la classe
$countAge = array($eleve1->age, $eleve2->age, $eleve3->age, $eleve4->age, $eleve5->age);
$totalAge = array_sum($countAge);
$nbrAges = count($eleves);
$moyenne = $totalAge/$nbrAges;

//affiche la moyenne d'age
echo '<br>La moyenne d\'age est de : '.$moyenne. ' ans.';



?>