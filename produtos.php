
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletro";
//cria a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

//verifica a conexão
    if (!$conn){
        die("A conexão do BD falhou" . mysqli_connect_error()) ;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Nossos Produtos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
        
    <?php
        include_once("menu.html");
    ?>
        
    <header>
        <p class="h1 text-center my-4">Produtos</p>
    </header>
    
    <div class="container">
        <section class="categorias">
            <p class="h3">Categorias</p>
            <ul class="list-group">
                <li class="itens list-group-item" onclick="exibir_todos()">Todos (3)</li>
                <li class="itens list-group-item" onclick="exibir_categorias('geladeira')">Geladeiras (3)</li>
                <li class="itens list-group-item" onclick="exibir_categorias('fogao')">Fogões (2)</li>
                <li class="itens list-group-item" onclick="exibir_categorias('microondas')">Microondas (3)</li>
                <li class="itens list-group-item" onclick="exibir_categorias('lavaRoupa')">Lavadoura de roupas (2)</li>
                <li class="itens list-group-item" onclick="exibir_categorias('lavaLouca')">Lava-loucas (2)</li>
            </ul>
        </section>
    </div>
    
    <div class="container">
    <section class="produtos">
        
        <?php
             $sql = "select * from produtos";
             $result = $conn -> query($sql);
         
             if($result -> num_rows > 0){
                 while($rows = $result ->fetch_assoc()){
                     

        ?>

            <div class="box_produto m-2" style="display:block" id="<?php echo $rows["categoria"];?>" >
                <img src="<?php echo $rows["imagem"];?>" width="120px" onclick="destaque(this)">
                <br>
                <p class="descricao"><?php echo $rows["descricao"];?></p>
                <p class="descricao"><strike>R$ <?php echo $rows["preco"];?></strike></p>
                <p class="preco">R$ <?php echo $rows["preco_venda"];?></p>
            </div>

        <?php
                 }
         
             }else{
                 echo "Nenhum produto cadastrado";
             }

        ?>
        
                
      
    </section>

    </div>
    
    
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>


    
    <script src="./js/funcoes.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
</body>
</html>
