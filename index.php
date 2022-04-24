<html>

  <head>
    <title> Simulacra v1.0 </title>
    <link rel="stylesheet" href="w3.css">
  </head>
  <body>
    <h1 class="w3-panel w3-blue w3-card-4 w3-center"> Simulador de Investimentos 
    </h1>
    <div class="w3-panel w3-blue w3-round-xlarge">
      <p>Simulador Teste-o</p>
    </div>
    <ul>
      Opções:
        <li> <a href="index.php?inv=100.000.000&juros=0.04&tempo=12"> Poupança 12 meses </a> </li>
        <li> <a href="index.php?inv=100.000.000&juros=0.18&tempo=20"> Tesouro Direto 20 meses </a> </li>
        <li> <a href="index.php?inv=100.000.000&juros=0.008&tempo=1"> Bitcoin 1 mese </a> </li>
    </ul>

    <?php
      $investimento = (float) $_GET["inv"];
      $juros = (float) $_GET["juros"];
      $tempo = (int) $_GET["tempo"];
      $montante = 0;
      $juros_mes = 0;


      for($i=1;$i<=$tempo;$i++){
        $montante = $investimento*((1 + $juros)**$i);
        $juros_mes = $montante - $investimento;
        print "Mes:$i M:$montante J:$juros_mes <br>";
      }

    ?>

    <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Mês</th>
        <th>Juros</th>
        <th>Total</th>
      </tr>
    </thead>
    <tr class="w3-hover-green">
      <td>01</td>
      <td>25.00</td>
      <td>125.00</td>
    </tr>
    <tr class="w3-hover-blue">
      <td>02</td>
      <td>27.00</td>
      <td>152.00</td>
    </tr>
    <tr class="w3-hover-black">
      <td>03</td>
      <td>29.00</td>
      <td>162.00</td>
    </tr>
    <tr class="w3-hover-text-green">
      <td>04</td>
      <td>31.00</td>
      <td>172.00</td>
    </tr>
  </table>

  </body>
</html>
