# backend-php-junior
Teste programador Backend PHP Júnior (Laravel)

## Regras do desafio
[regras](regras_desafio_readme.md)

## Pré-requisitos
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## Instalação
Siga estas etapas para configurar e executar o projeto usando Docker Compose:

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/seu-usuario/seu-projeto.git
   ```

2. **Navegue até o diretório do projeto:**
  ```bash
   cd seu-projeto
  ```
  
3. **Acesse o container da API:**
  ```bash
   docker-compose exec user-api-test bash
  ```
  
4. **Dentro do container da API, execute as migrações e seeds do banco de dados:**
  ```bash
   php artisan migrate --seed
  ```
  
5. **Acesse a rota de ping para verificar se a api esta online**
  ```bash
   http://localhost:8000/api/ping
  ```
6. **Teste as rotas/endpoints:**

   - **GET /api/user/{user}**
     ```
     curl -X GET http://localhost:8000/api/user/1
     ```

   - **POST /api/user**
     ```
     curl -X POST -H "Content-Type: application/json" -d '{"name":"Usuario","cpf":"99999999999","email":"usuario@example.com","password":"password","password_confirmation":"password"}' http://localhost:8000/api/user
     ```

   - **PUT /api/user/{user}**
     ```
     curl -X PUT -H "Content-Type: application/json" -d '{"name":"Usuario atualizado","cpf":"11111111111","email":"usuario@example.com","password":"123123123","password_confirmation":"123123123"}' http://localhost:8000/api/user/2
     ```

   - **DELETE /api/user/{user}**
     ```
     curl -X DELETE http://localhost:8000/api/user/2
     ```

   - **POST /api/login**
     ```
     curl -X POST -H "Content-Type: application/json" -d '{"email":"usuario@example.com","password":"123123123"}' http://localhost:8000/api/login
     ```

## Comandos Úteis
- Parar os containers:
  ```bash
   docker-compose down
  ```
  
- Visualizar os logs dos containers:
  ```bash
   docker-compose logs -f
  ```
  
## Contribuições
Sinta-se à vontade para avaliar, relatar bugs ou melhorias.
