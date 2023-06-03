# Projeto da Universidade Vale do Itajai - Central de Pedidos

Este é o meu projeto para a disciplina de Projeto e Desenvolvimento de Sistema Computacional com Persistência de Dados da universidade. O projeto consiste na criação de uma aplicação web usando o framework Laravel e a infraestrutura Docker.

## Infraestrutura Docker

A infraestrutura Docker foi configurada para facilitar o desenvolvimento e execução do projeto. Ela consiste em três contêineres principais:

1. **app**: Este contêiner é responsável por executar a aplicação Laravel. Ele utiliza a imagem `php:8-fpm` como base e possui as extensões necessárias instaladas. O código-fonte da aplicação é montado como um volume para permitir a edição em tempo real.

2. **webserver**: Este contêiner executa o servidor web Nginx. Ele utiliza a imagem `nginx:alpine` como base e redireciona as solicitações HTTP para o contêiner `app`. O arquivo de configuração do Nginx está localizado em `docker/nginx/default.conf`.

3. **db**: Este contêiner executa o banco de dados MySQL. Ele utiliza a imagem `mysql:8.0` como base e é configurado para persistir os dados em um volume Docker.

Para iniciar os contêineres, utilize o comando `docker-compose up -d`. Certifique-se de ter o Docker e o Docker Compose instalados em sua máquina.

## Makefile

O Makefile fornece comandos convenientes para tarefas comuns do projeto. Aqui estão alguns dos comandos disponíveis:

- **shell**: Executa um terminal interativo dentro do contêiner `app`.
- **migrate**: Executa as migrações do banco de dados.
- **rollback**: Reverte a última migração do banco de dados.
- **seed**: Popula o banco de dados com dados de exemplo.
- **cache-clear**: Limpa o cache da aplicação.
- **optimize**: Otimiza a aplicação para um melhor desempenho.

Para usar os comandos, execute `make <comando>` no terminal.

## Vídeo de demonstração

Junto com o código funcional, estou enviando um vídeo de demonstração de até 4 minutos apresentando o software em funcionamento. O vídeo mostra a utilização das interfaces web para cadastro e listagem das entidades definidas no projeto.

## Contribuindo

Sinta-se à vontade para contribuir com este projeto enviando pull requests ou reportando problemas na seção de issues.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

