<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastrar Vendedor</title>
</head>
<body>
    <div>
    <h1 class="a">FORMULÁRIO DE CADASTR0 - VENDEDOR</h1>
        <form action="login_vendedor.php" method="post">
            <div class="row" class="b">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nome" name="nome_vendedor" id="">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Senha" name="senha_vendedor" id="">
                </div>              
            </div> <br>
                <div> 
                    <button type="submit" class="btn btn-outline-info">Entrar</button>
                </div>
           
        </form>

    </div>
</body>
</html>