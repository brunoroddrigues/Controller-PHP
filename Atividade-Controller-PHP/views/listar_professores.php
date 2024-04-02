<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professores</title>
</head>
<body>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Nome do professor</th>
            <th>Cpf</th>
        </tr>
        <?php
            foreach ($retorno as $valor) 
            {
                echo"<tr>
                <td>{$valor->idprofessor}</td>
                <td>{$valor->nome}</td>
                <td>{$valor->cpf}</td>
                <td><a href='index.php?controle=professores&metodo=excluir&idprofessor=$valor->idprofessor'>Excluir</a></td>
                </tr>";
            }
        ?>
    </table>

    <a href="index.php?controle=professores&metodo=inserir">Inserir</a> <!--Colocar link inserir*/-->


</body>
</html>