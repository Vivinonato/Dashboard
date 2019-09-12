FROM nginx:1.17.3-alpine

ADD nginx.conf /etc/nginx/
ADD sites/ /etc/nginx/sites-available

# Precisa referenciar a chave service.metadados.name referente ao PHP-FPM do kubernetes, incluindo a devida porta
ARG PHP_UPSTREAM=svc-php-fpm:9000

# fix a problem--#397, change application source from dl-cdn.alpinelinux.org to aliyun source.
#RUN sed -i 's/dl-cdn.alpinelinux.org/mirrors.aliyun.com/' /etc/apk/repositories

RUN apk update \
    && set -x \
	&& adduser -u 1000 -D -S -G www-data www-data \
    && rm /etc/nginx/conf.d/default.conf \
    && echo "upstream php-upstream { server ${PHP_UPSTREAM}; }" > /etc/nginx/conf.d/upstream.conf

WORKDIR /var/www

CMD ["nginx"]

EXPOSE 80 443
