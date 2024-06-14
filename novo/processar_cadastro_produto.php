<?php
include 'conexao.php';

$id_do_modelo = $_POST['id_do_modelo'];
$nome = $_POST['nome'];
$material = $_POST['material'];
$total = $_POST['total'];
$preco = $_POST['preco'];

// Upload da imagem
$imagem_nome = $_FILES['imagem']['name'];
$imagem_tmp = $_FILES['imagem']['tmp_name'];
$imagem_destino = "uploads/" . basename($imagem_nome);

if (move_uploaded_file($imagem_tmp, $imagem_destino)) {
    // Salvar o caminho da imagem no banco de dados
    $sql = "INSERT INTO produtos (id_do_modelo, nome, material, total, preco, imagem) VALUES ('$id_do_modelo', '$nome', '$material', '$total', '$preco', '$imagem_destino')";

    if ($conn->query($sql) === TRUE) {
        $produto_id = $conn->insert_id;

        foreach (['unico', 'p', 'm', 'g', 'gg'] as $tamanho) {
            if(isset($_POST["cores_$tamanho"])) {
                $cores = $_POST["cores_$tamanho"];
                $quantidades = $_POST["quantidades_$tamanho"];
            
                foreach ($cores as $index => $cor) {
                    $quantidade = $quantidades[$index];
                    if ($cor && $quantidade) {
                        $sql = "INSERT INTO cores (produto_id, cores, quantidades, tamanhos) VALUES ('$produto_id', '$cor', '$quantidade', '$tamanho')";
                        $conn->query($sql);
                    }
                }
            }
        }

        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Erro ao fazer upload da imagem.";
}

$conn->close();
?>
