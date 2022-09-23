## Desafio Tecnico Pentagrama

### Startar Aplicação

#### Configuração ambiente e Banco de dados
rode o comando na raiz do projeto rode:
```
composer install 
```

criar aquivo **.env** seguir os passos abaixo:

rode o comando
```
php artisan key:generate
```

adicione no seu arquivo **.env**
```
DB_CONNECTION=sqlite
```

rodar o comando para criar as migrations das tabelas
```
php artisan migrate
```

#### Laravel Back-end
```
php artisan serve
```
#### Vite/TailwindCss Front-end
```
npm install
```
```
npm run dev
```