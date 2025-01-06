# Setup Docker Para Projetos Laravel (8, 9, 10 ou 11)

Este repositório contém um ambiente Docker configurado para projetos Laravel, utilizando **PostgreSQL** como banco de dados e **Redis** para cache e filas. O ambiente é ideal para desenvolvimento local, garantindo consistência e facilidade de configuração.

---

### Passo a Passo

#### Clone o Repositório
```sh
git clone https://github.com/FelipeHardmann/backend_softpar.git
cd backend_softpar


Copie os arquivos docker-compose.yml, Dockerfile e o diretório docker/ para o seu projeto
```sh
cp -rf setup-docker-laravel/* app-laravel/
```
```sh
cd app-laravel/
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="Backend Softpar"
APP_URL=http://localhost:8989

DB_CONNECTION=pgsql
DB_HOST=db
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=username
DB_PASSWORD=userpass

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```


Acessar o projeto
[http://localhost:8989](http://localhost:8989)
