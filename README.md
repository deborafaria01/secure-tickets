# SecureTickets - Aula 3.5 BLINDADO V2 (Estrutura Unificada e Estável)

## Como executar:

1️⃣ Suba o ambiente Docker:
docker-compose up --build

2️⃣ Inicialize o banco:
docker exec -i $(docker ps -qf "name=db") psql -U postgres -d securetickets < init.sql

3️⃣ Acesse o sistema:
http://localhost:8080

Usuário: admin
Senha: admin
