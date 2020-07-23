##    start:			starts web server containers (nginx + PHP fpm + mysql)
.PHONY : start
start: 
	-@docker-compose up -d

##    stop:			stops webserver containers
.PHONY : stop
stop: 
	-@docker-compose down

##    interactive:			runs a container with an interactive shell
.PHONY : interactive
interactive:
	-@docker-compose -f docker-compose.cli.yml run \
		--rm \
		--no-deps \
		-e HOST_USER=${UID} \
		-e TERM=xterm-256color \
		php-cli /bin/zsh -l