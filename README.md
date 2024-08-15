# Aplicativo PHP com MySQL e Docker (Padrão MVC)
Este é um guia básico para configurar um aplicativo PHP com MySQL usando Docker e seguindo o padrão MVC (Model-View-Controller). Vou dividir os passos em seções para facilitar o entendimento.

### Pré-requisitos:

Antes de começarmos, certifique-se de ter o seguinte instalado em sua máquina:

Docker: Se você ainda não tem o Docker instalado, baixe-o.

## Passos

## 1. Estrutura do Projeto
Primeiro, crie a estrutura básica do seu projeto:

![Imagem do WhatsApp de 2024-08-15 à(s) 13 17 53_e5671003](https://github.com/user-attachments/assets/0d952301-4685-42a3-b97b-f80edec42247)

docker-compose.yml: Arquivo de configuração do Docker Compose.

Dockerfile: Arquivo de configuração para criar a imagem do PHP.

app/: Diretório para o código-fonte do aplicativo.

## 2. Configuração do Docker Compose
No arquivo docker-compose.yml, defina os serviços para o PHP e o MySQL:

![Imagem do WhatsApp de 2024-08-15 à(s) 13 19 25_a646d96f](https://github.com/user-attachments/assets/2404be22-73eb-467d-b2d5-e9d3d8d2289f)

## 3. Dockerfile para o PHP
Crie um arquivo chamado Dockerfile com o seguinte conteúdo:

FROM php:8-apache

RUN docker-php-ext-install mysqli

## 4. Código-fonte
Dentro do diretório src/, crie seus arquivos PHP seguindo o padrão MVC. Por exemplo:

index.php: Ponto de entrada do aplicativo.

controllers/: Coloque seus controladores aqui.

models/: Defina seus modelos.

views/: Crie suas visualizações.

## 5. Acesso ao Banco de Dados
No código PHP, utilize a extensão mysqli para se conectar ao banco de dados MySQL. Lembre-se de configurar as credenciais corretamente.

Executando o Aplicativo

Abra um terminal na pasta raiz do projeto.

Execute docker-compose up -d --build para build e iniciar os serviços.

Acesse o aplicativo em seu navegador em http://localhost:8080.

Lembre-se de adaptar o código-fonte e as configurações conforme suas necessidades específicas.
