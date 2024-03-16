<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Relatorio de Inspeção</title>
    <?php require_once("functions.php")?>
</head>
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
<body>
    <section id="relatorio">
        <?php require ("r_header.php")?>
        <main>
            <section id="elements">
                <table class="half" style="border-right: hidden;">
                    <tr><th colspan="3">INSPEÇÃO MECÂNICA</th></tr>
                    <tr><th colspan="2">TROLE</th><th style="width: 20%;">Cap.: 500 kg</th></tr>
                    <?php reportElement(1,[
                        "Rodas e rolamentos (Não aplica)",
                        "Fixação da talha e parafusos de fechamento (Não aplica)",
                        "Batentes fim de curso (Não aplica)",
                        "Motor (fixação e ruidos anormais)",
                        "Freio (regular se necessário)",
                        "Redutor (vazamento, aquecimento)"
                    ])?>
                    <tr><th colspan="2">TALHA</th><th>Cap.: 500 kg</th></tr>
                    <?php reportElement(7,[
                        "Guia da corrente",
                        "Batedor stop",
                        "Armazenador de corrente",
                        "Fixação superior",
                        "Fricção",
                        "Freio (regular se necessário)",
                        "Lubrificação",
                        "Carcaça",
                        "Teste de carga (kg)"
                    ])?>
                    <tr><th colspan="2">REDUTOR</th><th></th></tr>
                    <?php reportElement(16,[
                        "Vazamento de óleo ( retentores, juntas e bujões )",
                        "Nível de óleo (completar se necessário)",
                        "Ruídos e aquecimento anormal",
                        "Reapertar parafusos de fixação"
                    ])?>
                    <tr><th colspan="2">CORRENTE DE CARGA</th><th></th></tr>
                    <?php reportElement(20,[
                        "Limpeza e lubrificação da corrente",
                        "Corrente prende, salta ou produz ruído",
                        "Amassamentos, estrias, fissuras, respingos de solda, corrosão ou deformação",
                        "Montagem (não está torcida ou com a solda invertida)",
                        "Pino da corrente (se houver fissura, deformação ou desgaste visível, o mesmo deve ser substituido)"
                    ])?>
                    <tr><th colspan="2" style="padding-top: 1px;">BLOCO INFERIOR</th><th>Cap.: 500 kg</th></tr>
                    <?php reportElement(25,[
                        "Caixa do gancho",
                        "Carretel e rolamentos",
                        "Carcaça quanto à desgastes e trincas",
                        "Trava de gancho",
                        "Placa de identificação",
                        "Lubrificar caixa de gancho"
                    ])?>    
                </table>
                <table class="half">
                    <tr><th colspan="3">INSPEÇÃO ELÉTRICA</th><tr>
                    <tr><th colspan="2">TALHA</th><th style="width: 20%;"></th></tr>
                    <?php reportElement(36,[
                        "Fixação do painel, tampa e limpeza",
                        "Chave geral, fusíveis e disjuntores",
                        "Motores (medições e aquecimento)",
                        "Caixa de ligação",
                        "Cabo de alimentação",
                        "Prensa cabos",
                        "Tomadas de engate rápido",
                        "Contatores e contatos",
                        "Trafos de potência e comando",
                        "Bornes e terminais",
                        "Banco de resistência (Não aplica)",
                        "Célula de carga (Não aplica)"
                    ])?>
                    <tr><th colspan="2">BOTOEIRA</th><th></th></tr>
                    <?php reportElement(48,[
                        "Funcionamento do botões",
                        "Cabo elétrico e prensa cabo",
                        "Cabo de aço de sustentação e fixação",
                        "Caixa de conexão",
                        "Carcaça e identificão dos botões"
                    ])?>
                    <tr><th colspan="2">ELETRIFICAÇÃO TRANSVERSAL</th><th></th></tr>
                    <?php reportElement(53,[
                        "Fixação e conservação dos cabos",
                        "Fixações e emendas do perfil da eletrificação",
                        "Carros porta cabos e arrastador"
                    ])?>
                    <tr><th colspan="2">RÁDIO CONTROLE</th><th></th></tr>
                    <?php reportElement(56,[
                        "Funcionamento e estado dos botões do emissor",
                        "Reaperto de todas as conexões e ligações",
                        "Estado de conservação da carcaça do rádio",
                        "Estado da bateria / pilhas do emissor",
                        "Sinais luminosos do receptor e transmissor"
                    ])?>
                    <tr><th colspan="2">LIMITE DE FIM DE CURSO - Elevação</th><th></th></tr>
                    <?php reportElement(61,[
                        "Funcionamento da chave limite",
                        "Cabos ou corrente do pino",
                        "Contatos, molas e articulação"
                    ])?>
                    <tr><th colspan="2">LIMITE DE FIM DE CURSO - Direção</th><th></th></tr>
                    <?php reportElement(64,[
                        "Funcionamento da chave limite",
                        "Cabos ou corrente do pino",
                        "Contatos, molas e articulação"
                    ])?>
                </table>
            </section>
            <section id="medicoes">
                <table class="half" style="border-right: hidden;">
                    <thead>
                        <tr><th colspan="6">MEDIÇÕES DA CORRENTE DE CARGA (mm)</th></tr>
                        <tr><th colspan="3" rowspan="2" style="width: 55%;">NORMA TÉCNICA <br> NBR 1292/1990</th><th colspan="3">Medidas conforme a norma</th></tr>
                        <tr><th>Nominal</th><th>Máximo</th><th>Medido</th></tr>
                    </thead>
                    <tbody>
                        <tr><td style="width: 5%;">31</td><td colspan="2">Alongamento - Medida de 11 elos</td><td>177.8</td><td>180.3</td><td><?= isEmpty(31) ?></td></tr>
                        <tr><td>32</td><td colspan="2">Medida DM-Diâmetro médio do elo</td><td>7.4</td><td>6.7</td><td><?= isEmpty(32) ?></td></tr>
                    </tbody>
                    <thead>
                        <tr><th colspan="6">MEDIÇÕES DO GANCHO INFERIOR (mm)</th></tr>
                        <tr><th colspan="3" rowspan="2" style="width: 55%;">NORMA TÉCNICA <br> NBR 10070/1987</th><th colspan="3">Medidas conforme a norma</th></tr>
                        <tr><th>Nominal</th><th>Máximo</th><th>Medido</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>33</td><td rowspan="4">Figura do gancho</.d><td>Medida W1</td><td>41</td><td>45.1</td><td><?= isEmpty(33) ?></td></tr>
                        <tr><td>34</td><td>Medida Y</td><td>28</td><td>23.6</td><td><?= isEmpty(34) ?></td></tr>
                        <tr><td>35</td><td>Alinhamento</td><td colspan="3"><?= $_POST['txt35'] ?? "Não insp."?></td></tr>
                    </tbody>
                </table>
                <table class="half">
                    <thead>
                        <tr><th colspan="5">MEDIÇÕES DAS GRANDEZAS ELÉTRICAS</th></tr>
                        <tr><th colspan="3">VALORES CONSIDERADOS</th><th>Nominal</th><th>Medido</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>67</td><td colspan="2">Tensão de rede (V)</td><td>440</td><td><?= isEmpty(67) ?></td></tr>
                        <tr><td>68</td><td colspan="2">Tensão do transformador de comando (VCA)</td><td>24</td><td><?= isEmpty(68) ?></td></tr>
                        <tr><td>69</td><td colspan="2">Medição do banco de resistências (Ohms)</td><td>Ñ aplica</td><td><?= $_POST['txt69'] ?? "Não insp."?></td></tr>
                        <tr><td rowspan="3">70</td><th rowspan="3">MOTOR DE <br> DIREÇÃO</th><td>Corrente da alta (A)</td><td>1.0</td><td><?= isEmpty(70) ?></td></tr>
                        <tr><td>Corrente da baixa (A)</td><td>1.0</td><td><?= isEmpty("70_2") ?></td></tr>
                        <tr><td>Tensão do freio (VCC)</td><td>Ñ Insp.</td><td><?= $_POST['txt70_3'] ?? "Não insp."?></td></tr>
                        <tr><td rowspan="3">71</td><th rowspan="3">MOTOR DE <br> ELEVAÇÃO</th><td>Corrente da alta (A)</td><td>1.8</td><td><?= isEmpty(71,) ?></td></tr>
                        <tr><td>Corrente da baixa (A)</td><td>2.8</td><td><?= isEmpty("71_2") ?></td></tr>
                        <tr><td>Tensão do freio (VCC)</td><td>Ñ Insp.</td><td><?= isEmpty("71_3") ?></td></tr>
                    </tbody>
                </table>
            </section>
            <section id="status">
                <div id="status1">STATUS FINAL DA INSPEÇÃO: <?= $_POST['status'] ?? "RESTAM PENDÊNCIAS"?>!</div>
                <div id="status2" class="<?= $color?>">STATUS DO EQUIPAMENTO : <?= $_POST['apto'] ?? "NÃO APTO PARA OPERAR"?>!</div>
            </section>
            <section id="ressalvas">
                <strong>Ressalvas:</strong> <?= isEmpty("Ressalvas", "Sem ressalvas!") ?>
            </section>
            <?php require ("r_footer.php")?>
            <section id="verso">
            <?php require ("r_header.php")?>
                <table id="tabVerso" class="z">
                    <tr>
                        <th colspan="4">Relação de pendências do equipamento:</th>
                    </tr>
                    <tr>
                        <th>Ítem</th><th style="width: 620px;">Descrição</th><th>R.I.</th><th>Data</th>
                    </tr>
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
                <tr>
                    <th colspan="4">Observações gerais e serviços executados durante a inspeção:</th>
                </tr>
                </table>
                <div id="versoObs">
                        <p> 
                            <?= isEmpty("Observacoes", "Sem observações!") ?>
                        </p>
                </div>
                <?php require ("r_footer.php")?>
            </section>
        </main>
    </section>
</body>
</html>