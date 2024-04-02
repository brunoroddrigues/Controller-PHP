<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplina</title>
</head>
<body>
    <table>
        <tr>
            <th>codigo</th>
            <th>Nome</th>
        </tr>
        <?php
            foreach ($retorno as $valor) 
            {
                echo"<tr>
                <td>{$valor->iddisciplina}</td>
                <td>{$valor->nome}</td>
                </tr>";
            }
        ?>
    </table>

    <a href="index.php?controle=disciplina&metodo=inserir">Inserir</a>
</body>
</html>