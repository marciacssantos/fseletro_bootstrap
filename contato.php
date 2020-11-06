
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletro";
//cria a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

//verifica a conexão
    if (!$conn){
        die("A conexão do BD falhou" . mysqli_connect_error());
    }

    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['msg']) ){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        $sql = "insert into comentarios  (nome, email, mensagem) values ('$nome','$email','$msg')";
        $result = $conn -> query($sql);
    }
    ?>

<!DOCTYPE html>   
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Contato</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

    <?php
        include_once("menu.html");
    ?>
    <header>
        <p class="h1 text-center my-4">Contato</p>
    </header>
    
    <hr>
    <table class="table table-borderless">
        <tr>
            <td width="50%" align="center">
                <img src="./imagens/email.png" width="40px">
                <font face="Arial" size="4">contato@fullstackeletro.com</font>
            </td>

            <td width="50%" align="center">
                <img src="./imagens/whatsapp.png" width="40px">
                <font face="Arial" size="4">(11)99999-9999</font>
            </td>
        </tr>
    </table>
    <div class="container">
        <form method="post" action="">
            <div class="form-group">
                <label for="fnome">Nome: </label><br>
                <input type="text" class="form-control" name="nome" style="width:500px;"><br><br>
            
                <div class="form-group">
                <label for="fmsg">Email:</xlabel><br>
                <input type="email" class="form-control" name="email" style="width:500px;"><br><br>

            </div>

            <div class="form-group">
                <label for="fmsg">Mensagem:</label><br>
                <textarea name="msg" class="form-control"></textarea>
                <button class="btn btn-info" type="submit" data-toggle="modal" data-target="#enviarEmail">Enviar</button>
               
            </div>
        
        
        </form>   

    </div>
    <div class="container">
        <div class="modal" id="enviarEmail" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Mensagem enviada com Sucesso!!</h4>
                        <button type="button" class="closer" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p>Logo entraremos em contato!!</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>

                    </div>

                </div>
            </div>
        </div>
    </div>
    
    
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>

    
    <script src="./js/funcoes.js"></script>
    <div class="container-fluid">
        <?php
            include_once("footer.html")
        ?>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
