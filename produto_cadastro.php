<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/produto_cadastro.css">
</head>
<body>
    <div class="wrapper">
        <!-- Inclui o menu a partir de um arquivo separado -->
       
        <div class="main">
            <!-- Inclui o topo a partir de um arquivo separado -->
            
            <main class="content">
                <div class="container-fluid p-0">
                    <!-- Título da página -->
                    <h1>𝚌𝚊𝚍𝚊𝚜𝚝𝚛𝚘 𝚍𝚎 𝚙𝚛𝚘𝚍𝚞𝚝𝚘</h1>
                    <!-- Formulário para cadastro de produto -->
                    <form id="product-form" action="processar_cadastro_produto.php" method="POST" enctype="multipart/form-data">
                        <!-- Contêiner flexível para inputs e imagem -->
                        <div class="flex-container">
                            <!-- Coluna para inputs de texto -->
                            <div class="column">
                                <!-- Input para ID do modelo -->
                                <label for="id_do_modelo">ID do Modelo:</label>
                                <input type="text" id="id_do_modelo" name="id_do_modelo" class="input-text" required>

                                <!-- Input para nome do modelo -->
                                <label for="nome">Nome do Modelo:</label>
                                <input type="text" id="nome" name="nome" class="input-text" required>

                                <!-- Contêiner duplo para tipo de material e preço -->
                                <div class="column-double">
                                    <div class="input-double">
                                        <!-- Input para tipo de material -->
                                        <label for="material">Descrição do produto:</label>
                                        <input type="text" id="material" name="material" class="input-text" required>
                                    </div>
                                    <div class="input-double">
                                        <!-- Input para preço -->
                                        <label for="preco">Preço:</label>
                                        <input type="text" id="preco" name="preco" class="input-number" required>
                                    </div>
                                </div>
                            </div>
                            <!-- Coluna para upload e pré-visualização da imagem -->
                            <div class="image-column">
                                <!-- Input para upload da imagem -->
                                <label for="imagem">Imagem do Produto:</label>
                                <input type="file" id="imagem" name="imagem" class="input-file" accept="image/*" required>
                                <!-- Contêiner para pré-visualização da imagem -->
                                <div class="image-preview" id="image-preview">
                                    <!-- Imagem será exibida aqui -->
                                </div>
                                <!-- Novo local da quantidade total -->
                                <div class="total-quantity-container">
                                    <!-- Rótulo para quantidade total -->
                                    <label for="total">Quantidade Total:</label>
                                    <!-- Input para quantidade total -->
                                    <input type="number" id="total" name="total" class="input-number" readonly>
                                </div>
                            </div>
                        </div>

                        <!-- Contêiner para tamanho único -->
                        <div id="tamanho-unico-container">
                            <h3>Tamanho Único</h3>
                            <div class="size-color-buttons">
                                <!-- Contêiner para cores e quantidades -->
                                <div id="cores-container">
                                    <div class="color-group">
                                        <!-- Input para cor -->
                                        <input type="text" name="cores_unico[]" class="input-color" placeholder="Cor" required>
                                        <!-- Input para quantidade -->
                                        <input type="number" name="quantidades_unico[]" class="input-quantity" placeholder="Quantidade" min="0" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Botões para mostrar/ocultar mais tamanhos e cores -->
                        <div class="size-color-buttons">
                            <button type="button" id="add-more-cores-unico" class="color-ok-button">+ Cores</button>
                            <button type="button" id="show-more-sizes" class="btn-small show-more-sizes">+ Tamanhos/Cores</button>
                            <button type="button" id="hide-more-sizes" class="btn-small hide-more-sizes hidden">Ocultar Tamanhos</button>
                            <!-- Botão para calcular a quantidade total -->
                            <button type="button" id="calculate-total" class="button">Cores OK</button>
                        </div>

                        <!-- Contêiner oculto para mais tamanhos e cores -->
                        <div id="more-sizes-container" class="hidden">
                            <h3>Tamanho P</h3>
                            <div class="size-color-buttons">
                                <div id="cores-p-container"></div>
                                <button type="button" id="add-more-cores-p" class="btn-small">+ Cores</button>
                            </div>

                            <h3>Tamanho M</h3>
                            <div class="size-color-buttons">
                                <div id="cores-m-container"></div>
                                <button type="button" id="add-more-cores-m" class="btn-small">+ Cores</button>
                            </div>

                            <h3>Tamanho G</h3>
                            <div class="size-color-buttons">
                                <div id="cores-g-container"></div>
                                <button type="button" id="add-more-cores-g" class="btn-small">+ Cores</button>
                            </div>

                            <h3>Tamanho GG</h3>
                            <div class="size-color-buttons">
                                <div id="cores-gg-container"></div>
                                <button type="button" id="add-more-cores-gg" class="btn-small">+ Cores</button>
                            </div>
                        </div>

                        <!-- Botão para enviar o formulário -->
                        <button type="submit" class="button">Cadastrar Produto</button>
                    </form>
                </div>
            </main>
            <!-- Inclui o rodapé a partir de um arquivo separado -->
            
        </div>
    </div>

    <!-- Inclui arquivos JavaScript -->
    <script src="js/app.js"></script>
    <script src="js/clientes.js"></script>
    <script src="js/cadastro_produto.js"></script>
</body>
</html>
