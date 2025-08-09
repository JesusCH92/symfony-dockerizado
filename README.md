# Virtualización de entorno

## Requisitos previos
> [!IMPORTANT]
> **Debes tener instalado Docker y Docker Compose en tu equipo.**

Este proyecto tiene como finalidad virtualizar un entorno de desarrollo utilizando **Docker** para trabajar con:

- PHP 8.4 (para instalar la última versión de Symfony)
- MySQL
- Nginx

## Instalación

- [ ] Creamos la red del entorno:

```shell
  docker network create app-network
```

- [ ] Levantamos los contenedore:

```shell
  docker compose -p app up -d
```

- [ ] Entramos dentro del contenedor:
```shell
  docker exec -it php-fpm bash
```

- [ ] Instalamos una versión de Symfony:
```shell
  composer create-project symfony/skeleton:"7.3.x" my_project_directory
```

- [ ] Debemos sacar el esqueleto de Symfony que hemos instalados a la raiz del proyecto:

Para Mac, Linux, WSL2

```shell
  shopt -s dotglob nullglob
  mv my_project_directory/* . && rmdir my_project_directory
```

Para Windows:
```cmd
  move my_project_directory\* .
  rmdir /s /q my_project_directory
```

- [ ] Para finalizar acceder a la url:

[**`Proyecto Web`**](http://localhost:8080)

## Conexión de Symfony a la base de datos:
```.env
DATABASE_URL="mysql://user:password@mysql:3306/database?serverVersion=8.0"
```

```JSON
{
  "host": "localhost",
  "port": 3306,
  "user": "user",
  "password": "password",
  "database_name": "database"
}
```

