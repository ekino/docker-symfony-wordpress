.PHONY: build-demo build-containers run

help:
	@echo "Please use make <target> where <target> is one of the following:"
	@echo "  build-demo       build the symfony / wordpress instance from latest versions"
	@echo "  build-containers build different Docker containers"
	@echo "  run              runs the demonstration Docker instance"

build-demo:
	sh build-demo.sh

build-containers:
	docker-compose build

run:
	docker-compose up
