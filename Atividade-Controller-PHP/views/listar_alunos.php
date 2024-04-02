<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
</head>
<body>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Nome do aluno</th>
        </tr>
        <?php
            foreach ($retorno as $valor) 
            {
                echo"<tr>
                <td>{$valor->idaluno}</td>
                <td>{$valor->nome}</td>
                </tr>";
            }
        ?>
    </table>

    <a href="index.php?controle=aluno&metodo=inserir">Inserir</a> <!--Colocar link inserir*/-->
</body>
</html>