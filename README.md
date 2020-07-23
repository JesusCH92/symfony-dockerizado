# Objetivo
Crear un entorno web, en cual trabajaremos con Symfony + MySQL + Nginx

# Requisitos
* Docker
* MySQL Workbench (recomendable)

# Definición del sistema
El proyecto esta compuesto por el esqueleto que genera symfony al crear un nuevo proyecto desde cero:
```bash
your-project/
├── assets/
├── bin/
│ └── console
├── config/
│ ├── bundles.php
│ ├── packages/
│ ├── routes.yaml
│ └── services.yaml
├── public/
│ └── index.php
├── src/
│ ├── ...
│ └── Kernel.php
├── templates/
├── tests/
├── translations/
├── var/
│ ├── cache/
│ └── tmp/
└── vendor/
```
**`Importante:`** La carpeta **/docker** contine la configuración de los servicios de PHP Y Nginx de nuestro docker-compose.

# Configuración del entorno

## Configuración de la BBDD
El proyecto tiene por defecto una conección a una base de datos de MySQL con los siguientes datos:
* user: root
* password: toor
* database name: db
Estos datos por defecto están establecidos en el fichero **`docker-compose-yml`** y en la conexión establecida en el ficher **`.env`**

![db-docker-compose](https://i.imgur.com/puBGHdd.jpg)

![config-db-symfony](https://i.imgur.com/FWDumvF.jpg)

Si utiliza workbench puede configurarlo de esta forma para interactuar con bbdd:

![workbench-config](https://i.imgur.com/kc16Ptb.png)

## Levantar el entorno (Symfony + MySQL + Nginx)
Si tiene un S.O. de la familia de Unix (Linux o Mac), puede utilizar ejecutar:
```bash
make start
```
si tiene Windows, ejecute:
```bash
docker-compose up -d
```

## Bajar el entorno
Si tiene un S.O. de la familia de Unix (Linux o Mac), puede utilizar ejecutar:
```bash
make stop
```
si tiene Windows, ejecute:
```bash
docker-compose down
```

## Modo interactivo
Si tiene un S.O. de la familia de Unix (Linux o Mac), puede utilizar ejecutar:
```bash
make interactive
```
si tiene Windows, ejecute:
```bash
docker-compose -f docker-compose.cli.yml run \
    --rm \
    --no-deps \
    -e HOST_USER=${UID} \
    -e TERM=xterm-256color \
    php-cli /bin/zsh -l
```
Cuando ejecute el comando **`make interactive`**, aparece unas preguntas de la configuración por entorno, las cuales responda con "NO" **`n`**.

![config-environment](https://i.imgur.com/wVNHxuM.jpg)

Si todo es correcto, aparecerá la siguiente imagen:

![interactive-mode](https://i.imgur.com/VWtB0WY.jpg)