
# **CSI477-2018-01 - Proposta de Trabalho Final**
## *Grupo: Rafael Junior e Erick Adeli*

--------------

<!-- Descrever um resumo sobre o trabalho. -->

### Resumo
O objetivo deste documento é apresentar uma proposta para o trabalho a ser desenvolvido na disciplina CSI477 -- Sistemas WEB I. É uma breve descrição sobre um sistema de cadastro de vendas de produtos da Associação Atlética Acadêmica da UFOP JM. A Associação possui seus próprios produtos e precisa de um controle de vendas desses produtos. Nessa venda seriam identificados a pessoa que realizou a venda e o produto vendido, podendo também registrar o nome do associado ou de quem comprou. 

<!-- Apresentar o tema. -->
### 1. Tema

  O trabalho final tem como tema o desenvolvimento de um sistema de cadastro de vendas de produtos da A.A.A.U.J.M. , o que é comercializado dentro da Associação são produtos com a marca da organização e vendas de pacotes de eventos. 

<!-- Descrever e limitar o escopo da aplicação. -->
### 2. Escopo

  Esse projeto contará com as seguintes funcionalidades:
  
  
###2.1.  Vendedor
	* Cadastrar Vendedor: Essa funcionalidade contará com o cadastro dos vendedores. 
	* Excluir Vendedor: Essa funcionalidade contará com a exclusão dos vendedores.
	* Alterar Vendedor: Essa funcionalidade contará com a atualização dos dados dos vendedores.
	* Exibir Vendedor: Essa funcionalidade contará com a exibição dos vendedores.
	
###2.2. Produto
	* Cadastrar Produto: Essa funcionalidade contará com o cadastro dos produtos. 
	* Excluir Produto: Essa funcionalidade contará com a exclusão dos produtos.
	* Alterar Produto: Essa funcionalidade contará com a atualização dos dados dos produtos.
	* Exibir Produto: Essa funcionalidade contará com a exibição dos produtos.

###2.3. Associados
	* Cadastrar Associados: Essa funcionalidade contará com o cadastro dos associados. 
	* Excluir Associados: Essa funcionalidade contará com a exclusão dos dados dos associados.
	* Alterar Produto: Essa funcionalidade contará com a atualização dos dados dos associados.
	* Exibir Associados: Essa funcionalidade contará com a exibição dos dados dos associados.
	
###2.4. Vendas
	* Cadastrar Vendas: Essa funcionalidade contará com o cadastro das Vendas. 
	* Excluir Vendas: Essa funcionalidade contará com a exclusão dos Vendas.
	* Alterar Vendas: Essa funcionalidade contará com a atualização dos dados dos Vendas.
	* Exibir Vendas como relatório: Essa funcionalidade contará com a exibição dos Vendas.
	* Valida Vendas: Permite que a venda seja realizada se exister o produto em estoque.
	* Decrementar quantidade vendida: Atualiza valor do produto em estoque.


<!-- Apresentar restrições de funcionalidades e de escopo. -->
### 3. Restrições

  Neste trabalho não serão considerados as funcionalidades de realizar pagamento, serviços de e-commerce e cadastro de clientes. O sistema será desenvolvido em plataforma web, As vendas só são permitidas se estiver o produto em estoque. O sistema possuirá apenas um administrador, e o mesmo será o unico que terá acesso a view de Vendedores, com os dados dos vendedores. Assumimos que os vendedores tenham acesso apenas aos registros de vendas e associados. 

<!-- Construir alguns protótipos para a aplicação, disponibilizá-los no Github e descrever o que foi considerado. //-->
### 4. Protótipo
 O Protótipo foi construído na plataforma pencil project e conta com as seguintes telas.
 	
a)Tela Home - tela responsável por apresentar a associação atlética acadêmica.
![Home-Page](https://github.com/UFOP-CSI477/2018-01-trabalho-final-sistema-de-cadastro-de-vendas-de-produtos-da-A.A.A.U.J.M/tree/master/prototipo/Home-Page.png "Home Page")

b) Tela login - tela responsável por realizar o login do vendedor e do administrador, 	ao efetuar o login no sistema, o vendedor terá acesso apenas as possibilidades de registrar venda e gerar relatório. O administrador será o responsável por cadastrar novos produtos e também os vendedores. Possibilidades de realizar exclusão e alteração de dados serão consideradas no decorrer do projeto.
![Tela-Login](https://github.com/UFOP-CSI477/2018-01-trabalho-final-sistema-de-cadastro-de-vendas-de-produtos-da-A.A.A.U.J.M/tree/master/prototipo/Login.png "Tela de login")

c) Tela de cadastrar produto - tela responsável por cadastrar os produtos e seus valores, que diferem entre associados e não associados.
![Cadastro-de-Produto](https://github.com/UFOP-CSI477/2018-01-trabalho-final-sistema-de-cadastro-de-vendas-de-produtos-da-A.A.A.U.J.M/tree/master/prototipo/Cadastrar-Produto.png "Cadastro de Produto")

d) Tela cadastrar vendedor - tela responsável por cadastrar o vendedor, bem como seu login e senha.
![Cadastro-de-Vendedor](https://github.com/UFOP-CSI477/2018-01-trabalho-final-sistema-de-cadastro-de-vendas-de-produtos-da-A.A.A.U.J.M/tree/master/prototipo/Cadastrar-Vendedor.png "Cadastro de Vendedor")

e) Tela registrar venda - Tela responsável por registrar uma venda, onde será informado dados de quem vendeu, dado do produto vendido e nome para quem vendeu com intuito de facilitar a venda realizada.
![Registro-de-Venda](https://github.com/UFOP-CSI477/2018-01-trabalho-final-sistema-de-cadastro-de-vendas-de-produtos-da-A.A.A.U.J.M/tree/master/prototipo/Registo-de-Venda.png "Registro de venda")
 
f) Tela gerar relatório - Tela responsável por exibir todas as vendas realizadas, em uma segunda tabela será possível exibir o produto, a quantidade vendida e o total arrecadado com o mesmo.
![Gerar-Relatorio](https://github.com/UFOP-CSI477/2018-01-trabalho-final-sistema-de-cadastro-de-vendas-de-produtos-da-A.A.A.U.J.M/tree/master/prototipo/Gerar-Relatório.png "Tela de Gerar Relatório").


### 5. Referências
Na criação dos protótipos foi utilizado a ferramenta Pencil Project.
