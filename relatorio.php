<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Relatorio de Inspeção</title>
</head>
<body>
    <section id="relatorio">
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
            <table>
                <thead>
                    <tr>
                        <th>Cliente: CNH</th><th>Unidade: Sorocaba</th><th>Solicitante: Lucas Moraes</th><th>Nº Serie: 0909090</th><th>Nº Cliente: CNH-171</th><th>Nº CMK: 54</th>
                    </tr>
                    <tr>
                        <th>Fabricante: Demag</th><th>Modelo: DC-Pro 5</th><th>Capacidade: 500 kg</th><th>Prédio: P-80</th><th>Setor: Montagem</th><th>Área : Feeder</th>
                    </tr>
                </thead>
            </table>
            <table style="margin-top: 5px;border-bottom: hidden">
                <thead>
                    <tr><th colspan="3" style="width: 49.8%;">INSPEÇÃO MECÂNICA</th><th colspan="3">INSPEÇÃO ELÉTRICA</th></tr>
                    <tr><th colspan="2">TROLE</th><th style="width: 10%;">Cap: 500 kg</th><th colspan="2">TALHA</th><th style="width: 10%;"></th></tr>
                </thead>
                <tbody>
                    <tr><td style="width: 2%;">01</td><td>Rodas e rolamentos (Não aplica)</td><td><?= $_POST['txto01'] ?? "Não insp."?></td><td style="width: 2%;">36</td><td>Fixação do painel, tampa e limpeza</td><td><?= $_POST['txt36'] ?? "Não insp."?></td></tr>
                    <tr><td>02</td><td>Fixação da talha e parafusos de fechamento (Não aplica)</td><td><?= $_POST['txt02'] ?? "Não insp."?></td><td>37</td><td>Chave geral, fusíveis e disjuntores</td><td><?= $_POST['txt37'] ?? "Não insp."?></td></tr>
                    <tr><td>03</td><td>Batentes fim de curso (Não aplica)</td><td><?= $_POST['txt03'] ?? "Não insp."?></td><td>38</td><td>Motores (medições e aquecimento)</td><td><?= $_POST['txt38'] ?? "Não insp."?></td></tr>
                    <tr><td>04</td><td>Motor (fixação e ruidos anormais)</td><td><?= $_POST['txt04'] ?? "Não insp."?></td><td>39</td><td>Caixa de ligação</td><td><?= $_POST['txt39'] ?? "Não insp."?></td></tr>
                    <tr><td>05</td><td>Freio (regular se necessário)</td><td><?= $_POST['txt05'] ?? "Não insp."?></td><td>40</td><td>Cabo de alimentação</td><td><?= $_POST['txt40'] ?? "Não insp."?></td></tr>
                    <tr><td>06</td><td>Redutor (vazamento, aquecimento)</td><td><?= $_POST['txt06'] ?? "Não insp."?></td><td>41</td><td>Prensa cabos</td><td><?= $_POST['txt41'] ?? "Não insp."?></td></tr>
                    <tr><th colspan="2">TALHA</th><th style="width: 10%;">Cap: 500 kg</th><td>42</td><td>Tomadas de engate rápido</td><td><?= $_POST['txt42'] ?? "Não insp."?></td></tr>
                    <tr><td>07</td><td>Guia da corrente</td><td><?= $_POST['txt07'] ?? "Não insp."?></td><td>43</td><td>Contatores e contatos</td><td><?= $_POST['txt43'] ?? "Não insp."?></td></tr>
                    <tr><td>08</td><td>Batedor stop</td><td><?= $_POST['txt08'] ?? "Não insp."?></td><td>44</td><td>Trafos de potência e comando</td><td><?= $_POST['txt44'] ?? "Não insp."?></td></tr>
                    <tr><td>09</td><td>Armazenador de corrente</td><td><?= $_POST['txt09'] ?? "Não insp."?></td><td>45</td><td>Bornes e terminais</td><td><?= $_POST['txt45'] ?? "Não insp."?></td></tr>
                    <tr><td>10</td><td>Fixação superior</td><td><?= $_POST['txt10'] ?? "Não insp."?></td><td>46</td><td>Banco de resistência (Não aplica)</td><td><?= $_POST['txt46'] ?? "Não insp."?></td></tr>
                    <tr><td>11</td><td>Fricção</td><td><?= $_POST['txt11'] ?? "Não insp."?></td><td>47</td><td>Célula de carga (Não aplica)</td><td><?= $_POST['txt47'] ?? "Não insp."?></td></tr>
                    <tr><td>12</td><td>Freio (regular se necessário)</td><td><?= $_POST['txt12'] ?? "Não insp."?></td><th colspan="2">BOTOEIRA</th><th style="width: 10%;"></th></tr>
                    <tr><td>13</td><td>Lubrificação</td><td><?= $_POST['txt13'] ?? "Não insp."?></td><td>48</td><td>Funcionamento do botões</td><td><?= $_POST['txt48'] ?? "Não insp."?></td></tr>
                    <tr><td>14</td><td>Carcaça</td><td><?= $_POST['txt14'] ?? "Não insp."?></td><td>49</td><td>Cabo elétrico e prensa cabo</td><td><?= $_POST['txt49'] ?? "Não insp."?></td></tr>
                    <tr><td>15</td><td>Teste de carga (kg)</td><td><?= $_POST['txt15'] ?? "Não insp."?></td><td>50</td><td>Cabo de aço de sustentação e fixação</td><td><?= $_POST['txt50'] ?? "Não insp."?></td></tr>
                    <tr><th colspan="2">REDUTOR</th><th style="width: 10%;"></th><td>51</td><td>Caixa de conexão</td><td><?= $_POST['txt51'] ?? "Não insp."?></td></tr>
                    <tr><td>16</td><td>Vazamento de óleo ( retentores, juntas e bujões )</td><td><?= $_POST['txt16'] ?? "Não insp."?></td><td>52</td><td>Carcaça e identificão dos botões</td><td><?= $_POST['txt52'] ?? "Não insp."?></td></tr>
                    <tr><td>17</td><td>Nível de óleo (completar se necessário)</td><td><?= $_POST['txt17'] ?? "Não insp."?></td><th colspan="2">ELETRIFICAÇÃO TRANSVERSAL</th><th style="width: 10%;"></th></tr>
                    <tr><td>18</td><td>Ruídos e aquecimento anormal</td><td><?= $_POST['txt18'] ?? "Não insp."?></td><td>53</td><td>Fixação e conservação dos cabos</td><td><?= $_POST['txt53'] ?? "Não insp."?></td></tr>
                    <tr><td>19</td><td>Reapertar parafusos de fixação</td><td><?= $_POST['txt19'] ?? "Não insp."?></td><td>54</td><td>Fixações e emendas do perfil da eletrificação</td><td><?= $_POST['txt54'] ?? "Não insp."?></td></tr>
                    <tr><th colspan="2">CORRENTE DE CARGA</th><th style="width: 10%;"></th><td>55</td><td>Carros porta cabos e arrastador</td><td><?= $_POST['txt55'] ?? "Não insp."?></td></tr>
                    <tr><td>20</td><td>Limpeza e lubrificação da corrente</td><td><?= $_POST['txt20'] ?? "Não insp."?></td><th colspan="2">RÁDIO CONTROLE</th><th style="width: 10%;"></th></tr>
                    <tr><td>21</td><td>Corrente prende, salta ou produz ruído</td><td><?= $_POST['txt21'] ?? "Não insp."?></td><td>56</td><td>Funcionamento e estado dos botões do emissor</td><td><?= $_POST['txt56'] ?? "Não insp."?></td></tr>
                    <tr><td rowspan="2">22</td><td rowspan="2">Amassamentos, estrias, fissuras, respingos de solda, corrosão ou deformação</td>
                    <td rowspan="2"><?= $_POST['txt22'] ?? "Não insp."?></td><td>57</td><td>Reaperto de todas as conexões e ligações</td><td><?= $_POST['txt57'] ?? "Não insp."?></td></tr>
                    <tr><td>58</td><td>Estado de conservação da carcaça do rádio</td><td><?= $_POST['txt58'] ?? "Não insp."?></td></tr>
                    <tr><td>23</td><td>Montagem (não está torcida ou com a solda invertida)</td><td><?= $_POST['txt23'] ?? "Não insp."?></td><td>59</td><td>Estado da bateria / pilhas do emissor</td><td><?= $_POST['txt59'] ?? "Não insp."?></td></tr>
                    <tr><td rowspan="2">24</td><td rowspan="2">Pino da corrente (se houver fissura, deformação ou desgaste visível, o mesmo deve ser substituido)</td><td rowspan="2"><?= $_POST['txt24'] ?? "Não insp."?></td><td>60</td><td>Sinais luminosos do receptor e transmissor</td><td><?= $_POST['txt60'] ?? "Não insp."?></td></tr>
                    <tr><th colspan="2">LIMITE DE FIM DE CURSO - Elevação</th><th style="width: 10%;"></th></tr>
                    <th colspan="2">BLOCO INFERIOR</th><th>Cap: 500 kg</th><td>61</td><td>Funcionamento da chave limite</td><td><?= $_POST['txt61'] ?? "Não insp."?></td></tr>
                    <tr><td>25</td><td>Caixa do gancho</td><td><?= $_POST['txt25'] ?? "Não insp."?></td><td>62</td><td>Cabos ou corrente do pino</td><td><?= $_POST['txt62'] ?? "Não insp."?></td></tr>
                    <tr><td>26</td><td>Carretel e rolamentos</td><td><?= $_POST['txt26'] ?? "Não insp."?></td><td>63</td><td>Contatos, molas e articulação</td><td><?= $_POST['txt63'] ?? "Não insp."?></td></tr>
                    <tr><td>27</td><td>Carcaça quanto à desgastes e trincas</td><td><?= $_POST['txt27'] ?? "Não insp."?></td><th colspan="2">LIMITE DE FIM DE CURSO - Direção</th><th style="width: 10%;"></th></tr>
                    <tr><td>28</td><td>Trava de gancho</td><td><?= $_POST['txt28'] ?? "Não insp."?></td><td>64</td><td>Funcionamento da chave limite</td><td><?= $_POST['txt64'] ?? "Não insp."?></td></tr>
                    <tr><td>29</td><td>Placa de identificação</td><td><?= $_POST['txt29'] ?? "Não insp."?></td><td>65</td><td>Cabos ou corrente do pino</td><td><?= $_POST['txt65'] ?? "Não insp."?></td></tr>
                    <tr><td>30</td><td>Lubrificar caixa de gancho</td><td><?= $_POST['txt30'] ?? "Não insp."?></td><td>66</td><td>Contatos, molas e articulação</td><td><?= $_POST['txt66'] ?? "Não insp."?></td></tr>
                </tbody>
            </table>
            <section id="medicoes">
                <table class="half" style="border-right: hidden;">
                    <thead>
                        <tr><th colspan="6">MEDIÇÕES DA CORRENTE DE CARGA</th></tr>
                        <tr><th colspan="3" rowspan="2" style="width: 55%;">NORMA TÉCNICA <br> NBR 1292/1990</th><th colspan="3">Medidas conforme a norma</th></tr>
                        <tr><th>Nominal</th><th>Máximo</th><th>Medido</th></tr>
                    </thead>
                    <tbody>
                        <tr><td style="width: 5%;">31</td><td colspan="2">Alongamento - Medida de 11 elos</td><td>177.8</td><td>180.3</td><td><?= $_POST['txt31'] ?? "Não insp."?></td></tr>
                        <tr><td>32</td><td colspan="2">Medida DM-Diâmetro médio do elo</td><td>7.4</td><td>6.7</td><td><?= $_POST['txt32'] ?? "Não insp."?></td></tr>
                    </tbody>
                    <thead>
                        <tr><th colspan="6">MEDIÇÕES DO GANCHO INFERIOR</th></tr>
                        <tr><th colspan="3" rowspan="2" style="width: 55%;">NORMA TÉCNICA <br> NBR 10070/1987</th><th colspan="3">Medidas conforme a norma</th></tr>
                        <tr><th>Nominal</th><th>Máximo</th><th>Medido</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>33</td><td rowspan="4">Figura do gancho</.d><td>Medida W1</td><td>41</td><td>45.1</td><td><?= $_POST['txt33'] ?? "Não insp."?></td></tr>
                        <tr><td>34</td><td>Medida Y</td><td>28</td><td>23.6</td><td><?= $_POST['txt34'] ?? "Não insp."?></td></tr>
                        <tr><td>35</td><td>Alinhamento</td><td colspan="3"><?= $_POST['txt35'] ?? "Não insp."?></td></tr>
                    </tbody>
                </table>
                <table class="half">
                    <thead>
                        <tr><th colspan="5">MEDIÇÕES DAS GRANDEZAS ELÉTRICAS</th></tr>
                        <tr><th colspan="3">VALORES CONSIDERADOS</th><th>Nominal</th><th>Medido</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>67</td><td colspan="2">Tensão de rede (V)</td><td>440</td><td><?= $_POST['txt67'] ?? "Não insp."?></td></tr>
                        <tr><td>68</td><td colspan="2">Tensão do transformador de comando (VCA)</td><td>24</td><td><?= $_POST['txt68'] ?? "Não insp."?></td></tr>
                        <tr><td>69</td><td colspan="2">Medição do banco de resistências (Ohms)</td><td>Ñ aplica</td><td><?= $_POST['txt69'] ?? "Não insp."?></td></tr>
                        <tr><td rowspan="3">70</td><th rowspan="3">MOTOR DE <br> DIREÇÃO</th><td>Corrente da alta (A)</td><td>1.0</td><td><?= $_POST['txt70'] ?? "Não insp."?></td></tr>
                        <tr><td>Corrente da baixa (A)</td><td>1.0</td><td><?= $_POST['txt70_2'] ?? "Não insp."?></td></tr>
                        <tr><td>Tensão do freio (VCC)</td><td>Ñ Insp.</td><td><?= $_POST['txt70_3'] ?? "Não insp."?></td></tr>
                        <tr><td rowspan="3">71</td><th rowspan="3">MOTOR DE <br> ELEVAÇÃO</th><td>Corrente da alta (A)</td><td>1.8</td><td><?= $_POST['txt71'] ?? "Não insp."?></td></tr>
                        <tr><td>Corrente da baixa (A)</td><td>2.8</td><td><?= $_POST['txt71_2'] ?? "Não insp."?></td></tr>
                        <tr><td>Tensão do freio (VCC)</td><td>Ñ Insp.</td><td><?= $_POST['txt71_3'] ?? "Não insp."?></td></tr>
                    </tbody>
                </table>
            </section>
            <section id="status">
                <div id="status1">STATUS FINAL DA INSPEÇÃO: <?= $_POST['status'] ?? "RESTAM PENDÊNCIAS"?>!</div>
                <div id="status2">EQUIPAMENTO APTO PARA OPERAR: <?= $_POST['apto'] ?? "NÃO APTO"?>!</div>
            </section>
            <section id="ressalvas">
                <strong>Ressalvas:</strong> <?= $_POST['ressalva'] ?? "Sem ressalvas!"?>
            </section>
            <table style="border-top: hidden;">
                <tr><th>Assinatura e dados do cliente.</th><th colspan="6">Apontamento de Horas e relação dos técnicos</th></tr>
                <tr><td rowspan="5"></td><th style="width: 9%;">Data</th><th style="width: 7%;">Início</th><th style="width: 7%;">Término</th><th style="width: 20%;">Nome do Técnico</th><th style="width: 15%;">Função</th><th>Visto do Técnico</th></tr>
                <tr><td>29/02/2024</td><td>14:00</td><td>16:00</td><td>Jorge Luis</td><td>Téc. Manutenção</td><td>Assinatura</td></tr>
                <tr><td>29/02/2024</td><td>14:00</td><td>16:00</td><td>Floriano Silva</td><td>Téc. Manutenção</td><td>Assinatura</td></tr>
                <tr><td>29/02/2024</td><td>14:00</td><td>16:00</td><td>Floriano Silva</td><td>Téc. Manutenção</td><td>Assinatura</td></tr>
                <tr><td>29/02/2024</td><td>14:00</td><td>16:00</td><td>Floriano Silva</td><td>Téc. Manutenção</td><td>Assinatura</td></tr>
            </table>
        </main>
    </section>
</body>
</html>