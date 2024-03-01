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
                    <tr><th colspan="2">TROLE</th><th style="width: 10%;">Cap:500 kg</th><th colspan="2">TALHA</th><th style="width: 10%;"></th></tr>
                </thead>
                <tbody>
                    <tr><td style="width: 2%;">01</td><td>Rodas e rolamentos</td><td>Não aplica</td><td style="width: 2%;">36</td><td>Fixação do painel, tampa e limpeza</td><td>Recuperar</td></tr>
                    <tr><td>02</td><td>Fixação da talha e parafusos de fechamento</td><td>Não aplica</td><td>37</td><td>Chave geral, fusíveis e disjuntores</td><td>Ok</td></tr>
                    <tr><td>03</td><td>Batentes fim de curso</td><td>Não apica</td><td>38</td><td>Motores (medições e aquecimento)</td><td>Ok</td></tr>
                    <tr><td>04</td><td>Motor (fixação e ruidos anormais)</td><td><?= $_POST['txtMotor']?></td><td>39</td><td>Caixa de ligação</td><td>Ok</td></tr>
                    <tr><td>05</td><td>Freio (regular se necessário)</td><td><?= $_POST['txtFreio']?></td><td>40</td><td>Cabo de alimentação</td><td>Ok</td></tr>
                    <tr><td>06</td><td>Redutor (vazamento, aquecimento)</td><td><?= $_POST['txtRedutor']?></td><td>41</td><td>Prensa cabos</td><td>Ok</td></tr>
                    <tr><th colspan="2">TALHA</th><th style="width: 10%;">Cap:500 kg</th><td>42</td><td>Tomadas de engate rápido</td><td>Ok</td></tr>
                    <tr><td>07</td><td>Guia da corrente</td><td>Ok</td><td>43</td><td>Contatores e contatos</td><td>Trocar</td></tr>
                    <tr><td>08</td><td>Batedor stop</td><td>Ok</td><td>44</td><td>Trafos de potência e comando</td><td>Ok</td></tr>
                    <tr><td>09</td><td>Armazenador de corrente</td><td>Ok</td><td>45</td><td>Bornes e terminais</td><td>Ok</td></tr>
                    <tr><td>10</td><td>Fixação superior</td><td>Ok</td><td>46</td><td>Banco de resistência</td><td>Não insp.</td></tr>
                    <tr><td>11</td><td>Fricção</td><td>Ok</td><td>47</td><td>Célula de carga</td><td>Não aplica</td></tr>
                    <tr><td>12</td><td>Freio (regular se necessário)</td><td>Ok</td><th colspan="2">BOTOEIRA</th><th style="width: 10%;"></th></tr>
                    <tr><td>13</td><td>Lubrificação</td><td>Ok</td><td>48</td><td>Funcionamento do botões</td><td>Ok</td></tr>
                    <tr><td>14</td><td>Carcaça</td><td>Ok</td><td>49</td><td>Cabo elétrico e prensa cabo</td><td>Ok</td></tr>
                    <tr><td>15</td><td>Teste de carga</td><td>Ok</td><td>50</td><td>Cabo de aço de sustentação e fixação</td><td>Ok</td></tr>
                    <tr><th colspan="2">REDUTOR</th><th style="width: 10%;"></th><td>51</td><td>Caixa de conexão</td><td>Ok</td></tr>
                    <tr><td>16</td><td>Vazamento de óleo ( retentores, juntas e bujões )</td><td>Ok</td><td>52</td><td>Carcaça e identificão dos botões</td><td>Ok</td></tr>
                    <tr><td>17</td><td>Nível de óleo (completar se necessário)</td><td>Ok</td><th colspan="2">ELETRIFICAÇÃO TRANSVERSAL</th><th style="width: 10%;"></th></tr>
                    <tr><td>18</td><td>Ruídos e aquecimento anormal</td><td>Ok</td><td>53</td><td>Fixação e conservação dos cabos</td><td>Ok</td></tr>
                    <tr><td>19</td><td>Reapertar parafusos de fixação</td><td>Ok</td><td>54</td><td>Fixações e emendas do perfil da eletrificação</td><td>Ok</td></tr>
                    <tr><th colspan="2">CORRENTE</th><th style="width: 10%;"></th><td>55</td><td>Carros porta cabos e arrastador</td><td>Ok</td></tr>
                    <tr><td>20</td><td>Limpeza e lubrificação da corrente</td><td>Ok</td><th colspan="2">RÁDIO CONTROLE</th><th style="width: 10%;"></th></tr>
                    <tr><td>21</td><td>Corrente prende, salta ou produz ruído</td><td>Ok</td><td>56</td><td>Funcionamento e estado dos botões do emissor</td><td>Ok</td></tr>
                    <tr><td rowspan="2">22</td><td rowspan="2">Amassamentos, estrias, fissuras, respingos de solda, corrosão ou deformação</td>
                    <td rowspan="2">Ok</td><td>57</td><td>Reaperto de todas as conexões e ligações</td><td>Ok</td></tr>
                    <tr><td>58</td><td>Estado de conservação da carcaça do rádio</td><td>Ok</td></tr>
                    <tr><td>23</td><td>Montagem (não está torcida ou com a solda invertida)</td><td>Ok</td><td>59</td><td>Estado da bateria / pilhas do emissor</td><td>Ok</td></tr>
                    <tr><td rowspan="2">24</td><td rowspan="2">Pino da corrente (se houver fissura, deformação ou desgaste visível, o mesmo deve ser substituido)</td><td rowspan="2">Ok</td><td>60</td><td>Sinais luminosos do receptor e transmissor</td><td>Ok</td></tr>
                    <tr><th colspan="2">LIMITE DE FIM DE CURSO - Elevação</th><th style="width: 10%;"></th></tr>
                    <th colspan="2">BLOCO INFERIOR</th><th>Cap:500 kg</th><td>61</td><td>Funcionamento da chave limite</td><td>Ok</td></tr>
                    <tr><td>25</td><td>Caixa do gancho</td><td>Ok</td><td>62</td><td>Cabos ou corrente do pino</td><td>Ok</td></tr>
                    <tr><td>26</td><td>Carretel e rolamentos</td><td>Ok</td><td>63</td><td>Contatos, molas e articulação</td><td>Ok</td></tr>
                    <tr><td>27</td><td>Carcaça quanto à desgastes e trincas</td><td>Ok</td><th colspan="2">LIMITE DE FIM DE CURSO - Direção</th><th style="width: 10%;"></th></tr>
                    <tr><td>28</td><td>Trava de gancho</td><td>Ok</td><td>64</td><td>Funcionamento da chave limite</td><td>Ok</td></tr>
                    <tr><td>29</td><td>Placa de identificação</td><td>Ok</td><td>65</td><td>Cabos ou corrente do pino</td><td>Ok</td></tr>
                    <tr><td>30</td><td>Lubrificar caixa de gancho</td><td>Ok</td><td>66</td><td>Contatos, molas e articulação</td><td>Ok</td></tr>
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
                        <tr><td style="width: 5%;">31</td><td colspan="2">Alongamento - Medida de 11 elos</td><td>177,8</td><td>180,3</td><td>178</td></tr>
                        <tr><td>32</td><td colspan="2">Medida DM-Diâmetro médio do elo</td><td>7,4</td><td>6,7</td><td>7,3</td></tr>
                    </tbody>
                    <thead>
                        <tr><th colspan="6">MEDIÇÕES DO GANCHO INFERIOR</th></tr>
                        <tr><th colspan="3" rowspan="2" style="width: 55%;">NORMA TÉCNICA <br> NBR 10070/1987</th><th colspan="3">Medidas conforme a norma</th></tr>
                        <tr><th>Nominal</th><th>Máximo</th><th>Medido</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>33</td><td rowspan="4">Figura do gancho</td><td>Medida W1</td><td>177,8</td><td>180,3</td><td>178</td></tr>
                        <tr><td>34</td><td>Medida Y</td><td>7,4</td><td>6,7</td><td>7,3</td></tr>
                        <tr><td>35</td><td>Alinhamento</td><td colspan="3">OK</td></tr>
                    </tbody>
                </table>
                <table class="half">
                    <thead>
                        <tr><th colspan="5">MEDIÇÕES DAS GRANDEZAS ELÉTRICAS</th></tr>
                        <tr><th colspan="3">VALORES CONSIDERADOS</th><th>Nominal</th><th>Medido</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>67</td><td colspan="2">Tensão de rede (V)</td><td>440</td><td>442</td></tr>
                        <tr><td>68</td><td colspan="2">Tensão do transformador de comando (VCA)</td><td>24</td><td>24,5</td></tr>
                        <tr><td>69</td><td colspan="2">Medição do banco de resistências (Ohms)</td><td>Ñ aplica</td><td>Ñ aplica</td></tr>
                        <tr><td rowspan="3">70</td><th rowspan="3">MOTOR DE <br> DIREÇÃO</th><td>Corrente da alta (A)</td><td>1,0</td><td>0,7</td></tr>
                        <tr><td>Corrente da baixa (A)</td><td>1,0</td><td>0,5</td></tr>
                        <tr><td>Tensão do freio (VCC)</td><td>Ñ Insp.</td><td>Ñ Insp.</td></tr>
                        <tr><td rowspan="3">71</td><th rowspan="3">MOTOR DE <br> ELEVAÇÃO</th><td>Corrente da alta (A)</td><td>1,8</td><td>1,2</td></tr>
                        <tr><td>Corrente da baixa (A)</td><td>2,8</td><td>1,5</td></tr>
                        <tr><td>Tensão do freio (VCC)</td><td>Ñ Insp.</td><td>Ñ Insp.</td></tr>
                    </tbody>
                </table>
            </section>
            <section id="status">
                <div id="status1">STATUS FINAL DA INSPEÇÃO: RESTAM PENDÊNCIAS</div>
                <div id="status2">EQUIPAMENTO APTO PARA OPERAR: SIM COM RESSALVAS</div>
            </section>
            <section id="ressalvas">
                <strong>Ressalvas:</strong> Contator apresenta defeito, necessário providenciar peça para fazer o reparo
            </section>
            <table style="border-top: hidden;">
                <thead>
                    <tr><th colspan="6">Apontamento de Horas e relação dos técnicos</th></tr>
                    <tr><th style="width: 10%;">Data</th><th style="width: 10%;">H. Início</th><th style="width: 10%;">H. Término</th><th style="width: 25%;">Nome do Técnico</th><th style="width: 25%;">Função</th><th>Visto do Técnico</th></tr>
                </thead>
                <tbody>
                    <tr><td>29/02/2024</td><td>14:00</td><td>16:00</td><td>Jorge Luis</td><td>Téc. Manutenção</td><td>Assinatura</td></tr>
                    <tr><td>29/02/2024</td><td>14:00</td><td>16:00</td><td>Floriano Silva</td><td>Téc. Manutenção</td><td>Assinatura</td></tr>
                </tbody>
            </table>
            <section id="cliente">
                <strong>Cliente:</strong> 
            </section>
        </main>
    </section>
</body>
</html>