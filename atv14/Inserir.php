<?php
require 'conexao.php';


if(isset($_POST['produto'], $_POST['preco'], $_POST['estoque'])) {

    
    $nome   = $_POST['produto'];
    $preco  = $_POST['preco'];
    $estoque = $_POST['estoque'];

    try {
      
        $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nome, :preco, :quantidade)";
        $stmt = $pdo->prepare($sql);

    
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':quantidade', $estoque);

        if ($stmt->execute()) {
            echo "Produto inserido com sucesso!";
        } else {
            echo "Erro ao inserir produto.";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }

} else {
    echo "Por favor, preencha todos os campos do formulário.";
}
?>
