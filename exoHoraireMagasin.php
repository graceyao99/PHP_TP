<?php
$plageHoraire = [];

while (true){
    $heureDebut = readline("Entrez l'heure de debut");
    $heureFin = readline("Entrez l'heure de fin");
    $plageHoraire[] = [$heureDebut, $heureFin];
    if($heureDebut >= $heureFin){
        break;
    } else {
            $action1 = readline("Voulez vous entrer une plage horaire'oui ou non'"); 
            if($action1 === 'non'){
                break;
            }elseif($action1 != 'oui'){
                echo"saisir invalide";  
                break; 
            }
    }
    
}

print_r($plageHoraire);

$action2 = readline("entrez une heure");
$creneau = false;
foreach($plageHoraire as $plage){
    if($action2 >= $plage[0] && $action2 <= $plage[1]){
        $creneau = true;
    }
}

if ($creneau){
    echo "le magasin est ouvert a $action2";
}else {
    echo "le magasin est ferme a cette heure";
}


