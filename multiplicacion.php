<?php 
for($lol=1; $lol<= 7; $lol)
echo nl2br("\t $lol");
for($fila = 2; $fila <= 7; $lol){
    echo nl2br ("\n $fila");
    for($lol =2; $lol <= 7; $lol++){
        $resul =$fila;
        if($lol ===0){
            $result =$fila;
        }
        if($lol >= 1)
        $resul = $fila * lol;
       }
       echo nl2br("\t $result");
    }
    
}
 ?>