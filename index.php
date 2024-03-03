<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="functions.js"></script>
    <?php require_once("functions.php")?>
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
        <main>
            <section id="info">
                <table>
                    <tr><td style="width: 34%;">Cliente: <strong>CNH</strong></td><td style="width: 35%;">Unidade: <strong>Sorocaba</strong></td><td>Solicitante: <strong>Lucas M.</strong></td></tr>
                    <tr><td>Nº Série: <strong>0909090</strong></td><td>Nº Cliente: <strong>CNH-171</strong></td><td>Nº CMK: <strong>54</strong></td></tr>
                    <tr><td>Fabricante: <strong>Demag</strong></td><td>Modelo: <strong>DC-Pro 5</strong></td><td>Capacidade: <strong>500 kg</strong></td></tr>
                    <tr><td>Prédio: <strong>P-80</strong></td><td>Setor: <strong>Montagem</strong></td><td>Área : <strong>Feeder</strong></td></tr>
                </table>
            <div id="legend">
                <p>
                    Legenda: 
                    <i class="fa fa-thumbs-up iconl" style="margin-left: 0px;"></i>Ok 
                    <i class="fa fa-wrench iconl"></i>Recuperar
                    <i class="fa fa-thumbs-down iconl"></i>Trocar
                    <i class="fa fa-low-vision iconl"></i>Não inspecionado.
                </p>
            </div>
            </section>
            <form action="relatorio.php" method="post">

                <section id="insp" class="insp">
                    INSPEÇÃO MECÂNICA
                </section>

                <section id="trole" class="element">
                    TROLE - Capacidade: 500 kg
                </section>

                <section class="ask">
                    <div class="lab"><label>04-Motor (fixação, ruídos anormais) </label></div>
                    <?php opt('04')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>05-Freio (regular se necessário) </label></div>
                    <?php opt('05')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>06-Redutor (vazamento, nível de óleo) </label></div>
                    <?php opt('06')?>
                </section>

                <section id="trole" class="element">
                    TALHA - Capacidade: 500 kg
                </section>

                <section class="ask">
                    <div class="lab"><label>07-Guia da corrente </label></div>
                    <?php opt('07')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>08-Batedor stop </label></div>
                    <?php opt('08')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>09-Armazenador de corrente </label></div>
                    <?php opt('09')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>10-Fixação superior </label></div>
                    <?php opt('10')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>11-Fricção </label></div>
                    <?php opt('11')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>12-Freio (regular se necessário) </label></div>
                    <?php opt('12')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>13-Lubrificação </label></div>
                    <?php opt('13')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>14-Carcaça </label></div>
                    <?php opt('14')?>
                </section>
                <section class="ask">
                    <div class="lab"><label for="id15">15-Teste de carga (kg)</label></div>
                    <div class="opt"><input style="width: 90px;height: 17px" min="0" type="number" name="txt15" id="id15"></div>
                </section>

                <section id="trole" class="element">
                    REDUTOR
                </section>

                <section class="ask" style="height: 50px;">
                    <div class="lab"><label>16-Vazamento de óleo <br>( retentores, juntas e bujões ) </label></div>
                    <?php opt('16')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>17-Nível de óleo (completar se necessário) </label></div>
                    <?php opt('17')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>18-Ruídos e aquecimento anormal </label></div>
                    <?php opt('18')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>19-Reapertar parafusos de fixação </label></div>
                    <?php opt('19')?>
                </section>

                <section id="trole" class="element">
                    CORRENTE
                </section>

                <section class="ask">
                    <div class="lab"><label>20-Limpeza e lubrificação da corrente </label></div>
                    <?php opt('20')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>21-Corrente prende, salta ou produz ruído </label></div>
                    <?php opt('21')?>
                </section>
                <section class="ask" style="height: 50px;">
                    <div class="lab"><label>22-Amassamentos, estrias, fissuras, respingos de solda, corrosão ou deformação elo a elo</label></div>
                    <?php opt('22')?>
                </section>
                <section class="ask" style="height: 50px;">
                    <div class="lab"><label>23-Montagem (verificar se a corrente não está torcida ou com a solda invertida) </label></div>
                    <?php opt('23')?>
                </section>
                <section class="ask" style="height: 70px;">
                    <div class="lab"><label>24-Pino de fixação (se houver fissura,
                         deformação ou desgaste visível,
                         o mesmo deve ser substituido) </label></div>
                    <?php opt('24')?>
                </section>

                <section id="trole" class="element">
                    BLOCO INFERIOR - Capacidade: 500 kg
                </section>

                <section class="ask">
                    <div class="lab"><label>25-Caixa do gancho </label></div>
                    <?php opt('25')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>26-Carretel e rolamentos </label></div>
                    <?php opt('26')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>27-Carcaça quanto à desgastes e trincas </label></div>
                    <?php opt('27')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>28-Trava de gancho </label></div>
                    <?php opt('28')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>29-Placa de identificação </label></div>
                    <?php opt('29')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>30-Lubrificar caixa de gancho </label></div>
                    <?php opt('30')?>
                </section>

                <section id="trole" class="element">
                    MEDIÇÕES DA CORRENTE DE CARGA (mm)
                </section>

                <section class="ask" style="height: 75px;padding:5px;">
                    <table class="med">
                        <tr>
                            <th style="width: 66.5%;">NORMA TÉCNICA NBR 1292/1990</th>
                            <th style="width: 10%;">Nom.</th>
                            <th style="width: 10%;">Lim.</th>
                            <th>Med.</th>
                        </tr>
                        <tr>
                            <td>31-Alongamento - Medida de 11 elos</td>
                            <td>248</td>
                            <td>253</td>
                            <td><input style="width: 50px;height: 17px" min="248.0" step="0.1" type="number" name="txt31" id="id31"></td>
                        </tr>
                        <tr>
                            <td>32-Medida DM-Diâmetro médio do elo</td>
                            <td>7,4</td>
                            <td>6,7</td>
                            <td><input style="width: 50px;height: 17px;" step="0.1" min="0" max="7.4" type="number" name="txt32" id="id32"></td>
                        </tr>
                    </table>
                </section>
                <button type="submit" class="btn">CONFIRMA</button>
            </form>
        </main>
    </section>
</body>
</html>