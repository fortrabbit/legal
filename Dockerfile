FROM ubuntu:xenial

RUN echo "deb http://ppa.launchpad.net/ondrej/php/ubuntu xenial main" >> /etc/apt/sources.list.d/ondrej-ubuntu-php-xenial.list && \
    apt-key adv --keyserver keyserver.ubuntu.com --recv-key E5267A6C && \
    apt-get update && \
    apt-get install -y --no-install-recommends \
        php7.1-cli \
        php7.1-fpm \
        php7.1-bcmath \
        php7.1-curl \
        php7.1-gd \
        php7.1-gmp \
        php7.1-intl \
        php7.1-json \
        php7.1-mbstring \
        php7.1-mcrypt \
        php7.1-mysql \
        php7.1-readline \
        php7.1-sqlite3 \
        php7.1-opcache \
        php7.1-xsl

RUN apt-get install -y --no-install-recommends \
    apache2

COPY docker/start.pl /start.pl
RUN chmod +x /start.pl

COPY docker/fpm.conf /etc/php/7.1/fpm/fpm-actual.conf

RUN rm /etc/apache2/sites-enabled/000-default.conf && \
    /usr/sbin/a2enmod rewrite && \
    /usr/sbin/a2enmod proxy && \
    /usr/sbin/a2enmod proxy_fcgi && \
    /usr/sbin/a2enmod auth_basic && \
    /usr/sbin/a2enmod auth_digest
COPY docker/apache-vhost.conf /etc/apache2/sites-enabled/app.conf
COPY docker/apache-conf.conf /etc/apache2/conf-enabled/app.conf


EXPOSE 80

ENTRYPOINT /start.pl

