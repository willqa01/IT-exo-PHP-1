<?php
$notes = [15, 17, 20, 13, 19, 14, 8, 4, 0]; // Tableau de notes
$somme = 0;
$count = 0;


$notes[5];



foreach ($notes as $key => $value) {
    // $somme
    $somme = $value + $somme;
    $count = $count + 1;
}

echo($somme / $count);

$somme = 0;

for ($i = 0; $i < $count; $i = $i + 1) {
    $somme = $notes[$i] + $somme;
    
}
// $total = $notes[0] + $notes[1] + etc ..;
count($notes);
echo $somme / $count;
