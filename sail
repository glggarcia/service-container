#!/usr/bin/env bash

docker run --rm -it \
    -v "$PWD":/app \
    -u "$(id -u)":"$(id -g)" \
    -w /app \
    composer:latest "$@"
