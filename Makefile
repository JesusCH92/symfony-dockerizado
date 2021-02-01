#! /bin/bash

DOCKERING_PHP = php-fpm
UID = $(shell id -u)
DOCKER_NETWORK = docker-symfony-network


##	create-network:			create the default network
create-network:
		docker network create ${DOCKER_NETWORK} | true


##	start:					get up environment (PHP + MYSQL + NGINEX)
start: create-network
		U_ID=${UID} docker-compose up -d


##	stop:					stop the containers
stop:
		U_ID=${UID}	docker-compose stop


## interactive:				runs php container with an interactive shell
interactive: create-network
		$(MAKE) start | true
		U_ID=${UID} docker exec -it --user ${UID} ${DOCKERING_PHP} bash