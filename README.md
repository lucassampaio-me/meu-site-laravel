# Meu Site Laravel

Este é um projeto de site desenvolvido com Laravel e TailwindCSS.

## Requisitos

- PHP >= 8.1
- Composer
- Node.js e NPM
- MySQL ou outro banco de dados compatível

## Instalação

1. Clone o repositório:
```bash
git clone https://github.com/seu-usuario/meu-site-laravel.git
cd meu-site-laravel
```

2. Instale as dependências do PHP:
```bash
composer install
```

3. Instale as dependências do Node.js:
```bash
npm install
```

4. Copie o arquivo de ambiente:
```bash
cp .env.example .env
```

5. Gere a chave da aplicação:
```bash
php artisan key:generate
```

6. Configure o banco de dados no arquivo `.env`

7. Execute as migrações:
```bash
php artisan migrate
```

8. Compile os assets:
```bash
npm run dev
```

9. Inicie o servidor:
```bash
php artisan serve
```

## Estrutura do Projeto

- Página inicial com mensagem de boas-vindas
- Página "Sobre Nós" com informações da empresa
- Layout responsivo usando TailwindCSS
- Sistema de rotas configurado
- Estrutura base com header e footer

## Tecnologias Utilizadas

- Laravel
- TailwindCSS
- Blade Templates
- Laravel Mix

## Licença

Este projeto está sob a licença MIT.
