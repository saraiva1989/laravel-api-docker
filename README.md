# Comandos para executar o docker

### Construir e iniciar os containers
docker-compose up -d --build

### Executar migrations (após os containers estarem rodando)
docker-compose exec app php artisan migrate

### Executar seeds
docker-compose exec app php artisan db:seed

Após executar os comandos acima a aplicação estará sendo executada no link http://localhost:8000/api/produtos

os endpoints são:

Listar produtos: GET /api/produtos

Criar produto: POST /api/produtos

Ver detalhes: GET /api/produtos/{id}

Atualizar: PUT/PATCH /api/produtos/{id}

Deletar: DELETE /api/produtos/{id}


# Comandos auxiliares

### Parar os containers
docker-compose down

# Ver logs da aplicação
docker-compose logs app

# Executar comandos Artisan
docker-compose exec app php artisan [comando]

# Acessar shell no container
docker-compose exec app bash

# Reconstruir containers
docker-compose up -d --force-recreate
