# Variáveis de Cores
RED=\033[0;31m
GREEN=\033[0;32m
YELLOW=\033[0;33m
RESET=\033[0m

# Configuração da Fonte
FONT_SIZE=\033[1;34m

# Target de ajuda
help:
	@echo "$(FONT_SIZE)Comandos disponíveis:$(RESET)"
	@echo "$(YELLOW)  make shell$(RESET)          : Entrar no container"
	@echo "$(YELLOW)  make migrate$(RESET)        : Executar as migrações do banco de dados"
	@echo "$(YELLOW)  make rollback$(RESET)       : Reverter a última migração do banco de dados"
	@echo "$(YELLOW)  make seed$(RESET)           : Popular o banco de dados com dados de exemplo"
	@echo "$(YELLOW)  make cache-clear$(RESET)    : Limpar o cache da aplicação"
	@echo "$(YELLOW)  make optimize$(RESET)       : Otimizar a aplicação para melhor desempenho"
	@echo "$(YELLOW)  make down$(RESET)           : Desligar os contêineres e remover os volumes"
	@echo "$(YELLOW)  make restart-nginx$(RESET)  : Reiniciar o contêiner do Nginx"

# Entrar no container
shell:
	@echo "$(YELLOW)Entrando no container...$(RESET)"
	@docker exec -it -w /var/www/html centraldepedidos bash

# Executar as migrações do banco de dados
migrate:
	@echo "$(YELLOW)Executando as migrações do banco de dados...$(RESET)"
	@docker exec -it centraldepedidos php artisan migrate

# Reverter a última migração do banco de dados
rollback:
	@echo "$(YELLOW)Revertendo a última migração do banco de dados...$(RESET)"
	@docker exec -it centraldepedidos php artisan migrate:rollback

# Popular o banco de dados com dados de exemplo
seed:
	@echo "$(YELLOW)Populando o banco de dados com dados de exemplo...$(RESET)"
	@docker exec -it centraldepedidos php artisan db:seed

# Limpar o cache da aplicação
cache-clear:
	@echo "$(YELLOW)Limpando o cache da aplicação...$(RESET)"
	@docker exec -it centraldepedidos php artisan cache:clear

# Otimizar a aplicação para melhor desempenho
optimize:
	@echo "$(YELLOW)Otimizando a aplicação para melhor desempenho...$(RESET)"
	@docker exec -it centraldepedidos php artisan optimize

# Desligar os contêineres e remover os volumes
down:
	@echo "$(YELLOW)Desligando os contêineres e removendo os volumes...$(RESET)"
	@docker-compose down --volumes --remove-orphans

# Reiniciar o contêiner do Nginx
restart-nginx:
	@echo "$(YELLOW)Reiniciando o contêiner do Nginx...$(RESET)"
	@docker-compose restart webserver
