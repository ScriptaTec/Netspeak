# Netspeak

# Rodar o projeto 

Antes de clonar o projeto se certifique que os containers docker foram limpados do sistema

```bash
sudo docker rm -f nginx_netspeak php_netspeak mysql_netspeak certbot_netspeak
```

Clonar o projeto

```bash
git clone git@github.com:ScriptaTec/Netspeak.git
```
Copiar o .env-docker para .env e adicionar as informações necessarias das variaveis de ambiente

```bash
cd Netspeak/src
```

```bash
cp .env-docker .env
```

Rodar o compose install dentro de src para instalar a biblioteca necessaria para usar o arquivo .env

```bash
composer install && cd ..
```

Rodar o projeto com o arquivo docker-compose.yml

```bash
sudo docker-compose up -d --build
```

Abrir no localhost

```bash
firefox localhost
```


