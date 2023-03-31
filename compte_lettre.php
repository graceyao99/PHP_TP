<?php
/*on entre une chaine de caractère
on dis le nombre de fois qu'un caractère est repéter dans la chaine 
*/
$chaines = readline("Entrée une chaine de caractère");
$caracteres_deja_selectionne = [];#on selectionne notre premier caractère
$selection = FALSE;
#compte le nombre de fois que chaque caractère est présenté dans la chaine de caractère
for($i=0; $i< strlen($chaines); $i++){
    $caractere = $chaines[$i];
    #je parcours mon tableau caracteres_deja_selectionne en comparant mon caractère avec les caractère deja selectionnés
    foreach($caracteres_deja_selectionne as $caractere_deja_selectionne){

        #si le caractère est deja présent on passe au caractère suivant de notre chaine de caractère
        if($caractere === $caractere_deja_selectionne){
            $selection = TRUE;
            break;
        }else {
            $selection = FALSE;
        }
    }

     /*si le caractère est n'a pas été selectionné je le stocke dans mon tableau 
     je compte le nombre de fois qu'il est repété dans ma chaine de caractère
     je passe au caractère suivant de notre chaine de caractère
     */
    if(!$selection){
        $caracteres_deja_selectionne[] = $caractere;
        $nombre = substr_count($chaines, $caractere);
        echo"il y a $nombre fois $caractere dans $chaines ";
    }
    
}



