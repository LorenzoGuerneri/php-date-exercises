<?php

$date = ['2023-08-08', '2023-13-09', '2023-02-30', '2023-02-28'];

function validaDateConEspressioneRegolare($date) {
    $pattern = '/^\d{4}-(0[1-9]|1[0-2])-([0-2][0-9]|3[01])$/';
    $dateValidate = array();

    foreach ($date as $data) {
        if (preg_match($pattern, $data)) {
            $dateValidate[] = $data;
        }
    }

    return $dateValidate;
}

$dateValidate = validaDateConEspressioneRegolare($date);

echo "<h3>Date originali</h3>";
echo "<pre>" . var_export($date, true) . "</pre>";

echo "<h3>Date validate</h3>";
echo "<pre>" . var_export($dateValidate, true) . "</pre>";

?>
