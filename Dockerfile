FROM php:7.4
RUN apt-get update && \
    apt-get install -y \
        locales libicu-dev sassc esbuild && \
    rm -r /var/lib/apt/lists/*

RUN docker-php-ext-install intl gettext

RUN sed -i -e 's/# en_US.UTF-8 UTF-8/en_US.UTF-8 UTF-8/' /etc/locale.gen && \
    sed -i -e 's/# es_ES.UTF-8 UTF-8/es_ES.UTF-8 UTF-8/' /etc/locale.gen && \
    dpkg-reconfigure --frontend=noninteractive locales

WORKDIR /var/www/html