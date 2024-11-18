<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <div>
    <h1 class="a">FORMULÁRIO CADASTRO - CLIENTE</h1>
        <form action="save_cliente.php" method="post">
            <div class="row" class="b">
                <div class="col">
                    <input type="text" class="form-control" placeholder="NOME" name="nome_cliente" id=""> 
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="CPF" name="cpf_cliente" id=""> 
                </div>
                <div class="col">
                    <input type="date" class="form-control" placeholder="DATA DE NASCIMENTO" name="nascimento_cliente" id=""> 
                </div>
                
            </div> <br>
                <div> 
                    <button type="submit" class="btn btn-outline-info">SALVAR</button>
                </div>
           
        </form>

    </div>
</body>
</html>