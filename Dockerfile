FROM php:8.1.23RC1-cli-alpine3.18

LABEL maintainer Takayyz

COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY ./entrypoint.sh /etc

RUN ["chmod", "744", "/etc/entrypoint.sh"]

WORKDIR /var/tmp

ENTRYPOINT /etc/entrypoint.sh
