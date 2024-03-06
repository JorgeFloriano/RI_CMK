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
                    <tr><td style="width: 130px;">Cliente: <strong>CNH</strong></td><td style="width: 130px;">Unidade: <strong>Sorocaba</strong></td><td>Solicitante: <strong>Lucas M.</strong></td></tr>
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
                </p>
            </div>
            </section>
            <form id="form" action="relatorio.php" method="post">

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
                    <div class="opt"><input style="width: 67px;height: 20px" min="0" type="number" name="txt15" id="id15"></div>
                </section>

                <section id="trole" class="element">
                    REDUTOR
                </section>

                <section class="ask">
                    <div class="lab"><label>16-Vazamento de óleo ( retentores, juntas e bujões ) </label></div>
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
                <section class="ask">
                    <div class="lab"><label>22-Amassamentos, estrias, fissuras, respingos de solda, corrosão ou deformação elo a elo</label></div>
                    <?php opt('22')?>
                </section>
                <section class="ask">
                    <div class="lab"><label><p>23-Montagem (verificar se a corrente não está torcida ou com a solda invertida) </p></label></div>
                    <?php opt('23')?>
                </section>
                <section class="ask">
                    <div class="lab"><label><p>
                        24-Pino de fixação (se houver fissura,deformação<br> ou desgaste visível,o mesmo deve ser substituido)
                    </p></label></div>
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

                <section class="ask">
                    <table class="med">
                        <tr>
                            <th style="width: 250px;">NORMA TÉCNICA NBR 1292/1990</th>
                            <th style="width: 60px;">Nominal</th>
                            <th style="width: 55px">Limite</th>
                            <th>Medido</th>
                        </tr>
                        <tr>
                            <td>31-Alongamento - Medida de 11 elos</td>
                            <td>248</td>
                            <td>253</td>
                            <td><input class="medido" min="248.0" step="0.1" type="number" name="txt31" id="id31"></td>
                        </tr>
                        <tr>
                            <td>32-Medida DM-Diâmetro médio do elo</td>
                            <td>7.4</td>
                            <td>6.7</td>
                            <td><input class="medido" step="0.1" min="0" max="7.4" type="number" name="txt32" id="id32"></td>
                        </tr>
                    </table>
                </section>

                <section id="trole" class="element">
                    MEDIÇÕES DO GANCHO INFERIOR (mm)
                </section>

                <section class="ask">
                    <table class="med" style="height: 105px;">
                        <tr>
                            <th style="width: 250px;" colspan="2">NORMA TÉCNICA NBR 10070/1987</th>
                            <th style="width: 60px;">Nominal</th>
                            <th style="width: 55px;">Limite</th>
                            <th>Medido</th>
                        </tr>
                        <tr>
                            <td rowspan="3">Figura do gancho</td>
                            <td>33-Medida W1</td>
                            <td>41</td>
                            <td>45.1</td>
                            <td><input style="width: 48px;height: 20px" min="41.0" step="0.1" type="number" name="txt33" id="id31"></td>
                        </tr>
                        <tr>
                            <td>34-Medida Y</td>
                            <td>28</td>
                            <td>23.6</td>
                            <td><input class="medido" step="0.1" min="0" max="28.0" type="number" name="txt34" id="id32"></td>
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

                <section class="ask">
                    <div class="lab"><label>36-Fixação do painel, tampa e limpeza </label></div>
                    <?php opt('36')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>37-Chave geral, fusíveis e disjuntores </label></div>
                    <?php opt('37')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>38-Motores (medições e aquecimento) </label></div>
                    <?php opt('38')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>39-Caixa de ligação </label></div>
                    <?php opt('39')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>40-Cabo de alimentação </label></div>
                    <?php opt('40')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>41-Prensa cabos </label></div>
                    <?php opt('41')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>42-Tomadas de engate rápido </label></div>
                    <?php opt('42')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>43-Contatores e contatos </label></div>
                    <?php opt('43')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>44-Trafos de potência e comando </label></div>
                    <?php opt('44')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>45-Bornes e terminais </label></div>
                    <?php opt('45')?>
                </section>

                <section id="trole" class="element">
                    BOTOEIRA
                </section>

                <section class="ask">
                    <div class="lab"><label>48-Funcionamento do botões </label></div>
                    <?php opt('48')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>49-Cabo elétrico e prensa cabo </label></div>
                    <?php opt('49')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>50-Cabo de aço de sustentação e fixação </label></div>
                    <?php opt('50')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>51-Caixa de conexão </label></div>
                    <?php opt('51')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>52-Carcaça e identificão dos botões </label></div>
                    <?php opt('52')?>
                </section>

                <section id="trole" class="element">
                    ELETRIFICAÇÃO TRANSVERSAL
                </section>

                <section class="ask">
                    <div class="lab"><label>53-Fixação e conservação dos cabos </label></div>
                    <?php opt('53')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>54-Estado do perfil, fixações e emendas </label></div>
                    <?php opt('54')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>55-Carros porta cabos e arrastador </label></div>
                    <?php opt('55')?>
                </section>

                <section id="trole" class="element">
                    RÁDIO CONTROLE
                </section>

                <section class="ask">
                    <div class="lab"><label>56-Funcionamento e estado do emissor </label></div>
                    <?php opt('56')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>57-Reaperto de todas as conexões e ligações </label></div>
                    <?php opt('57')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>58-Estado de conservação da carcaça </label></div>
                    <?php opt('58')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>59-Estado da bateria / pilhas do emissor </label></div>
                    <?php opt('59')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>60-Sinais luminosos do receptor e transmissor </label></div>
                    <?php opt('60')?>
                </section>

                <section id="trole" class="element">
                    LIMITE DE FIM DE CURSO - Elevação
                </section>

                <section class="ask">
                    <div class="lab"><label>61-Funcionamento da chave limite </label></div>
                    <?php opt('61')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>62-Cabos ou corrente do pino </label></div>
                    <?php opt('62')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>63-Contatos, molas e articulação </label></div>
                    <?php opt('63')?>
                </section>

                <section id="trole" class="element">
                    LIMITE DE FIM DE CURSO - Direção
                </section>

                <section class="ask">
                    <div class="lab"><label>64-Funcionamento da chave limite </label></div>
                    <?php opt('64')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>65-Cabos ou corrente do pino </label></div>
                    <?php opt('65')?>
                </section>
                <section class="ask">
                    <div class="lab"><label>66-Contatos, molas e articulação </label></div>
                    <?php opt('66')?>
                </section>

                <section id="trole" class="element">
                    MEDIÇÕES DAS GRANDEZAS ELÉTRICAS
                </section>

                <section class="ask">
                    <table class="med" style="height: 270px;">
                    <thead>
                        <tr>
                            <th style="width: 290px;" colspan="3">VALORES CONSIDERADOS</th>
                            <th style="width: 75px;">Nominal</th>
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
                            <td colspan="2">Tensão do trafo de comando (VCA)</td>
                            <td>24</td>
                            <td>
                                <input class="medido" step="0.1" min="0" type="number" name="txt68" id="id68">
                            </td>
                        </tr>
                        <tr>
                            <td>69-</td>
                            <td colspan="2">Medição do banco de resistências (Ohms)</td>
                            <td>Não aplica</td>
                            <td>
                                <input class="medido" disabled step="0.1" min="0" type="number" name="txt69" id="id69">
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="3">70-</td>
                            <th rowspan="3" class="motor" >MOTOR DE <br> DIREÇÃO</th>
                            <td>Corrente da alta (A)</td>
                            <td>1.0</td>
                            <td>
                                <input class="medido" step="0.1" min="0" type="number" name="txt70" id="id70">
                            </td>
                        </tr>
                        <tr>
                            <td>Corrente da baixa (A)</td>
                            <td>1.0</td>
                            <td>
                                <input class="medido" step="0.1" min="0" type="number" name="txt70_2" id="id70_2">
                            </td>
                        </tr>
                        <tr>
                            <td>Tensão do freio (VCC)</td>
                            <td>Não aplica</td>
                            <td>
                                <input class="medido" disabled step="0.1" min="0" type="number" name="txt70_3" id="id70_3">
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="3">71-</td>
                            <th rowspan="3" class="motor" >MOTOR DE <br> ELEVAÇÃO</th>
                            <td>Corrente da alta (A)</td>
                            <td>1.8</td>
                            <td>
                                <input class="medido" step="0.1" min="0" type="number" name="txt71" id="id71">
                            </td>
                        </tr>
                        <tr>
                            <td>Corrente da baixa (A)</td>
                            <td>2.8</td>
                            <td>
                                <input class="medido" step="0.1" min="0" type="number" name="txt71_2" id="id71_2">
                            </td>
                        </tr>
                        <tr>
                            <td>Tensão do freio (VCC)</td>
                            <td>190</td>
                            <td>
                                <input class="medido" step="0.1" min="0" type="number" name="txt71_3" id="id71_3">
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </section>

                <section class="ask" style="flex-direction: column;">
                    <div>
                        <strong><label>STATUS FINAL DA INSPEÇÃO: </label></strong>
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

                <section id="secApto" class="ask" style="flex-direction: column;">
                    <div>
                        <strong><label>EQUIPAMENTO APTO PARA OPERAR: </label></strong>
                    </div>
                    <div >
                        <div onclick="displayoff('secRessalva', 'secApto', 'idressalvas')">
                            <input type="radio" name="apto" id="apto" value="SIM">
                            <label for="apto">SIM</label>
                        </div>
                        <div onclick="displayoff('secRessalva', 'secApto', 'idressalvas')">
                            <input type="radio" name="apto" id="nApto" value="NÃO">
                            <label for="nApto">NÃO</label>
                        </div>
                        <div onclick="displayon('secRessalva', 'secApto')">
                            <input type="radio" name="apto" id="aptoCR" value="SIM COM RESSALVAS">
                            <label for="aptoCR">SIM COM RESSALVAS</label>
                        </div>
                    </div>
                </section>

                <section id="secRessalva" class="obs" style="display: none;">
                    <strong>RESSALVAS:</strong>
                    <textarea name="ressalvas" id="idressalvas" class='autoExpand' rows='1' data-min-rows='1' placeholder='Exemplo: Movimento de elevação apenas com a velocidade baixa.' autofocus></textarea>
                </section>

                <button type="submit" class="btn">CONFIRMA</button>
            </form>
        </main>
    </section>
</body>
</html>