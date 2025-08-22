<?php include 'cabecalho.php'; ?>
<body>
    <div class="container mt-5">
        <h2>CADASTRO DE PRODUTO</h2>
        <form action="Inserir.php" method="POST">
            <div class="mb-3">                
                <input type="text" name="produto" class="form-control" placeholder="Digite o nome do Produto" required>                
            </div>
            <div class="mb-3">                
                <input type="text" name="preco" class="form-control" placeholder="Digite o preço do Produto" required>                
            </div>
            <div class="mb-3">                
                <input type="number" name="estoque" class="form-control" placeholder="Digite a quantidade" required>                
            </div>
            <button type="submit" class="btn btn-success">Cadastrar Produto</button>
        </form>
    </div>
</body>
</html>
