<?php

$eta = "";

if (isset($_POST['calcola'])) {
    $dataNascita = $_POST['data_nascita'];
    $eta = calcolaEta($dataNascita);
}

function calcolaEta($dataNascita)
{
    $dataCorrente = time();
    $dataNascitaTimestamp = strtotime($dataNascita);

    $differenzaSecondi = $dataCorrente - $dataNascitaTimestamp;

    $eta = floor($differenzaSecondi / (365 * 24 * 60 * 60));

    return $eta;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Calcolo Età</title>
</head>

<body>
    <h1>Calcolo Età</h1>

    <form method="post">
        <label for="data_nascita">Data di nascita:</label>
        <input type="date" name="data_nascita" required>
        <button type="submit" name="calcola">Calcola età</button>
    </form>

    <?php if (!empty($eta)) { 
        echo "<br>La tua età è: " . $eta . " anni";
    } ?>
</body>

</html>