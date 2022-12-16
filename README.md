# crud-php-mysql
Sistema completo de gestão de estoque feito em PHP e Mysql.

Gestor de estoque completo com cadastro, leitura, edição e deleção, além de um sistema de login que gerencia quem efetuou a atividade.
Esse sistema servirá de base para outro mais robusto com possibilidade de cadastro e baixa através do leitor de códigos de barras.

Após criar a base de dados com o arquivo crud_db.sql utilize o usuário Master com Login = 00011122233 e com senha = adminMaster para criar novos usuários. Somente usuários com privilégio Admin podem criar novos usuários, editar e apagar produtos, gerar relatórios e criar novos usuários. Os usuários sem privilégio Admin podem somente dar baixa de estoque através do código de barras.