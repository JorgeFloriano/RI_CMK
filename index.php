<?php require_once("head.php");?>
<link rel="stylesheet" href="form.css">
<?php require_once("functions.php");?>
<script src="functions.js"></script>
<title>Relatório de Inspeção</title>
</head>
<body id="body">
    <section id="all">
        <header id="hForm">
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
                <table style="width: 100%;">
                    <tr><td style="width: 115px;">Cliente: <strong>CNH</strong></td><td style="width: 125px;">Unidade: <strong>Sorocaba</strong></td><td>Solicitante: <strong>Lucas M.</strong></td></tr>
                    <tr><td>Nº Série: <strong>0909090</strong></td><td>Nº Cliente: <strong>CNH-171</strong></td><td>Nº CMK: <strong>54</strong></td></tr>
                    <tr><td>Fabricante: <strong>Demag</strong></td><td>Modelo: <strong>DC-Pro 5</strong></td><td>Capacidade: <strong>500 kg</strong></td></tr>
                    <tr><td>Prédio: <strong>P-80</strong></td><td>Setor: <strong>Montagem</strong></td><td>Área : <strong>Feeder</strong></td></tr>
                </table>
                <div id="legend">
                        Legenda: 
                        <i class="fa fa-thumbs-up iconl" style="margin-left: 0px;"></i>Ok 
                        <i class="fa fa-wrench iconl"></i>Recuperar
                        <i class="fa fa-thumbs-down iconl"></i>Trocar
                </div>
            </section>
            <form id="form" action="relatorio.php" method="post">

                <section id="insp" class="insp">
                    INSPEÇÃO MECÂNICA
                </section>

                <section id="trole" class="element">
                    TROLE - Capacidade: 500 kg
                </section>
                <?php opt('1','Rodas e rolamentos')?>
                <?php opt('2','Fixação da talha e parafusos de fechamento')?>
                <?php opt('3','Batentes fim de curso')?>

                <section id="trole" class="element">
                    TALHA - Capacidade: 500 kg
                </section>
                <?php opt('7', 'Guia da corrente')?>
                <?php opt('8', 'Batedor stop')?>
                <?php opt('9', 'Armazenador de corrente')?>
                <?php opt('10', 'Fixação superior')?>
                <?php opt('11', 'Fricção')?>
                <?php opt('12', 'Freio (regular se necessário)')?>
                <?php opt('13', 'Lubrificação')?>
                <?php opt('14', 'Carcaça')?>
                <section class="item">
                    <section class="ask">
                        <div class="lab"><label for="id15">15-Teste de carga (kg)</label></div>
                        <div class="opt">
                            <input style="width: 65px;" min="0" type="number" name="txt15" id="id15">
                        </div>
                    </section>
                </section>

                <section id="trole" class="element">
                    REDUTOR
                </section>
                <?php opt('16', 'Vazamento ( retentores, juntas e bujões )')?>
                <?php opt('17', 'Nível de óleo (completar se necessário)')?>
                <?php opt('18', 'Ruídos e aquecimento anormal')?>
                <?php opt('19', 'Reapertar parafusos de fixação')?>

                <section id="trole" class="element">
                    CORRENTE
                </section>
                <?php opt('20', 'Limpeza e lubrificação da corrente')?>
                <?php opt('21', 'Corrente prende, salta ou produz ruído')?>
                <?php opt('22', 'Amassamentos, estrias, fissuras, respingos de solda, corrosão ou deformação elo a elo')?>
                <?php opt('23', 'Montagem (verificar se a corrente não está torcida ou com a posição da solda invertida)')?>
                <?php opt('24', 'Pino de fixação (substituir no caso de qualquer imperfeição visível)')?>

                <section id="trole" class="element">
                    BLOCO INFERIOR - Capacidade: 500 kg
                </section>
                <?php opt('25', 'Caixa do gancho')?>
                <?php opt('26', 'Carretel e rolamentos')?>
                <?php opt('27', 'Carcaça quanto à desgastes e trincas')?>
                <?php opt('28', 'Trava de gancho')?>
                <?php opt('29', 'Placa de identificação')?>
                <?php opt('30', 'Lubrificar caixa de gancho')?>
             
                <section id="trole" class="element">
                    MEDIÇÕES DA CORRENTE DE CARGA (mm)
                </section>

                <section class="item">
                    <table class="med">
                        <tr>
                            <th style="width: 250px;">NORMA NBR 1292/1990</th>
                            <th style="width: 60px;">Nominal</th>
                            <th style="width: 55px">Limite</th>
                            <th>Medido</th>
                        </tr>
                        <tr>
                            <td>31-Alongam. - Med. 11 elos</td>
                            <td>248</td>
                            <td>253</td>
                            <td><input class="medido" min="0" step="0.1" type="number" name="txt31" id="id31"></td>
                        </tr>
                        <tr>
                            <td>32-Diâmetro médio do elo</td>
                            <td>7.4</td>
                            <td>6.7</td>
                            <td><input class="medido" step="0.1" min="0" type="number" name="txt32" id="id32"></td>
                        </tr>
                    </table>
                </section>

                <section id="trole" class="element">
                    MEDIÇÕES DO GANCHO INFERIOR (mm)
                </section>

                <section class="item">
                    <table class="med" style="height: 105px;">
                        <tr>
                            <th style="width: 250px;" colspan="2">NORMA NBR 10070/1987</th>
                            <th style="width: 60px;">Nominal</th>
                            <th style="width: 55px;">Limite</th>
                            <th>Medido</th>
                        </tr>
                        <tr>
                            <td rowspan="3"><img src="gancho.jpg" alt="figura do gancho" width="80px"></td>
                            <td>33-Medida W1</td>
                            <td>41</td>
                            <td>45.1</td>
                            <td><input class="medido" min="0" step="0.1" type="number" name="txt33" id="id33"></td>
                        </tr>
                        <tr>
                            <td>34-Medida Y</td>
                            <td>28</td>
                            <td>23.6</td>
                            <td><input class="medido" step="0.1" min="0" type="number" name="txt34" id="id34"></td>
                        </tr>
                        <tr>
                            <td>35-Alinhamento</td>
                            <td>
                                <label for="35_Ok">Ok </label><input type="radio" name="txt35" id="35_Ok" value="Alinhamento Ok">
                            </td>
                            <td colspan="2">
                                <label for="35_T">Substituir </label><input type="radio" name="txt35" id="35_T" value="Desalinhado, substituir gancho">
                            </td>
                        </tr>
                    </table>
                </section>

                <section id="insp" class="insp">
                    INSPEÇÃO ELÉTRICA
                </section>

                <section id="trole" class="element">
                    TALHA
                </section>

                <?php opt('36', 'Fixação do painel, tampa e limpeza')?>
                <?php opt('37', 'Chave geral, fusíveis e disjuntores')?>
                <?php opt('38', 'Motores (medições e aquecimento)')?>
                <?php opt('39', 'Caixa de ligação')?>
                <?php opt('40', 'Cabo de alimentação')?>
                <?php opt('41', 'Prensa cabos')?>
                <?php opt('42', 'Tomadas de engate rápido')?>
                <?php opt('43', 'Contatores e contatos')?>
                <?php opt('44', 'Trafos de potência e comando')?>
                <?php opt('45', 'Bornes e terminais')?>

                <section id="trole" class="element">
                    BOTOEIRA
                </section>

                <?php opt('48', 'Funcionamento do botões')?>
                <?php opt('49', 'Cabo elétrico e prensa cabo')?>
                <?php opt('50', 'Cabo de aço de sustentação e fixação')?>
                <?php opt('51', 'Caixa de conexão')?>
                <?php opt('52', 'Carcaça e identificão dos botões')?>

                <section id="trole" class="element">
                    ELETRIFICAÇÃO TRANSVERSAL
                </section>
                <?php opt('53', 'Fixação e conservação dos cabos')?>
                <?php opt('54', 'Estado do perfil, fixações e emendas')?>
                <?php opt('55', 'Carros porta cabos e arrastador')?>

                <section id="trole" class="element">
                    RÁDIO CONTROLE
                </section>

                <?php opt('56', 'Funcionamento e estado do emissor')?>
                <?php opt('57', 'Reaperto de todas as conexões e ligações')?>
                <?php opt('58', 'Estado de conservação da carcaça')?>
                <?php opt('59', 'Estado da bateria / pilhas do emissor')?>
                <?php opt('60', 'Sinais luminosos do receptor e transmissor')?>

                <section id="trole" class="element">
                    LIMITE DE FIM DE CURSO - Elevação
                </section>

                <?php opt('61', 'Funcionamento da chave limite')?>
                <?php opt('62', 'Cabos ou corrente do pino')?>
                <?php opt('63', 'Contatos, molas e articulação')?>

                <section id="trole" class="element">
                    LIMITE DE FIM DE CURSO - Direção
                </section>

                <?php opt('64', 'Funcionamento da chave limite')?>
                <?php opt('65', 'Cabos ou corrente do pino')?>
                <?php opt('66', 'Contatos, molas e articulação')?>

                <section id="trole" class="element">
                    MEDIÇÕES DAS GRANDEZAS ELÉTRICAS
                </section>

                <section class="item">
                <table class="med" style="height: 270px;">
                    <thead>
                        <tr>
                            <th style="width: 300px;" colspan="3">VALORES CONSIDERADOS</th>
                            <th style="width: 70px;">Nominal</th>
                            <th>Medido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>67-</td>
                            <td colspan="2">Tensão de rede (V)</td>
                            <td>440</td>
                            <td>
                                <input class="medido" step="0.1" min="0" type="number" name="txt67" id="id67">
                            </td>
                        </tr>
                        <tr>
                            <td>68-</td>
                            <td colspan="2">Tensão trafo de comando (VCA)</td>
                            <td>24</td>
                            <td>
                                <input class="medido" step="0.1" min="0" type="number" name="txt68" id="id68">
                            </td>
                        </tr>
                        <tr>
                            <td>69-</td>
                            <td colspan="2">Med. banco de resistências (Ohms)</td>
                            <td>Ñ aplica</td>
                            <td>
                                <input class="medido" disabled step="0.1" min="0" type="number" name="txt69" id="id69">
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="3">70-</td>
                            <th rowspan="3" class="motor" >MOTOR DE <br> DIREÇÃO</th>
                            <td>Corr. da alta (A)</td>
                            <td>1.0</td>
                            <td>
                                <input class="medido" step="0.1" min="0" type="number" name="txt70" id="id70">
                            </td>
                        </tr>
                        <tr>
                            <td>Corr. da baixa (A)</td>
                            <td>1.0</td>
                            <td>
                                <input class="medido" step="0.1" min="0" type="number" name="txt70_2" id="id70_2">
                            </td>
                        </tr>
                        <tr>
                            <td>Tensão freio (VCC)</td>
                            <td>Ñ aplica</td>
                            <td>
                                <input class="medido" disabled step="0.1" min="0" type="number" name="txt70_3" id="id70_3">
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="3">71-</td>
                            <th rowspan="3" class="motor" >MOTOR DE <br> ELEVAÇÃO</th>
                            <td>Corr. da alta (A)</td>
                            <td>1.8</td>
                            <td>
                                <input class="medido" step="0.1" min="0" type="number" name="txt71" id="id71">
                            </td>
                        </tr>
                        <tr>
                            <td>Corr. da baixa (A)</td>
                            <td>2.8</td>
                            <td>
                                <input class="medido" step="0.1" min="0" type="number" name="txt71_2" id="id71_2">
                            </td>
                        </tr>
                        <tr>
                            <td>Tensão freio (VCC)</td>
                            <td>190</td>
                            <td>
                                <input class="medido" step="0.1" min="0" type="number" name="txt71_3" id="id71_3">
                            </td>
                        </tr>
                    </tbody>
                </table>
                </section>

                <section class="item" style="flex-direction: column;">
                    <div>
                        <strong>OBSERVAÇÕES GERAIS E SERVIÇOS EXECUTADOS: </strong>
                        <textarea name="txtObservacoes" id="observacoes" class='autoExpand' rows='1' data-min-rows='1'></textarea>
                    </div>
                </section>

                <section class="item" style="flex-direction: column;">
                    <div>
                        <strong>STATUS FINAL DA INSPEÇÃO: </strong>
                    </div>
                    <div >
                        <div>
                            <input type="radio" name="status" id="stat100" value="100% FINALIZADA">
                            <label for="stat100">100% FINALIZADA</label>
                        </div>
                        <div>
                            <input type="radio" name="status" id="statRP" value="RESTAM PENDÊNCIAS">
                            <label for="statRP">RESTAM PENDÊNCIAS</label>
                        </div>
                        <div>
                            <input type="radio" name="status" id="statRPA" value="RESTAM PENDÊNCIAS ANTERIORES">
                            <label for="statRPA">RESTAM PENDÊNCIAS ANTERIORES</label>
                        </div>
                    </div>
                </section>

                <section id="secApto" class="item" style="flex-direction: column;">
                    <div>
                        <strong>EQUIPAMENTO APTO PARA OPERAR: </strong>
                    </div>
                    <div >
                        <div onclick="displayoff('secRessalva', 'secApto', 'idressalvas')">
                            <input type="radio" name="apto" id="apto" value="APTO PARA OPERAR">
                            <label for="apto">SIM</label>
                        </div>
                        <div onclick="displayoff('secRessalva', 'secApto', 'idressalvas')">
                            <input type="radio" name="apto" id="nApto" value="NÃO APTO PARA OPERAR">
                            <label for="nApto">NÃO</label>
                        </div>
                        <div onclick="displayon('secRessalva', 'secApto')">
                            <input type="radio" name="apto" id="aptoCR" value="APTO PARA OPERAR COM RESSALVAS">
                            <label for="aptoCR">SIM COM RESSALVAS</label>
                        </div>
                    </div>
                    <section id="secRessalva" class="obs">
                        <label for="idressalvas"><strong>RESSALVAS:</strong></label>
                        <textarea name="txtRessalvas" id="idressalvas" class='autoExpand' rows='1' data-min-rows='1' placeholder='Ex.: Elevação apenas com a velocidade baixa.'></textarea>
                    </section>
                </section>

                <div id="infoTec1" class="infoTec">
                    <p><b>APONTAMENTO DO TÉCNICO 1</b></p>
                    <div class="itInfTec">
                        <label class="ltec" for="tec1Name">Nome: </label>
                        <input class="itec" type="text" name="txtTec1Name" id="tec1Name" required>
                    </div>
                    <div class="itInfTec">
                        <label class="ltec" for="tec1Func">Função: </label>
                        <input class="itec" type="text" name="txtTec1Func" id="tec1Func" required>
                    </div>
                    <div class="itInfTec">
                        <label class="ltec" for="tec1data">Data: </label>
                        <input class="itec" type="date" name="txtTec1Data" id="tec1data" max="<?= date("Y-m-d")?>">
                    </div>
                    <div class="itInfTec">
                        <label class="horario" for="tec1HI">H. inicial: </label>
                        <input class="horario" type="time" name="txtTec1HI" id="tec1HI" style="width: 110px;">
                        <label class="horario" for="tec1HF" style="margin-left: 5px;">H. final: </label>
                        <input class="horario" type="time" name="txtTec1HF" id="tec1HF" style="width: 110px;">
                    </div>
                    <div class="signature">
                        <p>
                            <a id="pen1" href="#" class="signature-button"><i class="fa fa-pencil" aria-hidden="true"></i>Assinar </a>
                            <a id="okSign1" href="#" class="signature-button"><i class="fa fa-check" aria-hidden="true"></i>Ok </a>
                            <a id="clear1" href="#" class="signature-button"><i class="fa fa-eraser" aria-hidden="true"></i>Apagar </a>
                        </p>
                        <canvas height="200" width="370%" class="signature-pad" id="canv1"></canvas>
                       
                        <input type="hidden" name="signTec1" id="idSignTec1">
                    </div>
                </div>

                <div id="infoTec2" class="infoTec">
                    <p><b>APONTAMENTO DO TÉCNICO 2</b></p>
                    <div class="itInfTec">
                        <label class="ltec" for="tec2Name">Nome: </label>
                        <input class="itec" type="text" name="txtTec2Name" id="tec2Name">
                    </div>
                    <div class="itInfTec">
                        <label class="ltec" for="tec2Func">Função: </label>
                        <input class="itec" type="text" name="txtTec2Func" id="tec2Func">
                    </div>
                    <div class="itInfTec">
                        <label class="ltec" for="tec2data">Data: </label>
                        <input class="itec " type="date" name="txtTec2Data" id="tec2data" max="<?= date("Y-m-d")?>">
                    </div>
                    <div class="itInfTec">
                        <label class="horario" for="tec2HI">H. inicial: </label>
                        <input class="horario" type="time" name="txtTec2HI" id="tec2HI" style="width: 110px;"
                        >
                        <label class="horario" for="tec2HF" style="margin-left: 5px;">H. final: </label>
                        <input class="horario" type="time" name="txtTec2HF" id="tec2HF" style="width: 110px;" 
                        >
                    </div>
                    <div class="signature">
                        <p>
                            <a id="pen2" href="#" class="signature-button"><i class="fa fa-pencil" aria-hidden="true"></i>Assinar </a>
                            <a id="okSign2" href="#" class="signature-button"><i class="fa fa-check" aria-hidden="true"></i>Ok </a>
                            <a id="clear2" href="#" class="signature-button"><i class="fa fa-eraser" aria-hidden="true"></i>Apagar </a>
                        </p>
                        <canvas height="200" width="370" class="signature-pad" id="canv2" aria-placeholder="assine aqui"></canvas>
                        <input type="hidden" name="signTec2" id="idSignTec2">
                    </div>
                </div>

                <button onclick="unlockScreen(),limitDate('tec2data','tec2HI','tec2HF'),limitDate('tec1data','tec1HI','tec1HF')" type="submit" class="btn" style="width: 100%;">CONFIRMA</button>
            </form>
            <script src="signature.js"></script>
            <script src="signature2.js"></script>
        </main>
    </section>
</body>
</html>