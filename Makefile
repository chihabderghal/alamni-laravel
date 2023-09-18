BASE_NAME = alamni-laravel
DEV_TAG = dev
DOCKER_IMAGE_NAME = alamni-laravel
DOCKER_IMAGE_TAG = dev
DOCKER_DEV_IMAGE_FILE = docker/Dockerfile


.PHONY: build
build:
	docker build --tag $(DOCKER_IMAGE_NAME):$(DOCKER_IMAGE_TAG) \
				 --file docker/Dockerfile \
				 --build-arg user=$(shell whoami) \
				 --build-arg uid=$(shell id -u) \
				 docker/


