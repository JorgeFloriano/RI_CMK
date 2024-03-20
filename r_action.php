<?php 
    $date1 = date_create($_POST['txtTec1Data']);
    $datebr1 = date_format($date1, 'd/m/Y');

    $date2 = date_create($_POST['txtTec2Data']);
    $datebr2 = date_format($date2, 'd/m/Y');

    if (isset($_POST["apto"])) {
        if ($_POST["apto"] == "NÃO APTO PARA OPERAR" || $_POST["apto"] == NULL || $_POST["apto"] == "") {
            $color = "w3-text-red";
        } else {
            $color = "";
        }
    } else {
        $color = "w3-text-red";
    }
?>