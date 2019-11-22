<?php

$landen = array(
"Japan" => "Tokyo",
"Nederland" => "Amsterdam",
"China" => "Peking"
);
$tel = 0;


foreach ($landen as $land => $city ) {
    echo "wat is de hoofdstad van " . $land ."?". PHP_EOL;
    $antwoord = readline();
    if($antwoord == $city){
 echo "correct" . PHP_EOL;
 $tel++;
    } else{
        echo "Incorrect" . PHP_EOL;
    }
}
echo "Je hebt " . $tel . " van de " . count($landen) . " Goed";

?>