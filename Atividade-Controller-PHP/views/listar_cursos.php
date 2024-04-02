<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
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
                <td>{$valor->idcurso}</td>
                <td>{$valor->nome}</td>
                <td><a href='index.php?controle=curso&metodo=excluir&id=$valor->idcurso'>Excluir</a></td>
                </tr>";
            }
        ?>
    </table>

    <a href="index.php?controle=curso&metodo=inserir">Inserir</a> <!--Colocar link inserir*/-->
</body>
</html>