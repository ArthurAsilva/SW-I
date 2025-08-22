<?php
require 'conexao.php';
include 'cabecalho.php';
?>
<body>
    <div class="container mt-5">
        <h2>LISTAGEM DE PRODUTOS</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">PREÇO</th>
                    <th scope="col">QUANTIDADE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM produtos ORDER BY id";
                $stmt = $pdo->query($sql);

                while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>" .
                         "<th scope='row'>" . $produto['id'] . "</th>" .
                         "<td>" . $produto['nome'] . "</td>" .
                         "<td>" . $produto['preco'] . "</td>" .
                         "<td>" . $produto['quantidade'] . "</td>" .
                         "<td>
                            <div class='btn-group' role='group'>
                                <a href='#' type='button' class='btn btn-success btn-sm me-1'>Atualizar</a>
                                <a href='#' type='button' class='btn btn-danger btn-sm'>Apagar</a>
                            </div>
                         </td>" .
                         "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
