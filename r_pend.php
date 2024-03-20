<?php
    $contpend = 0;
    for ($i=1;$i<67;$i++) {
        if (isset($_POST['txtJust'.$i]) && $_POST['txtJust'.$i] !== '') {
            $contpend++;
            echo "<tr>
                <td>".$i."</td>
                <td>".$_POST['txtJust'.$i]. "</td>
                <td>000</td>
                <td>".date("d/m/Y")."</td></tr>";
        }
    }
    $linvaz = 21 - $contpend;
    for ($i=1;$i<$linvaz;$i++) {
        echo "<tr><td>---</td>
        <td> </td>
        <td>---</td><td>---</td></tr>";
    }
?>