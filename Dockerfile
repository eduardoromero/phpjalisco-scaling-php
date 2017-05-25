FROM webdevops/php:ubuntu-16.04

LABEL name="phpjalisco-scaling-php"

ENV WEB_DOCUMENT_ROOT=/app \
    WEB_DOCUMENT_INDEX=index.php \
    WEB_ALIAS_DOMAIN=*.vm
ENV WEB_PHP_SOCKET=127.0.0.1:9000

COPY docker/ /opt/docker/

# Install nginx
RUN /usr/local/bin/apt-install \
        nginx \
    && /opt/docker/bin/provision run --tag bootstrap --role webdevops-nginx --role webdevops-php-nginx \
    && /opt/docker/bin/bootstrap.sh \
    && docker-image-cleanup

ADD ./ /app
WORKDIR "/app"

EXPOSE 80

# install deps
CMD ["composer", "install"]

CMD ["supervisord"]