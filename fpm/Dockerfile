FROM ubuntu:18.04

RUN apt update && apt install -qy \
    wget software-properties-common

RUN DEBIAN_FRONTEND=noninteractive TZ=Etc/UTC apt-get -y install tzdata

RUN add-apt-repository ppa:ondrej/php
RUN apt update && apt install -qy \
    php7.4-fpm php7.4-cli php7.4-bz2 php7.4-curl php7.4-json php7.4-mbstring \
    php7.4-opcache php7.4-xml php7.4-zip

RUN wget https://github.com/elastic/apm-agent-php/releases/download/v1.5.1/apm-agent-php_1.5.1_all.deb && \
    dpkg -i apm-agent-php_1.5.1_all.deb

RUN mkdir -p /run/php
COPY www.conf /etc/php/7.4/fpm/pool.d/

RUN wget -q https://getcomposer.org/download/latest-stable/composer.phar && chmod a+x composer.phar && mv composer.phar /usr/local/bin/composer

WORKDIR /src

EXPOSE 9000
CMD ["php-fpm7.4", "-F"]
