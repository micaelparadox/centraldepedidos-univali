.PHONY: help shell migrate rollback seed cache-clear optimize

# Cores
RED=\033[0;31m
GREEN=\033[0;32m
YELLOW=\033[0;33m
RESET=\033[0m

# Target de ajuda
help:
	@echo "Comandos disponíveis:"
	@echo "$(YELLOW)  make shell$(RESET)          : Entrar no container"
	@echo "$(YELLOW)  make migrate$(RESET)        : Executar as migrações do banco de dados"
	@echo "$(YELLOW)  make rollback$(RESET)       : Reverter a última migração do banco de dados"
	@echo "$(YELLOW)  make seed$(RESET)           : Popular o banco de dados com dados de exemplo"
	@echo "$(YELLOW)  make cache-clear$(RESET)    : Limpar o cache da aplicação"
	@echo "$(YELLOW)  make optimize$(RESET)       : Otimizar a aplicação para melhor desempenho"

# Entrar no container
shell:
	@echo "$(YELLOW)Entrando no container...$(RESET)"
	@docker exec -it centraldepedidos bash

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
