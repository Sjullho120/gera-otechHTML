<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css -->
     <style>
body{
    background-color: #f5f5f5;
    font-family: Arial, sans-serif;
    
}
.formulario{
    width: 23%;
    margin: 0px auto;
    padding: 9px;
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 1px 1px 5px #ccc;
}
.imagem{
    width: 100%;
    height: 50%;
    max-width: 100px;
    max-height: 0%;
    margin-top: 0%;
    position: absolute;
    right: 10%;
}

     </style>
</head>
<body>
    <form action="#">Cadastro Produto</form><bR>
    <br>

    <div>
    <label for="id_do_modelo">ID do modelo:</label>
    <input type="text" name="id_do_modelo" id="id_do_modelo" class="formulario">

    <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" class="formulario">
    </div>
<br>
    <div>
       <label for="preco">Preço:</label> 
       <input type="numb" name="preco" id="preco" class="formulario">

       <label for="descricao">Descrição:</label>
       <input type="text" name="descricao" id="descricao" class="formulario">
    </div>
<br>
<div>
    <label for="imagem">Img Produto:</label><br>
    <input type="file" name="imagem" id="imagem" class="imagem">
</div>
<br>
<div>
<label for="total">Total do Produto:</label>
<input type="number" name="total" id="total" class="total">
</div>
<br>
<div>
    <label for="tamanhounico">Tamanho Único:</label>
    <div class="color-group">
   
    <input type="text" name="cores_unico" class="input-color" placeholder="Cor" required>                  
    <input type="number" name="quantidades_unico" class="input-quantidade" placeholder="Quantidade" min="0" required>
    <button type="cor" name="cor" id="cor" class="cor">+CORES</button>
</div>
</div>
<br>

<div>

<button type="text" name="tam" id="tam" class="tam">+TAMANHOS</button>
<button type="text" name="ok" id="ok" class="ok">SALVAR CORES</button>
</div>
<br>
<div>
    <button type="salvar" name="salvar" id="salvar" class="salvar">CADASTRAR PRODUTO</button>
</div>

    
    
</body>
</html>