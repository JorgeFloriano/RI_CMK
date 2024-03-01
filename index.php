<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Relatório de Inspeção</title>
</head>
<body>
    <section id="form">
        <header>
            <div id="header1">
                <img src="logo_cmk.jpg" alt="logo cmk" width="80px">
            </div>
            <div id="header2">
                <div>INSTRUÇÃO DE INSPEÇÃO</div>
                <div>TALHA ELÉTRICA DE CORRENTE</div>
            </div>
            <div id="header3">
                RI Nº 000
            </div>
        </header>
        <section id="info">
            <table>
                <tr><td style="width: 34%;">Cliente: <strong>CNH</strong></td><td style="width: 35%;">Unidade: <strong>Sorocaba</strong></td><td>Solicitante: <strong>Lucas M.</strong></td></tr>
                <tr><td>Nº Série: <strong>0909090</strong></td><td>Nº Cliente: <strong>CNH-171</strong></td><td>Nº CMK: <strong>54</strong></td></tr>
                <tr><td>Fabricante: <strong>Demag</strong></td><td>Modelo: <strong>DC-Pro 5</strong></td><td>Capacidade: <strong>500 kg</strong></td></tr>
                <tr><td>Prédio: <strong>P-80</strong></td><td>Setor: <strong>Montagem</strong></td><td>Área : <strong>Feeder</strong></td></tr>
            </table>
        </section>
        <section id="insp" class="insp">
            INSPEÇÃO MECÂNICA
        </section>
        <section id="trole" class="element">
            TROLE - (500 kg)
        </section>  
        <main>
            <form action="relatorio.php" method="post">
                <section class="ask" style="margin-top: 5px;">
                    <div class="lab"><label for="motor">04-Motor (fixação, ruídos anormais) </label></div>
                    <div class="opt">
                        <input type="radio" name="txtMotor" id="Motor_OK" value="Ok"><label for="Motor_OK"> Ok </label>
                        <input type="radio" name="txtMotor" id="Motor_R" value="Recuperar"><label for="Motor_R"> Re </label>
                        <input type="radio" name="txtMotor" id="Motor_T" value="Trocar"><label for="Motor_T"> Tr </label>
                    </div>
                </section>
                <section class="ask">
                    <div class="lab"><label for="motor">05-Freio (regular se necessário) </label></div>
                    <div class="opt">
                        <input type="radio" name="txtFreio" id="Freio_OK" value="Ok"><label for="Freio_OK"> Ok </label>
                        <input type="radio" name="txtFreio" id="Freio_R" value="Recuperar"><label for="Freio_R"> Re </label>
                        <input type="radio" name="txtFreio" id="Freio_T" value="Trocar"><label for="Freio_T"> Tr </label>
                    </div>
                </section>
                <section class="ask">
                    <div class="lab"><label for="motor">06-Redutor (vazamento, nível de óleo) </label></div>
                    <div class="opt">
                        <input type="radio" name="txtRedutor" id="Redutor_OK" value="Ok"><label for="Redutor_OK"> Ok </label>
                        <input type="radio" name="txtRedutor" id="Redutor_R" value="Recuperar"><label for="Redutor_R"> Re </label>
                        <input type="radio" name="txtRedutor" id="Redutor_T" value="Trocar"><label for="Redutor_T"> Tr </label>
                    </div>
                </section>
                <button type="submit" class="btn">CONFIRMA</button>
            </form>
        </main>
    </section>
</body>
</html>