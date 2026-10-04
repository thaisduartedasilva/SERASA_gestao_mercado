# Sistema de Gestão de Estoque
Na Atividade de Recuperação — CRUD PHP: Sistema de Gestão de Estoque o objetivo era realizar um crud em linguagem PHP com as funcionalidades de listar, cadastrar, editar e excluir um produto do estoque de um mercado, auxiliando na gestão e organização do estoque desse mercado. O CRUD também contou com o uso de Prepared Statements para evitar problemas de SQL Injection e garantir a segurança do site. 

## Tecnologias utilizadas
- PHP
- MySQL
- HTML
- XAMPP
- Git e GitHub

Para a execução do código é necessário criar um clone no projeto postado no github na pasta htdocs dentro do xampp, inicializar o Apache e o MySQL pelo XAMPP, depois executar o arquivo db.sql no phpMyAdmin, configurar a senha na pasta conexao.php caso necessário, e abrir o projeto no navegador.  

No banco de dados foi criada a tabela “produto” onde contém todos os dados do produto, id, sendo a chave primária e auto incrementado, o nome do produto, a categoria do produto, se ele é um item de higiene pessoal, um alimento ou outra coisa, a descrição onde se é colocado mais características do produto, quantidade onde é registrado quanto daquele produto ainda há no estoque, data de validade do produto e o seu preço, todos eles sendo “NOT NULL” ou seja, todos são campos que obrigatoriamente devem ser preenchidos.  

## Regra de negócio:

- RN01| Todo produto deve possuir nome, categoria, descrição, preço, quantidade e data de validade;
- RN02| O nome do produto, categoria, descrição, preço, quantidade, data de validade, não podem ficar vazios;
- RN03| Um produto só pode ser editado se estiver cadastrado no sistema;
- RN04| Um produto só pode ser excluído se existir no banco de dados. 
- RN05| Os dados do produto devem ser armazenados no banco de dados; 
- RN06| Todos os produtos devem ter ID único e auto incrementado; 
- RN07| As operações de cadastro, edição e exclusão devem ter Prepared Statements; 
- RN08| O sistema deve ter proteção contra SQL Injection; 

## Requisito Funcional: 

- RF01| O sistema deve permitir cadastrar novos produtos; 
- RF02| O sistema deve permitir informar nome, categoria, descrição, preço, quantidade em estoque e data de validade do produto;
- RF03| O sistema deve permitir visualizar a lista de produtos cadastrados;
- RF04| O sistema deve permitir editar os dados de um produto já cadastrado; 
- RF05| O sistema deve permitir excluir um produto já cadastrado; 
- RF06| O sistema deve validar os dados informados pelo usuário antes de realizar o cadastro ou alteração; 
- RF07| O sistema deve armazenar os produtos no banco de dados; 
- RF08| O sistema deve utilizar Prepared Statements nas operações realizadas no banco de dados; 

## Requisito Não Funcional: 

- RNF01| O sistema deve utilizar Prepared Statements; 
- RNF02| O sistema deve estar disponível 24 horas por dia, 7 dias por semana; 
- RNF03| O sistema deve possuir código organizado e documentado;
- RNF04| O sistema deve permitir realizar as operações de listar, editar, excluir e cadastrar produtos; 
- RNF05| O sistema deve possuir interface intuitiva e de fácil utilização;
- RNF06| O sistema deve apresentar informações de forma clara e organizada;

## Diagrama Draw.io

![alt text](<assets/img/diagrama mercado SERASA.png>)