# Incidents-API

<p align="center">
 
 <img alt="Laravel" src="https://github.com/Adelblande/Incidents/blob/master/assets/laravel.svg" width="250">
 <img alt="Mysql" src="https://github.com/Adelblande/Incidents/blob/master/assets/mysql.jpeg" width="200">
 <img alt="React" src="https://github.com/Adelblande/Incidents/blob/master/assets/react.jpeg" width="70">
 <img alt="React Router Dom" src="https://github.com/Adelblande/Incidents/blob/master/assets/router.jpeg" width="110">
 <img alt="Docker" src="https://github.com/Adelblande/Incidents/blob/master/assets/docker.jpeg" width="200">
</p>

<p align="center">
  <img alt="GitHub top language" src="https://img.shields.io/github/languages/top/Adelblande/Incidents.svg" title="Incidents-API">
  <img alt="GitHub top language" src="https://img.shields.io/github/languages/top/Adelblande/incidents-front.svg" title="Incidents-Front">
  <img alt="Repository size" src="https://img.shields.io/github/repo-size/Adelblande/Incidents.svg" title="Incidents-API">
  <img alt="Repository size" src="https://img.shields.io/github/repo-size/Adelblande/incidents-front.svg" title="Incidents-Front">
</p>


## Sobre o Projeto

O Projeto consiste em uma aplicação para teste.

Para levantar a aplicação você precisará ter instalado em sua máquina, Docker, Docker-compose e NodeJs.

### Install API
```bash
# Clone o repositório do Back
$ git clone https://github.com/Adelblande/Incidents.git

# Clone o repositório do Front
$ git clone https://github.com/Adelblande/incidents-front.git

# Navegue até a pasta Mobly-Back do projeto clonado
$ cd Incidents

# Execute o comando para subir os containers
$ docker-compose up -d

# Para instalar as dependencias do Laravel você precisa se conectar com o container, execute o comando abaixo
$ docker exec -it incidentes-php-fpm /bin/bash

# Agora no terminal dele instale as dependencias
$ composer install

# Ainda no mesmo terminal rode as migrations e as seeders
$ php artisan migrate
$ php artisan db:seed

```
Se tudo correu bem até aqui você ja esta com a API funcionando e ja pode testar no navegador

http://localhost:8888/api/incidents <br>

## Agora vamos para o front

### Install Front
```bash
# Se ainda não clonou o front
$ git clone https://github.com/Adelblande/incidents-front.git

# Navegue para dentro da pasta incidents-front
$ cd incidents-front

# Instale as dependencias
$ npm install
ou
$ yarn install

# Rode o comando para iniciar o front
$ npm start
ou
$ yarn start
```

Espero que à essa altura já esteja tudo funcionando perfeitamente,
Vc vera a tela inicial no seu navegador como na imagem abaixo.

<img alt="Tela inicial" src="https://github.com/Adelblande/Incidents/blob/master/assets/Tela_inicial.png" width="250">

Qualquer dúvida só me ligar.


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

