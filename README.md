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
