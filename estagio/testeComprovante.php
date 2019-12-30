<?php

session_start();

// definições de host, database, usuário e senha
$host= "localhost";
$user= "root";
$pass= "";
$db= "formulario, formulario2"

// conecta ao banco de dados
$link = mysqli_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);

// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $link);

// cria a instrução SQL que vai selecionar os dados
$query = sprintf(("SELECT cnpj, nome_empresa, setor_estagio, nome_supervisor, email_supervisor, telefone_supervisor, cargo_supervisor, valor_bolsa FROM formulario") "SELECT dia1, mes1, ano1, dia2, mes2, ano2, CHS, orientador, plATIVIDADES FROM formulario2");

// executa a query
$dados = mysql_query($query, $link) or die(mysql_error());

// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);

// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>
 
<html>
    <head>
    <title>Exemplo</title>
</head>
<body>
    
<?php
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
?>
            <p><?php=$linha['cnpj']?> / <?php=$linha['plATIVIDADES']?></p>
<?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysql_fetch_assoc($dados));
    // fim do if 
    }
?>
</body>
</html>

<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>