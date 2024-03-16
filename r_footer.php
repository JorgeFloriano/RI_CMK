<table style="border-top: hidden;margin-bottom: 200px;">
    <tr>
        <th>Assinatura do cliente.</th>
        <th colspan="6">Apontamento de Horas e relação dos técnicos</th>
    </tr>
    <tr>
        <td rowspan="5" style="width: 150px;"></td>
    </tr>
    <tr>
        <td>Nome: <?= isEmpty("Tec1Name","Não Identificado") ?></td>
        <td style="width: 150px;" rowspan="4">
            <img src=<?=$_POST['signTec1']?> alt="imagem" width="100%">
        </td>
        <td>Nome: <?= isEmpty("Tec2Name","Não Identificado") ?></td>
        <td style="width: 150px;" rowspan="4">
            <img src=<?=$_POST['signTec2']?> alt="imagem" width="100%">
        </td>
    </tr>
    <tr><td>Função: <?= isEmpty("Tec1Func","Não Identificada") ?></td><td>Função: <?= isEmpty("Tec2Func","Não Identificada") ?></td></tr>
    <tr><td>Data: <?= $datebr1?></td><td>Data: <?= $datebr2?></td></tr>
    <tr><td>Início: <?= isEmpty("Tec1HI","--:--") ?>h / Final: <?= isEmpty("Tec1HF","--:--") ?>h</td><td>Início: <?= isEmpty("Tec2HI","--:--") ?>h / Final: <?= isEmpty("Tec2HF","--:--") ?>h</td></tr>
</table>