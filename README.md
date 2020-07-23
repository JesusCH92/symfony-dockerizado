# Objetivo
Crear un entorno web, en cual trabajaremos con Symfony + MySQL + Nginx

# Requisitos
* Docker

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
**`Importante:`** La carpeta docker contine la configuración de los servicios de PHP Y Nginx de nuestro docker-compose.

# Configuración del entorno

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