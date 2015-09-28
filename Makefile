.PHONY: build-demo build-containers run

help:
	@echo "Please use make <target> where <target> is one of the following:"
	@echo "  build-demo       build the symfony / wordpress instance from latest versions"
	@echo "  build-containers build different Docker containers"
	@echo "  run              runs the demonstration Docker instance"

build-demo:
	sh build-demo.sh

build-containers:
	docker build -t wordpress/code code
	docker build -t wordpress/php-fpm php-fpm
	docker build -t wordpress/nginx nginx
	docker pull mysql

run:
	docker-compose up
