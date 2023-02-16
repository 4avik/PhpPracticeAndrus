

<?php

 # array filters #ep 18
    # ---------- ÜLESANNE ----------
 # 1.koosta array nimedest.
 # 2. Sorteeri kas neil on lühemad kui viis sümbolit ja siis min 5 sümbolit
 #filtreeri viiega <5, >=5
 #dump
 #array map
 #kõik suurte tähtedega 


$names = ['Ketrin', 'Kristo', 'Gregor', 'Kevin', 'Timo', 'Karl'];

$output1 = array_filter($names, function($value) {
  return strlen($value) >= 5;  
});

    echo "Viis või rohkem tähemärki: ";
        print_r($output1);



$output2 = array_filter($names, function($value) {
    return strlen($value) < 5;  
  });
  
    echo "Vähem kui viis tähemärki: ";
        print_r($output2);


        
$capitalized_names = array_map('strtoupper', $names);
echo "Majuskel: ";
var_dump($capitalized_names);




?>