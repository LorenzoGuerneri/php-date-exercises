<?php

function ConvertoUnaDataInTimestamp($date) {
    return strtotime($date);
}

function ConvertoUnArrayDiDateInTimestamp($arrayIniziale, $callback) {
    $timestampArray = array_map($callback, $arrayIniziale);
    return $timestampArray;
}

$arrayIniziale = [
    "2023-08-08",
    "2023-08-09",
    "2023-08-10",
    "2023-08-11",
    "2023-08-12"
];

$timestampArray = ConvertoUnArrayDiDateInTimestamp($arrayIniziale, 'ConvertoUnaDataInTimestamp');

echo "Array iniziale di date: <br>";
echo "<pre>" . var_export($arrayIniziale, true) . "</pre>";

echo "Array di timestamp: <br>";
echo "<pre>" . var_export($timestampArray, true) . "</pre>";

?>