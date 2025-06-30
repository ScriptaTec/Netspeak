#!/bin/bash

echo -n "Digite sua senha: "
read -s senha

echo ""

echo $senha | sudo -S docker rm -f nginx_netspeak php_netspeak mysql_netspeak certbot_netspeak

cp src/.env-docker src/.env

composer install -d ./src

echo -n "Altere o .env e digite enter..."
read -s confirmacao

echo ""
echo "Executando....."

sleep 10

echo $senha | sudo -S docker-compose up -d --build

firefox localhost  2>/dev/null