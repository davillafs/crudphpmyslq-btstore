# crudphpmyslq-btstore
De inicio, o projeto se trata de um sistema de cadastro de uma loja de artigos esportivos chamada "BTSTORE", na qual há opções de cadastro de clientes, vendedores e produtos. 
No desenvolvimento do crud , é importante destacar que existem algumas etapas importantes, seguindo a ordem de criação da estrutura do banco, criando as tabelas nas quais estão presentes as informações(dados).
A conexão mysql para conectar ao mysql utilizando a função mysqli_connect(php). 
O create para adicionar produtos ao estoque, criar um formulário que envie os dados via POST, inserindo os valores do banco com um comando SQL INSERT INTO produtos(*)VALUES(*). 
O read para exibir produtos, usar um comando SQL SELECT * FROM produtos e apresentar os dados em uma página web com uma tabela. 
O update para atualizar dados de um produto, criar um formulário que receba o id e novos valores, e usar UPDATE produtos SET nome = ?, preco = ?, quantidade_estoque = ? WHERE id = ?.
A validação de entrada para validar os dados recebidos de formulários para evitar SQL Injection e garantir a integridade do banco de dados.
A construção de uma interface de usuário, desenvolvendo uma interface amigável para visualização, adição, edição e remoção de produtos.
