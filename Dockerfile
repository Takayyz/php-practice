FROM php:8.3-rc-cli-alpine3.18

LABEL maintainer Takayyz

COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY ./entrypoint.sh /etc

RUN ["chmod", "744", "/etc/entrypoint.sh"]

WORKDIR /var/tmp

ENTRYPOINT ["/etc/entrypoint.sh"]
