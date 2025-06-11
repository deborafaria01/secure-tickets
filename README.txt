SecureTickets - Sistema básico de gestão de eventos

INSTRUÇÕES:

1. Clonar o projeto
2. Criar o banco de dados PostgreSQL com usuário e senha definidos em models/Database.php
3. Rodar o script init.sql para criar a tabela eventos
4. Subir a aplicação com Apache ou Docker
5. Acessar via navegador: http://localhost:8080

Estrutura:
- index.php
- init.sql
- /models/Database.php
- /public/login.php, dashboard.php, eventos.php, relatorios.php, cadastrar_evento.php, logout.php
- /includes/navbar.php
- /assets/img/logo.png
