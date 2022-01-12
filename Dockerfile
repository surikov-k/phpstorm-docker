FROM amashukov/php:7.4-xdebug

WORKDIR /srv/www

COPY . /srv/www

RUN chmod +x /srv/www/*

ENTRYPOINT ["tail", "-f", "/dev/null"]
