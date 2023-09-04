FROM php:8.2-cli-alpine3.17

LABEL maintainer Takayyz

COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY ./entrypoint.sh /etc

RUN ["chmod", "744", "/etc/entrypoint.sh"]

WORKDIR /var/tmp

ENTRYPOINT /etc/entrypoint.sh
