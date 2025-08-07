#! /bin/bash

##	create-network:					crete network docker
create-network:
	docker network create app-network | true



##	start:					get up environment (PHP + MYSQL + NGINX)
start:
	-docker network create app-network | true
	-docker compose -p app up -d


##	stop:					stop the containers
stop:
	-docker compose stop


## interactive:				runs php container with an interactive shell
interactive:
	-docker exec -it php-fpm bash