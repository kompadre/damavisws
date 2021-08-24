#!/bin/bash

docker build . -t php-damavis:latest
docker run --env-file=.env -v `pwd`:/var/www/html php-damavis:latest php regen-static-html.php
docker-compose -f static.docker-compose.yml up
